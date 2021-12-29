<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\ArchiveFolder;

class ViewDocumentList extends Component
{
    public $searchText;
    public function render()
    {
        return view('livewire.accountant.pages.archives.view-document-list',[
            'disbursement_vouchers' => ArchiveFolder::search('folder_tracking_no',$this->searchText)->paginate(5)
        ])->layout('layouts.accountant');
    }
}
