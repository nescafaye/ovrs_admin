<?php

namespace App\Http\Controllers;

use App\Models\Van;
use Illuminate\Http\Request;

class VanController extends Controller
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
        $placeholder = 'Van';
        // $vans = Van::all();
        // return view('driver', compact('drivers'));
        return view('van.index',compact('placeholder'));
    }
}
