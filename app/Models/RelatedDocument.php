<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedDocument extends Model
{
    protected $table = "related_documents";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function disbursement_vouchers(){
        return $this->belongsTo('App\Models\DisbursementVoucher');
    }
}
