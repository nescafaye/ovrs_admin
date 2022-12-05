<?php

namespace App\Http\Livewire\Route;

use App\Models\Route;
use Livewire\Component;


class EditValidation extends Component
{
    public $routeNo;
    public $routeTitle;
    public $origin;
    public $destination;

    public $route;

    public function mount(Route $route)
    {
        $this->routeNo = $route->routeNo;
        $this->routeTitle = $route->routeTitle;
        $this->origin = $route->origin;
        $this->destination = $route->destination;
    }
   

    public function render()
    {
        return view("livewire.route.edit-validation");
    }

    protected $rules = [
        'routeNo' => 'required',
        'origin' => 'required',
        'destination' => 'required',
        'routeTitle' => 'required',

    ];


    protected $validationAttributes = [
    
        'routeNo' => 'route number',
        'routeTitle' => 'route title'

    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    
}
