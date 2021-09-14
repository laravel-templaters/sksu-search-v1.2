<?php

namespace App\Http\Livewire\Sec;

use Livewire\Component;
use App\Models\DVType;
use App\Models\DVCategory;
use App\Models\DVSubCategory;

class Dashboard extends Component
{
    public function render()
    {
        $types = DVType::get();
        $categories = DVCategory::get();
        $sub_categories = DVSubCategory::get();
        return view('livewire.sec.dashboard')->with('types', $types)->with('categories', $categories)->with('sub_categories', $sub_categories);
    }
}
