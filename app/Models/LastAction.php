<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastAction extends Model
{
    protected $fillable = [
        'disbursement_voucher_id',
    ];
    use HasFactory;
    public function dv_progress(){
        return $this->hasOne('App\Models\DvProgress');
    }
    public function action_type(){
        return $this->hasOne('App\Models\ActionType','id','action_type_id');
    }
    public function disbursement_voucher(){
        return $this->hasOne('App\Models\DisbursementVoucher','id','disbursement_voucher_id');
    }
    public function sender(){
    return $this->hasOne('App\Models\User','id','sender_id');
    }
    public function reciever(){
    return $this->hasOne('App\Models\User','id','reciever_id');
    }
}
