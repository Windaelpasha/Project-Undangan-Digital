<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\Type ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $belum = Client::where('status','=','0')->count();
    $sudah = Client::where('status','=','1')->count();
    $total = Client::all()->count();
      return view('dashboard',compact('belum','sudah','total'));
    }
}
