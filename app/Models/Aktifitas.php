<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktifitas extends Model
{
    use HasFactory;

    protected $table = 'aktifitas';

    protected $fillable = ['nama', 'deskripsi', 'kategori'];

    public function users()
    {
        return $this->hasMany(User::class, 'aktifitas_id');
    }
}
