<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
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
        $drivers = Driver::all();
        $dvr = Driver::find($rq->id);
        $count = Driver::count();

        return view('driver.index', compact('drivers', 'dvr', 'count'));
        
    }
    
    public function create()
    {   
        return view('driver.create');
    }

    public function store(Request $request)
    {

        // For validation
         $all = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'email|unique:drivers',
            'username' => 'required|unique:drivers',
            'gender' => 'in:Female,Male,Others|nullable',
            'phone' => 'min:12|nullable|numeric',
            'profilePic' => 'nullable|image',
            'accName' => 'nullable', //required
            'accNumber' =>'nullable|min:12|numeric', //required
            'password'
            
        ]);


        $all['password'] = Hash::make(request()->password);
        Driver::create($all);

        $latest = Driver::latest()->first();
        session()->flash('success', 'Driver added successfully.');
        return redirect()
                ->route('driver', ['id' => $latest->dvr_id]);
                // ->with('success','Driver added successfully.');
    }

    // public function destroy(Request $rq) {

    //     $dvr = Driver::find($rq->id);
    //     Driver::where('dvr_id', $dvr)->delete();

    //     $drivers = Driver::all();
    //     $dvr = Driver::find($rq->id);
    //     $count = Driver::count();

    //     return view('driver.index', compact('drivers','dvr', 'count'))
    //             ->with('success','Driver deleted successfully.');
    // }
}
