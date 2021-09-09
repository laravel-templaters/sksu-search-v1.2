<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
 //Change table name
 protected $table = "roles";
 //Change Primary Key
 protected $primaryKey = 'id';

    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User');
    }
}
