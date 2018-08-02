<?php

namespace App\Http\Controllers;

use App\FactureSoutenance;
use App\ClientSoutenance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FactureSoutenanceController extends Controller
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
      $clientSoutenances = ClientSoutenance::orderBy ('nom','asc')->paginate(30);
      return view('factureSoutenances.index', ['clientSoutenances' => $clientSoutenances]);
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
      $facture = FactureSoutenance::create($request->all());

      return back()->with('status', 'La facture a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactureSoutenance  $factureSoutenance
     * @return \Illuminate\Http\Response
     */
    public function show(FactureSoutenance $factureSoutenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactureSoutenance  $factureSoutenance
     * @return \Illuminate\Http\Response
     */
    public function edit(FactureSoutenance $factureSoutenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactureSoutenance  $factureSoutenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactureSoutenance $factureSoutenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactureSoutenance  $factureSoutenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactureSoutenance $factureSoutenance)
    {
        //
    }
}
