<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
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

    public function index(Request $rq)
    {
        $placeholder = 'Van';
        $vans = Vehicle::all();
        $vhcl = Vehicle::find($rq->id);
        
        $assigned = Vehicle::find($rq->id)->assignedDriver()->get(); //gets the assigned driver of the current van
        return view('van.index',compact('placeholder', 'vans', 'vhcl', 'assigned'));
    }

    public function store(Request $request)
    {

        // For validation
         $all = $request->validate([
            'plateNo' => 'required',
            'assignedDriver' => 'required',
            'model' => 'required',
            'rentalPrice' => 'required',
            'brand' => 'required',
            'color' => 'required',
            'transmissionType' => 'required',
            'amenities' => 'nullable',
            'seatCapacity' => 'required',
            'desc' => 'required',
            
        ]);


        $create = Vehicle::create($all);
        $latest = Vehicle::latest()->first();

        if ($create) {

        return redirect()
                ->route('van', ['id' => $latest->id])
                // ->session()->flash('success', 'Driver added successfully.');
                ->with('success', 'Vehicle added successfully.');
        }

        else { 
            return redirect()
                ->route('van')
                ->session()->flash('error', 'Failed to add vehicle.');
        }
        
                
    }

}
