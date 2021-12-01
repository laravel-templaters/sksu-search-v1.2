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
    public $updated_dv;
    public $last_action;
    public $progress;
    public $feeds;

    public $user;
    public $temp = 'asfasd';
    public $readyToLoad = false;

    protected $listeners = ['popFromNotif' => 'dvclickedfromnotif'];

    public function dvclickedfromnotif(){
        dd('here');
        $this->disbursement_vouchers = $this->readyToLoad ? DisbursementVoucher::where('user_id','=',auth()->user()->id)->orderBy('updated_at','desc')->orderBy('id','desc')->get() : [];
        $this->updated_dv = DisbursementVoucher::first()->orderBy('updated_at','desc')->value('id');
        $this->emit('dvClicked',$this->updated_dv);
    }
    public function getListeners()
    {
        return [
            "echo-private:forward-dv.".auth()->user()->id.",ForwardDV" => 'callEmitter',
        ];
    }
    public function callEmitter(){
        $this->disbursement_vouchers = $this->readyToLoad ? DisbursementVoucher::where('user_id','=',auth()->user()->id)->orderBy('updated_at','desc')->orderBy('id','desc')->get() : [];
        $this->updated_dv = DisbursementVoucher::first()->orderBy('updated_at','desc')->value('id');
        $this->emit('dvUpdated');
    }
 
    public function loadPosts()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {
        $this->disbursement_vouchers = $this->readyToLoad ? DisbursementVoucher::where('user_id','=',auth()->user()->id)->orderBy('id','desc')->get() : [];
        $this->last_action = LastAction::get();
        $this->progress = DvProgress::get();

        
        return view('livewire.client.components.dashboard.disbursement-vouchers');
        
    }

    public function testPusher(){
        $user = User::where('id', 7)->first();   
        // dd($user->id);
         event(new ForwardDV(50));

    }

    
    
}
