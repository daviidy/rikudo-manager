<?php

namespace App\Http\Controllers;

use App\ClientBootcamp;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientBootcampController extends Controller
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
      $clientBootcamps = ClientBootcamp::orderby('nom','asc')->paginate(30);
      return view('clientBootcamps.index', ['clientBootcamps' => $clientBootcamps]);
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
        return view('clientBootcamps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $clientBootcamp=ClientBootcamp::create($request->all());

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
        $clientBootcamp->image = $filename;
        $clientBootcamp->save();
    }
      return redirect('clientBootcamps')->with('status', 'Compte crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientBootcamp  $clientBootcamp
     * @return \Illuminate\Http\Response
     */
    public function show(ClientBootcamp $clientBootcamp)
    {
      if (!Auth::check()) {
        return redirect('login');
      }
        return view('clientBootcamps.show',['clientBootcamp' => $clientBootcamp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientBootcamp  $clientBootcamp
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientBootcamp $clientBootcamp)
    {
        return view('clientBootcamps.edit',['clientBootcamp'=> $clientBootcamp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientBootcamp  $clientBootcamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientBootcamp $clientBootcamp)
    {
      $clientBootcamp->update($request->all());

      if($request->hasFile('image')){

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
        $clientBootcamp->image = $filename;
        $clientBootcamp->save();

      }

     return back()->with('status', 'Modification enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientBootcamp  $clientBootcamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientBootcamp $clientBootcamp)
    {
      $clientBootcamp->delete();
      return redirect('clientSoutenances')->with('status', 'Compte supprimé avec succès');
    }
}
