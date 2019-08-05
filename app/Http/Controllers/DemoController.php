<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\User;


class DemoController extends Controller
{
    public function demo()
    {
        return view('/demo');
    }
    public function masuk(Request $request){
    	$masuk = new User;
    	$masuk ->name = $request->name;
    	$masuk ->mitra = $request->mitra;
    	$masuk ->email = $request->email;
		$masuk ->password = $request->password;
		$masuk->save();
		 return redirect('auth/login');


    }
     public function login()
    {
        return view('auth/login');
    }
    public function welcome()
    {
    	return view('/welcome');
    }
}
