<?php

namespace App\Http\Controllers;

use App\ClientUniversite;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientUniversiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (!Auth::check())  {
          return redirect('login');
      }
      $clientUniversites = ClientUniversite::orderby ('nom','asc')->paginate(30);
        return view('clientUniversites.index', ['clientUniversites' => $clientUniversites]);
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
        return view('clientUniversites.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $clientUniversite=ClientUniversite::create($request->all());

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
        $clientUniversite->image = $filename;
        $clientUniversite->save();
    }
      return redirect('clientUniversites')->with('status', 'Compte crée avec succès !');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\ClientUniversite  $clientUniversite
     * @return \Illuminate\Http\Response
     */
    public function show(ClientUniversite $clientUniversite)
    {
      if (!Auth::check()) {
        return redirect('login');
      }
        return view('clientUniversites.show',['clientUniversite' => $clientUniversite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientUniversite  $clientUniversite
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientUniversite $clientUniversite)
    {
        return view('clientUniversites.edit',['clientUniversite'=> $clientUniversite]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientUniversite  $clientUniversite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientUniversite $clientUniversite)
   {

       $clientUniversite->update($request->all());

       if($request->hasFile('image')){

         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
         $clientUniversite->image = $filename;
         $clientUniversite->save();

       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientUniversite  $clientUniversite
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientUniversite $clientUniversite)
     {
        $clientUniversite->delete();
        return redirect('clientUniversites')->with('status', 'Compte supprimé avec succès');
    }

}
