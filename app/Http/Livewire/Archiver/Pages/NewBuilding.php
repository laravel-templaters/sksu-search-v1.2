<?php

namespace App\Http\Livewire\Archiver\Pages;

use App\Models\Building;
use Livewire\Component;

class NewBuilding extends Component
{
    public $searchText;
    public $buildings;
    public $building_name;
    public $building_code;
    public $shelf_slots;
    public $building_added = false;
    public $show_building_form = false;
    public function updated($field)
    {
        if ($field == 'searchText') {
            $this->buildings = Building::search('building_name',$this->searchText )->searchOr('building_code',$this->searchText)->orderBy('id','desc')->get();
        }
        $this->validateOnly($field, [
            'building_name' => 'required|string|max:255',
            'building_code' => 'required|string|max:255',
            'shelf_slots' => 'required|numeric|min:1',
        ]);
    }
    public function render()
    {
        //if buiuldings is not set
        if (empty($this->buildings)) {
            $this->buildings = Building::orderBy('id','desc')->get();
        }
        return view('livewire.archiver.pages.new-building',['buildings'=>$this->buildings])->layout('layouts.accountant');
    }

    public function store(){
        $this->validate([
            'building_name' => 'required|string|max:255',
            'building_code' => 'required|string|max:255',
            'shelf_slots' => 'required|numeric|min:1',
        ]);
        $building = Building::create([
            'building_name' => $this->building_name,
            'building_code' => $this->building_code,
            'shelf_slots' => $this->shelf_slots,
        ]);
        $this->hideBuildingForm();
        $this->building_added = true;
        $this->resetInput();
    }

    public function resetInput(){
        $this->building_name = null;
        $this->building_code = null;
        $this->shelf_slots = null;
        $this->searchText ="a";
        $this->searchText ="";
        $this->buildings = Building::orderBy('id','desc')->get();
    }

    public function showBuildingForm(){
        $this->show_building_form = true;
    }

    public function hideBuildingForm(){
        $this->resetInput();
        $this->show_building_form = false;
    }


    protected $messages=[
        'building_name.required'=>'Please enter a building name',
        'building_code.required'=>'Please enter a building code',
        'shelf_slots.required'=>'Please enter number of shelves',
        'shelf_slots.numeric'=>'Number of shelf must be a number',
        'shelf_slots.min'=>'Number of shelf must be at least 1',
    ];
    
}
