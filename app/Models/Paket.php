<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'informasi';
    protected $fillable = ['judul', 'harga', 'waktu', 'keterangan'];
}
