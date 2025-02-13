<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriM extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = [
        'name',
        'deskripsi',
    ];
}
