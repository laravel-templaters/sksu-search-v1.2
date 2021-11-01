<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DashMain extends Component
{
    public function render()
    {
        return view('livewire.admin.dash-main')->layout('layouts.admin');
    }
}
