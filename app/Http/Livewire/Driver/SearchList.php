<?php

namespace App\Http\Livewire\Driver;

use Livewire\Component;
use App\Models\Driver;
use Livewire\WithPagination;


class SearchList extends Component
{

    use WithPagination;

    public $search;

    // passed parameters from drivers page
    public $dvr;
    public $routeName;

    protected $queryString = ['search' => ['except' => '']];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        sleep(0.5);
        $keyword = '%' . $this->search . '%';
        
        return view('livewire.driver.search-list', ['drivers' => Driver::where('fname', 'like', $keyword)
                                                                        ->orWhere('lname', 'like', $keyword)
                                                                        ->orWhere('username', 'like', $keyword)->paginate(10)]);
    }
}
