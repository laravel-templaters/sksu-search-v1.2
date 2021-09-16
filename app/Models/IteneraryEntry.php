<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IteneraryEntry extends Model
{
    protected $table = "itenerary_entries";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function itenerary(){
        return $this->hasMany('App\Models\Itenerary');
    }
}
