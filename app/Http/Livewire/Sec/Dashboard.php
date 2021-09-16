<?php

namespace App\Http\Livewire\Sec;

use Livewire\Component;
use App\Models\DVType;
use App\Models\DVCategory;
use App\Models\DVSubCategory;

class Dashboard extends Component
{
    public $dv_type_id;
    public $dv_category_id;
    Public $ctr = 0;
    public $categories;
    public $sub_categories;
    public function render()
    {
        $types = DVType::get();
        // $categories = DVCategory::get();
        // $sub_categories = DVSubCategory::get();
        // return view('livewire.sec.dashboard')->with('types', $types)->with('categories', $categories)->with('sub_categories', $sub_categories);
        // return view('livewire.sec.dashboard')->with('types', $types);
        if(isset($dv_type_id)){
            
            if(isset($dv_category_id)){
               
                $categories = DVCategory::where('dv_type_id', '=', $dv_type_id)->get();
                $sub_categories = DVSubCategory::where('dv_category_id', '=', $dv_category_id)->get();
                return view('livewire.sec.dashboard')->with('types', $types)->with('categories', $categories)->with('sub_categories', $sub_categories);
               

            } 
            else{
                
                $categories = DVCategory::where('dv_type_id', '=', $dv_type_id)->get();
                return view('livewire.sec.dashboard')->with('types', $types)->with('categories', $categories);
            }

        }else{
            
            return view('livewire.sec.dashboard')->with('types', $types);

        }
    }
}
