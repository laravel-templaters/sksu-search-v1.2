<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVTypeSorter extends Model
{
    protected $table = "dv_type_sorters";
    //Change Primary Key
    protected $primaryKey = 'id';

    use HasFactory;

    public function disbursement_voucher(){
        return $this->belongsTo('App\Models\DisbursementVoucher');
    }
    public function travel_order(){
        return $this->belongsTo('App\Models\TravelOrder');
    }

    public function related_document_list(){
        return $this->belongsTo('App\Models\RelatedDocumentList');
    }

    public function related_document_list_entries(){
        return $this->belongsTo('App\Models\RelatedDocumentListEntry');
    }

    public function dv_type(){
        return $this->hasOne('App\Models\DVType','id','dv_type_id');
    }

    public function dv_categories(){
        return $this->hasOne('App\Models\DVCategory','id','dv_category_id');
    }

    public function dv_sub_categories(){
        return $this->hasOne('App\Models\DVSubCategory','id','dv_sub_category_id');
    }
}
