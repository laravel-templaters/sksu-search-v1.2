<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    use HasFactory;

    protected $fillable = ['drawer_name','drawer_code','shelf_id','folder_slots'];

    public function shelf(){
        
        return $this->hasOne('App\Models\Shelf','id','shelf_id');

    }
     public function folder(){

        return $this->belongsTo('App\Models\ArchiveFolder');

     }
     public function legacyDocument(){
        return $this->hasMany('App\Models\LegacyDocument');
    }
}
