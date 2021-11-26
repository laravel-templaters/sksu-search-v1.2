<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{
    use HasFactory;
    public function last_action(){
        return $this->belongsTo('App\Models\LastAction');
    }
}
