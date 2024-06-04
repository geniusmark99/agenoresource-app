<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
 @vite(['resources/css/app.css','resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container mx-auto p-4">
    <form x-data="fileUploadHandler()" @submit.prevent="uploadFiles" class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Upload Files</h2>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="images">Images:</label>
            <input type="file" id="images" x-ref="images" @change="handleFileChange" multiple class="form-input mt-1 block w-full">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="videos">Videos:</label>
            <input type="file" id="videos" 
            x-ref="videos" 
            accept="video/*" 
            @change="handleFileChange" 
            multiple class="form-input mt-1 block w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
        <div x-show="loading" class="mt-4">Uploading...</div>
        <div x-show="success" class="mt-4 text-green-500">Files uploaded successfully!</div>
        <div x-show="error" class="mt-4 text-red-500">An error occurred while uploading files.</div>
    </form>
</div>

<script>
    function fileUploadHandler() {
        return {
            loading: false,
            success: false,
            error: false,
            handleFileChange(event) {
                // Handle file input change if necessary
            },
            async uploadFiles() {
                this.loading = true;
                this.success = false;
                this.error = false;

                let formData = new FormData();
                Array.from(this.$refs.images.files).forEach(file => formData.append('images[]', file));
                Array.from(this.$refs.videos.files).forEach(file => formData.append('videos[]', file));

                try {
                    const response = await fetch('/test-upload-image-video', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: formData
                    });

                    if (response.ok) {
                        this.success = true;
                    } else {
                        this.error = true;
                    }
                } catch (e) {
                    this.error = true;
                } finally {
                    this.loading = false;
                }
            }
        }
    }
</script>
</body>
</html>
