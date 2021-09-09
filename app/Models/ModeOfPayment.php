<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeOfPayment extends Model
{
    protected $table = "mode_of_payments";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function disbursement_vouchers(){
        return $this->belongsTo('App\Models\DisbursementVoucher');
    }
}
