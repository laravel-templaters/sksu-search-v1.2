<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVCategory extends Model
{
    protected $table = "dv_categories";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function dv_types(){
        return $this->hasOne('App\Models\DVType','id','dv_type_id');
    }

    public function dv_type_sorters(){
        return $this->belongsTo('App\Models\DVTypeSorter');
    }

    public function dv_sub_categories(){
        return $this->belongsTo('App\Models\DVSubCategory');
    }
}
