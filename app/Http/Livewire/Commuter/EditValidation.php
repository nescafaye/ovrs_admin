<?php

namespace App\Http\Livewire\Commuter;

use Livewire\Component;
use App\Models\Commuter;


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

    public $commuter;

    public function mount(Commuter $commuter) {

        $this->fname = $commuter->fname;
        $this->lname = $commuter->lname;
        $this->username = $commuter->username;
        $this->email = $commuter->email;
        $this->gender = $commuter->gender;
        $this->phone = $commuter->phone;
        $this->accName = $commuter->accName;
        $this->accNumber = $commuter->accNumber;
    }

    public function render()
    {
        return view("livewire.commuter.edit-validation");
    }

    protected $rules = [
        'fname' => 'required|string',
        'lname' => 'required|string',
        'username' => 'min:6|required|unique:commuters|string',
        'email' => 'required|unique:commuters|email',
        'gender' => 'nullable|in:Female,Male,Others',
        'phone' => 'min:12|required|unique:commuters|numeric',
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
