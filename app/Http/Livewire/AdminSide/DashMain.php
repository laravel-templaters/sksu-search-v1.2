<?php

namespace App\Http\Livewire\AdminSide;

use Livewire\Component;

class DashMain extends Component
{
    public function render()
    {
        return view('livewire.admin-side.dash-main')->layout('layouts.admin');
    }
}
