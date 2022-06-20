<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boking extends Model
{
    protected $table = 'boking';
    protected $fillable = ['nama', 'no', 'mobil', 'plat', 'tanggal', 'waktu', 'harga', 'denda', 'pembayaran'];

}
