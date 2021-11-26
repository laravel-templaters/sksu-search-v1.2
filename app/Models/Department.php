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
}
