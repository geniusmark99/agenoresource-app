<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="bg-gray-100">

<div x-data="videoUploader()" class="max-w-2xl mx-auto mt-10 p-5 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-5">Upload Videos</h2>

    <!-- Popup Messages -->
    <div x-show="successMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-green-100 text-green-700 rounded shadow-md" x-text="successMessage" x-transition x-init="setTimeout(() => { successMessage = '' }, 5000)"></div>
    <div x-show="errorMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-red-100 text-red-700 rounded shadow-md" x-text="errorMessage" x-transition x-init="setTimeout(() => { errorMessage = '' }, 5000)"></div>
    <div x-show="warningMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-yellow-100 text-yellow-700 rounded shadow-md" x-text="warningMessage" x-transition x-init="setTimeout(() => { warningMessage = '' }, 5000)"></div>

    <form @submit.prevent="submitForm" class="space-y-5">
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
            <p class="text-gray-500">Drag & drop videos here, or click to select videos</p>
            <input type="file" multiple x-ref="fileInput" @change="handleFiles" accept="video/*" class="hidden">
        </div>

        <div class="grid grid-cols-3 gap-4">
            <template x-for="(file, index) in files" :key="index">
                <div class="relative">
                    <video class="w-full h-32 object-cover rounded-lg" controls>
                        <source :src="file.url" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button type="button" @click="removeFile(index)" class="absolute top-0 right-0 bg-red-500 text-white p-1 rounded-full">
                        &times;
                    </button>
                </div>
            </template>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg" :disabled="files.length === 0 || files.length > 2" :class="{'opacity-50': files.length === 0 || files.length > 2}">
            Upload
        </button>
    </form>
</div>

<script>
    function videoUploader() {
        return {
            files: [],
            isDragging: false,
            successMessage: '',
            errorMessage: '',
            warningMessage: '',
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
                if (this.files.length + files.length > 2) {
                    this.errorMessage = 'You can only upload a maximum of 2 videos.';
                    setTimeout(() => { this.errorMessage = ''; }, 5000); // Remove error message after 5 seconds
                    return;
                }
                this.errorMessage = '';
                files.forEach(file => {
                    const maxSizeInBytes = 50 * 1024 * 1024; // 50MB
                    if (file.size > maxSizeInBytes) {
                        this.warningMessage = `Warning: ${file.name} exceeds 50MB and won't be uploaded.`;
                        setTimeout(() => { this.warningMessage = ''; }, 5000); // Remove warning message after 5 seconds
                    } else {
                        const url = URL.createObjectURL(file);
                        this.files.push({ file, url });
                    }
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
            },
            async submitForm(event) {
                const formData = new FormData();
                this.files.forEach((fileObj, index) => {
                    formData.append('videos[]', fileObj.file);
                });

                try {
                    const response = await fetch('{{ route('upload.videos') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });

                    if (response.ok) {
                        this.successMessage = 'Videos uploaded successfully!';
                        setTimeout(() => { this.successMessage = ''; }, 5000); // Remove success message after 5 seconds
                        this.files = [];
                        this.updateFileInput();
                    } else {
                        const errorData = await response.json();
                        this.errorMessage = errorData.message || 'Something went wrong. Please try again.';
                        setTimeout(() => { this.errorMessage = ''; }, 5000); // Remove error message after 5 seconds
                    }
                } catch (error) {
                    this.errorMessage = 'Something went wrong. Please try again.';
                    setTimeout(() => { this.errorMessage = ''; }, 5000); // Remove error message after 5 seconds
                }
            }
        }
    }
</script>

</body>
</html>
