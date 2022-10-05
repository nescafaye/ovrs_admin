<?php

namespace App\Http\Livewire\Driver;

use LivewireUI\Modal\ModalComponent;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Edit extends ModalComponent
{

    public $driver;

    public function mount($dvr_id)
    {
        $this->driver = Driver::findOrFail($dvr_id);
        
    }

    public function render()
    {
        $driver_id = Driver::findOrFail($this->driver->dvr_id);
        return view('livewire.driver.edit', compact('driver_id'));
    }


    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

}
