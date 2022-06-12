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
        'document_code',
        'building_id',
        'shelf_id',
        'drawer_id',
        'folder_id',
        'archived_year_id',
    ];

    public function archivedYear()
    {
        return $this->belongsTo(ArchivedYear::class);
    }
    public function building()
    {
        return $this->hasOne(Building::class, 'id', 'building_id');
    }
    public function shelf()
    {
        return $this->hasOne(Shelf::class, 'id', 'shelf_id');
    }
    public function drawer()
    {
        return $this->hasOne(Drawer::class, 'id', 'drawer_id');
    }
    public function folder()
    {
        return $this->hasOne(ArchiveFolder::class, 'id', 'folder_id');
    }

}
