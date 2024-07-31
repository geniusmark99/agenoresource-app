@if ($user->govt_id)

<div class="mt-6 space-y-6 w-full" >
<div class="rounded-sm border border-gray-300 bg-white shadow-default dark:border-gray-700 dark:bg-gray-900">
<div class="border-b border-gray-300 py-4 px-7 dark:border-gray-700">
<h3 class="font-medium text-black dark:text-white">
Govt Issued ID:
</h3>
</div>
<div class="p-7">  
<div class="relative mb-5 block w-full cursor-pointer appearance-none rounded border-2 border-dashed border-blue-600 bg-gray py-4 px-4 bg-blue-400/5 dark:bg-blue-500/5 sm:py-7.5">
{{-- <img src="{{ asset('storage/user_govt_id/mitchel-conn-govt_id.png') }}" alt="Government ID" class="w-full  h-[200px] rounded-lg object-cover"> --}}
<img src="{{  asset(Storage::url($user->govt_id)) }}" alt="Government ID" class="w-full  h-[200px] rounded-lg object-cover">
</div> 
{{-- {{ Storage::url($user->govt_id) }} 


<img src="http://127.0.0.1:8000/public/" alt="Government ID" class="w-full  h-[200px] rounded-lg object-cover">
--}}

<div class="mt-2 flex gap-x-10">
<form method="post" action="{{ route('destroy.govtid') }}" class="">
@csrf
@method('delete')
<button type="button" @click="deleteModal = true"  class="group bg-red-500 text-white px-4 py-2 rounded outline-none border-none ring-0 flex items-center gap-x-1">
Delete
<svg class="size-5 fill-white group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
<path d="M24 4C20.491685 4 17.570396 6.6214322 17.080078 10L10.238281 10 A 1.50015 1.50015 0 0 0 9.9804688 9.9785156 A 1.50015 1.50015 0 0 0 9.7578125 10L6.5 10 A 1.50015 1.50015 0 1 0 6.5 13L8.6386719 13L11.15625 39.029297C11.427329 41.835926 13.811782 44 16.630859 44L31.367188 44C34.186411 44 36.570826 41.836168 36.841797 39.029297L39.361328 13L41.5 13 A 1.50015 1.50015 0 1 0 41.5 10L38.244141 10 A 1.50015 1.50015 0 0 0 37.763672 10L30.919922 10C30.429604 6.6214322 27.508315 4 24 4 z M 24 7C25.879156 7 27.420767 8.2681608 27.861328 10L20.138672 10C20.579233 8.2681608 22.120844 7 24 7 z M 11.650391 13L36.347656 13L33.855469 38.740234C33.730439 40.035363 32.667963 41 31.367188 41L16.630859 41C15.331937 41 14.267499 40.033606 14.142578 38.740234L11.650391 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5L19 34.5 A 1.50015 1.50015 0 1 0 22 34.5L22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5L26 34.5 A 1.50015 1.50015 0 1 0 29 34.5L29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z"/>
</svg>
</button>
<template x-if="true">
<div  x-show="deleteModal" 
class="fixed inset-0 flex items-center justify-center z-[1000]">
<div class="fixed inset-0 bg-black opacity-50" @click="deleteModal = false"></div>
<div x-show="deleteModal"
x-transition:enter="transition ease-out duration-300 transform" 
x-transition:enter-start="scale-95 opacity-0" 
x-transition:enter-end="scale-100 opacity-100" 
x-transition:leave="transition ease-in duration-200 transform" 
x-transition:leave-start="scale-100 opacity-100" 
x-transition:leave-end="scale-95 opacity-0"
class="bg-white dark:bg-neutral-900 rounded-lg shadow-lg w-full max-w-[400px] lg:mx-auto mt-20 lg:mt-0 absolute border dark:border-neutral-700">
<div class="flex flex-col justify-between shadow-sm px-4 py-4 mx-4">
<div class="flex justify-between items-center my-2">
<h1 class="text-xl font-semibold text-neutral-600 dark:text-neutral-200">Are you sure?</h1>
<button type="button" @click="deleteModal = false" 
class="flex justify-center group items-center rounded-full size-7 p-1.5 bg-red-400 text-white dark:bg-neutral-700
 hover:bg-red-500 dark:hover:bg-rose-500 *:dark:hover:fill-rose-300">
 &#x2715;
