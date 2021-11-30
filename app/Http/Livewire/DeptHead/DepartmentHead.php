<?php

namespace App\Http\Livewire\DeptHead;

use Livewire\Component;
//models
use App\Models\TravelOrder;
use App\Models\DisbursementVoucher;
//use App\Models\LastAction;
use App\Models\DvProgress;
use App\Models\LastAction;
use App\Models\Milestone;    
use Carbon\Carbon;   
use App\Models\User;
use App\Events\ForwardDV;
//use Illuminate\Support\Facades\Auth;
class DepartmentHead extends Component
{
    public $searchPending="";
    public $searchPersonal="";
    public $personalClicked=true;
    public $pendingClicked=true;
    public $showBanner=false;
    public $active = "myacc";
    public $pending_dv;
    public $readyToLoad = false;
    public $milestones;
    public $last_actions;
    public $greetings =['Heyyy','Hello','Yo, What\'s up', 'What\'s up buttercup',];
    public $greeting = 'Good day!';
    public function loadPosts()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {
        $this->milestones = Milestone::where('assigned_user','=',auth()->user()->id)->where('isActive','=','1')->where('is_completed','=','0')->orderBy('id','desc')->get();
       
        if ($this->searchPersonal =="") {
            $this->pending_dv = $this->readyToLoad ? DisbursementVoucher::where('user_id','=',auth()->user()->id)->get() : [];
        } else {
            $this->pending_dv = $this->readyToLoad ? DisbursementVoucher::where('user_id','=',auth()->user()->id)->where('dv_tracking_number','like','%'.$this->searchPending.'%')->get() : [];
        }
        
        return view('livewire.dept-head.department-head')->layout('layouts.accountant');
    }
    public function populateTable(){
        $this->greeting = $this->greetings[rand(0,(count($this->greetings)-1))];
        $this->pendingClicked = false;
        $this->showBanner =true;
        $this->milestone = Milestone::where('assigned_user','=',auth()->user()->id)->where('isActive','=','1')->where('is_completed','=','0')->orderBy('id','desc')->get();
    }
    public function getListeners()
    {
        return [
            "echo-private:forward-dv.".auth()->user()->id.",ForwardDV" => 'populateTable',
           
        ];
    }
    public function recieveDocument($dvID,$mID,$uID){
       $la = new LastAction();
            $la->disbursement_voucher_id=$dvID;
            $la->reciever_id=$uID;
            $la->sender_id=auth()->user()->id;
            $la->action_type_id= 2;
            $la->description ="by ".(User::find(auth()->user()->id)->department->department_name);
            $la->read =false;
            $la->save();
        DvProgress::where('disbursement_voucher_id','=',$dvID)->update(['last_action_id'=>$la->id]);
         event(new ForwardDV($uID));
        $this->searchPending = "";
    }
    public function forwardDocument($mID){
        Milestone::where('id', $mID)
                ->update([
                    'date_completed' => now(),
                    'is-active' =>false,
                    'is_completed' =>true,
                        
                ]);
    }
}
