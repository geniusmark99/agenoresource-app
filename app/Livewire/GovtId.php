<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class GovtId extends Component
{

    use WithFileUploads;

    public $photo;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }



    public function savePhoto()
    {

        $user = Auth::user();

        try {

            $extension = $this->photo->getClientOriginalExtension();
            $filename = strtolower($this->user->firstname) . '-' . strtolower($this->user->lastname) . '-' . 'govt_id' . '.' . $extension;
            $path = $this->photo->storeAs(path: 'public/user_govt_id', name: $filename);
            $user->govt_id = $path;
            $user->save();
            $this->user = $this->user->refresh();
            session()->flash('message', 'Image successfully uploaded.');
        } catch (\Exception $e) {
            Log::error('Failed to save image path: ' . $e->getMessage());
            session()->flash('error', 'Failed to save image path.');
            return;
        }
    }




    public function render()
    {
        return view('livewire.govt-id');
    }
}
