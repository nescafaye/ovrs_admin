<?php

namespace App\Http\Livewire\Driver;

use LivewireUI\Modal\ModalComponent;
use App\Models\Driver;

class Edit extends ModalComponent
{

    public $driver;

    public function mount($dvr_id)
    {
        $this->driver = Driver::findOrFail($dvr_id);
    }

    public function render()
    {
        return view('livewire.driver.edit');
    }

    // public function edit(Request $rq)
    // {
    //     $driver = Driver::find($rq->id);
    //     $this->fname = $driver->fname;
    //     $this->lname = $driver->lname;
    //     $this->username = $driver->username;
    //     $this->email = $driver->email;
    //     $this->gender = $driver->gender;
    //     $this->phone = $driver->phone;
    //     $this->email = $driver->email;
    //     $this->gender = $driver->gender;
    //     $this->password = $driver->password;
    //     $this->password_confirmation = $driver->password_confirmation;
    //     $this->profilePic = $driver->profilePic;
    //     $this->accName = $driver->accName;
    //     $this->accNumber = $driver->accNumber;

    //     $this->updateMode = true;
    // }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }
}
