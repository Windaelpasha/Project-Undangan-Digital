<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function hasil()
    {
        return view('pesanan.hasil.hasil');
    }
}
