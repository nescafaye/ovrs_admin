<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        // dd($vans = $vhcl->routes()->get());
        
        $assigned = $vhcl->assignedDriver()->get(); //gets the assigned driver of the current van
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
            'vanImages' => 'nullable',
            
        ]);

        $vanImages = array();

        if ($files = $request->file('vanImages')) {

            foreach ($files as $file) {
                $imageName = hash('md5', date('YmdHis')) . "." . $file->getClientOriginalExtension();
                $destinationPath = Storage::path('public/images/'); 
                // $imageUrl = $destinationPath.$imageName;
                $file->move($destinationPath, $imageName);

                $vanImages[] = "$imageName";
            }
        }

        $create = Vehicle::insert( [
            'vanImages'=>  implode("|", $vanImages),
            'plateNo' => $all['plateNo'],
            'assignedDriver' => $all['assignedDriver'],
            'model' => $all['model'],
            'rentalPrice' => $all['rentalPrice'],
            'brand' => $all['brand'],
            'color' => $all['color'],
            'transmissionType' => $all['transmissionType'],
            'amenities' => $all['amenities'],
            'seatCapacity' => $all['seatCapacity'],
            'desc' => $all['desc'],
           
        ]);

        Vehicle::create($all);
        $latest = Vehicle::latest()->first();

        // Vehicle::insert([
        //     'vanImages' => implode('|', )
        // ])

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
