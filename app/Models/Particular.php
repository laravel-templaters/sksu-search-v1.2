<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    protected $table = "particulars";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    protected $fillable = [
        'disbursement_voucher-id', 'entry', 'responsibility_center','mfo_pap','amount'
    ];

    public function disbursement_voucher(){
        return $this->hasOne('App\Models\DisbursementVoucher','id','disbursement_voucher_id');
    }
}
