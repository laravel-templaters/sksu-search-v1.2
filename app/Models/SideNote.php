<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideNote extends Model
{
    use HasFactory;

    public function travel_order(){
        return $this->hasOne('App\Models\TravelOrder');
    }
    public function user(){
        return $this->hasOne('App\Models\User');
    }
}
