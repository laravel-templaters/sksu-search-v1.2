<?php

namespace App\Http\Livewire\Travelorders\Pages;

use App\Http\Livewire\IteneraryView;
use App\Models\Itenerary;
use App\Models\IteneraryEntry;
use App\Models\SideNote;
use App\Models\TravelOrder;
use App\Models\TravelOrderApplicant;
use App\Models\TravelOrderSignatory;
use Livewire\Component;

class ViewTravelOrder extends Component
{
    public $travelorderID;
    public $userType;
    public $isDraft;
    public $isViewAll;
    public $sideNoteNumber = 5;
    public $showModal = false;
    public $showConfirmDisapproval = false;
    public $showConfirmApproval = false;
    public $showError = false;
    public $showBanner = false;
    public $isSignatory = 0;

    public $noteText="";

    public function render()
    {
        return view('livewire.travelorders.pages.view-travel-order',[
        'travel_order'=>TravelOrder::searchexactly('id',$this->travelorderID)->with('province')->with('region')->with('city')->orderByDesc('id')->first(),
        'applicants' =>TravelOrderApplicant::searchexactly('travel_order_id',$this->travelorderID)->with('user')->get(),
        'signatories' =>TravelOrderSignatory::searchexactly('travel_order_id',$this->travelorderID)->orderBy('stepNumber')->with('user')->get(),
        'side_notes' => SideNote::searchexactly('travel_order_id',$this->travelorderID)->orderBy('id')->get()->take($this->sideNoteNumber),
        'side_notes_count' => SideNote::searchexactly('travel_order_id',$this->travelorderID)->orderBy('id')->count(),
        ])->layout('layouts.app');
    }
    

    public function mount()
    {
        $this->travelorderID = request()->id;
        $this->userType=request()->userType;
        $this->isDraft=request()->isDraft;
        $this->isSignatory = request()->isSignatory;
    }
    public function deleteTO($type){
       if($type == 'offtime'){
        $deleteto= TravelOrder::where('id','=',$this->travelorderID)->delete();
        $applicantsFromTbl = TravelOrderSignatory::where('travel_order_id', "=", $this->travelorderID)->delete();
        $applicantsFromTbl = TravelOrderApplicant::where('travel_order_id', '=', $this->travelorderID)->delete();
       }else{
        $deleteto= TravelOrder::where('id','=',$this->travelorderID)->delete();
        $applicantsFromTbl = TravelOrderSignatory::where('travel_order_id', "=", $this->travelorderID)->delete();
        $applicantsFromTbl = TravelOrderApplicant::where('travel_order_id', '=', $this->travelorderID)->delete();
        $iteneraryIDS = Itenerary::where('travel_order_id','=',$this->travelorderID)->get('id');
        $deleteitentries = IteneraryEntry::whereIn('itenerary_id', $iteneraryIDS)->delete();
        $deleteits = Itenerary::where('travel_order_id','=',$this->travelorderID)->delete();
       }
      redirect(route('redirect'));
    }

    public function saveSideNote(){
        if($this->noteText ==""){
            $this->showError = true;
        }else{
            $saveNote = new SideNote;
            $saveNote->travel_order_id= $this->travelorderID;
            $saveNote->user_id= auth()->user()->id;
            $saveNote->message=$this->noteText;
           try {
               $saveNote->saveOrFail();
           } catch (\Throwable $th) {
               throw $th;
           }
           $this->showModal = false;
        }
    }

    public function declineTO(){
        $sig = TravelOrderSignatory::where('travel_order_id',$this->travelorderID)->where('user_id',auth()->user()->id)->first();
        $sig->approval_status = 'declined';
        $sig->save();
        $this->showConfirmDisapproval = true;
    }
    public function approveTO(){
        $sig = TravelOrderSignatory::where('travel_order_id',$this->travelorderID)->where('user_id',auth()->user()->id)->first();
        $sig->approval_status = 'approved';
        $sig->save();
        $this->showConfirmApproval = true;
    }
}
