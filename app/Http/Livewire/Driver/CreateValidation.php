<?php

namespace App\Http\Livewire\Driver;

use Livewire\Component;


class CreateValidation extends Component
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


    public function render()
    {
        return view("livewire.driver.create-validation");
    }

    protected $rules = [
        'fname' => 'required|alpha',
        'lname' => 'required|alpha',
        'username' => 'min:6|required|unique:drivers|string',
        'email' => 'required|unique:drivers|email',
        'gender' => 'nullable|in:Female,Male,Others',
        'phone' => 'min:12|required|unique:drivers|numeric',
        'profilePic' => 'nullable|image',
        'password' => 'required',
        'password_confirmation' => 'required|same:password',
        'accName' => 'nullable|alpha',
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
