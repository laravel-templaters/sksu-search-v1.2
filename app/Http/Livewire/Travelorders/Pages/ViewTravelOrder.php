<?php

namespace App\Http\Livewire\Travelorders\Pages;

use App\Models\TravelOrder;
use Livewire\Component;

class ViewTravelOrder extends Component
{
    public function render()
    {
        return view('livewire.travelorders.pages.view-travel-order',[
        'travel_order'=>TravelOrder::searchexactly('id',$this->travelorderID)->with('user')->with('province')->with('region')->with('city')->orderByDesc('id')->first()
        ]);
    }
    public $travelorderID;

    public function mount()
    {

        $this->travelorderID = request()->id;
        
    }
}
