<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastAction extends Model
{
    use HasFactory;
    public function dv_progress(){
        return $this->hasOne('App\Models\DvProgress');
    }
    public function action_type(){
        return $this->belongsTo('App\Models\ActionType');
    }
    public function disbursement_voucher(){
        return $this->belongsTo('App\Models\DisbursementVoucher');
    }
    public function user(){
    return $this->belongsTo('App\Models\User');
    }
}
