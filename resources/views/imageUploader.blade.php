<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="bg-gray-100">

<div x-data="imageUploader()" class="max-w-2xl mx-auto mt-10 p-5 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-5">Upload Images</h2>

    <!-- Success Message -->
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form 
    action="{{ route('upload.images') }}" 
    method="POST" enctype="multipart/form-data" 
    class="space-y-5">
        @csrf
        <div
            x-ref="dropArea"
            @dragover.prevent="dragOver"
            @dragleave.prevent="dragLeave"
            @drop.prevent="handleDrop"
            class="border-4 border-dashed border-gray-200 rounded-lg p-10 text-center cursor-pointer"
            :class="{'bg-gray-200': isDragging}"
            @click="$refs.fileInput.click()"
        >
            <p class="text-gray-500">Drag & drop images here, or click to select images</p>
            <input type="file" multiple x-ref="fileInput" @change="handleFiles" name="images" 
            class="hidden">
        </div>

        <div class="grid grid-cols-3 gap-4">
            <template x-for="(file, index) in files" :key="index">
                <div class="relative">
                    <img :src="file.url" class="w-full h-32 object-cover rounded-lg">
                    <button type="button" @click="removeFile(index)" class="absolute top-0 right-0 bg-red-500 text-white p-1 rounded-full">
                        &times;
                    </button>
                </div>
            </template>
        </div>

        <p x-show="errorMessage" class="text-red-500" x-text="errorMessage"></p>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg" 
        :disabled="files.length === 0 || files.length > 5" 
        :class="{'opacity-50': files.length === 0 || files.length > 5}">
            Upload
        </button>
    </form>
</div>

<script>
    function imageUploader() {
        return {
            files: [],
            isDragging: false,
            errorMessage: '',
            dragOver() {
                this.isDragging = true;
            },
            dragLeave() {
                this.isDragging = false;
            },
            handleDrop(event) {
                this.isDragging = false;
                const files = Array.from(event.dataTransfer.files);
                this.addFiles(files);
            },
            handleFiles(event) {
                const files = Array.from(event.target.files);
                this.addFiles(files);
            },
            addFiles(files) {
                if (this.files.length + files.length > 5) {
                    this.errorMessage = 'You can only upload a maximum of 5 images.';
                    return;
                }
                this.errorMessage = '';
                files.forEach(file => {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        this.files.push({ file, url: e.target.result });
                    };
                    reader.readAsDataURL(file);
                });
                this.updateFileInput();
            },
            removeFile(index) {
                this.files.splice(index, 1);
                this.updateFileInput();
            },
            updateFileInput() {
                const dataTransfer = new DataTransfer();
                this.files.forEach(file => {
                    dataTransfer.items.add(file.file);
                });
                this.$refs.fileInput.files = dataTransfer.files;
            }
        }
    }
</script>

</body>
</html>
