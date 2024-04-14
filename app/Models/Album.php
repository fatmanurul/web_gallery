<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'newalbums';
    protected $primaryKey = 'AlbumID';

    const CREATED_AT = 'abm_created_at';
    const UPDATED_AT = 'abm_updated_at';
    const DELETED_AT = 'abm_deleted_at';

    protected $guarded = ['AlbumID'];
}
