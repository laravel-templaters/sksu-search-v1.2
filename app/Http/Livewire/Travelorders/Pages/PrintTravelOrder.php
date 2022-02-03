<?php

namespace App\Http\Livewire\Travelorders\Pages;

use App\Models\TravelOrder;
use App\Models\TravelOrderApplicant;
use App\Models\TravelOrderSignatory;
use Livewire\Component;

class PrintTravelOrder extends Component
{
    public function render()
    {
        return view('livewire.travelorders.pages.print-travel-order',[
            'travel_order'=>TravelOrder::searchexactly('id',$this->travelorderID)->with('province')->with('region')->with('city')->orderByDesc('id')->first(),
            'applicants' =>TravelOrderApplicant::searchexactly('travel_order_id',$this->travelorderID)->with('user')->get(),
            'signatories' =>TravelOrderSignatory::searchexactly('travel_order_id',$this->travelorderID)->orderBy('stepNumber')->with('user')->get(),
        ])->layout('layouts.blank-template');

    }
    public $travelorderID;

    public function mount()
    {

        $this->travelorderID = request()->id;
        
    }
}
