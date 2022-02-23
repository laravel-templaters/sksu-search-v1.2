<?php

namespace App\Http\Livewire\Travelorders\Pages;

use App\Http\Livewire\IteneraryView;
use App\Models\Itenerary;
use App\Models\IteneraryEntry;
use App\Models\Notif;
use App\Models\SideNote;
use App\Models\TravelOrder;
use App\Models\TravelOrderApplicant;
use App\Models\TravelOrderSignatory;
use App\Events\newnotif;
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
    public $travel_order;
    public $noteText="";

    public function render()
    {
        $this->travel_order = TravelOrder::searchexactly('id',$this->travelorderID)->with('province')->with('region')->with('city')->orderByDesc('id')->first();
        return view('livewire.travelorders.pages.view-travel-order',[
        'travel_order'=> $this->travel_order,
        'applicants' =>TravelOrderApplicant::searchexactly('travel_order_id',$this->travelorderID)->with('user')->get(),
        'signatories' =>TravelOrderSignatory::searchexactly('travel_order_id',$this->travelorderID)->orderBy('stepNumber')->with('user')->get(),
        'side_notes' => SideNote::searchexactly('travel_order_id',$this->travelorderID)->orderBy('id','desc')->get()->take($this->sideNoteNumber),
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
           $this->saveNotifs($this->travelorderID,"side_note", $saveNote->id);
           $this->showModal = false;
        }
    }

    public function declineTO(){
        $sig = TravelOrderSignatory::where('travel_order_id',$this->travelorderID)->where('user_id',auth()->user()->id)->first();
        $sig->approval_status = 'declined';
        $sig->save();
        $this->showConfirmDisapproval = true;
        $this->saveNotifs($this->travelorderID,"declined",'lols');
    }
    public function approveTO(){
        $sig = TravelOrderSignatory::where('travel_order_id',$this->travelorderID)->where('user_id',auth()->user()->id)->first();
        $sig->approval_status = 'approved';
        $sig->save();
        $this->showConfirmApproval = true;
        $this->saveNotifs($this->travelorderID,"approved",'lols');
    }
    
    public function saveNotifs($toID,$from,$side_note_id){

        switch ($from) {
            case 'side_note':
                foreach (TravelOrderSignatory::where('travel_order_id',$toID)->get() as $signatory) {
                    
                    if($signatory->user_id != auth()->user()->id){
                        $notif = new Notif;
                        $notif->user_id = $signatory->user_id;
                        $notif->notif_type_id = 4;
                        $notif->read_status = false;
                        $notif->message=auth()->user()->name .' noted that "' . (SideNote::where('id',$side_note_id)->first()->message) . ' a travel order you\'re a signatory of.';
                        $notif->route_url=route('view-to-pending',['isSignatory'=>1,'id'=>$toID,'isDraft'=> 0,'userType'=>'sig']);
                        $notif->save();
                        event(new newnotif($signatory->user_id));
                    }
                }
                foreach (TravelOrderApplicant::where('travel_order_id',$toID)->get() as $applicant) {
                    $notif = new Notif;
                    $notif->user_id = $applicant->user_id;
                    $notif->notif_type_id = 3;
                    $notif->read_status = false;
                    $notif->message=auth()->user()->name.' noted that "'.(SideNote::where('id',$side_note_id)->first()->message).'" on your travel order.';
                    $notif->route_url=route('view-to-pending',['isSignatory'=>0,'id'=>$toID,'isDraft'=> 0,'userType'=>'app']);
                    $notif->save();
                    event(new newnotif($notif->user_id));
                }
                break;
            case 'declined':
                foreach (TravelOrderApplicant::where('travel_order_id',$toID)->get() as $applicant) {
                    $notif = new Notif;
                    $notif->user_id = $applicant->user_id;
                    $notif->notif_type_id = 3;
                    $notif->read_status = false;
                    $notif->message="Your travel order ".$this->travel_order->tracking_code." was declined by".auth()->user()->name.".";
                    $notif->route_url=route('view-to-pending',['isSignatory'=>0,'id'=>$toID,'isDraft'=> 0,'userType'=>'app']);
                    $notif->save();
                    event(new newnotif($notif->user_id));
                }
               
                break;
            case 'approved':
                foreach (TravelOrderApplicant::where('travel_order_id',$toID)->get() as $applicant) {
                    $notif = new Notif;
                    $notif->user_id = $applicant->user_id;
                    $notif->notif_type_id = 3;
                    $notif->read_status = false;
                    $notif->message="Your travel order ".$this->travel_order->tracking_code." was approved by ".auth()->user()->name.".";
                    $notif->route_url=route('view-to-pending',['isSignatory'=>0,'id'=>$toID,'isDraft'=> 0,'userType'=>'app']);
                    $notif->save();
                    event(new newnotif($notif->user_id));
                }
                                               
                break;            
            default:
                break;
        }
    }
}
