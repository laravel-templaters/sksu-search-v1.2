<?php

namespace App\Http\Livewire\BudgetOffice\Pages;

use Livewire\Component;
//models
use App\Models\TravelOrder;
use App\Models\DisbursementVoucher;
use App\Models\Particular;
//use App\Models\LastAction;
use App\Models\DvProgress;
use App\Models\LastAction;
use App\Models\Milestone;    
use Carbon\Carbon;   
use App\Models\User;
use App\Events\ForwardDV;
use App\Models\Signatory;

class BudgetDash extends Component
{//view voucher info
    public $showViewModal= false;
    public $showForwardModal= false;
    public $showReturnModal= false;
    public $dvInfo = [];
    public $dvModalTotalAmount=0;

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
       
         $this->pending_dv = DisbursementVoucher::where('user_id','=',auth()->user()->id)->get();
        return view('livewire.budget-office.pages.budget-dash')->layout('layouts.accountant');
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
    public function forwardDocument($dvID,$mID,$uID){
       
        $ms = Milestone::find($mID);
        $ms->date_completed = Carbon::now();
        $ms->isActive =false;
        $ms->is_completed=true;
        $ms->save();
        $next_step_id=Milestone::where('disbursement_voucher_id','=',$dvID)->where('step_number','=',($ms->step_number)+1)->first();
            $la = new LastAction();
            $la->disbursement_voucher_id=$dvID;
            $la->reciever_id=$next_step_id->assigned_user;
            $la->sender_id=auth()->user()->id;
            $la->action_type_id= 1;
            $la->description ="to ".(User::find($next_step_id->assigned_user)->department->department_name);
            $la->read =false;
            $la->save();
       
        $ms1 = Milestone::find($next_step_id->id);
        $ms1->date_started = Carbon::now();
        $ms1->isActive =true;
        $ms1->save();
         DvProgress::where('disbursement_voucher_id','=',$dvID)->update(['last_action_id'=>$la->id]);
         Signatory::where('disbursement_voucher_id','=',$dvID)->where('user_id','=',auth()->user()->id)->update(['signed'=>true,'date_signed'=>Carbon::now()]);
        event(new ForwardDV($next_step_id->assigned_user));
    }
    public function returnDoc($dvID,$mID,$assignedU){
       
        $ms = Milestone::find($mID);
        $ms->isActive =false;
        $ms->is_completed=false;
        $ms->save();
        $next_step_id=Milestone::where('disbursement_voucher_id','=',$dvID)->where('assigned_user','=',$assignedU)->first();
            $la = new LastAction();
            $la->disbursement_voucher_id=$dvID;
            $la->reciever_id=$next_step_id->assigned_user;
            $la->sender_id=auth()->user()->id;
            $la->action_type_id= 1;
            $la->description ="to ".(User::find($next_step_id->assigned_user)->department->department_name);
            $la->read =false;
            $la->save();
       
        $ms1 = Milestone::find($next_step_id->id);
        $ms1->date_started = Carbon::now();
        $ms1->date_completed= null;
        $ms1->isActive =true;
        $ms1->is_completed =false;
        $ms1->save();
         DvProgress::where('disbursement_voucher_id','=',$dvID)->update(['last_action_id'=>$la->id]);
         Signatory::where('disbursement_voucher_id','=',$dvID)->where('user_id','=',$assignedU)->update(['signed'=>false,'date_signed'=>null]);
        event(new ForwardDV($next_step_id->assigned_user));
    }

    public function showModal($disbursementID){
        $this->dvInfo = DisbursementVoucher::findOrFail($disbursementID);
        $this->dvModalTotalAmount = Particular::where('disbursement_voucher_id',$disbursementID)->sum('amount');
        $this->showViewModal = true;
    }
    public $sigsReturn=[];
    public function showModalForward($dvID,$mID,$uID){
     
    }
    public function showModalReturn($dvID,$mID,$uID){
        $ms=Milestone::find($mID);
        if ($ms->step_number == 1) {
            //return to user here
        }
        else{
            $ms1 = Milestone::where('disbursement_voucher_id','=',$dvID)->where('step_number','<',$ms->step_number)->get();
            $this->sigsReturn = $ms1;
        }
        $this->showReturnModal = true;
        
    }

    //Budget exclusiove methods
    public $fundcluster="";
    public function setfundcluster($dvID){
      
         if ($this->validate(['fundcluster'=>'required|min:3'],['fundcluster.required'=> 'Input fund cluster please.','fundcluster.min'=> 'Input too short.'])) {
             $dv = DisbursementVoucher::find($dvID); 
            $dv->fund_cluster = $this->fundcluster;
            $dv->save();
             $this->showViewModal = false;
             $this->showModal($dvID);
         }
    }
       
}
