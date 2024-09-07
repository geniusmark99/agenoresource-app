@extends('layouts.app')
@section('app-header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
{{ __('Profile') }}
</h2>
<x-menu-desc-widget>
Change,Edit your Profile
</x-menu-desc-widget>
@endsection


@section('app-content')
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
<div class="max-w-[1000px]"> 
@include('profile.partials.update-profile-information-form')
</div>
</div>

<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
<div class="max-w-[800px]">
@include('profile.partials.update-password-form')
</div>
</div>

<div  id="verified-documents" class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
<div class="max-w-[1000px"> 
@include('profile.partials.update-verified-documents-information-form')
</div>
</div>

{{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
<div class="max-w-[800px]">
@include('profile.partials.delete-user-form')
</div>
</div> --}}
</div>
</div>
@endsection

@section('app-script')
<script>



document.addEventListener('DOMContentLoaded', function () {

const MAX_SIZE = 5 * 1024 * 1024; // 5MB in bytes

document.getElementById('govt_id').addEventListener('change', function(event) {
const file = event.target.files[0];
const errorMsg = document.getElementById('errorMsg');

if (file) {
if (file.size > MAX_SIZE) {
errorMsg.textContent = 'The file is too large. Please select a file smaller than 5MB.';
event.target.value = '';
} else {
errorMsg.textContent = ''; 
}
}
});

});

//     const ninDropArea = document.getElementById('ninDropArea');
//     const ninInput = document.getElementById('ninInput');
//     const ninPreview = document.getElementById('ninPreview');
//     const ninUpdateButton = document.getElementById('ninUpdateButton');

//     const cacDropArea = document.getElementById('cacDropArea');
//     const cacInput = document.getElementById('cacInput');
//     const cacPreview = document.getElementById('cacPreview');
//     const cacUpdateButton = document.getElementById('cacUpdateButton');

//     ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
//         ninDropArea.addEventListener(eventName, preventDefaults, false);
//         cacDropArea.addEventListener(eventName, preventDefaults, false);
//     });

//     ['dragenter', 'dragover'].forEach(eventName => {
//         ninDropArea.addEventListener(eventName, () => highlight(ninDropArea), false);
//         cacDropArea.addEventListener(eventName, () => highlight(cacDropArea), false);
//     });

//     ['dragleave', 'drop'].forEach(eventName => {
//         ninDropArea.addEventListener(eventName, () => unhighlight(ninDropArea), false);
//         cacDropArea.addEventListener(eventName, () => unhighlight(cacDropArea), false);
//     });

//     ninDropArea.addEventListener('drop', handleDrop.bind(null, ninInput, ninPreview, ninUpdateButton));
//     cacDropArea.addEventListener('drop', handleDrop.bind(null, cacInput, cacPreview, cacUpdateButton));

//     ninInput.addEventListener('change', () => handleFiles(ninInput.files, ninPreview, ninUpdateButton));
//     cacInput.addEventListener('change', () => handleFiles(cacInput.files, cacPreview, cacUpdateButton));

//     function preventDefaults(e) {
//         e.preventDefault();
//         e.stopPropagation();
//     }

//     function highlight(area) {
//         area.classList.add('border-blue-500');
//     }

//     function unhighlight(area) {
//         area.classList.remove('border-blue-500');
//     }

//     function handleDrop(input, preview, updateButton, e) {
//         let dt = e.dataTransfer;
//         let files = dt.files;
//         input.files = files;
//         handleFiles(files, preview, updateButton);
//     }

//     function handleFiles(files, preview, updateButton) {
//         if (files.length > 0) {
//             const file = files[0];
//             const reader = new FileReader();

//             reader.onload = function (e) {
//                 preview.src = e.target.result;
//                 preview.classList.remove('hidden');
//                 updateButton.classList.remove('hidden');
//             };

//             reader.readAsDataURL(file);
//             uploadFile(file, updateButton, preview);
//         }
//     }

//     function uploadFile(file, updateButton, preview) {
//         const formData = new FormData();
//         formData.append('file', file);

//         fetch('/upload-documents', {
//             method: 'POST',
//             body: formData,
//             headers: {
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             }
//         })
//         .then(response => response.json())
//         .then(data => {
//             console.log(data);
//         })
//         .catch(error => {
//             console.error(error);
//         });
//     }
// });

</script>
@endsection