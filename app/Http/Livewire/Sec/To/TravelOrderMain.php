<?php

namespace App\Http\Livewire\Sec\To;

use DatePeriod;
use DateTime;
use DateInterval;

use Livewire\Component;
use App\Models\Region; 
use App\Models\Province;
use App\Models\City;
use App\Models\User;
use App\Models\TravelOrder;  
use App\Models\Dte;
use App\Models\TravelOrderApplicant;
use App\Models\TravelOrderSignatory;
use Carbon\Carbon;
use App\Notifications\TravelOrderSaved;

class TravelOrderMain extends Component
{

    public $showApplicantError=false;
    public $showSignatoryError=false;
    public $toType="offtime";
    public $searchUsers;
    public $searchSigs;
    public $searchedUsers = false;
    public $pickedUsers = false;
    public $searchedSigs = false;
    public $pickedSigs = false;

    public $users_id;
    public $applicant_ids=[];
    public $signatory_ids=[];
    public $purpose;
    public $has_registration;
    public $registration_amt;
    public $per_diem;
    public $others;

    //variables for place
    public $region;
    public $region_codes;
    public $province;
    public $province_codes;
    public $city;
    public $city_codes;

    //variables for official time (from and to dates)
    public $dateoftravelfrom;
    public $dateoftravelto;

    //variables for Main
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    //variables for mock

    //variables for date_from and date_to
    public $date_from;
    public $date_to;
    public $diff;


    public $showDays = false;
    public $err_from_to = false;
    public $err_diff = false;
    public $err_diem = false;
    
    public $gen = [];

    public $finalTotal;


    public $input = [[
        "date" => "",
        "place" => "",
        "dep_time" => "",
        "arr_time" => "",
        "mot" => "",
        "trans_exp" => "",
        "per_diem" => "",
        "others" => "",
        "total" => "",
        "breakfast" => "",
        "lunch" => "",
        "dinner" => "",
        "lodging" => "",
 ],];

    public function render()
    {
        $searchUsrRes=[];
        if($this->searchUsers!= ""){
            $this->searchedUsers = true;
            $searchUsrRes = User::search('name', $this->searchUsers)->get();
        }else{
            $searchUsrRes=[];
            $this->searchedUsers = false;           
        }

        $searchSigsRes= [];
        if($this->searchSigs!= ""){
            $this->searchedSigs = true;
            $searchSigsRes= User::search('name', $this->searchSigs)->get();
        }else{
            $searchSigsRes= [];
            $this->searchedSigs = false;
        }
        
        $this->region = Region::get();
        $this->province = Province::where("region_code", "=",  $this->region_codes)->get();
        $this->city = City::where("province_code", "=", $this->province_codes)->get();
        $this->per_diem = Dte::where('region_code', '=', $this->region_codes)->first();



        return view('livewire.sec.to.travel-order-main',['users'=> $searchUsrRes,'sigs'=> $searchSigsRes,
        'userInfos'=> User::whereIn('id',$this->applicant_ids)->get(),
        'sigsInfos'=> User::whereIn('id',$this->signatory_ids)->get()])->with('regions', $this->region)->with('provinces',  $this->province)
        ->with('cities',  $this->city)->with('diems', $this->per_diem);
    }

    // public function mount($err_per_diem)
    // {
        
    // }
    
    public function validateTo(){
         $this->emit('valIE');
    }
    public $toValidated =false;
    public $iteneraryValidated =false;
    public function isiteneraryvalidated($isval){
     
        if($isval == true || $isval == 1){
        $this->iteneraryValidated = true;
        $this->validate([
            'users_id' => 'required',
            'purpose' => 'required',
            'region_codes' => 'required',
            'province_codes' => 'required',
            'city_codes' => 'required',
             ],
            [
            'users_id.required' => 'The name field is required.',
            'purpose.required' => 'The purpose field is required.',
            'region_codes.required' => 'The region field is required.',
            'province_codes.required' => 'The province field is required.',
            'city_codes.required' => 'The city field is required.',   
            ]);
        $this->toValidated=true;
        if($this->toType == "offtime")
        {
            $this->save_official_time();
        }else if($this->toType == "offtravel")
        {
           $this->save_official_travel();
        }
        
        }else if ($isval==false){
        $this->iteneraryValidated = false;
        }else{
        $this->iteneraryValidated = false;
        $this->finalTotal = 0.0;
        }
    }

    public function validateToAgain(){
         $this->validateTo();
         $this->submit();
    }

    public function submit()
    {
       if (count($this->applicant_ids)>0 && count($this->signatory_ids)>0 ) {
        $this->validateTo();
        if($this->toType == "offtime")
        {
            $this->validate([
                'users_id' => 'required',
                'purpose' => 'required',
                'region_codes' => 'required',
                'province_codes' => 'required',
                'city_codes' => 'required',
                 ],
                [
                'users_id.required' => 'The name field is required.',
                'purpose.required' => 'The purpose field is required.',
                'region_codes.required' => 'The region field is required.',
                'province_codes.required' => 'The province field is required.',
                'city_codes.required' => 'The city field is required.',   
                ]);
            $this->toValidated=true;
            $this->save_official_time();
        }else if($this->toType == "offtravel")
        {
           $this->validateTo();
           $this->save_official_travel();
        }
       }else{
        $this->showApplicantError = $this->showSignatoryError = true;
       }
    }

