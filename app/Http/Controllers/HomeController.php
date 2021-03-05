<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Config;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home', [
            'user' => auth()->user(),
            'note' => auth()->user()->note(),
            'urls' => auth()->user()->websites(),
            'todos'=>auth()->user()->todos(),
            'pics'=>auth()->user()->pics()
        ]);
    }

    public function session(){
        return Config::get('session');
        //return Session::activity();
    }
}
