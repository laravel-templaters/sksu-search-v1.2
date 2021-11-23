<?php

namespace App\Http\Livewire\Dv;

use App\Models\User;
use App\Models\position;
use App\Models\Department;
use App\Models\DVType;
use App\Models\DVCategory;
use App\Models\DVSubCategory;
use App\Models\ModeOfPayment;
use App\Models\RelatedDoc;
use App\Models\Particular;
use App\Models\DisbursementVoucher;
use App\Models\Signatory;
use App\Models\LastAction;
use App\Models\DVProgress;
use App\Models\TravelOrder;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class CreateDv extends Component
{
    public $category_id;
    public $sorter;
    public $date;
    //panels
    public $isstep1open = true;
    public $isstep2open = false;
    public $isstep3open = false;
    public $isstep4open = false;
    public $newDV = true;
    public $step1finished = false;
    public $step2finished = false;
    public $step3finished = false;
    public $step4finished = false;
    public $showToModal = false;
    public $dvSaved = false;

    //variable forsearch
    public $searchuser;
    public $searchedusers;

    //variable for signatory search
    public $searchsignatory = "";
    public $searchedsignatories;
    
    //variable for first name and last name
    public $fn;
    public $ln;

    //form variables for wire model
    public $user_id;
    public $mode_of_payment;
    public $dv_type_id;
    public $dv_type;
    public $dv_category_id;
    public $dv_category;
    public $dv_sub_category_id;
    public $voucher_type;
    public $voucher;
    public $related_docs;

    //for to only
    public $searchto;
    public $searchedto;
    public $travelorderid;
    public $modaltopurpose;
    public $modaltoowner;
    public $modaltoid;

    public $mode_id;

    //for particulars
     public $entry, $responsibility_center, $mfo_pap, $amount;
     //for dynamic input fields
     public $updateMode = false;
     public $inputs = [];
     public $i = 1;
     public $total;
     //var for signatory
     public $sig_id;
     public $signatory;
     public $position;
     public $department;
     
        public $mop_text;
     //mock variables
     public $dvno_temp = 101294159841091;


    public function render()
    {
        if(isset($this->searchto)){
            $this->searchedto =TravelOrder::whereRaw("lower(purpose) like '%".strtolower($this->searchto)."%'")->orderBy('created_at')->get();
            // $this->searchedto =TravelOrder::whereRaw("lower(purpose) like '%".strtolower($this->searchto)."%' or lower(place_to_go) like '%".strtolower($this->searchto)."%'")->orderBy('created_at');
        }
        if (isset($this->searchuser)) {
            $this->searchedusers= User::where(DB::raw('lower(first_name)'),"LIKE","%".strtolower($this->searchuser)."%")->orWhere(DB::raw('lower(middle_name)'),"LIKE","%".strtolower($this->searchuser)."%")->orWhere(DB::raw('lower(last_name)'),"LIKE","%".strtolower($this->searchuser)."%")->get();
        }

        $this ->searchedsignatories = User::whereRaw("(lower(first_name) like '%".strtolower($this->searchsignatory) ."%' or lower(middle_name) like '%".strtolower($this->searchsignatory)."%' or lower(last_name) like '%".strtolower($this->searchsignatory)."%') and role_id = 2")
        ->get();  
        
        $this->mode_of_payment = DB::table('mode_of_payments')->get();
        $this->date = Carbon::now();

        if(isset($this->category_id))
        {
            switch($this->sorter)
            {
                case '1':
                    $this->voucher_type = (DVType::where('id', '=',  $this->category_id)->first())->dv_type;
                    $this->voucher = DVType::where('id', '=',  $this->category_id)->first();
                    break;
                    case '2':
                        $this->voucher_type = (DVCategory::where('id', '=',  $this->category_id)->first())->dv_category;
                        $this->voucher = DVCategory::where('id', '=',  $this->category_id)->first();     
                        break;
                        case '3':
                            $this->voucher_type = (DVSubCategory::where('id', '=',  $this->category_id)->first())->dv_sub_category;
                            $this->voucher = DVSubCategory::where('id', '=',  $this->category_id)->first();      
                            break;
            }
            // dd($this->voucher->id);
        }

        //get total of particulars
        if(isset($this->mode_id)){
            $temp = DB::table('mode_of_payments')->where('id',$this->mode_id)->get();
            foreach ($temp as $key ) {
                $this->mop_text= $key->mode_of_payment;
            }
            
            
        }
        
        
        //Pass to DV
        $this->dv_sub_category_id = DVSubCategory::where('id', '=',  $this->category_id)->first();
        $this->dv_category_id = $this->dv_sub_category_id->dv_category_id;
        $this->dv_category = DVCategory::where('id', '=',  $this->dv_category_id)->first();
        $this->dv_type_id = $this->dv_category->dv_type_id;
        $this->dv_type = DVType::where('id', '=',  $this->dv_type_id)->first();
        $this->related_docs = RelatedDoc::where('dv_sub_category_id', '=', $this->voucher->id)->get();
        return view('livewire.dv.create-dv')->with('searchedusers', $this->searchedusers)->with('searchedsignatories', $this->searchedsignatories)
        ->with('dv_type_id', $this->dv_type_id)->with('related_docs' , $this->related_docs);

    }

    public function saveDV(){
        $dv_count = DisbursementVoucher::get()->count();
        $dv_number = "000-TEST-000";
        $dv_type_id = (DVSubCategory::where('id', '=',  $this->category_id)->first())->id;
        $user_id = $this->searchedusers[0]['id'];
        $mop_id = $this->mode_id;
        $status_id = 1;

        // insert dv table
        $disbursement_voucher = new DisbursementVoucher;
        $disbursement_voucher->dv_tracking_number ="01-000".$dv_count."-ACCESS";
        $disbursement_voucher->dv_number = $dv_number;
        $disbursement_voucher->user_id = $user_id;
        $disbursement_voucher->mop_id = $mop_id;
        $disbursement_voucher->status_id =$status_id;
        $disbursement_voucher->dv_type_id = $dv_type_id;
        $disbursement_voucher->save();


        //insert signatories table
        $dv_id = (DB::table('disbursement_vouchers')->latest('id')->first())->id;

        $signatory = new Signatory;
        $signatory->disbursement_voucher_id = $dv_id;
        $signatory->user_id = $user_id;
        $signatory->signed = 0;
        $signatory->save();

        //insert last_action table
        $last_action = new LastAction;
        $last_action->disbursement_voucher_id = $dv_id;
        $last_action->user_id = $user_id;
        $last_action->action_type_id = 1;
        $last_action->description = "FORWARDED TO" ;
        $last_action->save();

        //insert progress table
        $sig_id = (DB::table('signatories')->latest('id')->first())->id;
        $last_action_id = (DB::table('last_actions')->latest('id')->first())->id;

        $dv_progress = new DVProgress;
        $dv_progress->disbursement_voucher_id = $dv_id;
        $dv_progress->signatory_id = $sig_id;
        $dv_progress->last_action_id = $last_action_id;
        $dv_progress->date_start = now();
        $dv_progress->date_completed = now();
        $dv_progress->save();

        $this->alert('success', 'Voucher is saved!', [
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
          //show print button
          $this->dvSaved = true;

              
    }

    public function setsignatory($id){
        $this->sig_id = $id;
        
        $this->signatory = User::where('id', '=', $this->sig_id)->first();
        $this->position = position::where('id', '=',  $this->signatory->position_id)->first();
        $this->department = Department::where('id', '=',  $this->signatory->department_id)->first();

        $this->validateForm(4);
    }

    //dynamic input field methods START ----------

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->entry = '';
        $this->responsibility_center = '';
        $this->mfo_pap = '';
        $this->amount = '';
    }
      

    //dynamic input field methods END -----------

    //methods Store Particulars START -----------
     public $dv_id=1;
 
     public function storeParticulars(){

                

            foreach ($this->entry as $key => $value) { 

                //Contact::create(['name' => $this->name[$key], 'phone' => $this->phone[$key]]);
                $particulars = new Particular;
                $particulars->disbursement_voucher_id = $this->dv_id;
                $particulars->entry = $this->entry[$key];
                $particulars->responsibility_center = $this->responsibility_center[$key];
                $particulars->mfo_pap = $this->mfo_pap[$key];
                $particulars->amount = $this->amount[$key];
                $particulars->save();
            }

            $this->inputs = [];

            $this->resetInputFields();


        //     uncomment this if necessary
        
        //     $this->alert('success', 'Successfully Added!', [
        //         'background' => '#ccffcc',
        //         'padding' => '0.5rem',
        //         'position' =>  'top-end', 
        //         'timer' =>  2500,  
        //         'toast' =>  true, 
        //         'text' =>  '', 
        //         'confirmButtonText' =>  'Ok', 
        //         'cancelButtonText' =>  'Cancel', 
        //         'showCancelButton' =>  false, 
        //         'showConfirmButton' =>  false, 
        //   ]);
     }
     


    //methods Store Particulars  END-----------

    public function validateForm($to){

        $this->total = 0;

       

        
        //$this->total = $this->total/2;
        
        switch ($to) {
            case 1:
                $this->openstep1();
                break;
            case 2:
                $this->openstep2();
            break;

            case 3:
                $this->openstep3();
            break;
            case 4:
                $this->calculateTotal();
                $this->openstep4();
            break;
            
        }
    }

    public function calculateTotal(){

        $this->total= 0.0;
        foreach ($this->amount as $key => $value) {
            $this->total += (float)$this->amount[$key];
        }
    }

    public function sUid($id){
        $this->user_id=$id;
        $names=User::where('id',$id)->get();
        foreach($names as $name){
            $this->fn=$name->first_name;
            $this->ln=$name->last_name;
        }
    }

    public function sTOid($id,$import){
        if ($import) {
            $this->travelorderid=$id;
            $touid=TravelOrder::find($id);
            $this->entry[0]=$touid->purpose;
            $this->user_id=$touid->user_id;
            $names=User::where('id',$this->user_id)->get();
            $this->amount[0]=$touid->total;
            foreach($names as $name){
                $this->fn=$name->first_name;
                $this->ln=$name->last_name;
               
            }
            $this->showToModal = false;
        }else{
            $this->modaltoid = $id;
            $this->travelorderid=$id;
            $touid=TravelOrder::find($id);
            $this->modaltopurpose = $touid->purpose;
            $names=User::where('id',$touid->user_id)->get();
            foreach($names as $name){
                $fullname = strtoupper($name->first_name.' '.$name->last_name);
                $this->modaltoowner = $fullname;
            }
          
            $this->showToModal = true;
        }
        
    }
    public function openstep1(){
        $this->step1finished = false;
        $this->isstep2open = false;
        $this->isstep3open = false;
        $this->isstep4open = false;
        $this->isstep1open = true;

    }
    
    public function openstep2(){
        $this->step1finished = true;
        $this->step2finished = false;
        $this->isstep1open = false;
        $this->isstep4open = false;
        $this->isstep3open = false;
        $this->isstep2open = true;
    }

    public function openstep3(){
        $this->step2finished = true;
        $this->step3finished = false;
        $this->isstep1open = false;
        $this->isstep4open = false;
        $this->isstep3open = true;
        $this->isstep2open = false;
    }
    public function openstep4(){
        
        $this->step3finished = true;
        $this->step4finished = false;
        $this->isstep1open = false;
        $this->isstep4open = true;
        $this->isstep3open = false;
        $this->isstep2open = false;
    }

    public function validateParticulars(){

        $validatedDate = $this->validate([
            'entry.0' => 'required',
            'amount.0' => 'required',
            'entry.*' => 'required',
            'amount.*' => 'required',
        ],
        [
            'entry.0.required' => 'Entry field is required',
            'amount.0.required' => 'Amount field is required',
            'entry.*.required' => 'Entry field is required',
            'amount.*.required' => 'Amount field is required',
        ]
        
        );
    return true;
    }

    public function validateStep1(){
    
        // validate here
        // if(isset($this->entry)){
            if ($this->validate(['fn'=>'required','ln'=>'required', 'mode_id'=>'required'],['fn.required'=> 'Please select payee from the left side panel', 'ln.required'=> 'Please select payee from the left side panel', 'mode_id.required'=> 'Please select mode of payment'])) {
                
            
            if ($this->validateParticulars()) {
                
                $this->step1finished = true;
                $this->openstep2();
            } 
        }   
        // }
    
    }
    

}