    public function save_official_time(){
        $reg = Region::where("region_code", "=",  $this->region_codes)->first();
        $prov = Province::where("province_code", "=",  $this->province_codes)->first();
        $cit = City::where("city_municipality_code", "=",  $this->city_codes)->first();
                $travel_order = new TravelOrder;
                $travel_order->tracking_code ='TO'.Carbon::now()->format('YmdHis').auth()->user()->id.auth()->user()->department->campus->campus_shortCode;
                $travel_order->purpose = $this->purpose;
                $travel_order->date_of_travel_from = $this->dateoftravelfrom;
                $travel_order->date_of_travel_to = $this->dateoftravelto;
                $travel_order->philippine_regions_id =  $reg['id'];
                $travel_order->philippine_provinces_id = $prov['id'];
                $travel_order->philippine_cities_id = $cit['id'];
                $travel_order->others =  isset($this->others) ? $this->others : "";
                $travel_order->has_registration = isset($this->has_registration) ? "1" : "0";
                $travel_order->registration_amount = isset($this->has_registration) ? $this->registration_amt : "0";
                $travel_order->total = $this->finalTotal_raw;
                $travel_order->dv_type_sorter_id = "1"; 
                $travel_order->dte_id =  $reg['id'];
                $travel_order->to_type =  $this->toType;
                $travel_order->isDraft =false;
                $travel_order->save(); 

                $this->saveApplicants($travel_order->id);
                
         
    }

    public function save_official_travel(){
        $reg = Region::where("region_code", "=",  $this->region_codes)->first();
        $prov = Province::where("province_code", "=",  $this->province_codes)->first();
        $cit = City::where("city_municipality_code", "=",  $this->city_codes)->first();
        
        if(isset($this->has_registration))
        {

            $from_date = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('F d, Y');
            $to_date = Carbon::createFromFormat('Y-m-d', $this->date_to)->format('F d, Y');
            $date_string = $from_date ." - ".$to_date;

            if (isset($this->finalTotal) && $this->finalTotal != 0) {

                if ($this->toValidated == true && $this->iteneraryValidated == true) {
                    $travel_order = new TravelOrder;
                    $travel_order->tracking_code ='TO'.Carbon::now()->format('YmdHis').auth()->user()->id.auth()->user()->department->campus->campus_shortCode;
                    $travel_order->purpose = $this->purpose;
                    $travel_order->date_of_travel_from = $this->dateoftravelfrom;
                    $travel_order->date_of_travel_to = $this->dateoftravelto;
                    $travel_order->philippine_regions_id =  $reg['id'];
                    $travel_order->philippine_provinces_id = $prov['id'];
                    $travel_order->philippine_cities_id = $cit['id'];
                    $travel_order->others =  isset($this->others) ? $this->others : "";
                    $travel_order->has_registration = isset($this->has_registration) ? "1" : "0";
                    $travel_order->registration_amount = isset($this->has_registration) ? $this->registration_amt : "0";
                    $travel_order->total = $this->finalTotal_raw;
                    $travel_order->date_range = $date_string;
                    $travel_order->dv_type_sorter_id = "1"; 
                    $travel_order->dte_id =  $reg['id'];
                    $travel_order->to_type =  $this->toType;
                    $travel_order->isDraft =false;
                    $travel_order->save();  
                    $this->emit('storeItenerary',$travel_order->id);
                    
                   
                }else{
                   
                }
            }else{
             
            }

        }else{
                            
            $travel_order = new TravelOrder;
            $travel_order->tracking_code ='TO'.Carbon::now()->format('YmdHis').auth()->user()->id.auth()->user()->department->campus->campus_shortCode;
            $travel_order->purpose = $this->purpose;
            $travel_order->date_of_travel_from = $this->dateoftravelfrom;
            $travel_order->date_of_travel_to = $this->dateoftravelto;
            $travel_order->philippine_regions_id =  $reg['id'];
            $travel_order->philippine_provinces_id = $prov['id'];
            $travel_order->philippine_cities_id = $cit['id'];
            $travel_order->others =  isset($this->others) ? $this->others : "";
            $travel_order->has_registration = isset($this->has_registration) ? "1" : "0";
            $travel_order->registration_amount = isset($this->has_registration) ? $this->registration_amt : "0";
            $travel_order->total = $this->finalTotal_raw;
            $travel_order->isDraft =false;
            $travel_order->dv_type_sorter_id = "1"; 
            $travel_order->dte_id =  $reg['id'];
            $travel_order->to_type =  $this->toType;
            $travel_order->save();  
            $this->saveApplicants($travel_order->id);

        }



    }

    public function clearFields()
    {
        
    }


