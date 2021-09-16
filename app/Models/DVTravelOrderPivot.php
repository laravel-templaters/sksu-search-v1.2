<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVTravelOrderPivot extends Model
{
    protected $table = "dv_travel_order_pivots";
    //Change Primary Key
    protected $primaryKey = 'id';


    use HasFactory;

    public function disbursement_vouchers(){
        return $this->hasMany('App\Models\DisbursementVoucher');
    }

    public function travel_order(){
        return $this->hasMany('App\Models\TravelOrder');
    }
}
