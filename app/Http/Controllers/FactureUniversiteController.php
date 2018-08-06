<?php

namespace App\Http\Controllers;

use App\FactureUniversite;
use App\ClientUniversite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FactureUniversiteController extends Controller
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
      $clientUniversites = ClientUniversite::orderBy ('nom','asc')->paginate(30);
      return view('factureUniversites.index', ['clientUniversites' => $clientUniversites]);
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
      $facture = FactureUniversite::create($request->all());

      return back()->with('status', 'La facture a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactureUniversite  $factureUniversite
     * @return \Illuminate\Http\Response
     */
    public function show(FactureUniversite $factureUniversite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactureUniversite  $factureUniversite
     * @return \Illuminate\Http\Response
     */
    public function edit(FactureUniversite $factureUniversite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactureUniversite  $factureUniversite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactureUniversite $factureUniversite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactureUniversite  $factureUniversite
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactureUniversite $factureUniversite)
    {
        //
    }
}
