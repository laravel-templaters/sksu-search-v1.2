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
use App\Models\Itenerary;
use App\Models\IteneraryEntry;
use App\Models\TravelOrderApplicant;
use App\Models\TravelOrderSignatory;
use Carbon\Carbon;
use App\Notifications\TravelOrderSaved;

class TravelOrderMain extends Component
{

    //foredit
    public $isEdit;
    public $ispopulating= false;
    public $TOforEditID;

    public $showBanner = false;
    public $isDraft = true;
    public $isSaved = "";
    public $travel_order_applicants;
    public $travel_order;
    public $travel_draft_made = false;
    public $showApplicantError = false;
    public $showSignatoryError = false;
    public $showFromDateError = false;
    public $showToDateError = false;
    public $toType = "offtime";
    public $searchUsers;
    public $searchSigs;
    public $searchedUsers = false;
    public $pickedUsers = false;
    public $searchedSigs = false;
    public $pickedSigs = false;

    public $users_id;
    public $applicant_ids = [];
    public $signatory_ids = [];
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

    public $toValidated = false;
    public $iteneraryValidated = false;

    public $gen = [];

    public $finalTotal;

    //itViewctr
    public $itViewCtr =0;

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

    public $listeners = [
        'calculatetotalfromothers' => 'finalTotalCalculation',
        'iteneraryValidated' => 'isiteneraryvalidated',
        'childUpdated' => 'updated',
        'iteneraryStored' =>'iteneraryStored',
    ];

    public $userInfos = [];

    //lifecycle hooks
    public function mount()
    {
        $this->isEdit = request()->isEdit;
        if($this->isEdit == true || $this->isEdit == 1){
            $this->travel_order = TravelOrder::find(request()->travelOrderID);

            // $this->travel_order_applicants = TravelOrderApplicant::find(request()->travelOrderID);

            $this->TOforEditID = request()->travelOrderID;
            $this->ispopulating =true;
            $this->populateForEdit();
        }
    }

    public function updated($name, $value)
    {
        if($this->ispopulating == false){

            if($name != "showBanner"){
                if ($this->travel_draft_made == false) {
                    $this->travel_order = new TravelOrder;
                    $this->isSaved = "Saving changes as draft";
                    if ($this->toType == "offtime") {
                        $this->save_draft_official_time();
                    } else if ($this->toType == "offtravel") {
                        $this->save_draft_official_travel();
                    }
                } else {
                    $this->isSaved = "Saving changes as draft";
                    if ($this->toType == "offtime") {
                        $this->save_draft_official_time();
                    } else if ($this->toType == "offtravel") {
                        $this->save_draft_official_travel();
                    }
                }
            }
        }
        
        // $this->isSaved = $name;
    }



    public function render()
    {
        $searchUsrRes = [];
        if ($this->searchUsers != "") {
            $this->searchedUsers = true;
            $searchUsrRes = User::search('name', $this->searchUsers)->get();
        } else {
            $searchUsrRes = [];
            $this->searchedUsers = false;
        }

        $searchSigsRes = [];
        if ($this->searchSigs != "") {
            $this->searchedSigs = true;
            $searchSigsRes = User::search('name', $this->searchSigs)->whereIn('position_id', [5, 12, 13, 11, 14, 15, 16, 17, 18, 19, 20, 21, 25])->get();
        } else {
            $searchSigsRes = [];
            $this->searchedSigs = false;
        }
        $this->userInfos = User::whereIn('id', $this->applicant_ids)->get();
        $this->region = Region::get();
        $this->province = Province::where("region_code", "=",  $this->region_codes)->get();
        $this->city = City::where("province_code", "=", $this->province_codes)->get();
        $this->per_diem = Dte::where('region_code', '=', $this->region_codes)->first();
        $sigsInfos ="";
        if(isset($this->travel_order)){
            $sigsInfos = TravelOrderSignatory::whereIn('user_id', $this->signatory_ids)->where('travel_order_id',$this->travel_order->id)->orderBy('stepNumber')->with('user')->get();
        }else{
            $sigsInfos = User::whereIn('id', $this->signatory_ids)->get();
        }

        return view('livewire.sec.to.travel-order-main', [
            'users' => $searchUsrRes, 'sigs' => $searchSigsRes,
            'userInfos' => $this->userInfos,
            'sigsInfos' => $sigsInfos
        ])->with('regions', $this->region)->with('provinces',  $this->province)
            ->with('cities',  $this->city)->with('diems', $this->per_diem);
    }

   


