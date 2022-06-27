<?php

namespace App\Http\Livewire\Auditor\Pages;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\ArchiveFolder;
use App\Models\FolderDocument;
use App\Models\LegacyDocument;

class Dashboard extends Component
{
    public $searchText;

    
    protected $legacyDocs = [];
    public function updated($field)
    {
        if ($field == 'searchText') {
            $folders = ArchiveFolder::search('folder_name',$this->searchText)->searchOr('folder_code',$this->searchText)->searchOr('folder_tracking_no',$this->searchText)->get('id');
            if(count($folders) > 0){
                $this->legacyDocs = LegacyDocument::whereIn('folder_id',$folders)->paginate(10);                
            }else{
              
                $this->legacyDocs = LegacyDocument::search('name',$this->searchText)->searchOr('document_code',$this->searchText)->searchOr('name',$this->searchText)->paginate(10);
            }
        }
    }
    public function render()
    {      
        if(!isset($this->searchText)){
                $this->updated('searchText');
        }
        return view('livewire.auditor.pages.dashboard',[
            'title' => 'Dashboard',
            'subtitle' => 'Auditor Dashboard',
            'documents' => $this->legacyDocs,
            'legacy_documents' => $this->legacyDocs,
        ]);
    }
}
