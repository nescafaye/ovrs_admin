<?php

namespace App\Http\Livewire\Van;

use Livewire\Component;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class EditValidation extends Component
{
    public $plateNo;
    public $assignedDriver;
    public $model;
    public $rentalPrice;
    public $brand;
    public $color;
    public $transmissionType;
    public $amenities;
    public $seatCapacity;
    public $desc;
    public $vanImages;

    public $van;

    public function mount(Vehicle $van)
    {

        $this->plateNo = $van->plateNo;
        $this->assignedDriver = $van->assignedDriver;
        $this->model = $van->model;
        $this->rentalPrice = $van->rentalPrice;
        $this->brand = $van->brand;
        $this->color = $van->color;
        $this->transmissionType = $van->transmissionType;
        $this->amenities = $van->amenities;
        $this->seatCapacity = $van->seatCapacity;
        $this->desc = $van->desc;
        $this->vanImages = $van->vanImages;
        
    }

    public function render()
    {
        return view('livewire.van.edit-validation');

    }

    protected $rules = [
        'plateNo' => 'required|alpha_dash|unique:vehicles|max:6',
        // 'assignedDriver',
        'model' => 'required',
        'rentalPrice' => 'required|numeric',
        // 'brand',
        // 'color',
        // 'transmissionType',
        // 'amenities',
        // 'seatCapacity',
        // 'desc',
        // 'vanImages'

    ];

    protected $messages = [

        

    ];

    protected $validationAttributes = [

        'plateNo' => 'plate number'

    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


}
