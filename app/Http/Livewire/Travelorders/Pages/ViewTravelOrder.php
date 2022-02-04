<?php

namespace App\Http\Livewire\Travelorders\Pages;

use App\Http\Livewire\IteneraryView;
use App\Models\Itenerary;
use App\Models\IteneraryEntry;
use App\Models\TravelOrder;
use App\Models\TravelOrderApplicant;
use App\Models\TravelOrderSignatory;
use Livewire\Component;

class ViewTravelOrder extends Component
{
    public $travelorderID;
    public $userType;
    public $isDraft;


    public function render()
    {
        return view('livewire.travelorders.pages.view-travel-order',[
        'travel_order'=>TravelOrder::searchexactly('id',$this->travelorderID)->with('province')->with('region')->with('city')->orderByDesc('id')->first(),
        'applicants' =>TravelOrderApplicant::searchexactly('travel_order_id',$this->travelorderID)->with('user')->get(),
        'signatories' =>TravelOrderSignatory::searchexactly('travel_order_id',$this->travelorderID)->orderBy('stepNumber')->with('user')->get(),
        ])->layout('layouts.app');
    }
    

    public function mount()
    {
        $this->travelorderID = request()->id;
        $this->userType=request()->userType;
        $this->isDraft=request()->isDraft;
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
}
