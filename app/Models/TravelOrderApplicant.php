<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelOrderApplicant extends Model
{
    use HasFactory;

    public function travel_order(){
        return $this->hasOne('App\Models\TravelOrder','id','travel_order_id');
    }
    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