    public function validateTo()
    {

        $this->emit('valIE');

    }
   

    public function isiteneraryvalidated($isval)
    {

        if ($isval == true || $isval == 1) {
            
           $this->itViewCtr++;
           if($this->itViewCtr == count($this->gen)){
                $this->iteneraryValidated = true;
           }else{
            $this->iteneraryValidated = false;
           }
           if($this->iteneraryValidated == true){
            $this->validate(
                [
                    
                    'purpose' => 'required',
                    'region_codes' => 'required',
                    'province_codes' => 'required',
                    'city_codes' => 'required',
                    'dateoftravelfrom' =>'required',
                    'dateoftravelto' => 'required',
                ],
                [
                   
                    'purpose.required' => 'The purpose field is required.',
                    'region_codes.required' => 'The region field is required.',
                    'province_codes.required' => 'The province field is required.',
                    'city_codes.required' => 'The city field is required.',
                    'dateoftravelfrom.required' => 'This field is required.',
                    'dateoftravelto.required' => 'This field is required.',
                ]
            );
            $this->toValidated = true;
            $this->save_official_travel();
           }

        } else if ($isval == false) {
            $this->iteneraryValidated = false;
        } else {
            $this->iteneraryValidated = false;
            $this->finalTotal = 0.0;
        }
    }

  
    public function submit()
    {
        if (count($this->applicant_ids) > 0 && count($this->signatory_ids) > 0) {

            if ($this->toType == "offtime") {
                
                $this->validate(
                    [
                        'users_id' => 'required',
                        'purpose' => 'required',
                        'region_codes' => 'required',
                        'province_codes' => 'required',
                        'city_codes' => 'required',
                        'dateoftravelfrom' =>'required',
                        'dateoftravelto' => 'required',
                    ],
                    [
                        'users_id.required' => 'The name field is required.',
                        'purpose.required' => 'The purpose field is required.',
                        'region_codes.required' => 'The region field is required.',
                        'province_codes.required' => 'The province field is required.',
                        'city_codes.required' => 'The city field is required.',
                        'dateoftravelfrom.required' => 'This field is required.',
                        'dateoftravelto.required' => 'This field is required.',
                    ]
                );
                $this->toValidated = true;
                $this->save_official_time();
            } else if ($this->toType == "offtravel") {
                $this->itViewCtr = 0;
                $this->iteneraryValidated = false;
                $this->validateTo();
            }
        } else {
            
            $this->showApplicantError = $this->showSignatoryError = true;
        }
    }

    public function changeDate()
    {

        $this->date_from = $this->dateoftravelfrom;
        $this->date_to = $this->dateoftravelto;
    }

    public function save_official_time()
    {
        $reg = Region::where("region_code", "=",  $this->region_codes)->first();
        $prov = Province::where("province_code", "=",  $this->province_codes)->first();
        $cit = City::where("city_municipality_code", "=",  $this->city_codes)->first();
        if ($this->travel_draft_made == false) {
            $this->travel_order = new TravelOrder;
        }
        $this->travel_order->tracking_code = 'TO' . Carbon::now()->format('YmdHis') . auth()->user()->id . auth()->user()->department->campus->campus_shortCode;
        $this->travel_order->purpose = $this->purpose;
        $this->travel_order->date_of_travel_from = $this->dateoftravelfrom;
        $this->travel_order->date_of_travel_to = $this->dateoftravelto;
        $this->travel_order->philippine_regions_id =  $reg['id'];
        $this->travel_order->philippine_provinces_id = $prov['id'];
        $this->travel_order->philippine_cities_id = $cit['id'];
        $this->travel_order->others =  isset($this->others) ? $this->others : "";
        $this->travel_order->has_registration = isset($this->has_registration) ? "1" : "0";
        $this->travel_order->registration_amount = isset($this->has_registration) ? $this->registration_amt : "0";
        $this->travel_order->total = $this->finalTotal_raw;
        $this->travel_order->dv_type_sorter_id = "1";
        $this->travel_order->dte_id =  $reg['id'];
        $this->travel_order->to_type =  $this->toType;
        $this->travel_order->isDraft = false;
        $this->travel_order->save();
        $this->isDraft = false;
        $this->saveApplicants($this->travel_order->id);
    }

