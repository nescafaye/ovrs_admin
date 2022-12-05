<?php

namespace App\Http\Controllers;

use App\Models\Commuter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $commuters = Commuter::paginate(10)->withQueryString();

        $c = Commuter::find($rq->id);
        $count = Commuter::count();

        return view('commuter.commuter', compact('placeholder', 'commuters', 'c', 'count'));
    }


    public function update(Request $rq)
    {
        $all = $rq->except(['_token','password_confirmation']);

        $lastUpdated = Commuter::orderBy('updated_at','DESC')->first();

        $all['password'] = Hash::make(request()->password);
        
        $update = Commuter::where('comm_id', $rq->comm_id)->update($all);

        // $this->resetInput();
        
        if ($update) {

            return redirect()
                ->route('commuter', ['id' => $lastUpdated])
                ->with('success', 'Changes have been saved.');
        } 

        else {

            return redirect()
                ->route('commuter', ['id' => $lastUpdated])
                ->with('error', 'Failed to update changes.');
           
        }
            
    }
    
}
