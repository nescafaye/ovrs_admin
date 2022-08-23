<?php

namespace App\Http\Controllers;

use App\Models\Van;
use Illuminate\Http\Request;

class VanController extends Controller
{
    //

    
    public function index()
    {
        $placeholder = 'Search Van';
        // $vans = Van::all();
        // return view('driver', compact('drivers'));
        return view('van',compact('placeholder'));
    }
}
