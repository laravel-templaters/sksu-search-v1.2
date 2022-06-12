<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use App\Models\ArchiveFolder;
use App\Models\Building;
use App\Models\Drawer;
use App\Models\Shelf;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ArchiverNew extends Component
{
    public $selectedBuilding;
    public $buildingSelected = false;
    public $buildings;
    public $selectedShelf;
    public $shelfSelected = false;
    public $shelves;
    public $selectedDrawer;
    public $drawerSelected = false;
    public $drawers;
    public $selectedFolder;
    public $folderSelected = false;
    public $folders;

    public function render()
    {   //if building is empty
        if (empty($this->buildings)) {
            $this->buildings = Building::all();
        }
            return view('livewire.accountant.pages.archives.archiver-new')->layout('layouts.accountant');
    }
    public function selectBuilding($buildingID){
        $this->buildingSelected = true;
        $this->selectedBuilding = Building::find($buildingID);
        $this->shelves = Shelf::where('building_id', $this->selectedBuilding->id)->with('building')->get();
    }
    public function selectShelf($shelfID){
        $this->shelfSelected = true;
        $this->selectedShelf = Shelf::find($shelfID);
        $this->drawers = Drawer::where('shelf_id', $this->selectedShelf->id)->with('shelf')->get();
    }
    public function selectDrawer($drawerID){
        $this->drawerSelected = true;
        $this->selectedDrawer = Drawer::find($drawerID);
        $this->folders = ArchiveFolder::where('drawer_id', $this->selectedDrawer->id)->with('drawer')->get();
    }
    public function selectFolder($folderID){
        $this->folderSelected = true;
        $this->selectedFolder = ArchiveFolder::find($folderID);
    }
    public function deselectFolder(){
        $this->folderSelected = false;
        $this->selectedFolder = null;
    }
    public function deselectDrawer(){
        $this->drawerSelected = false;
        $this->selectedDrawer = null;
        $this->folders = null;
    }
    public function deselectShelf(){
        $this->shelfSelected = false;
        $this->selectedShelf = null;
        $this->drawers = null;
    }
    public function deselectBuilding(){
        $this->buildingSelected = false;
        $this->selectedBuilding = null;
        $this->shelves = null;
        $this->drawers = null;
        $this->folders = null;
    }


}
