<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScannedDocument extends Model
{
    use HasFactory;

    protected $fillable =['document_name'];

    public function folder_document(){
        return $this->hasOne('App\Models\FolderDocument');
    }
}
