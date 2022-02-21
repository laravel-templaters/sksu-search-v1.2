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
    public function getListeners()
    {
        return [
            "echo-private:new-notif.".auth()->user()->id.",newnotif" => 'hoy',
        ];
    }
    public function hoy(){
        $this->emit('notify');
    }
}