    public function save_draft_official_time()
    {
        $reg = Region::where("region_code", "=",  $this->region_codes)->first();
        $prov = Province::where("province_code", "=",  $this->province_codes)->first();
        $cit = City::where("city_municipality_code", "=",  $this->city_codes)->first();
        $this->travel_order->tracking_code = 'TO' . Carbon::now()->format('YmdHis') . auth()->user()->id . auth()->user()->department->campus->campus_shortCode;
        $this->travel_order->purpose = $this->purpose == '' ? '' : $this->purpose;
        $this->travel_order->date_of_travel_from = $this->dateoftravelfrom == '' ? null : $this->dateoftravelfrom;
        $this->travel_order->date_of_travel_to = $this->dateoftravelto == '' ? null : $this->dateoftravelto;
        $this->travel_order->philippine_regions_id = isset($reg['id']) ?  $reg['id'] : 0;
        $this->travel_order->philippine_provinces_id = isset($prov['id']) ?   $prov['id'] : 0;
        $this->travel_order->philippine_cities_id = isset($cit['id']) ?   $cit['id'] : 0;
        $this->travel_order->others =  isset($this->others) ? $this->others : "";
        $this->travel_order->has_registration = isset($this->has_registration) ? "1" : "0";
        $this->travel_order->registration_amount = isset($this->has_registration) ? $this->registration_amt : "0";
        $this->travel_order->total = $this->finalTotal_raw;
        $this->travel_order->dv_type_sorter_id = "1";
        $this->travel_order->dte_id =  isset($reg['id']) ?  $reg['id'] : 0;
        $this->travel_order->to_type =  $this->toType;
        $this->travel_order->isDraft = true;
        $this->travel_order->save();
        $this->isDraft = true;
        $this->saveApplicants($this->travel_order->id);
    }


    public function save_draft_official_travel()
    {
        $reg = Region::where("region_code", "=",  $this->region_codes)->first();
        $prov = Province::where("province_code", "=",  $this->province_codes)->first();
        $cit = City::where("city_municipality_code", "=",  $this->city_codes)->first();
        $from_date = "";
        $to_date = "";
        if (isset($this->date_from)) {

            if ($this->date_from != "") {
                $from_date = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('F d, Y');
            }
        }

        if (isset($this->date_to)) {
            if ($this->date_to != "") {
                $to_date = Carbon::createFromFormat('Y-m-d', $this->date_to)->format('F d, Y');
            }
        }

        $date_string = $from_date . " - " . $to_date;

        $this->travel_order->tracking_code = 'TO' . Carbon::now()->format('YmdHis') . auth()->user()->id . auth()->user()->department->campus->campus_shortCode;
        $this->travel_order->purpose = $this->purpose == '' ? '' : $this->purpose;
        $this->travel_order->date_of_travel_from = $this->dateoftravelfrom == '' ? null : $this->dateoftravelfrom;
        $this->travel_order->date_of_travel_to = $this->dateoftravelto == '' ? null : $this->dateoftravelto;
        $this->travel_order->philippine_regions_id = isset($reg['id']) ?  $reg['id'] : 0;
        $this->travel_order->philippine_provinces_id = isset($prov['id']) ?   $prov['id'] : 0;
        $this->travel_order->philippine_cities_id = isset($cit['id']) ?   $cit['id'] : 0;
        $this->travel_order->others =  isset($this->others) ? $this->others : "";
        $this->travel_order->has_registration = isset($this->has_registration) ? $this->has_registration : "0";
        $this->travel_order->registration_amount = isset($this->has_registration) ? $this->registration_amt : "0";
        $this->travel_order->total = $this->finalTotal_raw;
        $this->travel_order->date_range = $date_string;
        $this->travel_order->dv_type_sorter_id = "1";
        $this->travel_order->dte_id =  isset($reg['id']) ?  $reg['id'] : 0;
        $this->travel_order->to_type =  $this->toType;
        $this->travel_order->isDraft = true;
        $this->travel_order->save();
        $this->isDraft = true;
        $this->saveApplicants($this->travel_order->id);
    }
    public function save_official_travel()
    {
        $reg = Region::where("region_code", "=",  $this->region_codes)->first();
        $prov = Province::where("province_code", "=",  $this->province_codes)->first();
        $cit = City::where("city_municipality_code", "=",  $this->city_codes)->first();
        $from_date = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('F d, Y');
        $to_date = Carbon::createFromFormat('Y-m-d', $this->date_to)->format('F d, Y');
        $date_string = $from_date . " - " . $to_date;

        if (isset($this->finalTotal) && $this->finalTotal != 0) {

            if ($this->toValidated == true && $this->iteneraryValidated == true) {
                if($this->travel_draft_made == false){
                    $this->travel_order = new TravelOrder;
                }
                $this->travel_order->tracking_code = 'TO' . Carbon::now()->format('YmdHis') . auth()->user()->id . auth()->user()->department->campus->campus_shortCode;
                $this->travel_order->purpose = $this->purpose;
                $this->travel_order->date_of_travel_from = $this->dateoftravelfrom;
                $this->travel_order->date_of_travel_to = $this->dateoftravelto;
                $this->travel_order->philippine_regions_id =  $reg['id'];
                $this->travel_order->philippine_provinces_id = $prov['id'];
                $this->travel_order->philippine_cities_id = $cit['id'];
                $this->travel_order->others =  isset($this->others) ? $this->others : "";
                $this->travel_order->has_registration = isset($this->has_registration) ? $this->has_registration : "0";
                $this->travel_order->registration_amount = isset($this->has_registration) ? $this->registration_amt : "0";
                $this->travel_order->total = $this->finalTotal_raw;
                $this->travel_order->date_range = $date_string;
                $this->travel_order->dv_type_sorter_id = "1";
                $this->travel_order->dte_id =  $reg['id'];
                $this->travel_order->to_type =  $this->toType;
                $this->travel_order->isDraft = false;
                $this->travel_order->save();
                $this->itViewCtr = 0;
                $this->isDraft = false;
                $this->emit('storeItenerary', $this->travel_order->id);
            } else {
                //dd($this->toValidated . " - " . $this->iteneraryValidated);
            }
        }
    }

