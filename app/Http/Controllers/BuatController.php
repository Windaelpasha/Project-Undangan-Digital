<?php

namespace App\Http\Controllers;

use App\Order;
use App\Client;
use App\Type ;
use Illuminate\Http\Request;
use DB;
class BuatController extends Controller
{
    public function buat($id)
    {
        $type = Type::all();
        $client = Client::find($id);
        $order = Order::find($id);
        return view('undangan/buat', compact('order','client','type'));
    }
    public function create(Request $request ,$id)
    {
        $or = new Order;
        $or->client_id = $request->id;
        // desain
       
        if ($request->hasfile('gambar1')) {
        $file1 = $request->file('gambar1');
        $namaFile1 = $file1->getClientOriginalName();
        $file1->move("img/",$namaFile1);
        $or->gambar1 = $namaFile1;

        }
        if ($request->hasfile('gambar2')) {
        $file2= $request->file('gambar2');
        $namaFile2 = $file2->getClientOriginalName();
        $file2->move("img/",$namaFile2);
        $or->gambar2 = $namaFile2;        
        }
        if ($request->hasfile('gambar3')) {
        $file3 = $request->file('gambar3');
        $namaFile3 = $file3->getClientOriginalName();
        $file3->move("img/",$namaFile3);
        $or->gambar3 = $namaFile3;    
        }
        if ($request->hasfile('gambar4')) {
        $file4 = $request->file('gambar4');
        $namaFile4 = $file4->getClientOriginalName();
        $file4->move("img/",$namaFile4);
        $or->gambar4 = $namaFile4;    
        }
        if ($request->hasfile('gambar5')) {
        $file5 = $request->file('gambar5');
        $namaFile5 = $file5->getClientOriginalName();
        $file5->move("img/",$namaFile5);
        $or->gambar5 = $namaFile5;    
        }
        if ($request->hasfile('gambar6')) {
        $file6 = $request->file('gambar6');
        $namaFile6 = $file6->getClientOriginalName();
        $file6->move("img/",$namaFile6);
        $or->gambar6 = $namaFile6;
            
        }
    if ($request->hasfile('background')) {
        $file7 = $request->file('background');
        $namaFile7 = $file7->getClientOriginalName();
        $file7->move("img/",$namaFile7);
        $or->background = $namaFile7;
            
        }

        //slide

        $or->save();

        $client = Client::find($id);
        $client->status = 1;
        $client->save();

                
        return redirect('undangan/data');
    }

}
