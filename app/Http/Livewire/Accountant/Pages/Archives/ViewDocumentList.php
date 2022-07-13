<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\ArchiveFolder;
use App\Models\FolderDocument;
use App\Models\LegacyDocument;

class ViewDocumentList extends Component
{
    public $searchText;

    public $folderDocs;
    protected $legacyDocs;
    public function updated($field)
    {
        if ($field == 'searchText') {
            $folders = ArchiveFolder::search('folder_name',$this->searchText)->searchOr('folder_code',$this->searchText)->searchOr('folder_tracking_no',$this->searchText)->get('id');
            if(count($folders) > 0){
                
                $this->folderDocs = FolderDocument::whereIn('archive_folder_id',$folders)->get();
                $this->legacyDocs = LegacyDocument::whereIn('folder_id',$folders)->paginate(10);
            }else{
                
                //$this->folderDocs = FolderDocument::search('archive_folder_id',$folders)->paginate(5);
                $this->folderDocs = [];
                $this->legacyDocs = LegacyDocument::search('name',$this->searchText)->searchOr('name',$this->searchText)->searchOr('document_code',$this->searchText)->paginate(10);
            }
        }
    }
    public function render()
    {           
       if(!isset($this->searchText)){
               $this->updated('searchText');
        }        
        return view('livewire.accountant.pages.archives.view-document-list',[
            'disbursement_vouchers' => $this->folderDocs,
            'legacy_documents' => $this->legacyDocs,
        ])->layout('layouts.accountant');
    }
}
