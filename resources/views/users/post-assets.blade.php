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
        border: 2px dashed #007BFF;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        color: #007BFF;
        font-size: 18px;
        margin: 0 auto 20px;

        /* margin: 20px auto; */
        width: 100%;
        max-width: 600px;
        transition: background-color 0.3s, border-color 0.3s;
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
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight whitespace-nowrap md:ml-16 lg:ml-24 ">
    {{ __('Post Assets') }}
    </h2>
    <a href="{{ route('user.asset') }}" class="z-[20] mb-5 *:hover:translate-x-2 *:transition-all bg-white items-center border border-transparent transition-[border-color] hover:border-gray-300 dark:hover:border-gray-600 hover:shadow-md dark:border-gray-700 text-gray-900 dark:text-gray-400 shadow-sm dark:bg-gray-800 flex justify-between w-40 text-sm rounded-md py-1 px-3">
        <svg class="size-4 fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
            <path d="M24.5 4C23.516256 4 22.528126 4.3246636 21.714844 4.9648438L16.714844 8.9042969C15.633017 9.7568722 15 11.062346 15 12.439453L15 19.470703C15 21.385658 16.585045 22.970703 18.5 22.970703L30.5 22.970703C32.414955 22.970703 34 21.385658 34 19.470703L34 12.439453C34 11.062346 33.366983 9.7568722 32.285156 8.9042969L27.285156 4.9648438C26.471874 4.3246635 25.483744 4 24.5 4 z M 24.5 7C24.828256 7 25.15297 7.1044457 25.429688 7.3222656L30.427734 11.261719C30.789908 11.547143 31 11.97856 31 12.439453L31 19.470703C31 19.765748 30.795045 19.970703 30.5 19.970703L18.5 19.970703C18.204955 19.970703 18 19.765748 18 19.470703L18 12.439453C18 11.97856 18.210092 11.547143 18.572266 11.261719L23.570312 7.3222656C23.84703 7.1044457 24.171744 7 24.5 7 z M 42.28125 14.998047C41.324668 14.998047 40.373154 15.377069 39.720703 16.041016C39.068252 16.704963 38.716171 17.576234 38.580078 18.498047C38.452033 19.365346 38.096638 21.821277 37.748047 24.224609C37.354031 24.089754 36.944249 24.009778 36.53125 24.009766C35.576706 24.009737 34.622277 24.368788 33.902344 25.087891 A 1.50015 1.50015 0 0 0 33.902344 25.089844L31.605469 27.384766C30.210318 28.779917 29.278338 29.286135 28.341797 29.742188C27.405256 30.198239 26.312853 30.634413 25.232422 31.714844C24.956114 31.991152 24.718972 32.29435 24.5 32.609375C24.280797 32.293758 24.044276 31.989589 23.767578 31.712891C22.687147 30.632363 21.594744 30.19824 20.658203 29.742188C19.721662 29.286135 18.789682 28.779917 17.394531 27.384766L15.097656 25.087891C14.377723 24.368788 13.423294 24.009737 12.46875 24.009766C12.055702 24.009778 11.646011 24.090141 11.251953 24.224609C10.903377 21.820808 10.54794 19.365165 10.419922 18.498047C10.283829 17.576234 9.9317478 16.706916 9.2792969 16.042969C8.626846 15.379022 7.6753316 15 6.71875 15C4.9230808 15 3.4722463 16.33314 3.1386719 18.039062 A 1.50015 1.50015 0 0 0 3.0019531 18.634766L3 18.691406L3.0058594 18.691406C3.0057829 18.701062 3 18.709078 3 18.71875 A 1.50015 1.50015 0 0 0 3.015625 18.917969C3.4587519 24.042701 3.6452349 27.325706 3.9082031 29.566406C4.1743047 31.833805 4.5737829 33.331595 5.6582031 34.416016C7.7574566 36.516158 9.4240866 37.845004 11.017578 39.181641C12.979637 40.826792 13 41.979085 13 42.5 A 1.50015 1.50015 0 1 0 16 42.5C16 41.368915 15.515254 39.037661 12.945312 36.882812C11.313129 35.513721 9.7654401 34.282037 7.7792969 32.294922C7.3857171 31.901342 7.1313672 31.301398 6.8867188 29.216797C6.6460967 27.166504 6.4537347 23.827998 6.0117188 18.707031C6.0214073 18.303004 6.3111186 18 6.71875 18C6.9871684 18 7.0410759 18.04323 7.140625 18.144531C7.240174 18.245834 7.384265 18.484313 7.4511719 18.9375C7.6519149 20.297213 8.7851564 28.109375 8.7851562 28.109375 A 1.50015 1.50015 0 0 0 8.8125 28.263672C8.9242247 29.027939 9.2581446 29.764003 9.8398438 30.345703L13.498047 34.005859 A 1.50015 1.50015 0 1 0 15.619141 31.884766L11.960938 28.224609C11.854623 28.118295 11.800714 27.99248 11.771484 27.863281 A 1.50015 1.50015 0 0 0 11.753906 27.679688C11.753906 27.679688 11.751961 27.662166 11.751953 27.662109C11.765408 27.500477 11.829187 27.340887 11.960938 27.208984C12.25374 26.916182 12.682429 26.917096 12.976562 27.210938L15.271484 29.505859C16.905333 31.139708 18.287291 31.925006 19.34375 32.439453C20.400209 32.953901 20.979915 33.167415 21.646484 33.833984C22.546133 34.733633 22.990234 36.054878 22.990234 38.457031C22.990234 40.699798 22.999925 42.478381 23 42.492188C23 42.492241 23 42.507813 23 42.507812 A 1.50015 1.50015 0 0 0 23.001953 42.539062 A 1.50015 1.50015 0 0 0 23.005859 42.65625 A 1.50015 1.50015 0 0 0 23.007812 42.666016 A 1.50015 1.50015 0 0 0 23.027344 42.806641 A 1.50015 1.50015 0 0 0 23.064453 42.951172 A 1.50015 1.50015 0 0 0 23.109375 43.082031 A 1.50015 1.50015 0 0 0 23.142578 43.154297 A 1.50015 1.50015 0 0 0 23.175781 43.226562 A 1.50015 1.50015 0 0 0 23.1875 43.246094 A 1.50015 1.50015 0 0 0 23.255859 43.355469 A 1.50015 1.50015 0 0 0 23.259766 43.363281 A 1.50015 1.50015 0 0 0 23.345703 43.476562 A 1.50015 1.50015 0 0 0 23.441406 43.582031 A 1.50015 1.50015 0 0 0 23.472656 43.609375 A 1.50015 1.50015 0 0 0 23.558594 43.6875 A 1.50015 1.50015 0 0 0 23.679688 43.775391 A 1.50015 1.50015 0 0 0 23.796875 43.845703 A 1.50015 1.50015 0 0 0 23.869141 43.878906 A 1.50015 1.50015 0 0 0 23.943359 43.912109 A 1.50015 1.50015 0 0 0 23.966797 43.921875 A 1.50015 1.50015 0 0 0 24.085938 43.962891 A 1.50015 1.50015 0 0 0 24.087891 43.962891 A 1.50015 1.50015 0 0 0 24.09375 43.964844 A 1.50015 1.50015 0 0 0 24.234375 43.996094 A 1.50015 1.50015 0 0 0 24.365234 44.013672 A 1.50015 1.50015 0 0 0 24.369141 44.013672 A 1.50015 1.50015 0 0 0 24.482422 44.017578 A 1.50015 1.50015 0 0 0 24.53125 44.019531 A 1.50015 1.50015 0 0 0 24.59375 44.015625 A 1.50015 1.50015 0 0 0 24.666016 44.011719 A 1.50015 1.50015 0 0 0 24.681641 44.009766 A 1.50015 1.50015 0 0 0 24.705078 44.005859 A 1.50015 1.50015 0 0 0 24.830078 43.982422 A 1.50015 1.50015 0 0 0 24.974609 43.943359 A 1.50015 1.50015 0 0 0 24.980469 43.941406 A 1.50015 1.50015 0 0 0 25.113281 43.888672 A 1.50015 1.50015 0 0 0 25.248047 43.820312 A 1.50015 1.50015 0 0 0 25.359375 43.75 A 1.50015 1.50015 0 0 0 25.373047 43.740234 A 1.50015 1.50015 0 0 0 25.398438 43.71875 A 1.50015 1.50015 0 0 0 25.490234 43.646484 A 1.50015 1.50015 0 0 0 25.597656 43.541016 A 1.50015 1.50015 0 0 0 25.693359 43.429688 A 1.50015 1.50015 0 0 0 25.695312 43.427734 A 1.50015 1.50015 0 0 0 25.701172 43.419922 A 1.50015 1.50015 0 0 0 25.779297 43.302734 A 1.50015 1.50015 0 0 0 25.84375 43.1875 A 1.50015 1.50015 0 0 0 25.851562 43.171875 A 1.50015 1.50015 0 0 0 25.904297 43.048828 A 1.50015 1.50015 0 0 0 25.910156 43.033203 A 1.50015 1.50015 0 0 0 25.949219 42.90625 A 1.50015 1.50015 0 0 0 25.953125 42.890625 A 1.50015 1.50015 0 0 0 25.980469 42.759766 A 1.50015 1.50015 0 0 0 25.990234 42.669922 A 1.50015 1.50015 0 0 0 25.998047 42.59375 A 1.50015 1.50015 0 0 0 26 42.509766C26 42.509766 26 42.492255 26 42.492188C26.000084 42.476655 26.009766 40.698717 26.009766 38.457031C26.009766 36.054878 26.453867 34.735587 27.353516 33.835938C28.020085 33.169367 28.599791 32.953901 29.65625 32.439453C30.712709 31.925006 32.094667 31.139708 33.728516 29.505859L36.023438 27.210938C36.317571 26.917143 36.74626 26.918135 37.039062 27.210938C37.170295 27.342321 37.234183 27.501134 37.248047 27.662109C37.24804 27.662154 37.246094 27.677734 37.246094 27.677734 A 1.50015 1.50015 0 0 0 37.228516 27.869141C37.198831 27.997 37.144354 28.121271 37.039062 28.226562L33.380859 31.884766 A 1.50015 1.50015 0 1 0 35.501953 34.005859L39.160156 30.347656C39.745208 29.762604 40.079805 29.021344 40.189453 28.251953 A 1.50015 1.50015 0 0 0 40.214844 28.107422C40.214844 28.107422 41.348085 20.295259 41.548828 18.935547C41.615738 18.48236 41.759826 18.245834 41.859375 18.144531C41.958925 18.043228 42.012832 17.998047 42.28125 17.998047C42.690007 17.998047 42.982131 18.301278 42.990234 18.707031C42.548204 23.828135 42.353907 27.166472 42.113281 29.216797C41.868633 31.301398 41.614283 31.901342 41.220703 32.294922C39.23456 34.282037 37.686872 35.513721 36.054688 36.882812C33.484746 39.037661 33 41.368915 33 42.5 A 1.50015 1.50015 0 1 0 36 42.5C36 41.979085 36.02036 40.826792 37.982422 39.181641C39.575914 37.845004 41.242543 36.516158 43.341797 34.416016C44.426217 33.331595 44.825695 31.833805 45.091797 29.566406C45.354765 27.325706 45.541248 24.042701 45.984375 18.917969 A 1.50015 1.50015 0 0 0 46 18.716797C46 18.707097 45.994241 18.699113 45.994141 18.689453L46 18.689453L45.998047 18.634766 A 1.50015 1.50015 0 0 0 45.861328 18.035156C45.526693 16.33059 44.075944 14.998047 42.28125 14.998047 z" />
          </svg>
        Your asset(s)
    <svg class="size-3 fill-gray-400 dark:fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <path d="M4,26h35.172l-6.586,6.586c-0.781,0.781-0.781,2.047,0,2.828C32.977,35.805,33.488,36,34,36s1.023-0.195,1.414-0.586l10-10 C45.789,25.04,46,24.531,46,24s-0.211-1.039-0.586-1.414l-10-10c-0.781-0.781-2.047-0.781-2.828,0 c-0.781,0.781-0.781,2.047,0,2.828L39.172,22H4c-1.104,0-2,0.896-2,2S2.896,26,4,26z"/>
    </svg>
    </a>
