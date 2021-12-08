<?php

namespace App\Http\Livewire\Client\Components\Dashboard;

use Livewire\Component;

//models
use App\Models\TravelOrder;
use App\Models\Itenerary;
use App\Models\IteneraryEntry;
use App\Models\DisbursementVoucher;
use App\Models\LastAction;
use App\Models\DvProgress;       
use App\Models\User;



class TravelOrderList extends Component
{
    public $disbursement_voucher;
    public $last_action;
    public $progress;
    public $showModal= false;
    public $travelorders;
    public $iteneraries;
    public $itenerary_entries;
    public $travelordermodalinfo;
    public $travelordermodalinfo_id=null;


    public function render()
    {
        $this->disbursement_voucher = DisbursementVoucher::get();
        $this->last_action = LastAction::get();
        $this->progress = DvProgress::get();


        if (isset($this->travelordermodalinfo_id)||$this->travelordermodalinfo_id!=null) {
            $this->travelordermodalinfo=TravelOrder::where('id',$this->travelordermodalinfo_id)->where('user_id','=',auth()->user()->id)->get();
            //$this->travelordermodalinfo=TravelOrder::with('user')->get();
            $this->iteneraries = Itenerary::where('travel_order_id', $this->travelordermodalinfo_id)->get();
        }else{
            $this->travelordermodalinfo=TravelOrder::where('user_id','=',auth()->user()->id)->get();
           // $this->iteneraries = Itenerary::where('travel_order_id', $this->travelordermodalinfo_id)->get();
        }
        $this->travelorders = TravelOrder::where('user_id','=',auth()->user()->id)->get();
        return view('livewire.client.components.dashboard.travel-order-list')->with('travelorders',$this->travelorders)->with('travelordermodalinfo',$this->travelordermodalinfo)
        ->with('iteneraries',$this->iteneraries);
    }
    public function setmodalID($id){
        $this->travelordermodalinfo_id=$id;
        $this->showModal = true;
    }
}
