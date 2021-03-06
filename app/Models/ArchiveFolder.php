<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveFolder extends Model
{
    use HasFactory;

    protected $fillable = ['folder_name','folder_code','folder_tracking_no','drawer_id','slot_number'];

    public function drawer(){
        return $this->hasOne('App\Models\Drawer','id','drawer_id');
    }
    public function parent_folder(){
        return $this->belongsTo('App\Models\AssociatedFolder');
    }
    public function associated_folder(){
        return $this->belongsTo('App\Models\AssociatedFolder');
    }
    public function legacyDocument(){
        return $this->hasMany('App\Models\LegacyDocument');
    }
}
