<?php

namespace App\Http\Controllers;

use App\FactureBootcamp;
use App\ClientBootcamp;
use Illuminate\Http\Request;

class FactureBootcampController extends Controller
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
      $facture = FactureBootcamp::create($request->all());

      return back()->with('status', 'La facture a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactureBootcamp  $factureBootcamp
     * @return \Illuminate\Http\Response
     */
    public function show(FactureBootcamp $factureBootcamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactureBootcamp  $factureBootcamp
     * @return \Illuminate\Http\Response
     */
    public function edit(FactureBootcamp $factureBootcamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactureBootcamp  $factureBootcamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactureBootcamp $factureBootcamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactureBootcamp  $factureBootcamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactureBootcamp $factureBootcamp)
    {
        //
    }
}
