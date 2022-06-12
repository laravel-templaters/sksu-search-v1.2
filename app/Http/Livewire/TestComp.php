<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComp extends Component
{
    public function render()
    {
        return view('livewire.test-comp')->layout('layouts.accountant');
    }
}
