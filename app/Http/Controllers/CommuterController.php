<?php

namespace App\Http\Controllers;

use App\Models\Commuter;
use Illuminate\Http\Request;

class CommuterController extends Controller
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

    public function index(Request $rq)
    {   $placeholder = 'Search Commuter';
        $commuters = Commuter::all();

        $c = Commuter::find($rq->id);
        $count = Commuter::count();

        // $id = Commuter::find(1);
        // $user = User::where('username',$username)->first(); 
        // $id = $commuters->pluck('comm_id');
        // $id = Commuter::
        // return view('commuter', compact('commuters'));

        return view('commuter', compact('placeholder', 'commuters', 'c', 'count'));
    }

    // public function show($comm_id)
    // {
    //     $comm = Commuter::first($comm_id);
    //     return view('display', compact('commuters', 'comm'));
    // }
    
}