    public function iteneraryStored(){

        $this->itViewCtr++;
        if($this->itViewCtr == count($this->gen)){
            $this->saveApplicants($this->travel_order->id);
        }

    }



    public function clearFields()
    {
    }


    //methods on main field
    public function addmain($i)
    {
        // dd($i);

        $i = $i + 1;
        $this->i = $i;

        array_push($this->input, $i);
    }

    public function removemain($i)
    {
        unset($this->input[$i]);
    }

    public function generateDays()
    {


        $this->finalTotal = $this->subTotal = 0.0;
        if (is_null($this->date_from) || is_null($this->date_to)) {
            $this->showDays = false;
            $this->err_diff = false;
            $this->err_from_to = true;
            $this->err_diem = false;
        } else {
            $from = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('d');
            $to = Carbon::createFromFormat('Y-m-d', $this->date_to)->format('d');
            $this->diff = $to - $from;
            if ($this->date_to < $this->date_from) {
                // dd( $from = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('M'));
                $this->showDays = false;
                $this->err_from_to = false;
                $this->err_diff = true;
                $this->err_diem = false;
            } else if ($this->per_diem == null) {
                $this->showDays = false;
                $this->err_from_to = false;
                $this->err_diff = false;
                $this->err_diem = true;
            } else {

                $IteneraryIDs = Itenerary::where('travel_order_id', '=', $this->travel_order->id)->get('id');
                //dd($IteneraryIDs);
                foreach ($IteneraryIDs as $key => $value) {
                    $delEntries = IteneraryEntry::where('itenerary_id', '=', $value)->delete();
                }
                $deleteAll = Itenerary::where('travel_order_id', '=', $this->travel_order->id)->delete();
                $temp = TravelOrderMain::createDateRangeArray($this->date_from, $this->date_to);

                $this->showDays = true;
            }
        }
    }





    function createDateRangeArray($strDateFrom, $strDateTo)
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
        while ($iDateFrom < $iDateTo) {
            $iDateFrom += 86400; // add 24 hours
            array_push($this->gen, date('Y-m-d', $iDateFrom));
        }


        //   dd($this->gen);

