<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable =[
        'wisata',
        'nama',
        'tanggal',
        'harga',
        'jumlah_tiket',
        'total'
    ];
}
