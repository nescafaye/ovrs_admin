<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Carbon;

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
    
    public function index(Request $rq)
    {   $placeholder = 'Transaction';
        $count = Transaction::count();

        $transactions = Transaction::paginate(20)->withQueryString();
        $transact = Transaction::find($rq->id);

        $dateNow = Carbon::today()->toDateString();

        // return view('driver', compact('drivers'));
        return view('transaction.index', compact('placeholder', 'transactions', 'count', 'transact', 'dateNow'));
    }
}
