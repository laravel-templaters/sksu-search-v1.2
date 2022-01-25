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

    public function side_note(){
        return $this->belongsTo('App\Models\SideNote');
    }

    public function dte(){
        return $this->hasMany('App\Models\Dte');
    }

    public function dv_type_sorter(){
        return $this->hasMany('App\Models\DVTypeSorter');
    }
    public function region(){
        return $this->hasOne('App\Models\Region','id','philippine_regions_id');
    }
    public function province(){
        return $this->hasOne('App\Models\Province','id','philippine_provinces_id');
    }
    public function city(){
        return $this->hasOne('App\Models\City','id','philippine_cities_id');
    }

    public function travel_order_applicant(){  
        return $this->belongsTo('App\Models\TravelOrderApplicant');
    }
    public function travel_order_signatory(){  
        return $this->belongsTo('App\Models\TravelOrderSignatory');
    }

}
