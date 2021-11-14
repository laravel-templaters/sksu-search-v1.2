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
use Carbon\Carbon;

class TravelOrderMain extends Component
{



    public $users_id;
    public $user;
    public $purpose;
    public $has_registration;
    public $registration_amt;
    public $per_diem;

    //variables for place
    public $region;
    public $region_codes;
    public $province;
    public $province_codes;
    public $city;
    public $city_codes;

    //variables for Main
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    //variables for mock
    public $frick ="hey";

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
        $this->user = User::get();
        $this->region = Region::get();
        $this->province = Province::where("region_code", "=",  $this->region_codes)->get();
        $this->city = City::where("province_code", "=", $this->province_codes)->get();
        $this->per_diem = Dte::where('region_code', '=', $this->region_codes)->first();



        return view('livewire.sec.to.travel-order-main')->with('regions', $this->region)->with('provinces',  $this->province)
        ->with('cities',  $this->city)->with('users', $this->user)->with('diems', $this->per_diem);
    }

    // public function mount($err_per_diem)
    // {
        
    // }


    public function submit()
    {
        $from_date = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('F d, Y');
        $to_date = Carbon::createFromFormat('Y-m-d', $this->date_to)->format('F d, Y');
        $date_string = $from_date ." - ".$to_date;
        $reg = Region::where("region_code", "=",  $this->region_codes)->first();
        $prov = Province::where("province_code", "=",  $this->province_codes)->first();
        $cit = City::where("city_municipality_code", "=",  $this->city_codes)->first();

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
        if (isset($this->finalTotal)) {
            $travel_order = new TravelOrder;
            $travel_order->purpose = $this->purpose;
            $travel_order->philippine_regions_id =  $reg['id'];
            $travel_order->philippine_provinces_id = $prov['id'];
            $travel_order->philippine_cities_id = $cit['id'];
            $travel_order->has_registration = isset($this->has_registration) ? "1" : "0";
            $travel_order->registration_amount = isset($this->has_registration) ? $this->registration_amt : "0";
            $travel_order->total = $this->finalTotal;
            $travel_order->user_id = $this->users_id;
            $travel_order->date_range = $date_string;
            $travel_order->dv_type_sorter_id = "1"; 
            $travel_order->dte_id =  $reg['id'];
            $travel_order->save();  
            $this->emit('storeItenerary',$travel_order->id);
          
            $this->alert('success', 'Successfully Added!', [
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
        }else{
            $this->alert('warning', '<h3 class="font-sans font-extrabold text-blue-500 font-xs"> TOTAL UNCALCULATED </h3>', [
                'background' => '#ffffff',
                'padding' => '2rem',
                'backdrop' => true,
                'position' =>  'center', 
                'timer' =>  4500,  
                'toast' =>  false, 
                'text' =>  'Press "Calculate" button before saving...  Thank You!', 
                'confirmButtonText' =>  'Ok', 
                'cancelButtonText' =>  'Cancel', 
                'showCancelButton' =>  false, 
                'showConfirmButton' =>  false, 
          ]);
        }
        


        // $this->emit('showAlert',$travel_order->id);
        
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
    ];

    public $subTotal;
    public function TotalCalculation(){
        if ($this->has_registration == true) {
            
        $this->finalTotal = $this->subTotal= $this->registration_amt;
        $this->emit('sendTotalVal');
        } else {
            $this->finalTotal = $this->subTotal = 0.0;
        $this->emit('sendTotalVal');
        }
        
    }
    public function finalTotalCalculation($value){
        $this->subTotal += $value;
        $this->finalTotal = number_format($this->subTotal,2);
    }
    
}
