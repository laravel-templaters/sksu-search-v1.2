<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundCluster extends Model
{
    use HasFactory;

    protected $fillable = ['fund_cluster_type'];

    public function legacy_document(){
        return $this->belongsTo(LegacyDocument::class);
    }
}
