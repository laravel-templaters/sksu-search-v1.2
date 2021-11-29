<?php

namespace App\Http\Livewire\Client\Components\Dashboard;

use Livewire\Component;

use App\Models\TravelOrder;
use App\Models\DisbursementVoucher;
use App\Models\LastAction;
use App\Models\DvProgress;       
use App\Models\User;


class FeedStatus extends Component
{
    
    public $feeds=[];
    protected $listeners = ['dvClicked' => 'populateFeed'];

    public function render()
    {
        return view('livewire.client.components.dashboard.feed-status');
    }
    public function populateFeed($dv_id){
        $this->feeds = LastAction::where('disbursement_voucher_id','=',$dv_id)->orderBy('id','desc')->get();
        
    }
}