</button>
</div>
<p class="dark:text-neutral-300">Are you sure want to delete your Govt ID? </p>
<div class="mt-2">
<div class="font-bold">Note:</div>  
<ul class="list-decimal">
<li>
<span class="italic text-sm">
Your Govt ID is required for verification
</span></li>
<li>
<span class="italic text-sm">
Your Govt ID will be removed from our database storage 
</span></li>
</ul>

</div>

<div class="mt-5 flex justify-end items-center gap-x-2">
<div type="button" @click="deleteModal = false" class=" cursor-pointer py-1 md:py-1.5 px-2 text-xs md:text-sm rounded-lg border shadow-sm dark:border-neutral-700">Cancel</div>
<button type="submit" class="py-1 md:py-1.5 px-2 text-xs md:text-sm rounded-lg bg-red-500 text-white">Yes, I'm sure</button>
</div>
</div>
</div>
</div>
</template>
</form>


<button type="button" @click="previewModal = true"  class="group bg-ageno-2 text-white px-4 py-2 rounded outline-none border-none ring-0 flex items-center gap-x-1">
  Preview

  <svg class="size-5 fill-white group-hover:rotate-12"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <path d="M39.470703 6.9863281 A 1.50015 1.50015 0 0 0 39.310547 7L25.5 7 A 1.50015 1.50015 0 1 0 25.5 10L35.878906 10L10 35.878906L10 25.5 A 1.50015 1.50015 0 0 0 8.4765625 23.978516 A 1.50015 1.50015 0 0 0 7 25.5L7 39.277344 A 1.50015 1.50015 0 0 0 8.7207031 41L22.5 41 A 1.50015 1.50015 0 1 0 22.5 38L12.121094 38L38 12.121094L38 22.5 A 1.50015 1.50015 0 1 0 41 22.5L41 8.6738281 A 1.50015 1.50015 0 0 0 39.470703 6.9863281 z"/>
  </svg>
  </button>
  <template x-if="true">
    <div  x-show="previewModal" 
    class="fixed inset-0 flex items-center justify-center z-[1000]">
    <div class="fixed inset-0 bg-black opacity-50" @click="previewModal = false"></div>
    <div x-show="previewModal"
    x-transition:enter="transition ease-out duration-300 transform" 
    x-transition:enter-start="scale-95 opacity-0" 
    x-transition:enter-end="scale-100 opacity-100" 
    x-transition:leave="transition ease-in duration-200 transform" 
    x-transition:leave-start="scale-100 opacity-100" 
    x-transition:leave-end="scale-95 opacity-0"
    class="px-6 dark:bg-neutral-900 rounded-lg shadow-lg min-w-[350px] max-w-[700px] lg:mx-auto mt-20 lg:mt-0 
    absolute outset-none dark:border-neutral-700">
    <button type="button" @click="previewModal = false" 
    class="flex justify-center group absolute right-2 items-center rounded-full size-7 p-1.5 bg-red-400 text-white dark:bg-neutral-700
    hover:bg-red-500 dark:hover:bg-rose-500 *:dark:hover:fill-rose-300">
    &#x2715;
    </button>
    <div class="flex flex-col justify-between shadow-sm p-2 w-full min-w-full overflow-x-hidden overflow-y-auto h-screen">
      <img src="{{ Storage::url($user->govt_id) }}" alt="Government ID" class="w-full h-full rounded-2xl object-contain">
    </div>
    </div>
    </div>
  </template>
</div>

</div>

</div>

</div>


@else

<form  class="mt-6 space-y-6 w-full" 
wire:submit="savePhoto"
x-data="{ uploading: false, progress: 0,show:true }"
x-on:livewire-upload-start="uploading = true"
x-on:livewire-upload-finish="uploading = false"
x-on:livewire-upload-cancel="uploading = false"
x-on:livewire-upload-error="uploading = false"
x-on:livewire-upload-progress="progress = $event.detail.progress"
>

