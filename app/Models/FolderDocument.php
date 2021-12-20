<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderDocument extends Model
{
    use HasFactory;

    protected $fillable = ['document_no'];

    public function folder(){
        return $this->hasOne('App\Models\ArchiveFolder','id','archive_folder_id');
    }
    public function archiver(){
        return $this->hasOne('App\Models\User','id','archiver_id');
    }
    public function disbursement_voucher(){
        return $this->hasOne('App\Models\DisbursementVoucher','id','disbursement_voucher_id');
    }
    public function scanned_document(){
        return $this->belongsTo('App\Models\ScannedDocument');
    }

}
