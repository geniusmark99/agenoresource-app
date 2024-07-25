<div class="container mx-auto py-8">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white font-bold py-2 px-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="updatedImages" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="imageUpload" class="block text-gray-700 text-sm font-bold mb-2">Upload Images:</label>
            <input type="file" wire:model="images" multiple class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        @error('images.*') <span class="text-red-500">{{ $message }}</span> @enderror

        <div wire:loading wire:target="images">Uploading...</div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Upload
            </button>
        </div>
    </form>
</div>
