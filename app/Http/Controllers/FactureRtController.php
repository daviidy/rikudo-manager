<?php

namespace App\Http\Controllers;

use App\FactureRt;
use App\ClientRt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FactureRtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (!Auth::check()) {
        return redirect('login');
      }
      $clientRts = ClientRt::orderBy ('nom','asc')->paginate(30);
      return view('factureRts.index', ['clientRts' => $clientRts]);
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
      $facture = FactureRt::create($request->all());

      return back()->with('status', 'La facture a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactureRt  $factureRt
     * @return \Illuminate\Http\Response
     */
    public function show(FactureRt $factureRt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactureRt  $factureRt
     * @return \Illuminate\Http\Response
     */
    public function edit(FactureRt $factureRt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactureRt  $factureRt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactureRt $factureRt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactureRt  $factureRt
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactureRt $factureRt)
    {
        //
    }
}
