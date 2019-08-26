<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\Type ;
use Illuminate\Support\Facades\DB;
use App\Ip;
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
    	$thisIp = $_SERVER['REMOTE_ADDR'];
    	$ip = Ip::where([['ip',$thisIp],['client_id','=',$client_id]])->count();
    	if ($ip > 0) {
    		$retIp='Show';
    		return view('pesanan.hasil.hasil',compact('data','type','retIp'));
    	}else {
    		$addr = new Ip ;
    		$addr->ip =  $thisIp;
    		$addr->client_id = $client_id;
    		$addr->save();
    		$retIp = 'Baru';
        	return view('pesanan.hasil.hasil', compact('data','type','retIp'));
    	}

    }



}
