<?php

namespace App\Http\Livewire\Route;

use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{

    public function render()
    {
        return view('livewire.route.create');
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
