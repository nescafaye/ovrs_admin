<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Driver;
use App\Models\Commuter;
use App\Models\Vehicle;
use App\Models\Transaction;
use App\Models\Route;
use App\Models\RouteVehicle;

use Livewire\WithPagination;


class SearchList extends Component
{

    use WithPagination;

    public $search;

    // passed parameters from pages:

    //drivers
    public $dvr;

    //commuters
    public $comm;

    //van
    public $vhcl;

    // transaction
    public $transact;

    //route 
    public $rt;

    // get route name
    public $routeName;

    protected $queryString = ['search' => ['except' => '']];


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        sleep(0.5);
        $keyword = '%' . $this->search . '%';

        switch ($this->routeName) {

            case 'driver':
                return view('livewire.search-list', ['drivers' => Driver::where('fname', 'like', $keyword)
                                                                        ->orWhere('lname', 'like', $keyword)
                                                                        ->orWhere('username', 'like', $keyword)->paginate(10)]);
                break;

            case 'commuter':
                return view('livewire.search-list', ['commuters' => Commuter::where('fname', 'like', $keyword)
                                                                        ->orWhere('lname', 'like', $keyword)
                                                                        ->orWhere('username', 'like', $keyword)->paginate(10)]);
                break;

            case 'van':
                return view('livewire.search-list', ['vans' => Vehicle::where('brand', 'like', $keyword)
                                                                        ->orWhere('model', 'like', $keyword)
                                                                        ->orWhere('plateNo', 'like', $keyword)->paginate(10)]);
                break;
            
            case 'transaction':
                return view('livewire.search-list', ['transactions' => Transaction::where('transactionNo', 'like', $keyword)
                                                                        ->orWhere('commuterName', 'like', $keyword)
                                                                        ->paginate(10)]);
                break;
            
            case 'route':
                return view('livewire.search-list', ['routes' => Route::where('routeTitle', 'like', $keyword)
                                                                        ->orWhere('routeNo', 'like', $keyword)
                                                                        ->orWhere('origin', 'like', $keyword)
                                                                        ->orWhere('destination', 'like', $keyword)
                                                                        ->paginate(10)]);
                break;

            default:
                # code...
                break;
        }
        
    }
}
