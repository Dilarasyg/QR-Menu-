<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;
    protected $table = 'personeller';
    protected $fillable = [
        'menu_adi',
        'fyat',
        'açiklama',
        'fotoğraf',
        'kategori'
    ];
}