    //methods on main field
    public function addmain($i){
        // dd($i);
        
        $i = $i + 1;
        $this->i = $i;
  
            array_push($this->input ,$i);
        
       
    }
    public function removemain($i)
    {
        unset($this->input[$i]);
    }
    public function checkModel(){
    //     $this->alert('success', 'Successfully Added!', [
    //         'background' => '#ccffcc',
    //         'padding' => '0.5rem',
    //         'position' =>  'top-end', 
    //         'timer' =>  2500,  
    //         'toast' =>  true, 
    //         'text' => "hello", 
    //         'confirmButtonText' =>  'Ok', 
    //         'cancelButtonText' =>  'Cancel', 
    //         'showCancelButton' =>  false, 
    //         'showConfirmButton' =>  false, 
    //   ]);
    }



    public function generateDays()
    {
        $this->finalTotal = $this->subTotal= 0.0;
        if(is_null($this->date_from) || is_null($this->date_to))
        {
            $this->showDays = false;
            $this->err_diff = false;
            $this->err_from_to = true;
            $this->err_diem = false;
        }else{
            $from = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('d');
            $to = Carbon::createFromFormat('Y-m-d', $this->date_to)->format('d');
            $this->diff = $to - $from;
            if($this->date_to < $this->date_from)
            {
               // dd( $from = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('M'));
               $this->showDays = false;
                $this->err_from_to = false;
                $this->err_diff = true;
                $this->err_diem = false;
            }else if($this->per_diem == null)
            {
                $this->showDays = false;
                $this->err_from_to = false;
                $this->err_diff = false;
                $this->err_diem = true;
            }
            else{     
                // dd( $this->per_diem);

                    $temp = TravelOrderMain::createDateRangeArray($this->date_from, $this->date_to);
                    
                    $this->showDays = true;
 
            }  
        }

    }

 



    function createDateRangeArray($strDateFrom,$strDateTo)
    {
    // takes two dates formatted as YYYY-MM-DD and creates an
    // inclusive array of the dates between the from and to dates.

    // could test validity of dates here but I'm already doing
    // that in the main script
    
    $this->gen = [];

    $iDateFrom = strtotime($strDateFrom);
    $iDateTo = strtotime($strDateTo);
    // $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
    // $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

        array_push($this->gen, date('Y-m-d', $iDateFrom)); // first entry
        while ($iDateFrom<$iDateTo) {
            $iDateFrom += 86400; // add 24 hours
            array_push($this->gen, date('Y-m-d', $iDateFrom));
        }


    //   dd($this->gen);
    
    return $this->gen;
    }


    //for final total

    public $listeners = [
        'calculatetotalfromothers'=>'finalTotalCalculation',
        'iteneraryvalidated'=>'isiteneraryvalidated'
    ];

    public $subTotal;
    public function TotalCalculation(){
        if ($this->has_registration == true) {
        if ($this->subTotal>0) {
            $this->finalTotal_raw = $this->subTotal= $this->registration_amt;
            $this->emit('sendTotalVal');
        }else{
            $this->finalTotal_raw = $this->subTotal= $this->registration_amt;
        }
        } else {
            $this->finalTotal_raw = $this->subTotal = 0.0;
        }
        
    }
    public $finalTotal_raw=0.0;
    public function finalTotalCalculation($value){
        $this->TotalCalculation();
        if ($value > 0) {
            $this->subTotal += $value;
            $this->finalTotal_raw = $this->subTotal;
           $this->finalTotal = number_format($this->subTotal,2); 
        }
        
    }
    
    public function setUser($uID){
        $this->users_id = $uID;
        $this->pickedUsers = true;
        $this->searchedUsers =false;
        $this->searchUsers ="";
        $this->applicant_ids[] = $uID;
        $this->showApplicantError=false;
        $this->applicant_ids = array_unique($this->applicant_ids);
        array_values($this->applicant_ids);
    }
    public function unSetUser($id){
        $index = array_search($id, $this->applicant_ids);
        unset($this->applicant_ids[$index]);
        array_values($this->applicant_ids);
    }
    public function setSignatory($uID){
        $this->pickedSigs = true;
        $this->searchedSigs =false;
        $this->searchSigs ="";
        $this->signatory_ids[] = $uID;
        $this->signatory_ids = array_unique($this->signatory_ids);
        $this->showSignatoryError=false;
        array_values($this->signatory_ids);
    }
    public function unSetSignatory($id){
        $index = array_search($id, $this->signatory_ids);
        unset($this->signatory_ids[$index]);
        array_values($this->signatory_ids);
    }


    public function saveApplicants($toID){
        
        foreach($this->applicant_ids as $value){
            $toApplicants = new TravelOrderApplicant();
            $toApplicants->travel_order_id = $toID;
            $toApplicants->user_id = $value;
            $toApplicants->save();
        }
        $this->saveSignatories($toID);
       
    }
    public function saveSignatories($toID){
        foreach($this->signatory_ids as $value){
            $toSignatories = new TravelOrderSignatory();
            $toSignatories->travel_order_id = $toID;
            $toSignatories->user_id = $value;
            $toSignatories->approval_status = "pending";
            $toSignatories->save();
        }

        Sleep(2);
        return redirect()->route('redirect');
    }
}
