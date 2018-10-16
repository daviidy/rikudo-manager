<?php

namespace App\Http\Controllers;

use App\FactureOschool;
use App\ClientOschool;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FactureOschoolController extends Controller
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
      $factureOschools = FactureOschool::orderBy ('date_de_paiement','asc')->paginate(30);
      $clientOschools = ClientOschool::orderBy ('nom','asc')->paginate(30);
      return view('factureOschools.index', ['clientOschools' => $clientOschools, 'factureOschools' => $factureOschools]);
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
      $facture = FactureOschool::create($request->all());

      return back()->with('status', 'La facture a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactureOschool  $factureOschool
     * @return \Illuminate\Http\Response
     */
    public function show(FactureOschool $factureOschool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactureOschool  $factureOschool
     * @return \Illuminate\Http\Response
     */
    public function edit(FactureOschool $factureOschool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactureOschool  $factureOschool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactureOschool $factureOschool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactureOschool  $factureOschool
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactureOschool $factureOschool)
    {
        //
    }
}
