<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegacyDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'archived_year_id',
    ];

    public function archivedYear()
    {
        return $this->belongsTo(ArchivedYear::class);
    }
}
