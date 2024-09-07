<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUploadTest extends Component
{

    public $media;
    public $optimizedImage;

    public function render()
    {
        return view('livewire.image-upload-test');
    }
}
