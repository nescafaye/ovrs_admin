<?php

namespace App\Http\Livewire\Commuter;

use LivewireUI\Modal\ModalComponent;
use App\Models\Commuter;

class Edit extends ModalComponent
{

    public $commuter;

    public function mount($comm_id)
    {
        $this->commuter = Commuter::findOrFail($comm_id);
    }

    public function render()
    {
        return view('livewire.commuter.edit');
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
