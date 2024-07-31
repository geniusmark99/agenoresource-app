<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminSearchBar extends Component
{

    public $searchTerm = '';
    public $users = [];

    public function updatedSearchTerm()
    {
        $this->users = User::where('email', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('uuid', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('firstname', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('lastname', 'like', '%' . $this->searchTerm . '%')
            ->get();
    }


    public function render()
    {
        return view('livewire.admin-search-bar');
    }
}
