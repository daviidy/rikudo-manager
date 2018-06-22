<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOschool;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //auparavant home
        $clientOschools = ClientOschool::orderby ('nom','asc')->paginate(5);
        return view('clientOschools.index', ['clientOschools' => $clientOschools]);
    }

    public function homepage() {
      if (Auth::check()) {
        $clientOschools = ClientOschool::orderby ('nom','asc')->paginate(5);
        return view('clientOschools.index', ['clientOschools' => $clientOschools]);
      }
        return view('auth.login');
    }
}
