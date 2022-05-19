<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'bintang',
        'harga_disc',
        'harga_normal',
        'hotel1',
        'alamat_hotel1',
        'hotel2',
        'alamat_hotel2',
        'hotel3',
        'alamat_hotel3'
    ];

    public $timestamps = false;
}
