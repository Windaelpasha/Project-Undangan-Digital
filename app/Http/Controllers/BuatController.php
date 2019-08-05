<?php

namespace App\Http\Controllers;

use App\Order;
use App\Client;
use Illuminate\Http\Request;

class BuatController extends Controller
{
    public function buat($id)
    {
        $client = Client::all();
        $nama_pemesan = Order::find($id);
        return view('undangan/buat', compact('nama_pemesan','client'));
    }
    public function create(Request $request)
    {
        $or = new Order;
        // $or->nama = $request->nama;
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
