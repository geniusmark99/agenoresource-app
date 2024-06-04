<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
{{ __('Notification') }}
</h2>
<x-menu-desc-widget>
Check to see latest Notification(s)
</x-menu-desc-widget>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center">
<div class="flex flex-col justify-center items-center">

<img src="{{ asset('./images/no-notification.svg') }}" alt="" class="size-60">
<p class="dark:text-gray-400 text-gray-500 text-2xl">No notification</p>
</div>

</div>
</div>
</div>
</div>
</x-app-layout>
