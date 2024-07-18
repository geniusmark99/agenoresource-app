<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-ageno-2 flex gap-x-1 dark:text-gray-200 leading-tight md:ml-16 lg:ml-24">
            Good day, {{ Auth::user()->firstname }}   <span class="hidden md:flex">{{ Auth::user()->lastname }}</span>

        </h2>

        <a href="{{ route('user.asset') }}" class="z-[20] mb-5 *:hover:translate-x-2 *:transition-all bg-white items-center border border-transparent transition-[border-color] hover:border-gray-300 dark:hover:border-gray-600 hover:shadow-md dark:border-gray-700 text-gray-900 dark:text-gray-400 shadow-sm dark:bg-gray-800 flex justify-between w-40 text-sm rounded-md py-1 px-3">
    
          View all your asset
          <svg class="size-3 fill-gray-400 dark:fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
            <path d="M4,26h35.172l-6.586,6.586c-0.781,0.781-0.781,2.047,0,2.828C32.977,35.805,33.488,36,34,36s1.023-0.195,1.414-0.586l10-10 C45.789,25.04,46,24.531,46,24s-0.211-1.039-0.586-1.414l-10-10c-0.781-0.781-2.047-0.781-2.828,0 c-0.781,0.781-0.781,2.047,0,2.828L39.172,22H4c-1.104,0-2,0.896-2,2S2.896,26,4,26z"/>
          </svg>
      
        </a>
   
    </x-slot>

<div class="py-4 lg:px-32">
<!-- Content -->
<div class="w-full">
<div class="p-4 sm:p-6 space-y-2 sm:space-y-6">
  @if (!Auth::user()->govt_id || !!Auth::user()->cac_document)
  <div class="flex mx-6 mb-10 justify-center items-center">

    <div class="bg-rose-500 fixed z-[3000] text-white  text-center items-center border border-transparent transition-[border-color] hover:border-gray-300 dark:hover:border-gray-600 hover:shadow-md dark:border-gray-700  dark:text-gray-400 shadow-sm dark:bg-gray-800 flex justify-between w-10/12 md:w-5/12 lg:w-6/12   rounded-md py-3 px-3">
    <div class="text-sm">
      Please upload your @if (!Auth::user()->govt_id) Govt issued ID, @endif @if (!Auth::user()->govt_id) CAC, @endif A Selfie and phone number for Verification

    </div>
     <a href="{{ route('profile.edit') }}#verified-documents" class="hover:bg-white group bg-rose-600 hover:text-rose-500 hover:shadow-lg transition-all flex gap-x-2 px-2 py-1 rounded-md items-center justify-center">
     Upload
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-5 fill-white group-hover:fill-rose-500">
        <path d="M24 7C16.51 7 10.330078 12.71 9.5800781 20L9 20C4.04 20 0 24.04 0 29C0 33.96 4.04 38 9 38L19.759766 38C19.589766 37.53 19.5 37.03 19.5 36.5L19.5 35L9 35C5.69 35 3 32.31 3 29C3 25.69 5.69 23 9 23L11 23C11.83 23 12.5 22.33 12.5 21.5C12.5 15.16 17.66 10 24 10C30.34 10 35.5 15.16 35.5 21.5C35.5 22.33 36.17 23 37 23L39 23C42.31 23 45 25.69 45 29C45 32.31 42.31 35 39 35L28.5 35L28.5 36.5C28.5 37.03 28.410234 37.53 28.240234 38L39 38C43.96 38 48 33.96 48 29C48 24.04 43.96 20 39 20L38.419922 20C37.669922 12.71 31.49 7 24 7 z M 23.925781 18.001953 A 1.50015 1.50015 0 0 0 22.976562 18.404297L15.476562 25.404297 A 1.50015 1.50015 0 1 0 17.523438 27.595703L22.5 22.953125L22.5 36.5 A 1.50015 1.50015 0 1 0 25.5 36.5L25.5 22.953125L30.476562 27.595703 A 1.50015 1.50015 0 1 0 32.523438 25.404297L25.023438 18.404297 A 1.50015 1.50015 0 0 0 23.925781 18.001953 z"/>
      </svg>
     </a>
    </div>
  </div>
  @endif

<!-- Grid -->
<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
  
<!-- Card -->
<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
<div class="p-4 md:p-5">
<div class="flex items-center gap-x-2">
<p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
Sessions
</p>
</div>

<div class="mt-1 flex items-center gap-x-2">
<h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
29.4%
</h3>
</div>
</div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
<div class="p-4 md:p-5">
<div class="flex items-center gap-x-2">
<p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
Avg. Click Rate
</p>
</div>

<div class="mt-1 flex items-center gap-x-2">
<h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
56.8%
</h3>
<span class="flex items-center gap-x-1 text-red-600">
<svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"/><polyline points="16 17 22 17 22 11"/></svg>
<span class="inline-block text-sm">
1.7%
</span>
</span>
</div>
</div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
<div class="p-4 md:p-5">
<div class="flex items-center gap-x-2">
<p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
Pageviews
</p>
</div>

<div class="mt-1 flex items-center gap-x-2">
<h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
92,913
</h3>
</div>
</div>
</div>
<!-- End Card -->
</div>
<!-- End Grid -->
    <h1 class="text-gray-800 pt-10 dark:text-gray-300 font-bold text-xl">Latest top assets</h1>
    <div class="grid lg:grid-cols-2 gap-4 sm:gap-6">
        <x-widgets.asset-widget :assets="$assets"/>
</div>
</div>
</div>
</div>

<x-general-footer/>
</x-app-layout>
