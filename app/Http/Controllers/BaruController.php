<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaruController extends Controller
{
    public function buatPesanan()
    {
        return view('pesanan.baru.buat');
    }
    public function save()
    {
        
    }
}
