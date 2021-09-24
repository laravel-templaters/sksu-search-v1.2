<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

      //Change table name
      protected $table = "philippine_regions";
      //Change Primary Key
      protected $primaryKey = 'id';
     
    use HasFactory;
}
