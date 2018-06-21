<?php

namespace App\Http\Controllers;

use App\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formateurs=Formateur::orderby ('nom','asc')->paginate(5);
        return view('formateurs.index',['formateurs'=>$formateurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formateurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formateur=Formateur::create($request->all());
        return redirect('formateurs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function show(Formateur $formateur)
    {
        return view('formateurs.show',['formateur'=>$formateur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Formateur $formateur)
    {
        return view('formateurs.edit',['formateur'=>$formateur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formateur $formateur)
    {
        $formateur->update($request->all());
        return redirect('formateurs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formateur $formateur)
    {
        $formateur->delete();
        return redirect('formateurs');
    }
}
