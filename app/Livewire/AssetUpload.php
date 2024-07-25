<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Asset;

class AssetUpload extends Component
{
    use WithFileUploads;

    public $images = [];
    public $userUUID;

    protected $rules = [
        'images.*' => 'image|max:1024', // 1MB Max
    ];

    public function mount()
    {
        $this->userUUID = auth()->user()->uuid; // Assuming you have a UUID field in your User model
    }

    public function updatedImages()
    {
        $this->validate();

        $imagePaths = [];

        foreach ($this->images as $image) {
            $path = $image->storeAs("public/{$this->userUUID}", $image->getClientOriginalName());
            $imagePaths[] = Storage::url($path);
        }

        $asset = Asset::create([
            'pictures' => json_encode($imagePaths),
        ]);

        session()->flash('message', 'Images uploaded successfully.');
        $this->reset('images');
    }

    public function render()
    {
        return view('livewire.asset-upload');
    }
}
