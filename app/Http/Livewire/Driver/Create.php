<?php

namespace App\Http\Livewire\Driver;

use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    public function render()
    {
        return view('livewire.driver.create');
    }
}
