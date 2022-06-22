<?php

namespace App\Http\Livewire\Sysadmin\Components;

use App\Models\Dte;
use Livewire\Component;

class ManagePerDiem extends Component
{
    public $selectedRegion;
    public $per_diem;
    public $per_diem_old;
    public $showSaveButton = false;
    public function updated($fieldset){
        if($fieldset == "selectedRegion"){
            if($this->selectedRegion != null){
                $this->per_diem = Dte::where('id',$this->selectedRegion)->get('amount');
                $this->per_diem = $this->per_diem_old =  $this->per_diem[0]->amount;
                
            }else{
                $this->per_diem = $this->per_diem_old = 0.0;
            }
        }else{
            if($this->per_diem != $this->per_diem_old){
                $this->showSaveButton = true;
            }else{
                $this->showSaveButton = false;
            }
        }
    }

    public function render()
    {
        if( $this->per_diem == null){
            $this->per_diem = $this->per_diem_old = 0.0;
        }
        return view('livewire.sysadmin.components.manage-per-diem',['per_diems'=>Dte::all()]);
    }
    public function store(){
        $dte = Dte::find($this->selectedRegion);
        $dte->amount = $this->per_diem + 0;
        $dte->save();
        $this->selectedRegion = $this->per_diem = $this->per_diem_old = null;
        $this->showSaveButton = false;
    }
}
