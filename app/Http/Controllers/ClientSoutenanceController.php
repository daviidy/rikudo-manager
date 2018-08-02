<?php

namespace App\Http\Controllers;

use App\ClientSoutenance;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientSoutenanceController extends Controller
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
      $clientSoutenances = ClientSoutenance::orderby ('nom','asc')->paginate(30);
      return view('clientSoutenances.index', ['clientSoutenances' => $clientSoutenances]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (!Auth::check()) {
        return redirect('login');
      }
        return view('clientSoutenances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $clientSoutenance=ClientSoutenance::create($request->all());

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
        $clientSoutenance->image = $filename;
        $clientSoutenance->save();
    }
      return redirect('clientSoutenances')->with('status', 'Compte crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientSoutenance  $clientSoutenance
     * @return \Illuminate\Http\Response
     */
    public function show(ClientSoutenance $clientSoutenance)
    {
      if (!Auth::check()) {
        return redirect('login');
      }
        return view('clientSoutenances.show',['clientSoutenance' => $clientSoutenance]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientSoutenance  $clientSoutenance
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientSoutenance $clientSoutenance)
    {
        return view('clientSoutenances.edit',['clientSoutenance'=> $clientSoutenance]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientSoutenance  $clientSoutenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientSoutenance $clientSoutenance)
    {
      $clientSoutenance->update($request->all());

      if($request->hasFile('image')){

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
        $clientSoutenance->image = $filename;
        $clientSoutenance->save();

      }

     return back()->with('status', 'Modification enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientSoutenance  $clientSoutenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientSoutenance $clientSoutenance)
    {
      $clientSoutenance->delete();
      return redirect('clientSoutenances')->with('status', 'Compte supprimé avec succès');
    }
}
