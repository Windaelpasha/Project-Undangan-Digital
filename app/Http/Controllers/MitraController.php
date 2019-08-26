<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MitraController extends Controller
{
	public function mitra()
	{
		$user = User::all();
		return view('undangan.mitra',compact('user'));
	}
}
