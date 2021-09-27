<?php

namespace App\Http\Livewire\Sec\To;

use Livewire\Component;
use App\Models\Region;
use App\Models\Province;
use App\Models\City;
use App\Models\User;
use App\Models\TravelOrder;
use App\Models\Dte;

class TravelOrderMain extends Component
{
    public $users_id;
    public $user;
    public $purpose;
    public $has_registration;
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
    public $frick ="aasdas";
    

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


    public function submit()
    {

        $reg = Region::where("region_code", "=",  $this->region_codes)->first();
        $prov = Province::where("province_code", "=",  $this->province_codes)->first();
        $cit = City::where("city_municipality_code", "=",  $this->city_codes)->first();

         $this->validate([
            'users_id' => 'required',
            'purpose' => 'required',
            'region_codes' => 'required',
            'province_codes' => 'required',
            'city_codes' => 'required',
         ]);

         $travel_order = new TravelOrder;
         $travel_order->purpose = $this->purpose;
         $travel_order->philippine_regions_id =  $reg['id'];
         $travel_order->philippine_provinces_id = $prov['id'];
         $travel_order->philippine_cities_id = $cit['id'];
         $travel_order->has_registration = isset($this->has_registration) ? "1" : "0";
         $travel_order->user_id = $this->users_id;
         $travel_order->dv_type_sorter_id = "1";
         $travel_order->dte_id =  $reg['id'];
         $travel_order->save();


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
    }

    public function clearFields()
    {
        
    }


    //methods on main field
    public function addmain($i){
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
    public function removemain($i)
    {
        unset($this->inputs[$i]);
    }
    public function checkModel(){
        $this->alert('success', 'Successfully Added!', [
            'background' => '#ccffcc',
            'padding' => '0.5rem',
            'position' =>  'top-end', 
            'timer' =>  2500,  
            'toast' =>  true, 
            'text' =>  $this->frick, 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
      ]);
    }
    
}
