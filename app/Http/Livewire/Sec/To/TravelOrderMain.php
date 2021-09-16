<?php

namespace App\Http\Livewire\Sec\To;

use Livewire\Component;

class TravelOrderMain extends Component
{
    //variables for Main
    public $updateMode = false;
    public $inputsMain = [];
    public $i = 1;
    //variables for Sub
    public $inputsSub = [];
    public $j = 1;

    public function render()
    {
        return view('livewire.sec.to.travel-order-main');
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
