<?php

namespace App\Http\Controllers;

use App\Order;
use App\Client;
use Illuminate\Http\Request;
use DB;
class BuatController extends Controller
{
    public function buat($id)
    {
        $client = Client::find($id);
        $order = Order::find($id);
        return view('undangan/buat', compact('order','client'));
    }
    public function create(Request $request ,$id)
    {
        $or = new Order;
        // $or->nama = $request->nama;
        $or->client_id = $request->id;
        $or->gambar1 = $request->gambar1;
        $or->gambar2 = $request->gambar2;
        $or->gambar3 = $request->gambar3;
        $or->gambar4 = $request->gambar4;
        $or->gambar5 = $request->gambar5;
        $or->gambar6 = $request->gambar6;
        $or->save();

        $client = Client::find($id);
        $client->status = 1;
        $client->save();
        
        return redirect('undangan/pemesan');
    }
}
