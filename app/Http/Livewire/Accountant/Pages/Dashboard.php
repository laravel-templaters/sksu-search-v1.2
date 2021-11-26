<?php

namespace App\Http\Livewire\Accountant\Pages;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.accountant.pages.dashboard')->layout('layouts.accountant');
    }
}
