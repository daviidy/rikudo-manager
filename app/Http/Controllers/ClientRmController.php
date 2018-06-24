<?php

namespace App\Http\Controllers;

use App\ClientRm;
use Image;
use Illuminate\Http\Request;

class ClientRmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientRms=ClientRm::orderby('nom','asc')->paginate(5);
        return view('clientRms.index',['clientRms'=>$clientRms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientRms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientRms=ClientRm::create($request->all());
        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
          $clientOschool->image = $filename;
          $clientOschool->save();
      }
        return redirect('clientRms')->with('status', 'Compte crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function show(ClientRm $clientRm)
    {
        return view('clientRms.show',['clientRm'=>$clientRm]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientRm $clientRm)
    {
        return view('clientRms.edit',['clientRm'=>$clientRm]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientRm $clientRm)
    {
        $clientRm->update($request->all());
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
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientRm $clientRm)
    {
        $clientRm->delete();
        return redirect('clientRms');
    }
}
