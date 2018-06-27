<?php

namespace App\Http\Controllers;

use App\ClientRt;
use Image;
use Illuminate\Http\Request;

class ClientRtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientRts=ClientRt::orderby('nom','asc')->paginate(30);
        return view('clientRts.index',['clientRts'=>$clientRts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientRts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientRts=ClientRt::create($request->all());
        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/img/usersPhotos/' . $filename));
          $clientOschool->image = $filename;
          $clientOschool->save();
      }
        return redirect('clientRts')->with('status', 'Compte crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientRt  $clientRt
     * @return \Illuminate\Http\Response
     */
    public function show(ClientRt $clientRt)
    {
        return view('clientRts.show',['clientRt'=>$clientRt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientRt  $clientRt
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientRt $clientRt)
    {
        return view('clientRts.edit',['clientRt'=>$clientRt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientRm  $clientRm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientRt $clientRt)
    {
        $clientRt->update($request->all());
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
     * @param  \App\ClientRt  $clientRt
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientRt $clientRt)
    {
        $clientRt->delete();
        return redirect('clientRts');
    }
}
