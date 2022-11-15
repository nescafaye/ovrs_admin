<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use Illuminate\Support\Facades\Hash;

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
    
    public function index(Request $rq)
    {
        $placeholder = 'Route';
        $routes = Route::all();
        $rt = Route::find($rq->id);
    
        return view('route.index', compact('placeholder', 'routes', 'rt'));
    }

    public function store(Request $request)
    {
        // For validation
         $all = $request->validate([
            'routeNo' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'routeTitle' => 'required',
        ]);

        $all['password'] = Hash::make(request()->password);
        $create = Route::Create($all);
        $latest = Route::latest()->first();

        if ($create) {

        return redirect()
                ->route('route', ['id' => $latest->id])
                // ->session()->flash('success', 'Driver added successfully.');
                ->with('success', 'Route added successfully.');
        }

        else {
            return redirect()
                ->route('route')
                ->session()->flash('error', 'Failed to add route.');
        }
        
            
    }
}
