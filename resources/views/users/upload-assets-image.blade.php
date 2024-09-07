@extends('layouts.app')
@section('app-style')
<style>

    input[type="file"] {
        display: block;
        margin: 20px auto;
        font-size: 16px;
    }

    .image-preview {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-10px);
        }

        60% {
            transform: translateY(-5px);
        }
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-5px);
        }

        50% {
            transform: translateX(5px);
        }

        75% {
            transform: translateX(-5px);
        }
    }

    .image-preview div {
        position: relative;
        width: 120px;
        height: 120px;
        border: 2px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        animation: fadeIn 0.5s ease-in-out;
    }

    .image-preview div:hover {
        /* animation: bounce 1s; */
    }

    .image-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .delete-icon {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: rgba(255, 0, 0, 0.7);
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .delete-icon:hover {
        background-color: rgba(255, 0, 0, 1);
        animation: shake 0.5s 1;
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        margin: 15% auto;
        display: block;
        max-width: 50%;
        max-height: 80%;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .close {
        position: absolute;
        top: 10px;
        right: 25px;
        color: #ffffff;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* Hide the default file input */
    #image-selector {
        display: none;
    }

    /* Style the custom upload button */
    .custom-upload {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
        margin: 20px auto;
    }

    .custom-upload:hover {
        background-color: #0056b3;
    }

    .custom-upload:active {
        background-color: #004494;
    }

        /* Drag-and-drop area */
        .drop-zone {
        border: 2px dashed rgb(0, 123, 255,0.3);
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        color: #007BFF;
        font-size: 18px;
        transition: border-color 0.5s;
        margin: 0 auto 20px;
        cursor: pointer;
        width: 100%;
        max-width: 600px;
        height: 200px;
        display: flex;
        justify-content: center; 
        align-items: center;
        transition: background-color 0.3s, border-color 0.3s;
        }

        @media (min-width: 1000px) {
        .drop-zone {
        height: 300px;
        }
        }

        .drop-zone:hover {
        border-color: #007BFF;
        }

    .drop-zone.drag-over {
        background-color: #e8f0ff;
        border-color: #0056b3;
    }

    .drop-zone p {
        margin: 0;
    }

    /* Error message styles */
    .error-message {
        color: #ff0000;
        font-size: 16px;
        text-align: center;
        margin: 10px auto;
    }

    /* Loading spinner styles */
    .spinner {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #007BFF;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
        margin: 20px auto;
        display: none;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
@endsection
@section('app-header')
<h2 class="font-semibold text-base text-gray-800 dark:text-gray-200 leading-tight md:ml-16 lg:ml-24">
{{ __('Upload Asset Image') }}
</h2>
<a href="{{ route('user.asset') }}" class="bg-blue-600 flex items-center gap-x-1 text-white bg-[url('https://preline.co/assets/svg/examples/abstract-1.svg')] bg-no-repeat bg-cover bg-center p-2 sm:p-2 rounded-lg text-center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-4 fill-white">
        <path d="M21.470703 8.9863281 A 1.50015 1.50015 0 0 0 20.439453 9.4394531L6.4394531 23.439453 A 1.50015 1.50015 0 0 0 6.4394531 25.560547L20.439453 39.560547 A 1.50015 1.50015 0 1 0 22.560547 37.439453L11.121094 26L40.5 26 A 1.50015 1.50015 0 1 0 40.5 23L11.121094 23L22.560547 11.560547 A 1.50015 1.50015 0 0 0 21.470703 8.9863281 z"/>
      </svg>
<div>Back</div>
</a>
@endsection


@section('app-content')

{{-- {{ $asset->pictures }} --}}
@if ($asset->pictures)
@foreach(json_decode($asset->pictures) as $picture)
<img src="{{ $picture }}" alt="Asset Picture" class="img-fluid">
@endforeach

@else
<div class="py-12">
    <input type="hidden" id="assetId" value="{{$assetImageId}}">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   {{-- COME HERE --}}

<form action="{{ route('cloudinary-image-upload',$assetImageId) }}" enctype="multipart/form-data">
<div class="mb-4 mx-10 relative flex flex-col justify-center">
<label for="pictures"></label>
<input type="file" name="pictures[]"  accept="image/*"  multiple />
{{-- id="image-selector" --}}
<div id="dropZone" class="drop-zone">
<p class="text-sm text-ageno flex items-center gap-x-2">
<svg class="size-6 fill-ageno" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
<path d="M8.5 8C6.019 8 4 10.019 4 12.5L4 31.5C4 33.981 6.019 36 8.5 36L13.746094 36L11.841797 33.773438C11.638797 33.537438 11.484516 33.274 11.353516 33L8.5 33C7.673 33 7 32.327 7 31.5L7 12.5C7 11.673 7.673 11 8.5 11L39.5 11C40.327 11 41 11.673 41 12.5L41 31.5C41 32.327 40.327 33 39.5 33L36 33L36 36L39.5 36C41.981 36 44 33.981 44 31.5L44 12.5C44 10.019 41.981 8 39.5 8L8.5 8 z M 20.476562 12.978516 A 1.50015 1.50015 0 0 0 19 14.5L19 16.5 A 1.50015 1.50015 0 1 0 22 16.5L22 14.5 A 1.50015 1.50015 0 0 0 20.476562 12.978516 z M 15.535156 15.035156 A 1.50015 1.50015 0 0 0 14.490234 17.611328L15.904297 19.025391 A 1.50015 1.50015 0 1 0 18.025391 16.904297L16.611328 15.490234 A 1.50015 1.50015 0 0 0 15.535156 15.035156 z M 25.419922 15.035156 A 1.50015 1.50015 0 0 0 24.388672 15.490234L22.974609 16.904297 A 1.50015 1.50015 0 1 0 25.095703 19.025391L26.509766 17.611328 A 1.50015 1.50015 0 0 0 25.419922 15.035156 z M 20.476562 19.978516 A 1.50015 1.50015 0 0 0 19 21.5L19 29L19 29.5L19 33.417969L15.640625 30.525391C15.102625 29.893391 14.155391 29.818375 13.525391 30.359375C12.895391 30.897375 12.822328 31.845609 13.361328 32.474609L19.861328 40.074219C19.872075 40.086853 19.885416 40.095236 19.896484 40.107422C20.733338 41.250027 22.074415 42 23.599609 42L28 42C31.314 42 34 39.314 34 36L34 29.5L34 29L34 28.5 A 1.50015 1.50015 0 0 0 32.476562 26.978516 A 1.50015 1.50015 0 0 0 31 28.5L31 29L30 29L30 28 A 1.50015 1.50015 0 0 0 28.476562 26.478516 A 1.50015 1.50015 0 0 0 27 28L27 29L26 29L26 27.5 A 1.50015 1.50015 0 0 0 24.476562 25.978516 A 1.50015 1.50015 0 0 0 23 27.5L23 29L22 29L22 21.5 A 1.50015 1.50015 0 0 0 20.476562 19.978516 z M 13.5 20 A 1.50015 1.50015 0 1 0 13.5 23L15.5 23 A 1.50015 1.50015 0 1 0 15.5 20L13.5 20 z M 25.5 20 A 1.50015 1.50015 0 1 0 25.5 23L27.5 23 A 1.50015 1.50015 0 1 0 27.5 20L25.5 20 z" />
</svg>
Click here select files, or Drag and drop images here</p>
</div>

<div class=" flex justify-center">
<button type="submit" id="upload-button" class="py-1.5 px-3 rounded-md bg-ageno
 text-white shadow-sm shadow-ageno/50 flex items-center gap-x-2">
 <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <path d="M24 7C16.51 7 10.330078 12.71 9.5800781 20L9 20C4.04 20 0 24.04 0 29C0 33.96 4.04 38 9 38L19.759766 38C19.589766 37.53 19.5 37.03 19.5 36.5L19.5 35L9 35C5.69 35 3 32.31 3 29C3 25.69 5.69 23 9 23L11 23C11.83 23 12.5 22.33 12.5 21.5C12.5 15.16 17.66 10 24 10C30.34 10 35.5 15.16 35.5 21.5C35.5 22.33 36.17 23 37 23L39 23C42.31 23 45 25.69 45 29C45 32.31 42.31 35 39 35L28.5 35L28.5 36.5C28.5 37.03 28.410234 37.53 28.240234 38L39 38C43.96 38 48 33.96 48 29C48 24.04 43.96 20 39 20L38.419922 20C37.669922 12.71 31.49 7 24 7 z M 23.925781 18.001953 A 1.50015 1.50015 0 0 0 22.976562 18.404297L15.476562 25.404297 A 1.50015 1.50015 0 1 0 17.523438 27.595703L22.5 22.953125L22.5 36.5 A 1.50015 1.50015 0 1 0 25.5 36.5L25.5 22.953125L30.476562 27.595703 A 1.50015 1.50015 0 1 0 32.523438 25.404297L25.023438 18.404297 A 1.50015 1.50015 0 0 0 23.925781 18.001953 z" fill="#ECE8E8" />
  </svg>
 Upload
</button>
</div>


<div id="error-message" class="error-message"></div>
<div id="spinner" class="spinner"></div>
<div class="image-preview" id="image-preview"></div>
<div id="imageModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="largeImage">
</div>
</div>
</form>


    </div>
</div>
@endif

@endsection

@section('app-script')
{{-- 
<script>
    const Id = (el) => document.getElementById(el);

    document.addEventListener('DOMContentLoaded', function () {
        const imageSelector = Id('image-selector'),
         imagePreviewContainer = Id('image-preview'),
         dropZone = Id('dropZone'),
         pictures = Id("pictures"),
         modal = Id('imageModal'),
         uploadButton = Id('upload-button'),
         modalImg = Id('largeImage'),
         closeModal = document.getElementsByClassName('close')[0],
        errorMessage = Id('error-message'),
        spinner = Id('spinner');
        let selectedImages = [];
        let currentImageIndex = -1;


        uploadButton.addEventListener('click',  async function() {
        const files = imageSelector.files;
        const assetId = document.getElementById('assetId').value;
        // if (files.length === 0) {
        //     alert('Please select at least one image.');
        //     return;
        // }

        // const formData = new FormData();
        // formData.append('asset_id', assetId);

        // for (let i = 0; i < files.length; i++) {
        //     formData.append('pictures[]', files[i]);
        // }

     



        });

        imageSelector.addEventListener('change', handleImageSelection);

        dropZone.addEventListener('click',()=>{
document.getElementById('image-selector').click();
        });
        dropZone.addEventListener('dragover', handleDragOver);
        dropZone.addEventListener('drop', handleDrop);
        closeModal.addEventListener('click', () => closeModalFunction());
        document.addEventListener('keydown', handleKeyDown);

        function handleImageSelection(event) {
            const files = Array.from(event.target.files);
            processFiles(files);
            imageSelector.value = ''; // Reset the input
        }

        function handleDragOver(event) {
            event.preventDefault(); // Prevent default behavior
            dropZone.classList.add('drag-over');
        }

        function handleDrop(event) {
            event.preventDefault(); // Prevent default behavior
            dropZone.classList.remove('drag-over');
            const files = Array.from(event.dataTransfer.files);
            processFiles(files);
        }

        function processFiles(files) {
            if (selectedImages.length + files.length > 3) {
                showError('You can only select up to 3 images.');
                return;
            }

            hideError();
            showSpinner();
            files.forEach(file => {
                if (selectedImages.length < 3) {
                    selectedImages.push(file);
                    previewImage(file);
                }
            });
        }

        function previewImage(file) {
            const reader = new FileReader();
            reader.onload = function (event) {
                const imgElement = document.createElement('div');
                imgElement.style.position = 'relative';

                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.cursor = 'pointer';
                img.onclick = () => openModal(event.target.result, selectedImages.indexOf(file));

                const deleteIcon = document.createElement('span');
                deleteIcon.textContent = '×';
                deleteIcon.classList.add('delete-icon');
                deleteIcon.onclick = () => deleteImage(file, imgElement);

                imgElement.appendChild(img);
                imgElement.appendChild(deleteIcon);
                imagePreviewContainer.appendChild(imgElement);
                hideSpinner();
            };
            reader.readAsDataURL(file);
        }

        function deleteImage(file, imgElement) {
            selectedImages = selectedImages.filter(img => img !== file);
            imgElement.remove();
        }

        function openModal(imageSrc, index) {
            currentImageIndex = index;
            modal.style.display = 'block';
            modalImg.src = imageSrc;
        }

        function closeModalFunction() {
            modal.style.display = 'none';
            currentImageIndex = -1;
        }

        function handleKeyDown(event) {
            if (modal.style.display === 'block') {
                if (event.key === 'Escape') {
                    closeModalFunction();
                } else if (event.key === 'ArrowRight') {
                    showNextImage();
                } else if (event.key === 'ArrowLeft') {
                    showPreviousImage();
                }
            }
        }

        function showNextImage() {
            if (currentImageIndex < selectedImages.length - 1) {
                currentImageIndex++;
                const nextImageFile = selectedImages[currentImageIndex];
                const reader = new FileReader();
                reader.onload = function (event) {
                    modalImg.src = event.target.result;
                };
                reader.readAsDataURL(nextImageFile);
            }
        }

        function showPreviousImage() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
                const prevImageFile = selectedImages[currentImageIndex];
                const reader = new FileReader();
                reader.onload = function (event) {
                    modalImg.src = event.target.result;
                };
                reader.readAsDataURL(prevImageFile);
            }
        }

        function showError(message) {
            errorMessage.textContent = message;
        }

        function hideError() {
            errorMessage.textContent = '';
        }

        function showSpinner() {
            spinner.style.display = 'block';
        }

        function hideSpinner() {
            spinner.style.display = 'none';
        }
    });

</script> --}}
@endsection