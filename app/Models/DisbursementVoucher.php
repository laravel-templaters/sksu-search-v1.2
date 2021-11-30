<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisbursementVoucher extends Model
{
    protected $table = "disbursement_vouchers";
    //Change Primary Key
    protected $primaryKey = 'id';
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function dv_travel_order_pivot(){
        return $this->belongsTo('App\Models\DVTravelOrderPivot');
    }

    public function mop(){
        return $this->hasOne('App\Models\ModeOfPayment');
    }

    public function status(){
        return $this->hasOne('App\Models\Status');
    }

    public function note(){
        return $this->hasMany('App\Models\Note');
    }

    public function related_document(){
        return $this->hasMany('App\Models\RelatedDocument');
    }

    public function dv_type_sorter(){
        return $this->hasOne('App\Models\DVTypeSorter','id','dv_type_sorter_id');
    }
    public function dv_progress(){
        return $this->hasOne('App\Models\DvProgress');
    }
    public function last_action(){
        return $this->belongsTo('App\Models\LastAction');
    }
    public function milestone(){
        return $this->belongsTo('App\Models\Milestone');
    }
    
    
}
