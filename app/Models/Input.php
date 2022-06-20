<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $table = 'wakturental';
    protected $fillable = ['nama', 'waktu'];
}
