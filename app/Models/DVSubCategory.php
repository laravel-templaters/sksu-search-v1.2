<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVSubCategory extends Model
{
    protected $table = "dv_sub_categories";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function dv_type_sorters(){
        return $this->belongsTo('App\Models\DVTypeSorter');
    }

    public function dv_categories(){
        return $this->belongsTo('App\Models\DVCategory');
    }

    public function related_docs(){
        return $this->hasMany('App\Models\RelatedDoc');
    }

}
