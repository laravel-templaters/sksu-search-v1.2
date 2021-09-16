<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVTypeSorter extends Model
{
    protected $table = "dv_type_sorters";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function travel_order(){
        return $this->belongsTo('App\Models\TravelOrder');
    }

    public function related_document_list(){
        return $this->belongsTo('App\Models\RelatedDocumentList');
    }

    public function related_document_list_entries(){
        return $this->belongsTo('App\Models\RelatedDocumentListEntry');
    }

    public function dv_type(){
        return $this->hasMany('App\Models\DVType');
    }

    public function dv_categories(){
        return $this->hasMany('App\Models\DVCategory');
    }

    public function dv_sub_categories(){
        return $this->hasMany('App\Models\DVSubCategory');
    }
}