@endsection

@section('app-content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="p-5 custom-scroller">
    <div class="flex justify-center items-center w-full my-2">
    @if (session('error'))
    <div class="text-center py-2 rounded-lg w-[300px]  bg-rose-500 text-rose-300">
    {{session('error')}}
    </div>
    @endif
    </div>
    @include('posts.partials.post-assets-sales')
    </div>
    </div>
</div>

@endsection

@section('app-script')

{{-- <script>
    const Id = (el) => document.getElementById(el);

    document.addEventListener('DOMContentLoaded', function () {
        const imageSelector = Id('image-selector'),
         imagePreviewContainer = Id('image-preview'),
         dropZone = Id('dropZone'),
         modal = Id('imageModal'),
         uploadButton = Id('upload-button'),
         modalImg = Id('largeImage'),
         closeModal = document.getElementsByClassName('close')[0],
        errorMessage = Id('error-message'),
        spinner = Id('spinner');
        let selectedImages = [];
        let currentImageIndex = -1;


        uploadButton.addEventListener('click', () => {
            imageSelector.click()
        });

        imageSelector.addEventListener('change', handleImageSelection);
        dropZone.addEventListener('dragover', handleDragOver);
        dropZone.addEventListener('drop', handleDrop);
        closeModal.addEventListener('click', () => closeModalFunction());
        document.addEventListener('keydown', handleKeyDown);

        function handleImageSelection(event) {
            const files = Array.from(event.target.files);
            processFiles(files);
            imageSelector.value = ''; 
        }

        function handleDragOver(event) {
            event.preventDefault(); 
            dropZone.classList.add('drag-over');
        }

        function handleDrop(event) {
            event.preventDefault(); 
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