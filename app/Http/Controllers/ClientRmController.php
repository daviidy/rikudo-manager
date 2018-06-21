<?php

namespace App\Http\Controllers;

use App\ClientRm;
use Illuminate\Http\Request;

class ClientRmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientRms=ClientRm::orderby('nom','asc')->paginate(5);
        return view('clientRms.index',['clientRms'=>$clientRms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientRms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientRms=ClientRm::create($request->all());
        return redirect('clientRms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function show(ClientRm $clientRm)
    {
        return view('clientRms.show',['clientRm'=>$clientRm]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientRm $clientRm)
    {
        return view('clientRms.edit',['clientRm'=>$clientRm]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientRm $clientRm)
    {
        $clientRm->update($request->all());
        return redirect('clientRms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientRm $clientRm)
    {
        $clientRm->delete();
        return redirect('clientRms');
    }
}
