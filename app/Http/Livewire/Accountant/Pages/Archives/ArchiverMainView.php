<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use App\Models\ArchiveFolder;
use App\Models\DisbursementVoucher;
use Livewire\Component;

class ArchiverMainView extends Component
{
    public $searchText;
    public function render()
    {
        return view('livewire.accountant.pages.archives.archiver-main-view',[
            'disbursement_vouchers' => DisbursementVoucher::search('dv_tracking_number',$this->searchText)->paginate(5)
        ])->layout('layouts.accountant');
    }
}