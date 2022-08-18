<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VanController extends Controller
{
    //

    
    public function index()
    {
        // $commuters = Commuter::all();
        // return view('driver', compact('drivers'));
        return view('van');
    }
}
