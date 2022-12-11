<?php

namespace App\Http\Livewire\Van;

use LivewireUI\Modal\ModalComponent;
use App\Models\Vehicle;

class Edit extends ModalComponent
{

    public $van;

    public function mount($id)
    {
        $this->van = Vehicle::findOrFail($id);
        
    }

    public function render()
    {
        return view('livewire.van.edit');
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
