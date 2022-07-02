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
    public $show_edit_building = false;
    public $selectedBuilding;
    public $edited_building_name;
    public $edited_building_code;
    public $edited_shelf_slots;
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

    public function showEditBuildingForm($id){
        $this->show_edit_building = true;
        $this->selectedBuilding=Building::where('id',$id)->get();
        
        $this->edited_building_name = $this->selectedBuilding[0]->building_name;
        $this->edited_building_code = $this->selectedBuilding[0]->building_code;
        $this->edited_shelf_slots = $this->selectedBuilding[0]->shelf_slots;
    }

    public function hideEditBuildingForm(){
        $this->resetInput();
        $this->show_edit_building = false;
    }

    public function updateBuilding()
    {
        $this->validate([
            'edited_building_name' => 'required|string|max:255',
            'edited_building_code' => 'required|string|max:255',
            'edited_shelf_slots' => 'required|numeric|min:4',
        ]);
        $building = Building::where('id',$this->selectedBuilding[0]->id)->update([
            'building_name' => $this->edited_building_name,
            'building_code' => $this->edited_building_code,
            'shelf_slots' => $this->edited_shelf_slots,
        ]);
        $this->hideEditBuildingForm();
        $this->building_added = true;
        $this->resetInput();
    }

    protected $messages=[
        'building_name.required'=>'Please enter a building name',
        'building_code.required'=>'Please enter a building code',
        'shelf_slots.required'=>'Please enter number of shelves',
        'shelf_slots.numeric'=>'Number of shelf must be a number',
        'shelf_slots.min'=>'Number of shelf must be at least 1',
    ];
    
}
