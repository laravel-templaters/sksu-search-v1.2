<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Infophp extends Component
{
    public function render()
    {
        return view('livewire.infophp',['phpinfo'=>phpinfo()]);
    }
}
