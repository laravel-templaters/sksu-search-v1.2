<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ViewDocumentList extends Component
{
    public function render()
    {
        return view('livewire.accountant.pages.archives.view-document-list',[
            'users' => DB::table('users')->paginate(5)
        ])->layout('layouts.accountant');;
    }
}
