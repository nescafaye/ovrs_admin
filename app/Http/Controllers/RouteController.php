<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $placeholder = 'Route';
        // $commuters = Commuter::all();
        // return view('driver', compact('drivers'));
        return view('route.index', compact('placeholder'));
    }
}
