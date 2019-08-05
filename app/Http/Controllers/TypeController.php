<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    public function tipe()
    {
        return view('undangan/type');
    }
    // tambah data undangan
    public function tambah()
    {
        return view('crud_type/tambah');
    }

    public function create(Request $request)
    {
        $type = new Type;
        $type->nama_type = $request->type;
        $type->jumlah_slide = $request->jumlah;
        $type->harga = $request->harga;

        $type->save();
        return redirect('undangan/type');
    }

    public function hasil()
    {
        $data = Type::all();
        return view('undangan.type', ['data_type' => $data]);
    }
    // Edit data type
    public function edit($id)
    {
        $type = Type::find($id);
        return view('crud_type/edit', ['Typee' => $type]);
    }
    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->nama_type = $request->type;
        $type->jumlah_slide = $request->jumlah;
        $type->harga = $request->harga;
        $type->save();
        return redirect('undangan/type');
    }
    // Hapus data type
    public function delete($id)
    {
        $type = Type::find($id);
        $type->delete($type);
        return redirect('undangan/type');
    }
}
