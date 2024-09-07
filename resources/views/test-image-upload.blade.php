<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
@vite(['resources/css/app.css'])
    <style>
  #dropArea {
      cursor: pointer;
      transition: border-color 0.3s ease;
  }
  #dropArea.dragover {
      border-color: #4a90e2;
  }
  #imagePreview img {
      max-width: 150px;
      max-height: 150px;
      object-fit: cover;
      margin: 5px;
  }

  .spinner {
    border: 4px solid rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    border-top: 4px solid #3498db;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }

  #successPopup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #28a745;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    z-index: 1000;
  }

  #loader {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 5px;
    z-index: 1000;
    text-align: center;
  }
</style>
<title>Document</title>
</head>
<body>
    
    <div class="container mx-auto mt-8 max-w-sm">
        <input type="hidden" id="userId" value="{{ auth()->user()->id }}">

        <h2 class="text-2xl font-bold mb-4">Upload Asset Images</h2>
    
        <div id="loader" style="display: none;">
            <div class="spinner"></div>
            <p>Uploading images, please wait...</p>
          </div>


          <div id="successPopup" style="display: none;">
            <p>Images uploaded successfully!</p>
          </div>

            <!-- Asset Upload Input -->
            {{-- <input type="file" id="assetImageInput" name="pictures[]" multiple accept="image/*" class="mb-4"> --}}
    
            <div class="border-dashed hover:border-ageno border-2 border-gray-300 p-6 rounded-lg text-center" id="dropArea">
                <p class="text-sm text-ageno">Click to select files, or Drag and drop images here</p>
                <input type="file" id="assetImageInput" name="pictures[]" class="hidden" multiple accept="image/*">
                <div id="imagePreview" class="flex flex-wrap mt-4"></div>
            </div>
            <!-- Submit Button for Asynchronous Upload -->
            <button type="button" id="uploadAssetBtn" class="bg-blue-500 text-white p-2 rounded mt-4">
                Upload Images
            </button>
    
        <div id="imagePreviewContainer" class="mt-6 grid grid-cols-3 gap-4">
        </div>
    </div>

    <script>

document.addEventListener('DOMContentLoaded', function() {
    const assetImageInput = document.getElementById('assetImageInput');
    const uploadAssetBtn = document.getElementById('uploadAssetBtn');
    const imagePreviewContainer = document.getElementById('imagePreviewContainer');
    const loader = document.getElementById('loader');
    const successPopup = document.getElementById('successPopup');
    const dropArea = document.getElementById('dropArea');
    const imagePreview = document.getElementById('imagePreview');
    const userId = document.getElementById('userId').value;

    let selectedFiles = [];

dropArea.addEventListener('click', () => {
assetImageInput.click();
});

assetImageInput.addEventListener('change', function () {
handleFiles(this.files);
})

dropArea.addEventListener('dragover', (e) => {
e.preventDefault();
dropArea.classList.add('dragover');
});


dropArea.addEventListener('dragleave', () => {
dropArea.classList.remove('dragover');
});


dropArea.addEventListener('drop', (e) => {
e.preventDefault();
dropArea.classList.remove('dragover');
handleFiles(e.dataTransfer.files);
});


        // Handle file preview and storage in selectedFiles
        function handleFiles(files) {

            if (selectedFiles.length + files.length > 3) {
            alert('You can only upload a maximum of 3 images.');
            return;
        }
        for (const file of files) {
            if (file.type.startsWith('image/')) {
                selectedFiles.push(file);
                const reader = new FileReader();
                reader.onload = (e) => {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    imagePreview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        }
    }


    uploadAssetBtn.addEventListener('click', async function() {
        const files = assetImageInput.files;
        const assetId = document.getElementById('userId').value;
        if (files.length === 0) {
            alert('Please select at least one image.');
            return;
        }

        // Show loader
        loader.style.display = 'block';

        // Create a FormData object to hold the files
        const formData = new FormData();
        formData.append('asset_id', assetId);

        for (let i = 0; i < files.length; i++) {
            formData.append('pictures[]', files[i]);
        }

        // Send AJAX request to Laravel to upload the files to Cloudinary
        try {
            const response = await fetch(`/post-test-upload-image/${assetId}`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')

                }
            });

            const result = await response.json();
            if (result.success) {
                loader.style.display = 'none';
                successPopup.style.display = 'block';
                displayUploadedImages(result.imageUrls);

                setTimeout(() => {
                    successPopup.style.display = 'none';
                }, 3000);

                selectedFiles = [];
                imagePreview.innerHTML = '';
            } else {
                alert('Error uploading images');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Error uploading images');
            loader.style.display = 'none'; // Hide lo
        }

    });

    // Function to display uploaded images
    function displayUploadedImages(imageUrls) {
        imagePreviewContainer.innerHTML = ''; // Clear any previous images
        imageUrls.forEach(url => {
            const img = document.createElement('img');
            img.src = url;
            img.alt = 'Uploaded Image';
            img.className = 'w-48 h-48 object-cover mb-4';
            imagePreviewContainer.appendChild(img);
        });
    }
});

    </script>
</body>
</html>