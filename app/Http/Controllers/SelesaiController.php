<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelesaiController extends Controller
{
    public function pesananselesai()
    {
        return view('pesanan.selesai.selesai');
    }
}
