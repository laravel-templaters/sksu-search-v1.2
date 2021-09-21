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
    public $inputsMain = [];
    public $i = 1;
    //variables for Sub
    public $inputsSub = [];
    public $j = 1;

    protected $rules = [
        'users_id' => 'required',
        'purpose' => 'required',
        'region_codes' => 'required',
        'province_codes' => 'required',
        'city_codes' => 'required',
    ];
    

    public function render()
    {
        $this->user = User::get();
        $this->region = Region::get();
        $this->province = Province::where("region_code", "=",  $this->region_codes)->get();
        $this->city = City::where("province_code", "=", $this->province_codes)->get();
        $this->per_diem = Dte::where('id', '=', $this->region_codes)->first();

       

        return view('livewire.sec.to.travel-order-main')->with('regions', $this->region)->with('provinces',  $this->province)
        ->with('cities',  $this->city)->with('users', $this->user)->with('diems', $this->per_diem);
    }


    public function submit()
    {
        //       $this->alert('success', 'Successfully Added!', [
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

        // $this->validate();

        // TravelOrder::create([
        //     'users_id' => $this->users_id,
        //     'purpose' => $this->purpose,
        //     'region_codes' => $this->region_codes,
        //     'province_codes' => $this->province_codes,
        //     'city_codes' => $this->city_codes,
        // ]);

        dd($this->users_id,  $this->purpose, $this->region_codes, $this->province_codes, $this->city_codes);

    }


    //methods on main field
    public function addmain($i){
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputsMain ,$i);
    }
    public function removemain($i)
    {
        unset($this->inputsMain[$i]);
    }

    public function addsub($j){
        $j = $j + 1;
        $this->j = $j;
        array_push($this->inputsSub ,$j);
    }
    public function removesub($j)
    {
        unset($this->inputsSub[$j]);
    }
}
