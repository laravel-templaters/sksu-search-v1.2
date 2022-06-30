<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use App\Models\FolderDocument;
use App\Models\LegacyDocument;
use Livewire\Component;

class ViewDocumentDetails extends Component
{
    public $disbursement_id;
    public $legacy_id;
    public $islegacy;
    public function render()
    {
        
        if($this->islegacy == 1){
            $document = LegacyDocument::where('id',$this->legacy_id)->with('folder')->with('drawer')->with('shelf')->with('building')->with('fund_cluster')->first();
            
        }else{
            $document = FolderDocument::find($this->disbursement_id)->with('folder')->with('drawer')->with('shelf')->with('building')->first();
        }
            return view('livewire.accountant.pages.archives.view-document-details')->layout('layouts.accountant')->with('document',$document);
    }
    public function mount($id, $islegacy)
    {
    
        if($islegacy==1){
            $this->legacy_id = $id;
            $this->disbursement_id = null;
        }else{
            $this->disbursement_id = $id;
            $this->legacy_id = null;
        }
        $this->islegacy = $islegacy;
    }
    public function downloadLegacyDocument()
    {
        $document = LegacyDocument::find($this->legacy_id);
        $path = $document->path;
        return response()->download('storage/'.$path, str_replace(' ','_', $document->name), [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
