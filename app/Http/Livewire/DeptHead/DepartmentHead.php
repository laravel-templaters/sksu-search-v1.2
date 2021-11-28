<?php

namespace App\Http\Livewire\DeptHead;

use Livewire\Component;

class DepartmentHead extends Component
{
    public function render()
    {
        return view('livewire.dept-head.department-head')->layout('layouts.accountant');
    }
}
