<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <x-menu-desc-widget>
            Get insight into your Assets
            </x-menu-desc-widget>
    </x-slot>

<div class="py-12 lg:px-32">
<!-- Content -->
<div class="w-full">

<div class="p-4 sm:p-6 space-y-2 sm:space-y-6">
<!-- Grid -->
<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
<!-- Card -->
{{-- <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
<div class="p-4 md:p-5">
<div class="flex items-center gap-x-2">
<p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
Total Views
</p>
<div class="hs-tooltip">
<div class="hs-tooltip-toggle">
<svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
<span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
The number of daily users
</span>
</div>
</div>
</div>



<div class="mt-1 flex items-center gap-x-2">
<h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
72,540
</h3>
<span class="flex items-center gap-x-1 text-green-600">
<svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
<span class="inline-block text-sm">
1.7%
</span>
</span>
</div>
</div>
</div> --}}
<!-- End Card -->

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
