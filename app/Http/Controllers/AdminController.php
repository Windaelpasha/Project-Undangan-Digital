<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    public function index()
    {
    	return view('layouts.admin');
    }
    public function dashboard()
    {
    	return view('/dashboard');
    }
}
