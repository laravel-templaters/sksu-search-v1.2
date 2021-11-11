<?php

namespace App\Http\Livewire\AdminSide;

use Livewire\Component;


//models
use App\Models\TravelOrder;  
use App\Models\User;

class DashMain extends Component
{
    public function render()
    {
        if (isset($this->travelordermodalinfo_id)||$this->travelordermodalinfo_id!=null) {
            $this->travelordermodalinfo=TravelOrder::where('id',$this->travelordermodalinfo_id)->with('user')->get();
        }else{
            $this->travelordermodalinfo=TravelOrder::with('user')->get();
        }
        $this->travelorders = TravelOrder::with('user')->get();
        return view('livewire.admin-side.dash-main')->layout('layouts.admin')->with('travelorders',$this->travelorders)->with('travelordermodalinfo',$this->travelordermodalinfo);
    }
    public $showModal= false;
    public $travelorders;
    public $travelordermodalinfo;
    public $travelordermodalinfo_id=null;

    public function setmodalID($id){
        $this->travelordermodalinfo_id=$id;
        $this->showModal = true;
    }
}
