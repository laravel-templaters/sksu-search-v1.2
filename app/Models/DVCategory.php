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
        return $this->belongsTo('App\Models\DVType');
    }

    public function dv_sub_categories(){
        return $this->hasMany('App\Models\DVSubCategory');
    }
}
