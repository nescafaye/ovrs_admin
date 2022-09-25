<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormValidate extends Component
{

    public $username;
    public $password;
 
    protected $rules = [
        'username' => 'required|min:6',
        'password' => 'required'
    ];

    // protected $message = [
    //     'username.min' => 'Username',
    //     'username.required' => 'Username is fcking required',
    //     'password.required' => 'Password is required.',
    // ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function Login()
    {
        $this->validate([
            'username' => 'min:6',
            
        ]);
  
    }
}
