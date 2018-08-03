<?php

namespace App\Http\Controllers;

use App\FactureRm;
use App\ClientRm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FactureRmController extends Controller
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
      $clientRms = ClientRm::orderBy ('nom','asc')->paginate(30);
      return view('factureRms.index', ['clientRms' => $clientRms]);
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
      $facture = FactureRm::create($request->all());

      return back()->with('status', 'La facture a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactureRm  $factureRm
     * @return \Illuminate\Http\Response
     */
    public function show(FactureRm $factureRm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactureRm  $factureRm
     * @return \Illuminate\Http\Response
     */
    public function edit(FactureRm $factureRm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactureRm  $factureRm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactureRm $factureRm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactureRm  $factureRm
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactureRm $factureRm)
    {
        //
    }
}
