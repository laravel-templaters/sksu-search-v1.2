<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $fillable = ['building_name', 'building_code', 'shelf_slots'];

    public function shelf(){
        return $this->belongsTo('App\Models\Shelf');
    }
    public function legacyDocument(){
        return $this->hasMany('App\Models\LegacyDocument');
    }

}
