<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOschool;
use App\ClientRm;

class TestController extends Controller
{
    //
    public function Accueil()
    {
    	$client = ClientOschool::all();
    	//dd($client);
    	return view('formulaires/rikudoM', compact('client'));
    }

    public function Save(Request $request)
    {
    	# code...
    	//dd($request->all());
    	// creation du client RM
    	$client = new ClientRm();

    	// affectation des valeurs 
    	$client->nom = $request->nom ;
    	$client->prenoms = $request->prenom;
    	$client->email = $request->email;
    	$client->Numero = $request->numero;

    	// enregistrement 
    	$client->save();

    	//dd($client);
    }
}
