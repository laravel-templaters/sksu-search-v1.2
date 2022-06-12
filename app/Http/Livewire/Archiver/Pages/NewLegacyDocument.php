<?php

namespace App\Http\Livewire\Archiver\Pages;

use Livewire\Component;
use Livewire\WithFileUploads;

class NewLegacyDocument extends Component
{
    use WithFileUploads;
    
    public $folder;
    public $drawer;
    public $shelf;
    public $building;

    public $name;
    public $path;
    // public $year;
    public $document_code;
    public $archived_year_id;

    //mount
    // public function mount($folder, $drawer, $shelf, $building)
    // {
    //     $this->folder = $folder;
    //     $this->drawer = $drawer;
    //     $this->shelf = $shelf;
    //     $this->building = $building;
    // }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required',
            'path' => 'required',

        ]);
    }

    public function render()
    {      
        return view('livewire.archiver.pages.new-legacy-document');
    }
}
