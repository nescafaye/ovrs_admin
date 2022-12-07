<?php

namespace App\Http\Livewire\Driver;

use Livewire\Component;
use App\Models\Driver;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;


class SearchList extends Component
{

    use WithPagination;

    public $search;

    // passed parameters from drivers page
    public $dvr;
    public $routeName;

    protected $queryString = ['search' => ['except' => '']];

    public function render()
    {
        sleep(0.5);
        $keyword = '%' . $this->search . '%';
        // $results = DB::table('drivers')->where('fname', 'like', $keyword)
        //                                     ->orWhere('lname', 'like', $keyword)
        //                                     ->orWhere('username', 'like', $keyword)->paginate(10);
        // $this->result = $results;
        // $this->drivers = collect($this->result);

        return view('livewire.driver.search-list', ['drivers' => Driver::where('fname', 'like', $keyword)
                                                                        ->orWhere('lname', 'like', $keyword)
                                                                        ->orWhere('username', 'like', $keyword)->paginate(10)]);
    }
}
