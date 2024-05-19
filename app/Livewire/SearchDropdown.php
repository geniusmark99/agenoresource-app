<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Assets;

class SearchDropdown extends Component
{

    public $query;
    public $results;



    public function render()
    {
        return view('livewire.search-dropdown');
    }

    public function updatedQuery()
    {
        $this->results = Assets::where('title', 'like', '%' . $this->query . '%')->get();
    }
}
