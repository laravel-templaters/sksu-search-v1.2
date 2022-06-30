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
    public $filter;
    
    
    protected $legacyDocs = [];
    public function updated($field)
    {
        if ($field == 'searchText' || $field == 'filter') {
           switch ($this->filter) {
            case 'payee':
                $this->legacyDocs = LegacyDocument::search('payee_name',$this->searchText)->paginate(10);
                break;
            case 'particular':
                $this->legacyDocs = LegacyDocument::search('particulars',$this->searchText)->paginate(10);
                break;
            case 'document-code':
                $this->legacyDocs = LegacyDocument::search('document_code',$this->searchText)->paginate(10);
                break;
            case 'date':
                $this->legacyDocs = LegacyDocument::search('date',$this->searchText)->paginate(10);
                break;
            
            default:
                $this->legacyDocs = LegacyDocument::paginate(10);
                break;
           }
        }
    }
    public function render()
    {     
        if(!isset($this->filter)){
            $this->filter="payee";
        }
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
