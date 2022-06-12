<?php

namespace App\Http\Livewire\Archiver\Pages;

use Livewire\Component;

class SelectDisbursementVoucher extends Component
{
    public $folder;
    public $drawer;
    public $shelf;
    public $building;

    //mount
    // public function mount($selectedFolder, $selectedDrawer, $selectedShelf, $selectedBuilding)
    // {
    //     $this->folder = $selectedFolder;
    //     $this->drawer = $selectedDrawer;
    //     $this->shelf = $selectedShelf;
    //     $this->building = $selectedBuilding;
    // }
    public function render()
    {
        return view('livewire.archiver.pages.select-disbursement-voucher');
    }
}
