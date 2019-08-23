<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\Type;
use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
    public function data ()
    {

    	$data = DB::table('client')
    			->join('order','client.id','=','order.client_id')
    			->where('client.status','1')
    			->select('order.*','client.*')->get();
    	return view('undangan/data', compact('data'));
    }
    public function delete($id)
    {
    	$client = Client::find($id);
    	$client->delete();
    	return redirect('undangan/data');
    }
}
