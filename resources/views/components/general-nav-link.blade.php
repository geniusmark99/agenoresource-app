@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-medium lg:text-base text-blue-900 dark:text-blue-400 hover:text-blue-900 sm:py-6 dark:hover:text-gray-500'
            : 'font-medium lg:text-base text-white hover:text-blue-900 sm:py-6 dark:hover:text-blue-400';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
