<?php

namespace App\Http\Livewire\Travelorders\Pages;

use App\Models\TravelOrder;
use App\Models\TravelOrderApplicant;
use App\Models\TravelOrderSignatory;
use Livewire\Component;

class ViewTravelOrder extends Component
{
    public function render()
    {
        return view('livewire.travelorders.pages.view-travel-order',[
        'travel_order'=>TravelOrder::searchexactly('id',$this->travelorderID)->with('province')->with('region')->with('city')->orderByDesc('id')->first(),
        'applicants' =>TravelOrderApplicant::searchexactly('travel_order_id',$this->travelorderID)->with('user')->get(),
        'signatories' =>TravelOrderSignatory::searchexactly('travel_order_id',$this->travelorderID)->with('user')->get(),
        ])->layout('layouts.app');
    }
    public $travelorderID;

    public function mount()
    {

        $this->travelorderID = request()->id;
        
    }
}
