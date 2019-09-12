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
        return view('auth/register');


    }
     public function login()
    {
        return view('auth/login');
    }
    public function welcome()
    {
    	return view('/welcome');
    }
    public function admin()
    {
        $masuk = User::all();

        return view('auth/login', compact('login'));
    }
}
