<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Route;


class Confirm extends ModalComponent
{

    public $record;
    public $name;
    
    public function mount($id, $routeName) 
    {
        $this->record = $id;
        $this->name = $routeName;
    }

    public function render()
    {
        return view('livewire.confirm');
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public static function modalMaxWidth(): string
    {
        return 'sm';
    }
}
