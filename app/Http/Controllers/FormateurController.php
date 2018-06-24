<?php

namespace App\Http\Controllers;

use App\Formateur;
use Image;
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
        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
          $clientOschool->image = $filename;
          $clientOschool->save();
      }
        return redirect('formateurs')->with('status', 'Compte crée avec succès !');
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
        if($request->hasFile('image')){

          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
          $clientOschool->image = $filename;
          $clientOschool->save();

        }

       return back()->with('status', 'Modification enregistrées');
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
