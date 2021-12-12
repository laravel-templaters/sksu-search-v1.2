<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    // public function dv_progress(){
    //     return $this->hasOne('App\Models\DvProgress','id','d_v_progress_id');
    // }
    public function disbursement_voucher(){
        return $this->hasOne('App\Models\DisbursementVoucher','id','disbursement_voucher_id');
    }
    public function assigned(){
        return $this->hasOne('App\Models\User','id','assigned_user');
    }
    public function department(){
        return $this->hasOne('App\Models\Department','id','department_id');
    }
}
