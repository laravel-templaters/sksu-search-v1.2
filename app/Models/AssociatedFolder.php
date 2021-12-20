<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociatedFolder extends Model
{
    use HasFactory;

    public function parent_folder(){
        return $this->hasOne('App\Models\ArchiveFolder','id','parent_folder_id');
    }
    public function associated_folder(){
        return $this->hasOne('App\Models\ArchiveFolder','id','associated_folder_id');
    }
}
