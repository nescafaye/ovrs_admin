<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    //

    protected $table = 'drivers';
    public $driver;
    public $dvr_id;
    

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
        $drivers = Driver::paginate(10)->withQueryString();
        $dvr = Driver::find($rq->id);
        $count = Driver::count(); 

        // $assigned = $dvr->assignedVan;

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
        $create = Driver::Create($all);
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
  
    public function update(Request $rq)
    {   
    
        // return redirect()->back();

        $lastUpdated = Driver::orderBy('updated_at','DESC')->first();

        $all = $rq->except(['_token', 'password_confirmation']);
        $all['password'] = Hash::make(request()->password);
        
        $update = Driver::where('dvr_id', $rq->dvr_id)->update($all);


        if ($update) {

            return redirect()
                ->route('driver', ['id' => $lastUpdated])
                ->with('success', 'Driver updated successfully.');
                // ->session()->flash('success', 'Driver added successfully.');

        } 

        else {

            dd($update);
            return redirect()
                ->route('driver', ['id' => $lastUpdated])
                ->with('error', 'Driver update failed.');
           
        }

        // $this->resetInput();
    }

    public function destroy(Request $rq) {

        $deleted = Driver::destroy($rq->id);
        $first = Driver::all()->first();

        if ($deleted) {
            
            return redirect()
                ->route('driver', ['id' => $first->dvr_id])
                // ->session()->flash('success', 'Driver added successfully.');
                ->with('deleted', 'Driver deleted.');
        } 
    
        else {

            return back()->with('error', 'Error');
        }
    }




    // public function update()
    //  {
    //     dd(Driver::find($this->$driver->dvr_id));
    //  }

}
