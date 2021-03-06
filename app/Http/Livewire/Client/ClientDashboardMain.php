<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

//models
use App\Models\TravelOrder;
use App\Models\DisbursementVoucher;
use App\Models\LastAction;
use App\Models\DvProgress;       
use App\Models\User;
class ClientDashboardMain extends Component
{
    public $disbursement_voucher;
    public $last_action;
    public $progress;
    public $feeds=[];
    public $emitCalled =false;
    public $showDvUpdated = false;
       //needed pa ba ni? Yes need na sya hehe
       public $showModal= false;
       public $travelorders;
       public $travelordermodalinfo;
       public $travelordermodalinfo_id=null;
    
   
    public function render()
    {
         $this->disbursement_voucher = DisbursementVoucher::where('user_id','=',auth()->user()->id)->get();
        $this->last_action = LastAction::get();
        $this->progress = DvProgress::get();

        if (isset($this->travelordermodalinfo_id)||$this->travelordermodalinfo_id!=null) {
            $this->travelordermodalinfo=TravelOrder::where('id',$this->travelordermodalinfo_id)->with('user')->get();
        }else{
            $this->travelordermodalinfo=TravelOrder::with('user')->get();
        }
        $this->travelorders = TravelOrder::with('user')->get();

        return view('livewire.client.client-dashboard-main')->layout('layouts.sec')->with('travelorders',$this->travelorders)->with('travelordermodalinfo',$this->travelordermodalinfo);
    }
    
 

    protected $listeners = ['dvUpdated' => 'dvUpdated'];
    public function dvUpdated(){
        $this->showDvUpdated = true;
    }

    public function setmodalID($id){
        $this->travelordermodalinfo_id=$id;
        $this->showModal = true;
    }
    public function notifEmitter(){
        // $this->emitUp('popFromNotif');
        // $this->emit('dvUpdated');
    }
}