        return $this->gen;
    }


    //for final total

    public $subTotal;
    public function TotalCalculation()
    {
        if ($this->has_registration == true) {
            if ($this->subTotal > 0) {
                $this->finalTotal_raw = $this->subTotal = $this->registration_amt;
                $this->emit('sendTotalVal');
            } else {
                $this->finalTotal_raw = $this->subTotal = $this->registration_amt;
            }
        } else {
            $this->finalTotal_raw = $this->subTotal = 0.0;
        }
    }
    public $finalTotal_raw = 0.0;
    public function finalTotalCalculation($value)
    {
        $this->TotalCalculation();
        if ($value > 0) {
            $this->subTotal += $value;
            $this->finalTotal_raw = $this->subTotal;
            $this->finalTotal = number_format($this->subTotal, 2);
        }
    }

    public function setUser($uID)
    {
        $this->users_id = $uID;
        $this->pickedUsers = true;
        $this->searchedUsers = false;
        $this->searchUsers = "";
        $this->applicant_ids[] = $uID;
        $this->showApplicantError = false;
        $this->applicant_ids = array_unique($this->applicant_ids);
        $this->updated("searchSigs", "");
        array_values($this->applicant_ids);
    }
    public function unSetUser($id)
    {
        $index = array_search($id, $this->applicant_ids);
        unset($this->applicant_ids[$index]);
        $this->updated("searchSigs", "");
        array_values($this->applicant_ids);
    }
    public function setSignatory($uID)
    {
        $this->pickedSigs = true;
        $this->searchedSigs = false;
        $this->searchSigs = "";
        $this->signatory_ids[] = $uID;
        $this->signatory_ids = array_unique($this->signatory_ids);
        $this->showSignatoryError = false;
        $this->updated("searchSigs", "");
        array_values($this->signatory_ids);
    }
    public function unSetSignatory($id)
    {
        $index = array_search($id, $this->signatory_ids);
        unset($this->signatory_ids[$index]);
        $this->updated("searchSigs", "");
        array_values($this->signatory_ids);
    }


    public function saveApplicants($toID)
    {
        $applicantsFromTbl = TravelOrderApplicant::where('travel_order_id', '=', $toID)->delete();

        foreach ($this->applicant_ids as $value) {
            $toApplicants = new TravelOrderApplicant;
            $toApplicants->travel_order_id = $toID;
            $toApplicants->user_id = $value;
            $toApplicants->save();
        }
        $this->saveSignatories($toID);
    }
    public function saveSignatories($toID)
    {
        $applicantsFromTbl = TravelOrderSignatory::where('travel_order_id', "=", $toID)->delete();
        foreach ($this->signatory_ids as $key=> $value) {
            $toSignatories = new TravelOrderSignatory;
            $toSignatories->travel_order_id = $toID;
            $toSignatories->user_id = $value;
            $toSignatories->approval_status = "pending";
            $toSignatories->stepNumber = $key+1;
            $toSignatories->save();
        }
        if ($this->isDraft == false) {
            $this->showBanner = true;
            if ($this->toType == "offtravel") {
                //$deleteAllItenerary = Itenerary::where('travel_order_id','=',$toID)->delete();
                if ($this->showDays == true) {
                    $this->emit('storeIteneraryDraft', $toID);
                }
            }
        } else {
            if ($this->toType == "offtravel") {
                //$deleteAllItenerary = Itenerary::where('travel_order_id','=',$toID)->delete();
                if ($this->showDays == true) {
                    $this->emit('storeIteneraryDraft', $toID);
                }
            }
            $this->travel_draft_made = true;
        }
    }

    public function populateForEdit(){
        $applicantstbl = TravelOrderApplicant::where('travel_order_id', '=', $this->TOforEditID)->get('user_id');
        $applicantsFromTbl = TravelOrderSignatory::where('travel_order_id', "=", $this->TOforEditID)->get('user_id');
        if($applicantstbl != null)
        {
           foreach ($applicantstbl as $key => $value) {
                  $this->setUser($value->user_id);
           }
        }

        if($applicantsFromTbl != null)
        {
           foreach ($applicantsFromTbl as $key => $value) {
                  $this->setSignatory($value->user_id);
           }
        //    $this->userInfos = User::whereIn('id', $this->applicant_ids)->get();
        }

        $this->toType = $this->travel_order->to_type;
        $this->purpose = $this->travel_order->purpose;
        
        // $this->searchUsers = $applicantstbl->user->name;

        $this->dateoftravelfrom = $this->travel_order->date_of_travel_from;
        $this->dateoftravelto = $this->travel_order->date_of_travel_to;
        $this->region_codes = $this->travel_order->philippine_regions_id == 0 ? 'Region Not Set': $this->travel_order->region->region_code;
        $this->province_codes = $this->travel_order->philippine_provinces_id == 0 ? 'Province Not Set': $this->travel_order->province->province_code;
        $this->city_codes = $this->travel_order->philippine_cities_id == 0 ? 'City Not Set': $this->travel_order->city->city_municipality_code;
        $this->others = $this->travel_order->others;
        $this->has_registration = $this->travel_order->has_registration;
        $this->registration_amt = $this->travel_order->registration_amount;
        //  dd( $this->province_codes);
        $this->ispopulating = false;
    }
}
