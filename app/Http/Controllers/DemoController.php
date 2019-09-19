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
