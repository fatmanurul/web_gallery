<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'photos';
    protected $primaryKey = 'FotoID';

    protected $guarded = ['FotoID'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID'); // 'UserID' adalah nama kolom yang menghubungkan tabel Photo dengan tabel User
    }
}
