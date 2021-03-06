<?php

namespace App\Http\Livewire\Archiver\Pages;

use App\Models\Building;
use App\Models\Shelf;
use Livewire\Component;

class Newshelf extends Component
{
    public $searchText;
    public $shelves;
    public $building_id;
    public $shelf_name;
    public $shelf_code;
    public $shelf_added = false;
    public $drawer_slots;
    public $show_shelf_form = false;
    public $show_edit_shelf = false;
    public $selectedShelf;
    public $edited_shelf_name;
    public $edited_shelf_code;
    public $edited_drawer_slots;
    public function updated($field)
    {
        if ($field == 'searchText') {
            $this->shelves = Shelf::search('shelf_name',$this->searchText )->searchOr('shelf_code',$this->searchText)->orderBy('id','desc')->with('building')->get();
        }
        $this->validateOnly($field, [
            'building_id' => 'required',
            'shelf_name' => 'required|string|max:255',
            'shelf_code' => 'required|string|max:255',
            'drawer_slots' => 'required|numeric|min:1',
        ]);
    }
    public function render()
    {
        //if shelfs is not set
        if (!isset($this->shelves)) {
            $this->shelves = Shelf::orderBy('id','desc')->with('building')->get();
        }
        return view('livewire.archiver.pages.newshelf',['shelves'=>$this->shelves,'buildings'=>Building::all()])->layout('layouts.accountant');
    }

    public function store(){
        $this->validate([
            'building_id' => 'required',
            'shelf_name' => 'required|string|max:255',
            'shelf_code' => 'required|string|max:255',
            'drawer_slots' => 'required|numeric|min:1',
        ]);
        $shelf = Shelf::create([
            'shelf_name' => $this->shelf_name,
            'shelf_code' => $this->shelf_code,
            'building_id' => $this->building_id,
            'drawer_slots' => $this->drawer_slots,
        ]);
        $this->hideShelfForm();
        $this->shelf_added = true;
        
        $this->resetInput();
        
    }

    public function resetInput(){
        $this->shelf_name = null;
        $this->shelf_code = null;
        $this->drawer_slots = null;
        $this->building_id = null;
        $this->searchText ="a";
        $this->searchText ="";
        $this->shelves = Shelf::orderBy('id','desc')->with('building')->get();
    }

    public function showShelfForm(){
        $this->show_shelf_form = true;
    }

    public function hideShelfForm(){
        $this->resetInput();
        $this->show_shelf_form = false;
    }

    public function showEditShelfForm($id){
        $this->show_edit_shelf = true;
        $this->selectedShelf=Shelf::where('id',$id)->get();
        $this->edited_shelf_name = $this->selectedShelf[0]->shelf_name;
        $this->edited_shelf_code = $this->selectedShelf[0]->shelf_code;
        $this->edited_drawer_slots = $this->selectedShelf[0]->drawer_slots;
    }

    public function hideEditShelfForm(){
        $this->resetInput();
        $this->show_edit_shelf = false;
    }

    public function updateShelf()
    {
        $this->validate([
            'building_id' => 'required',
            'edited_shelf_name' => 'required|string|max:255',
            'edited_shelf_code' => 'required|string|max:255',
            'edited_drawer_slots' => 'required|numeric|min:4',
        ]);
        $shelf = Shelf::where('id',$this->selectedShelf[0]->id)->update([
            'shelf_name' => $this->edited_shelf_name,
            'shelf_code' => $this->edited_shelf_code,
            'building_id' => $this->building_id,
            'drawer_slots' => $this->edited_drawer_slots,
        ]);
        $this->hideEditShelfForm();
        $this->shelf_added = true;
        $this->resetInput();
    }

    protected $messages = [
        'building_id.required'=>'Please select a building',
        'shelf_name.required' => 'Please enter a shelf name',
        'shelf_code.required' => 'Please enter a shelf code',
        'drawer_slots.required' => 'Please enter number of drawers',
    ];

}
