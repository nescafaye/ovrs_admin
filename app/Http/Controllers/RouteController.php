<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

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
        $routes = Route::paginate(10)->withQueryString();
        $rt = Route::find($rq->id);
    
        return view('route.index', compact('placeholder', 'routes', 'rt'));
    }

    public function store(Request $request)
    {
        // For validation
         $all = $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'routeTitle' => 'required',
        ]);

        $all['routeNo'] = random_int(000001, 999999);
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
                ->with('error', 'Failed to add route.');
        }
        
            
    }

    public function update(Request $rq)
    {   

        $lastUpdated = Route::orderBy('updated_at','DESC')->first();

        $all = $rq->except('_token');
        
       $update = Route::where('id', $rq->id)->update($all);


        if ($update) {

            return redirect()
                ->route('route', ['id' => $lastUpdated])
                ->with('success', 'Route updated successfully.');
        } 

        else {
            return redirect()
                ->route('route')
                ->with('error', 'Route update failed.');
           
        }

        // $this->resetInput();
    }

    public function destroy(Request $rq) {

        $deleted = Route::destroy($rq->id);
        $first = Route::all()->first();

        if ($deleted) {
            
            return redirect()
                ->route('route', ['id' => $first->id])
                ->with('deleted', 'Route deleted.');
        } 
    
        else {

            return back()->with('error', 'Error');
        }
    }
}
