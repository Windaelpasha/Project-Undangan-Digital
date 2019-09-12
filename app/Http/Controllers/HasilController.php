<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\Type ;
use Illuminate\Support\Facades\DB;
use App\Ip;
use PDF;
class HasilController extends Controller
{
    public function hasil(Request $request ,$client_id)
    {

    	$type = Type::all();
    	$data = DB::table('client')
    		    ->join('order','client.id','=','order.client_id')
    		    ->where('client.id',$client_id)->first();

    	//$order = Order::where('client_id',$client_id)->first();
    	// dd($order);

    	$thisIp = $request->getClientip();
    	$ip = Ip::where([['ip',$thisIp],['client_id','=',$client_id]])->count();
    	if ($ip > 0) {
    		$retIp='Close';
    		return view('pesanan.hasil.hasil',compact('data','type','retIp'));
    	}else {
    		$addr = new Ip ;
    		$addr->ip =  $thisIp;
    		$addr->client_id = $client_id;
    		$addr->save();
    		$retIp = 'Baru';
        	return view('pesanan.hasil.hasil', compact('data','type','retIp','client_id','thisIp'));
    	}

    }

    public function konfirmasi($client_id,$ip)
    {
       
        $ip = Ip::where([['ip','=',$ip],['client_id','=',$client_id],['status','=','terima']])->count();
        if ($ip > 0  ) {

            return view('undangan.confirm', compact('ip'));

        }else{

          echo "Gak Adaa";
        }

    }
    public function pdf($client_id ,$ip)
    {
       $qr = Ip::where([['ip',$ip],['client_id',$client_id]])->first();
       $qr->status = 'terima';
       $qr->save();
        
        $pdf = PDF::loadView('undangan.konfirmasi',compact('client_id','ip'))
                ->setPaper('a6','potrait');  
        return  $pdf->download('konfirmasi.pdf');
        // return view('undangan.konfirmasi');
    }



}
