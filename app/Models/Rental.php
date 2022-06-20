<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    
    protected $table = 'rental';
    protected $fillable = ['nama', 'alamat', 'tujuan', 'tanggal', 'id_input', 'mobil','plat','harga', 'no', 'denda', 'sewa', 'selesai', 'email', 'image'];

    public function input()
    {
        return $this->belongsTo(Input::class,"id_input");
    }
}
