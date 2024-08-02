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
<link rel="stylesheet" href="{{ asset('css/swiper.css') }}"/>
{{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
{{-- <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Nanum+Gothic&display=swap" rel="stylesheet">       --}}
<link href="https://fonts.bunny.net/css?family=abeezee:400" rel="stylesheet" />


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

/* .nanum-gothic-regular {
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
} */


.ageno-font {
    font-family: 'ABeeZee', sans-serif;
}

.diamond-pattern-2 {
  background-image: url("data:image/svg+xml,%3Csvg width='180' height='180' viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M81.28 88H68.413l19.298 19.298L81.28 88zm2.107 0h13.226L90 107.838 83.387 88zm15.334 0h12.866l-19.298 19.298L98.72 88zm-32.927-2.207L73.586 78h32.827l.5.5 7.294 7.293L115.414 87l-24.707 24.707-.707.707L64.586 87l1.207-1.207zm2.62.207L74 80.414 79.586 86H68.414zm16 0L90 80.414 95.586 86H84.414zm16 0L106 80.414 111.586 86h-11.172zm-8-6h11.173L98 85.586 92.414 80zM82 85.586L87.586 80H76.414L82 85.586zM17.414 0L.707 16.707 0 17.414V0h17.414zM4.28 0L0 12.838V0h4.28zm10.306 0L2.288 12.298 6.388 0h8.198zM180 17.414L162.586 0H180v17.414zM165.414 0l12.298 12.298L173.612 0h-8.198zM180 12.838L175.72 0H180v12.838zM0 163h16.413l.5.5 7.294 7.293L25.414 172l-8 8H0v-17zm0 10h6.613l-2.334 7H0v-7zm14.586 7l7-7H8.72l-2.333 7h8.2zM0 165.414L5.586 171H0v-5.586zM10.414 171L16 165.414 21.586 171H10.414zm-8-6h11.172L8 170.586 2.414 165zM180 163h-16.413l-7.794 7.793-1.207 1.207 8 8H180v-17zm-14.586 17l-7-7h12.865l2.333 7h-8.2zM180 173h-6.613l2.334 7H180v-7zm-21.586-2l5.586-5.586 5.586 5.586h-11.172zM180 165.414L174.414 171H180v-5.586zm-8 5.172l5.586-5.586h-11.172l5.586 5.586zM152.933 25.653l1.414 1.414-33.94 33.942-1.416-1.416 33.943-33.94zm1.414 127.28l-1.414 1.414-33.942-33.94 1.416-1.416 33.94 33.943zm-127.28 1.414l-1.414-1.414 33.94-33.942 1.416 1.416-33.943 33.94zm-1.414-127.28l1.414-1.414 33.942 33.94-1.416 1.416-33.94-33.943zM0 85c2.21 0 4 1.79 4 4s-1.79 4-4 4v-8zm180 0c-2.21 0-4 1.79-4 4s1.79 4 4 4v-8zM94 0c0 2.21-1.79 4-4 4s-4-1.79-4-4h8zm0 180c0-2.21-1.79-4-4-4s-4 1.79-4 4h8z' fill='%236c10ff' fill-opacity='0.11' fill-rule='evenodd'/%3E%3C/svg%3E");
  }
</style>

@livewireStyles
@vite(['resources/css/app.css'])
</head>
<body class="ageno-font antialiased overflow-x-hidden" 
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
<x-verify-document-widget/>

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
@livewireScripts
</body>

<script src="{{asset('js/swiper.js')}}"></script>
<script src="{{asset('js/context_lock.js')}}"></script>
<script>
// localStorage.removeItem('darkMode');
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
