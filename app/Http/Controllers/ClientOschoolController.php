<?php

namespace App\Http\Controllers;

use App\ClientOschool;
use Illuminate\Http\Request;

class ClientOschoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientOschools = ClientOschool::orderby ('nom','asc')->paginate(5);
        return view('clientOschools.index', ['clientOschools' => $clientOschools]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientOschools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $clientOschool=ClientOschool::create($request->all());
      return redirect('clientOschools');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientOschool  $clientOschool
     * @return \Illuminate\Http\Response
     */
    public function show(ClientOschool $clientOschool)
    {
        return view('clientOschools.show',['clientOschool' => $clientOschool]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientOschool  $clientOschool
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientOschool $clientOschool)
    {
        return view('clientOschools.edit',['clientOschool'=> $clientOschool]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientOschool  $clientOschool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientOschool $clientOschool)
    {
       $clientOschool->update($request->all());
       return redirect('clientOschools');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientOschool  $clientOschool
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientOschool $clientOschool)
    {
        $clientOschool->delete();
        return redirect('clientOschools');
    }
}
