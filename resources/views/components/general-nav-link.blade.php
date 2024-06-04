@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-medium text-ageno hover:text-ageno py-2 px-2 rounded-md bg-white dark:bg-gray-100'
            : 'font-medium text-white hover:text-ageno py-2 px-2 rounded-md hover:bg-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
