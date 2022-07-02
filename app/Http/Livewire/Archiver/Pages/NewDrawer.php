<?php

namespace App\Http\Livewire\Archiver\Pages;

use App\Models\Building; 
use App\Models\Drawer;
use App\Models\Shelf;
use Livewire\Component;

class NewDrawer extends Component
{
    public $searchText;
    public $drawers;
    public $shelves;
    public $drawer_name;
    public $drawer_code;
    public $shelf_id;
    public $folder_slots;
    public $drawer_added = false;
    public $show_drawer_form = false;
    public $show_edit_drawer = false;
    public $selectedDrawer;
    public $edited_drawer_name;
    public $edited_drawer_code;
    public $edited_shelf_id;
    public $edited_folder_slots;
    public $building_id;    
    public function updated($field)
    {
        if ($field == 'searchText') {
            $this->drawers = Drawer::search('drawer_name',$this->searchText )->searchOr('drawer_code',$this->searchText)->with('shelf')->with('shelf.building')->orderBy('id','desc')->get();
        }else if($field == 'building_id'){
            if ($this->building_id !=null) {
                $this->shelves = Shelf::where('building_id',$this->building_id)->get();
            }else{
                $this->shelves =[];
            }
        }

        

        $this->validateOnly($field, [
            'drawer_name' => 'required|string|max:255',
            'drawer_code' => 'required|string|max:255',
            'folder_slots' => 'required|numeric|min:1',
            'shelf_id' => 'required|numeric|min:1',
        ]);
    }
    public function render()
    {
        //if drawers is not set
        if (!isset($this->drawers)) {
            $this->drawers = Drawer::orderBy('id','desc')->with('shelf')->with('shelf.building')->get();
        }
        return view('livewire.archiver.pages.new-drawer',['drawers'=>$this->drawers,'buildings'=>Building::all()])->layout('layouts.accountant');
    }

    public function store(){
        $this->validate([
            'drawer_name' => 'required|string|max:255',
            'drawer_code' => 'required|string|max:255',
            'folder_slots' => 'required|numeric|min:1',
            'shelf_id' => 'required',
            'building_id' => 'required',
        ]);
        $drawer = Drawer::create([
            'drawer_name' => $this->drawer_name,
            'drawer_code' => $this->drawer_code,
            'folder_slots' => $this->folder_slots,
            'shelf_id' => $this->shelf_id,
        ]);
        $this->hideDrawerForm();
        $this->drawer_added = true;
        $this->resetInput();
    }

    public function resetInput(){
        $this->drawer_name = null;
        $this->drawer_code = null;
        $this->folder_slots = null;
        $this->building_id = null;
        $this->shelf_id = null;
        $this->searchText ="a";
        $this->searchText ="";
        $this->drawers = Drawer::orderBy('id','desc')->with('shelf')->with('shelf.building')->get();
    }

    public function showDrawerForm(){
        $this->show_drawer_form = true;
    }

    public function hideDrawerForm(){
        $this->resetInput();
        $this->show_drawer_form = false;
    }


    public function showEditDrawerForm($id){
        $this->show_edit_drawer = true;
        $this->selectedDrawer = $id;
        $this->edited_drawer_name = Drawer::find($id)->drawer_name;
        $this->edited_drawer_code = Drawer::find($id)->drawer_code;
        $this->edited_folder_slots = Drawer::find($id)->folder_slots;
    }

    public function hideEditDrawerForm(){
        $this->show_edit_drawer = false;
        $this->resetInput();
    }

    public function updateDrawer()
    {
        $this->validate([
            'edited_drawer_name' => 'required|string|max:255',
            'edited_drawer_code' => 'required|string|max:255',
            'edited_folder_slots' => 'required|numeric|min:1',
            'edited_shelf_id' => 'required',
            'building_id' => 'required',
        ]);
        $drawer = Drawer::find($this->selectedDrawer);
        $drawer->drawer_name = $this->edited_drawer_name;
        $drawer->drawer_code = $this->edited_drawer_code;
        $drawer->folder_slots = $this->edited_folder_slots;
        $drawer->shelf_id = $this->edited_shelf_id;
        $drawer->save();
        $this->hideEditDrawerForm();
        $this->drawer_added = true;
        $this->resetInput();
    }

    protected $messages = [
        'drawer_name.required' => 'Please enter drawer name',
        'drawer_code.required' => 'Please enter drawer code',
        'folder_slots.required' => 'Please enter folder slots',
        'shelf_id.required' => 'Please select shelf',
        'building_id.required' => 'Please select building',
    ];
}
