<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOschool;
use App\ClientBootcamp;
use App\ClientSoutenance;
use App\ClientRm;
use App\ClientRt;
use App\Formateur;

class SearchController extends Controller
{
  public function searchOschool(){

    $q = Input::get('q');
    if ($q != "") {
      $user = ClientOschool::where('nom', 'LIKE', '%' . $q . '%')
                    ->orWhere('prenoms', 'LIKE', '%' . $q . '%')
                    ->orWhere('cours', 'LIKE', '%' . $q . '%')
                    ->orWhere('email', 'LIKE', '%' . $q . '%')
                    ->get();

                    if (count($user) > 0) {
                      return view('clientOschools.index')->withDetails($user)->withQuery($q);
                    }
    }

    return view('clientOschools.index')->withMessage("Aucun utilisateur trouvé !");

  }

  public function searchBootcamp(){

    $q = Input::get('q');
    if ($q != "") {
      $user = ClientBootcamp::where('nom', 'LIKE', '%' . $q . '%')
                    ->orWhere('prenoms', 'LIKE', '%' . $q . '%')
                    ->orWhere('cours', 'LIKE', '%' . $q . '%')
                    ->orWhere('email', 'LIKE', '%' . $q . '%')
                    ->get();

                    if (count($user) > 0) {
                      return view('clientBootcamps.index')->withDetails($user)->withQuery($q);
                    }
    }

    return view('clientBootcamps.index')->withMessage("Aucun utilisateur trouvé !");

  }

  public function searchSoutenance(){

    $q = Input::get('q');
    if ($q != "") {
      $user = ClientSoutenance::where('nom', 'LIKE', '%' . $q . '%')
                    ->orWhere('prenoms', 'LIKE', '%' . $q . '%')
                    ->orWhere('cours', 'LIKE', '%' . $q . '%')
                    ->orWhere('email', 'LIKE', '%' . $q . '%')
                    ->get();

                    if (count($user) > 0) {
                      return view('clientSoutenances.index')->withDetails($user)->withQuery($q);
                    }
    }

    return view('clientSoutenances.index')->withMessage("Aucun utilisateur trouvé !");

  }

  public function searchRm(){

    $q = Input::get('q');
    if ($q != "") {
      $user = ClientRm::where('nom', 'LIKE', '%' . $q . '%')
                    ->orWhere('prenoms', 'LIKE', '%' . $q . '%')
                    ->orWhere('cours', 'LIKE', '%' . $q . '%')
                    ->orWhere('email', 'LIKE', '%' . $q . '%')
                    ->get();

                    if (count($user) > 0) {
                      return view('clientRms.index')->withDetails($user)->withQuery($q);
                    }
    }

    return view('clientRms.index')->withMessage("Aucun utilisateur trouvé !");

  }

  public function searchRt(){

    $q = Input::get('q');
    if ($q != "") {
      $user = ClientOschool::where('nom', 'LIKE', '%' . $q . '%')
                    ->orWhere('prenoms', 'LIKE', '%' . $q . '%')
                    ->orWhere('cours', 'LIKE', '%' . $q . '%')
                    ->orWhere('email', 'LIKE', '%' . $q . '%')
                    ->get();

                    if (count($user) > 0) {
                      return view('clientRts.index')->withDetails($user)->withQuery($q);
                    }
    }

    return view('clientRts.index')->withMessage("Aucun utilisateur trouvé !");

  }

  public function searchFormateur(){

    $q = Input::get('q');
    if ($q != "") {
      $user = Formateur::where('nom', 'LIKE', '%' . $q . '%')
                    ->orWhere('prenoms', 'LIKE', '%' . $q . '%')
                    ->orWhere('cours', 'LIKE', '%' . $q . '%')
                    ->orWhere('email', 'LIKE', '%' . $q . '%')
                    ->get();

                    if (count($user) > 0) {
                      return view('formateurs.index')->withDetails($user)->withQuery($q);
                    }
    }

    return view('formateurs.index')->withMessage("Aucun utilisateur trouvé !");

  }




}
