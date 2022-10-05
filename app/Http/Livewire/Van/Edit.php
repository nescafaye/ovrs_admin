<?php

namespace App\Http\Livewire\Van;

use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{

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
