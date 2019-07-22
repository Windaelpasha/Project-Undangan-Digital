<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use function PHPSTORM_META\type;

class PemesanController extends Controller
{
    // public function show()
    // {
    //     $join = DB::table('client')
    //         ->join('type', 'client.type_id  ', ' type.id')
    //         ->select('client.*', 'type.nama_type')
    //         ->get();
    //     return view('undangan.pemesan', ['data' => $join]);
    // }

    public function pemesan()
    {
        return view('undangan/pemesan');
    }
    public function create(Request $request)
    {
        $pemesan = new Client;
        $pemesan->nama = $request->Nama;
        $pemesan->no_hp = $request->No;
        $pemesan->save();
        return redirect('undangan/pemesan');
    }
    public function ok()
    {
        $data = Client::all();
        return view('undangan.pemesan', ['data_pemesan' => $data]);
    }
}
