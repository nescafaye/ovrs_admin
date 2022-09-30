<?php

namespace App\Http\Livewire\Driver;

use Livewire\Component;
use App\Models\Driver;


class EditValidation extends Component
{
    public $fname;
    public $lname;
    public $username;
    public $email;
    public $gender;
    public $phone;
    public $password;
    public $password_confirmation;
    public $profilePic;
    public $accName;
    public $accNumber;

    public $driver;

    public function mount(Driver $driver) {

        $this->fname = $driver->fname;
        $this->lname = $driver->lname;
        $this->username = $driver->username;
        $this->email = $driver->email;
        $this->gender = $driver->gender;
        $this->phone = $driver->phone;
        $this->accName = $driver->accName;
        $this->accNumber = $driver->accNumber;
    }

    public function render()
    {
        return view("livewire.driver.edit-validation");
    }

    protected $rules = [
        'fname' => 'required|string',
        'lname' => 'required|string',
        'username' => 'min:6|required|unique:drivers|string',
        'email' => 'required|unique:drivers|email',
        'gender' => 'nullable|in:Female,Male,Others',
        'phone' => 'min:12|required|unique:drivers|numeric',
        'profilePic' => 'nullable|image',
        'password' => 'nullable',
        'password_confirmation' => 'nullable|same:password',
        'accName' => 'nullable|string',
        'accNumber' => 'min:12|nullable|numeric'

    ];

    protected $messages = [

        'password_confirmation.same' => 'Passwords do not match. Try again.',

    ];

    protected $validationAttributes = [
    
        'fname' => 'first name',
        'lname' => 'last name',
        'phone' => 'phone number',
        'accName' => 'account name',
        'accNumber' => 'account number'

    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    
}
