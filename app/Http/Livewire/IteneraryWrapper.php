<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IteneraryWrapper extends Component
{
    public $gen = array();
    public $diems;
    public $travelOrderForpassingID;
    public $isEdit=false;
    public function render()
    {
        return view('livewire.itenerary-wrapper');
    }
    public function mount($gen, $per_diem, $travel_order_id,$is_edit,$is_diem_half)
    {
        $this->gen = $gen;
        $this->diems = $per_diem;
        $this->travelOrderForpassingID=$travel_order_id;
        $this->isEdit=$is_edit;      
    }
}
