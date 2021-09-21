<?php

namespace App\Http\Livewire\Sec\To;

use Livewire\Component;
use App\Models\Region;
use App\Models\Province;
use App\Models\City;

class TravelOrderMain extends Component
{
    //variables for place
    public $region;
    public $region_codes;
    public $province;
    public $province_codes;
    public $city;

    //variables for Main
    public $updateMode = false;
    public $inputsMain = [];
    public $i = 1;
    //variables for Sub
    public $inputsSub = [];
    public $j = 1;

    

    public function render()
    {
        $this->region = Region::get();
        $this->province = Province::
        where("region_code", "=",  $this->region_codes)->get();
        $this->city = City::where("province_code", "=", $this->province_codes)->get();

        return view('livewire.sec.to.travel-order-main')->with('regions', $this->region)->with('provinces',  $this->province)
        ->with('cities',  $this->city);
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
