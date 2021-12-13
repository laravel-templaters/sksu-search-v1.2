<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "departments";
    //Change Primary Key
    protected $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function milestone(){
        return $this->belongsTo('App\Models\Milestone');
    }
     public function campus(){
        return $this->hasOne('App\Models\Campus','id','campus_id');
    }
    public function admin_user(){
        return $this->hasOne('App\Models\User','id','admin_user_id');
    }
    public function head_user(){
        return $this->hasOne('App\Models\User','id','head_user_id');
    }
}
