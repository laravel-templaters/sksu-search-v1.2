<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
     //Change table name
     protected $table = "philippine_provinces";
     //Change Primary Key
     protected $primaryKey = 'id';
    
    use HasFactory;
}
