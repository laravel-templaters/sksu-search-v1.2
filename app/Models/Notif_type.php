<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif_type extends Model
{
    use HasFactory;

    public function notif()
    {
        return $this->belongsTo(Notif::class, 'foreign_key');
    }
}
