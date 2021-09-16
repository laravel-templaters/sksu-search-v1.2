<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itenerary extends Model
{
    protected $table = "iteneraries";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function itenerary_entry(){
        return $this->belongsTo('App\Models\IteneraryEntry');
    }

    public function travel_order(){
        return $this->hasMany('App\Models\TravelOrder');
    }
}
