<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Driver;
use App\Models\Commuter;
use App\Models\Vehicle;
use App\Models\Transaction;
use App\Models\Route;

class Sidebar extends Component
{

    public $driver_id;
    public $commuter_id;
    public $vehicle_id;
    public $transaction_id;
    public $route_id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->driver_id = Driver::all()->pluck('dvr_id')->first();
        $this->commuter_id = Commuter::all()->pluck('comm_id')->first();
        $this->vehicle_id = Vehicle::all()->pluck('id')->first();
        $this->transaction_id = Transaction::all()->pluck('id')->first();
        $this->route_id = Route::all()->pluck('id')->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
