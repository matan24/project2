<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function utama()
    {
        return view('utama');
    }
    
}
