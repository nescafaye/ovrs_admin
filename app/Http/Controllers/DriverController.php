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
        $drivers = Driver::all();
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

    private function resetInput()
    {
        $this->fname = null;
        $this->lname = null;
        $this->username = null;
        $this->email = null;
        $this->gender = null;
        $this->phone = null;
        $this->accName = null;
        $this->accNumber = null;
    }

  
    public function update(Request $rq)
    {   
    
        // return redirect()->back();

        $all = request()->validate([
            'fname' => 'nullable',
            'lname' => 'nullable',
            'username' => 'nullable',
            'email' => 'nullable',
            'gender' => 'nullable|in:Female,Male,Others',
            'phone' => 'nullable',
            'profilePic' => 'nullable',
            'password' => 'nullable',
            'password_confirmation',
            'accName' => 'nullable',
            'accNumber' => 'nullable'
        ]);

        

        $id = Driver::find($rq->input('dvr_id'), ['dvr_id']);
        $all['password'] = Hash::make(request()->password);
        $update = Driver::where('dvr_id', $id)->update($all);
        // // $latest = Driver::orderBy('updated_at','DESC')->first();

        if ($update) {

            return redirect()
                ->route('driver', ['id' => $id])
                ->with('success', 'Driver updated successfully.');
                // ->session()->flash('success', 'Driver added successfully.');

        } 

        else {

            dd(Driver::find($rq->input('dvr_id')));
            // return redirect()->to('http://heera.it');
        }

        // $this->resetInput();
    }


    // public function update()
    //  {
    //     dd(Driver::find($this->$driver->dvr_id));
    //  }

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
