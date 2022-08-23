<?php

namespace App\Http\Controllers;

use App\Models\Commuter;
use Illuminate\Http\Request;

class CommuterController extends Controller
{
    //

    public function index()
    {   $placeholder = 'Search Commuter';
        $commuters = Commuter::all();
        // return view('commuter', compact('commuters'));
        return view('commuter', compact('placeholder', 'commuters'));
    }

    public function show(Commuter $commuters)
    {
        // $showComm = Commuter::find($comm_id);
        return view('show', compact('commuters'));
    }
    
}
