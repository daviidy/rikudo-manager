<?php

namespace App\Http\Controllers;

use App\ClientRt;
use Illuminate\Http\Request;

class ClientRtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientRts=ClientRt::orderby('nom','asc')->paginate(5);
        return view('ClientRts.index',['ClientRts'=>$clientRts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ClientRt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientRt=ClientRt::create($request->all());
        return redirect('clientRts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientRt  $clientRt
     * @return \Illuminate\Http\Response
     */
    public function show(ClientRt $clientRt)
    {
        return view('ClientRt.show',['ClientRt'=>$clientRt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientRt  $clientRt
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientRt $clientRt)
    {
        return view('ClientRt.edit',['ClientRt'=>$clientRt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientRt  $clientRt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientRt $clientRt)
    {
        $clientRt->update($request->all());
        return redirect('clientRts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientRt  $clientRt
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientRt $clientRt)
    {
        $clientRt->delete();
        return redirect('clientRts');
    }
}
