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
    
    public function getListeners()
    {
        return [
            "echo-private:forward-dv.".auth()->user()->id.",ForwardDV" => 'callEmitter',
        ];
    }
    public function callEmitter(){
        $this->wth("success");
        $this->emitCalled = true;
        $this->wth("warning");
        $this->emit('dvClicked',DisbursementVoucher::first()->orderBy('updated_at','desc')->value('id'));
    }
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
    
    //needed pa ba ni?
    public $showModal= false;
    public $travelorders;
    public $travelordermodalinfo;
    public $travelordermodalinfo_id=null;

    public function setmodalID($id){
        $this->travelordermodalinfo_id=$id;
        $this->showModal = true;
    }


    public function wth($lols){
        $this->alert($lols, 'Successfully Added!', [
            'background' => '#ccffcc',
            'padding' => '0.5rem',
            'position' =>  'top-end', 
            'timer' =>  2500,  
            'toast' =>  true, 
            'text' => "hello", 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
      ]);
    }

    
    

    
}
