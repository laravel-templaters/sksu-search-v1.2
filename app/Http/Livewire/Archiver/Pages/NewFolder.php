<?php

namespace App\Http\Livewire\Archiver\Pages;

use App\Models\ArchiveFolder;
use App\Models\Building;
use App\Models\Drawer;
use App\Models\Shelf;
use Livewire\Component;

class NewFolder extends Component
{
    public $searchText;
    public $folders;
    public $drawers;
    public $shelves;
    public $folder_name;
    public $folder_code;
    public $drawer_id;
    public $shelf_id;
    public $building_id; 
    public $folder_added = false;
    public $show_folder_form = false;
    public $slot_number;

    public function updated($field)
    {
        if ($field == 'searchText') {
            $this->folders = ArchiveFolder::search('folder_name',$this->searchText )->searchOr('folder_code',$this->searchText)->with('drawer')->with('drawer.shelf')->with('drawer.shelf.building')->orderBy('id','desc')->get();
        }else if($field == 'building_id'){
            if ($this->building_id !=null) {
                $this->shelves = Shelf::where('building_id',$this->building_id)->get();
            }else{
                $this->shelves =[];
            }
        }else if($field == 'shelf_id'){
            if ($this->shelf_id !=null) {
                $this->drawers = Drawer::where('shelf_id',$this->shelf_id)->get();
            }else{
                $this->drawers =[];
            }
        }
        $this->validateOnly($field, [
            'folder_name' => 'required|string|max:255',
            'folder_code' => 'required|string|max:255',
            'drawer_id' => 'required',
            'shelf_id' => 'required',
            'building_id' => 'required',
            'slot_number' => 'required|numeric|min:1',
        ]);
    }
    public function render()
    {
        //if folders is not set
        if (!isset($this->folders)) {
            $this->folders = ArchiveFolder::orderBy('id','desc')->with('drawer')->with('drawer.shelf')->with('drawer.shelf.building')->get();
        }

        return view('livewire.archiver.pages.new-folder',['folders'=>$this->folders,'buildings'=>Building::all()])->layout('layouts.accountant');
    }

    public function store(){
        $this->validate([
            'folder_name' => 'required|string|max:255',
            'folder_code' => 'required|string|max:255',
            'drawer_id' => 'required',
            'shelf_id' => 'required',
            'building_id' => 'required',
            'slot_number' => 'required|numeric|min:1',
        ]);
        $folder = ArchiveFolder::create([
            'folder_name' => $this->folder_name,
            'folder_code' => $this->folder_code,
            'folder_tracking_no'=> "0000-123123",
            'drawer_id' => $this->drawer_id,
            'slot_number' => $this->slot_number,
        ]);
        $this->folder_added = true;
        $this->show_folder_form = false;
        $this->resetInput();
    }

    public function resetInput(){
        $this->folder_name = null;
        $this->folder_code = null;
        $this->drawer_id = null;
        $this->shelf_id = null;
        $this->building_id = null;
        $this->slot_number = null;
        $this->searchText ="a";
        $this->searchText ="";
        $this->folders = ArchiveFolder::orderBy('id','desc')->with('drawer')->with('drawer.shelf')->with('drawer.shelf.building')->get();
    }

    public function showFolderForm(){
        $this->show_folder_form = true;
    }

    public function hideFolderForm(){
        $this->resetInput();
        $this->show_folder_form = false;
    }

    protected $messages=[
        'folder_name.required'=>'Folder name is required',
        'folder_code.required'=>'Folder code is required',
        'drawer_id.required'=>'Drawer is required',
        'shelf_id.required'=>'Shelf is required',
        'building_id.required'=>'Building is required',
        'slot_number.required'=>'Slot number is required',
        'slot_number.numeric'=>'Slot number must be numeric',
        'slot_number.min'=>'Slot number must be greater than 0',
    ];
        
}
