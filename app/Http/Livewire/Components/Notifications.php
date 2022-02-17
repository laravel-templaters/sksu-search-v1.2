<?php

namespace App\Http\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        return view('livewire.components.notifications',['users'=>User::all()]);
    }
}