@if (session('message'))
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
{{ session('message') }}
</div>
@endif

<div class="rounded-sm border border-gray-300 bg-white shadow-default dark:border-gray-700 dark:bg-gray-900">
<div class="border-b border-gray-300 py-4 px-7 dark:border-gray-700">
<h3 class="font-medium text-black dark:text-white">
Govt Issued ID:
</h3>
</div>

<div class="p-7" 
x-data="{ 
previewUrl: './images/user-profile.svg',
show:false,
updatePreview(event) {
const file = event.target.files[0];
if (file) {
this.show= true;
this.previewUrl = URL.createObjectURL(file);
}
},
clearPreview() {
this.show= false;
this.previewUrl = './images/user-profile.svg';
this.$refs.fileInput.value = '';
}
}" 
>
<div class="mb-4 flex items-center gap-3 justify-center">

<figure class="max-w-lg flex justify-center items-center relative">
<img class="size-28 max-w-full rounded-lg" :src="previewUrl" alt="User Govt ID">
<figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400"></figcaption>
</figure>

<div wire:loading wire:target="photo" class="absolute">
<svg aria-hidden="true" class="inline w-8 h-8 text-ageno-2 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
  <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
</svg>
</div>

</div>


<div id="FileUpload" class="relative mb-5 block w-full cursor-pointer appearance-none rounded border-2 border-dashed border-blue-600 bg-gray py-4 px-4 bg-blue-400/5 dark:bg-blue-500/5 sm:py-7.5">

<input type="file" accept="image/*" wire:model="photo"  @change="updatePreview" x-ref="fileInput"
class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none">
<div class="flex flex-col items-center justify-center space-y-3 dark:text-gray-200 font-thin">
<span class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-gray-500 dark:bg-gray-800">
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.99967 9.33337C2.36786 9.33337 2.66634 9.63185 2.66634 10V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H12.6663C12.8431 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V10C13.333 9.63185 13.6315 9.33337 13.9997 9.33337C14.3679 9.33337 14.6663 9.63185 14.6663 10V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V10C1.33301 9.63185 1.63148 9.33337 1.99967 9.33337Z" fill="#3C50E0"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.5286 1.52864C7.78894 1.26829 8.21106 1.26829 8.4714 1.52864L11.8047 4.86197C12.0651 5.12232 12.0651 5.54443 11.8047 5.80478C11.5444 6.06513 11.1223 6.06513 10.8619 5.80478L8 2.94285L5.13807 5.80478C4.87772 6.06513 4.45561 6.06513 4.19526 5.80478C3.93491 5.54443 3.93491 5.12232 4.19526 4.86197L7.5286 1.52864Z" fill="#3C50E0"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.99967 1.33337C8.36786 1.33337 8.66634 1.63185 8.66634 2.00004V10C8.66634 10.3682 8.36786 10.6667 7.99967 10.6667C7.63148 10.6667 7.33301 10.3682 7.33301 10V2.00004C7.33301 1.63185 7.63148 1.33337 7.99967 1.33337Z" fill="#3C50E0"></path>
</svg>
</span>
<p class="text-sm font-medium">
<span class="text-blue-500">Click to upload your Govt ID</span>
or drag and drop
</p>
<p class="mt-1.5 text-xs font-medium text-ageno-2 italic">
Let your image be either SVG, PNG, JPG format
</p>    

</div>
</div> 

<div class="flex justify-end gap-4 mt-4">
<button type="button" @click="clearPreview" class="flex justify-center rounded border border-gray-400 t py-2 px-6 font-medium text-black hover:shadow-md dark:border-gray-600 dark:text-white" >
Cancel
</button>
<button class="flex justify-center rounded bg-blue-600 py-2 px-6 font-medium text-white hover:bg-opacity-90" 
:disabled="!show" :class="!show ? 'cursor-not-allowed' : 'cursor-pointer'"
type="submit">
Save
</button>
</div>

</div>

</div>

</form>
@endif


