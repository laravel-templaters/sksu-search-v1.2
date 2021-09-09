<?php

namespace App\Http\Livewire\Dv;

use App\Models\User;
use App\Models\Particular;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
class CreateDv extends Component
{
    //panels
    public $isstep1open = true;
    public $isstep2open = false;
    public $isstep3open = false;
    public $newDV = true;
    public $step1finished = false;
    public $step2finished = false;
    public $step3finished = false;

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
    public $dv_category_id;

    //for particulars
     public $entry, $responsibility_center, $mfo_pap, $amount;
     //for dynamic input fields
     public $updateMode = false;
     public $inputs = [];
     public $i = 1;
     //var for signatory
     public $sig_id;


    public function render()
    {
        $this ->searchedsignatories = User::whereRaw("(lower(first_name) like '%".strtolower($this->searchsignatory) ."%' or lower(middle_name) like '%".strtolower($this->searchsignatory)."%' or lower(last_name) like '%".strtolower($this->searchsignatory)."%') and role_id = 2")
        ->get();

        $this->searchedusers= User::where(DB::raw('lower(first_name)'),"LIKE","%".strtolower($this->searchuser)."%")->orWhere(DB::raw('lower(middle_name)'),"LIKE","%".strtolower($this->searchuser)."%")->orWhere(DB::raw('lower(last_name)'),"LIKE","%".strtolower($this->searchuser)."%")->get();

        return view('livewire.dv.create-dv')->with('searchedusers', $this->searchedusers)->with('searchedsignatories', $this->searchedsignatories);
       
    }

    public function setsignatory($id){
        $this->sig_id = $id;
        $this->validateForm(3);
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

    public function openstep1(){
        
        $this->isstep2open = false;
        $this->isstep3open = false;
        $this->isstep1open = true;
    }
    
    public function openstep2(){
        
        $this->step1finished = true;
        $this->isstep1open = false;
        $this->isstep3open = false;
        $this->isstep2open = true;
    }

    public function openstep3(){
        $this->isstep1open = false;
        $this->isstep3open = true;
        $this->isstep2open = false;
    }
    

}
