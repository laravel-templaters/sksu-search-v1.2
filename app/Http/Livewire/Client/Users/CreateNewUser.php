<?php

namespace App\Http\Livewire\Client\Users;

use App\Models\Department;
use App\Models\position;
use Livewire\Component;

class CreateNewUser extends Component
{
    public function render()
    {
        return view('livewire.client.users.create-new-user',['departments'=>Department::get(), 'positions'=>position::get()])->layout('layouts.app');
    }
}

