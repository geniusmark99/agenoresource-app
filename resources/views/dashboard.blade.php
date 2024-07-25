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
