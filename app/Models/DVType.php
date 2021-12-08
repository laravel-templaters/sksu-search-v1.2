<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVType extends Model
{
    protected $table = "dv_types";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function disbursement_vouchers(){
        return $this->belongsTo('App\Models\DisbursementVoucher');
    }

    public function dv_type_sorters(){
        return $this->belongsTo('App\Models\DVTypeSorter');
    }

    public function dv_categories(){
        return $this->belongsTo('App\Models\DVCategory');
    }
}
