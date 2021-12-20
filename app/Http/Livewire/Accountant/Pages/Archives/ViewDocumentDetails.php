<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use Livewire\Component;

class ViewDocumentDetails extends Component
{
    public $disbursement_id;
    public function render()
    {
        return view('livewire.accountant.pages.archives.view-document-details')->layout('layouts.accountant');;
    }
    public function mount($id)
    {

        $this->disbursement_id =$id;

    }
}
