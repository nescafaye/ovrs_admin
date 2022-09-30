<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    //

    protected $table = 'drivers';

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
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'username' => 'min:6|required|unique:drivers|string',
            'email' => 'required|unique:drivers|email',
            'gender' => 'nullable|in:Female,Male,Others',
            'phone' => 'min:12|required|unique:drivers|numeric',
            'profilePic' => 'nullable|image',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'accName' => 'nullable|alpha', //required
            'accNumber' => 'min:12|nullable|numeric'//required
            
        ]);


        $all['password'] = Hash::make(request()->password);
        $create = Driver::create($all);
        $latest = Driver::latest()->first();

        if ($create) {

        return redirect()
                ->route('driver', ['id' => $latest->dvr_id])
                // ->session()->flash('success', 'Driver added successfully.');
                ->with('success', 'Driver added successfully.');
        }

        else {
            return redirect()
                ->route('driver')
                ->session()->flash('error', 'Failed to add driver.');
        }
        
                
    }

    public function update(Request $request)
    {
        $all = $request->validate([
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'username' => 'min:6|required|unique:drivers|string',
            'email' => 'required|unique:drivers|email',
            'gender' => 'nullable|in:Female,Male,Others',
            'phone' => 'min:12|required|unique:drivers|numeric',
            'profilePic' => 'nullable|image',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'accName' => 'nullable|alpha',
            'accNumber' => 'min:12|nullable|numeric'
        ]);

        $dvr = Driver::find($request->id);
        $update = Driver::where('dvr_id', $dvr)->update($all);
        
        if  ($update)
            {
                // return redirect()->back()->with('success','Changes has been saved successfully!');
                return redirect()->back()->session()->flash('success','Changes has been saved successfully!');
            }
        else
            {
                return redirect()->back()->session()->flash('error','Changes failed to save');
            }
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
