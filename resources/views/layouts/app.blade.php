<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="
    {show:true, 
    deleteModal: false, 
    previewModal: false,
    previewCacModal: false,
    darkMode: localStorage.getItem('darkMode') === 'true', 
    sidebarOpen: false, textToCopy:  '{{Auth::user()->uuid}}', 
     copied: false }"
    :class="{ 'dark': darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Agenoresource') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Nanum+Gothic&display=swap" rel="stylesheet">      
      <style>

        .hidden { display: none; }
        .active { display: block; }
        .progress-bar {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            height: 2px;
            width: 100%;
            background-color: #3b82f6; /* Tailwind blue-500 */
            transition: width 0.3s ease;
        }
            
.nanum-gothic-regular {
  font-family: "Nanum Gothic", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.nanum-gothic-bold {
  font-family: "Nanum Gothic", sans-serif;
  font-weight: 700;
  font-style: normal;
}


.nanum-gothic-extrabold {
  font-family: "Nanum Gothic", sans-serif;
  font-weight: 800;
  font-style: normal;
}

        </style>
        
        @livewireStyles
        @vite(['resources/css/app.css','resources/css/swiper.css'])
    </head>
    <body class="font-sans antialiased overflow-x-hidden" 
    :class="deleteModal || previewModal ? 'overflow-hidden' :  '' "  @keydown.escape="deleteModal = false; previewModal = false">

@if (session('success'))
<div 
x-init="setTimeout(() => { show = false }, 5000)" 
x-show="show" 
x-transition:enter="transition ease-out duration-300" 
x-transition:enter-start="opacity-0 transform translate-y-4" 
x-transition:enter-end="opacity-100 transform translate-y-0" 
x-transition:leave="transition ease-in duration-300" 
x-transition:leave-start="opacity-100 transform translate-y-0" 
x-transition:leave-end="opacity-0 transform translate-y-4"
class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-md"
>
{{ session('success') }}
</div>
@endif



        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-2 px-2 sm:px-6 lg:px-8 flex justify-between items-center">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

    
<script>
    function imageUploader() {
        return {
            files: [],
            isDragging: false,
            successMessage: '',
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
                    const url = URL.createObjectURL(file);
                    this.files.push({ file, url });
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
                    formData.append('images[]', fileObj.file);
                });

                try {
                    const response = await fetch('{{ route('post.sale.assets') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });

                    if (response.ok) {
                        this.successMessage = 'Images uploaded successfully!';
                        this.files = [];
                        this.updateFileInput();
                    } else {
                        const errorData = await response.json();
                        this.errorMessage = errorData.message || 'Something went wrong. Please try again.';
                    }
                } catch (error) {
                    this.errorMessage = 'Something went wrong. Please try again.';
                }
            }
        }
    }
</script>

<script>
    function videoUploader() {
        return {
            videos: [],
            dropHandler(event) {
                const files = Array.from(event.dataTransfer.files);
                this.processFiles(files);
            },
            fileHandler(event) {
                const files = Array.from(event.target.files);
                this.processFiles(files);
            },
            processFiles(files) {
                files.forEach(file => {
                    if (file.type.startsWith('video/')) {
                        const url = URL.createObjectURL(file);
                        this.videos.push({ name: file.name, url: url, file: file });
                    }
                });
            },
        };
    }
    </script>

 {{-- <script>
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
                const formData = new FormData();
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
                        this.files.forEach((fileObj, index) => {
                    formData.append('videos[]', fileObj.file);
                });
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
                    const response = await fetch('{{ route('post.sale.assets') }}', {
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
</script> --}}

{{-- 
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('assetForm');
    
        Object.keys(localStorage).forEach(key => {
            const input = document.querySelector(`#assetForm [name="${key}"]`);
            if (input) {
                if (input.type === 'radio') {
                    input.checked = localStorage.getItem(key) === input.value;
                } else {
                    input.value = localStorage.getItem(key);
                }
            }
        });
    
        form.addEventListener('input', function(event) {
            if (event.target.name) {
                if (event.target.type === 'radio' && event.target.checked) {
                    localStorage.setItem(event.target.name, event.target.value);
                } else if (event.target.type !== 'radio') {
                    localStorage.setItem(event.target.name, event.target.value);
                }
            }
        });
        
        form.addEventListener('click', function(event) {
            if (event.target.name) {
                if (event.target.type === 'radio' && event.target.checked) {
                    localStorage.setItem(event.target.name, event.target.value);
                } else if (event.target.type !== 'radio') {
                    localStorage.setItem(event.target.name, event.target.value);
                }
            }
        });
    
        form.addEventListener('submit', function() {
            Object.keys(localStorage).forEach(key => {
            const input = document.querySelector(`#assetForm [name="${key}"]`);
            if (input) {
                input.value = '';
            }
        });
        });
    });

    </script> --}}

    @livewireScripts
    </body>

    <script src="{{asset('js/swiper.js')}}"></script>
<script>
    localStorage.removeItem('darkMode');
  document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.swiper-container', {
          loop: true,
          autoplay: {
              delay: 3000, 
              disableOnInteraction: false,
          },
          pagination: {
              el: '.swiper-pagination',
              clickable: true,
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
      });
  });
</script>
</html>
