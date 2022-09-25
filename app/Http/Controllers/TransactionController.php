<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
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
    {   $placeholder = 'Transaction';
        // $commuters = Commuter::all();
        // return view('driver', compact('drivers'));
        return view('transaction.index', compact('placeholder'));
    }
}
