<?php

namespace App\Http\Livewire\Accountant\Pages;


use Livewire\Component;
//models
use App\Models\TravelOrder;
use App\Models\DisbursementVoucher;
use App\Models\Particular;
use App\Models\Department;
//use App\Models\LastAction;
use App\Models\DvProgress;
use App\Models\LastAction;
use App\Models\Milestone;    
use Carbon\Carbon;   
use App\Models\User;
use App\Events\ForwardDV;
use App\Models\Signatory;
use App\Models\TravelOrderApplicant;
use App\Models\TravelOrderSignatory;

class Dashboard extends Component
{
//for accounting only

    public $voucher_number = "";
    public $showError = false;


    //view voucher info
    public $showViewModal= false;
    public $showForwardModal= false;
    public $showReturnModal= false;
    public $dvInfo = [];
    public $dvModalTotalAmount=0;
    public $department =[];
    public $isHeadOrAdmin=false;
    public $isHead=false;
    public $isAdmin=false;
    public $isAssigned=false;

    
    public $searchPending="";
    public $searchPersonal="";
    public $searchTo="";
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
        $user_id = auth()->user()->id;
        $this->department = Department::with(['admin_user','head_user'])->where('id',auth()->user()->department_id)->first();
        if( $this->department->admin_user_id ==  $user_id ||$this->department->head_user_id == $user_id ){
            $this->milestones = Milestone::where('department_id','=',auth()->user()->department_id)->where('isActive','=','1')->where('is_completed','=','0')->orderBy('id','desc')->get();
            $this->isHeadOrAdmin=true;
            if ($this->department->admin_user_id ==  $user_id){
                $this->isAdmin=true;
            }elseif ($this->department->head_user_id ==  $user_id){
                $this->isHead=true;
            }
        }elseif(Milestone::where('assigned_user','=',$user_id)->where('isActive','=','1')->where('is_completed','=','0')->orderBy('id','desc')->first()){
            $this->milestones = Milestone::where('assigned_user','=',$user_id)->where('isActive','=','1')->where('is_completed','=','0')->orderBy('id')->get();
            $this->isAssigned=true;
        }
        
        $toID=[];
        if ($this->isHeadOrAdmin==true) {
            
        }
        $toID = TravelOrderApplicant::searchexactly('user_id',$user_id)->get('travel_order_id');
        $toIDSig = TravelOrderSignatory::searchexactly('user_id',$user_id)->get('travel_order_id');
         $this->pending_dv = DisbursementVoucher::where('user_id','=',$user_id)->get();
        return view('livewire.accountant.pages.dashboard',
        ['department' => $this->department,
        'milestones'=>$this->milestones,
        'pending_dv'=>$this->pending_dv,
        'drafts_dvs'=>DisbursementVoucher::where('user_id','=',$user_id)->where('isDraft','=',true)->get(),
        'travel_orders_pending'=>TravelOrder::searchOr('tracking_code',$this->searchTo)->searchOr('purpose',$this->searchTo)->whereIn('id',$toIDSig)->where('isDraft','=',0)->with('province')->with('region')->with('city')->orderByDesc('id')->get(),
        'travel_orders_draft'=>TravelOrder::searchOr('tracking_code',$this->searchTo)->searchOr('purpose',$this->searchTo)->whereIn('id',$toID)->where('isDraft','=',1)->with('province')->with('region')->with('city')->orderByDesc('id')->get(),
        'travel_orders'=>TravelOrder::searchOr('tracking_code',$this->searchTo)->searchOr('purpose',$this->searchTo)->whereIn('id',$toID)->where('isDraft','=',0)->with('province')->with('region')->with('city')->orderByDesc('id')->get()])
        ->layout('layouts.accountant');
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
        $next_step_id=Milestone::where('disbursement_voucher_id','=',$dvID)->where('step_number','>',($ms->step_number))->where('is_completed','=',false)->first();
            $la = new LastAction();
            $la->disbursement_voucher_id=$dvID;
            if($next_step_id->assigned_user != null){
                $la->reciever_id=$next_step_id->assigned_user; 
            }else{
                $la->reciever_id=$next_step_id->department->head_user_id; 
            }
            $la->sender_id=auth()->user()->id;
            $la->action_type_id= 1;
            $la->description ="to ".($next_step_id->department->department_name);
            $la->read =false;
            $la->save();
       
