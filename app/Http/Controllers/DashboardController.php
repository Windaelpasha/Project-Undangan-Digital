<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\Type ;
class DashboardController extends Controller
{
    public function dashboard()
    {
    $belum = Client::where('status','=','0')->count();
    $sudah = Client::where('status','=','1')->count();
    $total = Client::count();
    return view('/dashboard',compact('belum','sudah','total'));
    }
}
