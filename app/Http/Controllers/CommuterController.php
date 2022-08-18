<?php

namespace App\Http\Controllers;

use App\Models\Commuter;
use Illuminate\Http\Request;

class CommuterController extends Controller
{
    //

    public function index()
    {
        // $commuters = Commuter::all();
        // return view('driver', compact('drivers'));
        return view('commuter');
    }
    
}
