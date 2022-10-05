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

        return view('commuter.commuter', compact('placeholder', 'commuters', 'c', 'count'));
    }

    // public function show($comm_id)
    // {
    //     $comm = Commuter::first($comm_id);
    //     return view('display', compact('commuters', 'comm'));
    // }

    public function update(Request $request)
    {
        $all = $request->validate([
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'username' => 'min:6|required|unique:commuters|string',
            'email' => 'required|unique:commuters|email',
            'gender' => 'nullable|in:Female,Male,Others',
            'phone' => 'min:12|required|unique:commuters|numeric',
            'profilePic' => 'nullable|image',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'accName' => 'nullable|alpha',
            'accNumber' => 'min:12|nullable|numeric'
        ]);

        $comm = Commuter::find($request->id);
        $update = Commuter::where('comm_id', $comm)->update($all);
        
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
    
}