        $ms1 = Milestone::find($next_step_id->id);
        $ms1->date_started = Carbon::now();
        $ms1->isActive =true;
        $ms1->save();
         DvProgress::where('disbursement_voucher_id','=',$dvID)->update(['last_action_id'=>$la->id]);
         Signatory::where('disbursement_voucher_id','=',$dvID)->where('user_id','=',auth()->user()->id)->update(['signed'=>true,'date_signed'=>Carbon::now()]);
         if($next_step_id->assigned_user == null){
            $temp = Department::with(['admin_user','head_user'])->where('id',$ms1->department_id)->first();
            event(new ForwardDV($temp->admin_user_id));
            event(new ForwardDV($temp->head_user_id));
         }else{
            $temp = Department::with(['admin_user','head_user'])->where('id',$ms1->department_id)->first();
            event(new ForwardDV($temp->admin_user_id));
            event(new ForwardDV($temp->head_user_id));
            event(new ForwardDV($next_step_id->assigned_user));
         }
        
    }
    public function returnDoc($dvID,$mID,$assignedU){
       
       
       $ms = Milestone::where('disbursement_voucher_id','=',$dvID)->where('isActive','=',true)->first();
       $ms->isActive =false;
       $ms->is_completed=false;
       $ms->save();
       // dd($ms);
       $next_step_id=Milestone::find($mID);
       // dd($next_step_id);
           $la = new LastAction();
           $la->disbursement_voucher_id=$dvID;
           if($next_step_id->assigned_user != null){
               $la->reciever_id=$next_step_id->assigned_user; 
           }else{
               $la->reciever_id=$next_step_id->department->head_user_id; 
           }
           $la->sender_id=auth()->user()->id;
           $la->action_type_id= 3;
           if($next_step_id->assigned_user != null){
               $la->reciever_id=$next_step_id->assigned_user; 
               $la->description ="to ".(User::find($next_step_id->assigned_user)->department->department_name);
           }else{
               $la->description ="to ". $next_step_id->department->department_name;
           }
         
           $la->save();
          
       $ms1 = Milestone::find($next_step_id->id);
       $ms1->date_started = Carbon::now();
       $ms1->date_completed= null;
       $ms1->isActive =true;
       $ms1->is_completed =false;
       $ms1->save();
        DvProgress::where('disbursement_voucher_id','=',$dvID)->update(['last_action_id'=>$la->id]);
        Signatory::where('disbursement_voucher_id','=',$dvID)->where('user_id','=',$assignedU)->update(['signed'=>false,'date_signed'=>null]);
        if($next_step_id->assigned_user == null){
           $temp = Department::with(['admin_user','head_user'])->where('id',$ms1->department_id)->first();
           event(new ForwardDV($temp->admin_user_id));
           event(new ForwardDV($temp->head_user_id));
        }else{
            $temp = Department::with(['admin_user','head_user'])->where('id',$ms1->department_id)->first();
            event(new ForwardDV($temp->admin_user_id));
            event(new ForwardDV($temp->head_user_id));
           event(new ForwardDV($next_step_id->assigned_user));
        }
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

    //accounting exclusiove methods

    public function setVoucherNumber($dvID){
      
         if ($this->validate(['voucher_number'=>'required|min:7'],['voucher_number.required'=> 'Input voucher number please.','voucher_number.min'=> 'Input voucher too short.'])) {
             $dv = DisbursementVoucher::find($dvID); 
            $dv->dv_number = $this->voucher_number;
            $dv->save();
             $this->showViewModal = false;
             $this->showModal($dvID);
         }
       
    }
    public function checkFunding($dvID,$mID,$uID){
        $step = Milestone::find($mID);
        $fundC = DisbursementVoucher::find($dvID);
        
        if($step->step_number == 1 || $step->step_number == "1"){
            $this->forwardDocument($dvID,$mID,$uID);
        }else{
            if($fundC->dv_number != null){
                $this->forwardDocument($dvID,$mID,$uID);
            }else{
                $this->showError =true;
            }
        }

        
        
        
    }
}
