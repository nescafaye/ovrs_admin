<?php

namespace App\Http\Livewire\Route;

use LivewireUI\Modal\ModalComponent;
use App\Models\Route;

class Edit extends ModalComponent
{

    public $route;

    public function mount($id)
    {
        $this->route = Route::findOrFail($id);
        
    }

    public function render()
    {
        return view('livewire.route.edit');
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
