<?php

namespace App\Http\Controllers;

use App\Clientmitra;
use App\Type;
use Illuminate\Http\Request;

class ClientmitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Type::all(); 
        $data = Clientmitra::where('status','0')->get();
        return view('undangan/pemesan',compact('type','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $pemesan = new Clientmitra;
        $pemesan->type_id  = $request->type_id;
        $pemesan->nama = $request->Nama;
        $pemesan->status = 0;
        $pemesan->no_hp = $request->No;
        $pemesan->save();
        return redirect('undangan/pemesan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $client = Clientmitra::find($id);
        $client->delete($client);
        return redirect('undangan/pemesan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientmitra  $clientmitra
     * @return \Illuminate\Http\Response
     */
    public function show(Clientmitra $clientmitra)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientmitra  $clientmitra
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientmitra $clientmitra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientmitra  $clientmitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientmitra $clientmitra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientmitra  $clientmitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientmitra $clientmitra)
    {
        //
    }
}
