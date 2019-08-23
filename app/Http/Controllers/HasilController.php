<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\Type ;
use Illuminate\Support\Facades\DB;
class HasilController extends Controller
{
    public function hasil($client_id)
    {	
    	$type = Type::all();
    	$data = DB::table('client')
    		    ->join('order','client.id','=','order.client_id')
    		    ->where('client.id',$client_id)->first();		
    	//$order = Order::where('client_id',$client_id)->first();
    	// dd($order);
        return view('pesanan.hasil.hasil', compact('data','type'));
    }


}
