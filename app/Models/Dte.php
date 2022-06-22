<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dte extends Model
{
    protected $table = "dtes";
    //Change Primary Key
    protected $primaryKey = 'id';

    protected $fillable = ['amount','region'];

    use HasFactory;

    public function travel_order(){
        return $this->belongsTo('App\Models\TravelOrder');
    }
}
