<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedDocumentList extends Model
{
    protected $table = "related_document_lists";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function dv_type_sorters(){
        return $this->belongsTo('App\Models\DVTypeSorter');
    }
}
