<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedDoc extends Model
{
    protected $table = "related_docs";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function dv_sub_categories(){
        return $this->belongsTo('App\Models\DVSubCategory');
    }
}
