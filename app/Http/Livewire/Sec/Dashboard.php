<?php

namespace App\Http\Livewire\Sec;

use Livewire\Component;
use App\Models\DVType;
use App\Models\DVCategory;
use App\Models\DVSubCategory;
use App\Models\DVTypeSorter;

class Dashboard extends Component
{
    public $dv_type_id;
    public $dv_category_id;
    Public $ctr = 0;
    public function render()
    {
        $typesorters = DVTypeSorter::with(['dv_type','dv_categories','dv_sub_categories'])          
        ->get();
        // $types = DVType::with(['dv_categories'])->get();
        $categories = DVCategory::get();
        $sub_categories = DVSubCategory::withCount('dv_categories')->get();
        //$types = DVType::with(['dv_categories'])->get();
        //$categories = DVCategory::with(['dv_sub_categories'])->withCount(['dv_sub_categories'])->get();
        // return view('livewire.sec.dashboard')->with('types', $types)->with('categories', $categories)->with('sub_categories', $sub_categories);
        // return view('livewire.sec.dashboard')->with('types', $types);
        //  return view('livewire.sec.dashboard')->with('types', $types)->with('typesorters', $typesorters)->with('categories', $categories)->with('sub_categories', $sub_categories);
        return view('livewire.sec.dashboard')->with('typesorters', $typesorters)->with('sub_categories', $sub_categories)->with('categories', $categories);
        // return view('livewire.sec.dashboard')->with('typesorters', $typesorters);
        // if(isset($dv_type_id)){
            
        //     if(isset($dv_category_id)){
               
        //         $categories = DVCategory::where('dv_type_id', '=', $dv_type_id)->get();
        //         $sub_categories = DVSubCategory::where('dv_category_id', '=', $dv_category_id)->get();
               
               

        //     } 
        //     else{
                
        //         $categories = DVCategory::where('dv_type_id', '=', $dv_type_id)->get();
        //         return view('livewire.sec.dashboard')->with('types', $types)->with('categories', $categories);
        //     }

        // }else{
            
        //     return view('livewire.sec.dashboard')->with('types', $types);

        // }
    }
}
