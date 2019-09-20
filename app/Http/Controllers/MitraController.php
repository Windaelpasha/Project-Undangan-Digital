<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Mitra;

class MitraController extends Controller
{
	public function mitra()
	{
		$user = User::all();
		return view('undangan.mitra',compact('user'));
	}
	public function create(Request $request)
	{

		$mtr = new Mitra;
		$mtr->name =$request->nama;
		$mtr->email =$request->email;
		$mtr->password =bcrypt($request->password);
		$mtr->status =$request->status;
		$mtr->save();

		return redirect('undangan/mitra');
	}
	public function regis()
	{
		return view('auth/akun');
	}

	public function show()
	{
		$data = Mitra::all();
		return view('undangan/mitra',compact('data'));
	}
	  public function delete($id)
    {
        $mitra = Mitra::find($id);
        $mitra->delete($mitra);
        return redirect('undangan/mitra');

    }
}
