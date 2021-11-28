<?php

namespace App\Http\Livewire\Client\Components\Dashboard;

use Livewire\Component;

//models
use App\Models\TravelOrder;
use App\Models\DisbursementVoucher;
use App\Models\LastAction;
use App\Models\DvProgress;       
use App\Models\User;
use App\Events\ForwardDV;
use Illuminate\Support\Facades\Auth;

class DisbursementVouchers extends Component
{
    
    
    public $disbursement_vouchers;
    public $last_action;
    public $progress;
    public $feeds;

    public $user;
    public $temp = 'asfasd';
    public $readyToLoad = false;
 
    public function loadPosts()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {
        $this->disbursement_vouchers = $this->readyToLoad ? DisbursementVoucher::where('user_id','=',auth()->user()->id)->get() : [];
        $this->last_action = LastAction::get();
        $this->progress = DvProgress::get();

        
        return view('livewire.client.components.dashboard.disbursement-vouchers');
        
    }


    public function getListeners()
    {
        return [
            "echo-private:forward-dv.".auth()->user()->id.",ForwardDV" => 'alerts',
           
        ];
    }

    public function alerts(){

        $this->alert('success', 'A voucher has arrived!', [
            'background' => '#ccffcc',
            'padding' => '0.5rem',
            'position' =>  'top-end', 
            'timer' =>  2500,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
    ]);
    }

    public function testPusher(){
        $user = User::where('id', 7)->first();   
        // dd($user->id);
         event(new ForwardDV($user->id));

    }

    
    
}
