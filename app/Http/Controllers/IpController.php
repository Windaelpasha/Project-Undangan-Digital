<?php

namespace App\Http\Controllers;

use App\ip;
use Illuminate\Http\Request;

class IpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ip  $ip
     * @return \Illuminate\Http\Response
     */
    public function show(ip $ip)
    {
        
    $this->validate($request, 
    [
         'ip' => 'ip',
    ],
    );
        $request->request->add(['ip_addr' => $request->ip()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ip  $ip
     * @return \Illuminate\Http\Response
     */
    public function edit(ip $ip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ip  $ip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ip $ip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ip  $ip
     * @return \Illuminate\Http\Response
     */
    public function destroy(ip $ip)
    {
        //
    }
}
