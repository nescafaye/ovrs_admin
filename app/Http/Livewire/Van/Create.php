<?php

namespace App\Http\Livewire\Van;

use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{

    public function render()
    {
        return view('livewire.van.create');
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
