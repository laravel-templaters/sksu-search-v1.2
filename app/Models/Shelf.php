<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    use HasFactory;

    protected $fillable = ['shelf_name','shelf_code'];

    public function building()
    {
        return $this->hasOne('App\Models\Building','id','building_id');
    }
    public function drawer(){
        return $this->belongsTo('App\Models\Drawer');
    }
}
