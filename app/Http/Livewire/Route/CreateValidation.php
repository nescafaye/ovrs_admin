<?php

namespace App\Http\Livewire\Route;

use Livewire\Component;


class CreateValidation extends Component
{
    public $routeNo;
    public $routeTitle;
    public $origin;
    public $destination;
   

    public function render()
    {
        return view("livewire.route.create-validation");
    }

    protected $rules = [
        'routeNo' => 'required',
        'origin' => 'required',
        'destination' => 'required',
        'routeTitle' => 'required',

    ];


    protected $validationAttributes = [
    
        'routeNo' => 'route number',

    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    
}
