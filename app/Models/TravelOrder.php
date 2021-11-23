<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\TravelOrderSaved;

class TravelOrder extends Model
{
    use Notifiable;
    protected $table = "travel_orders";
    //Change Primary Key
    protected $primaryKey = 'id';
    protected $fillable = ['purpose'];
    use HasFactory;

    public function itenerary(){
        return $this->belongsTo('App\Models\Itenerary');
    }

    public function dv_travel_order_pivot(){
        return $this->belongsTo('App\Models\DVTravelOrderPivot');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function dte(){
        return $this->hasMany('App\Models\Dte');
    }

    public function dv_type_sorter(){
        return $this->hasMany('App\Models\DVTypeSorter');
    }

}
