<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class BuatController extends Controller
{
    public function buat()
    {
        return view('undangan/buat');
    }
    public function create(Request $request)
    {
        $or = new Order;
        $or->gambar1 = $request->gambar1;
        $or->gambar2 = $request->gambar2;
        $or->gambar3 = $request->gambar3;
        $or->gambar4 = $request->gambar4;
        $or->gambar5 = $request->gambar5;
        $or->gambar6 = $request->gambar6;
        $or->save();
        return redirect('undangan/buat');
    }
}
