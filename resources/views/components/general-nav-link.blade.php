@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-medium text-ageno  hover:text-ageno py-2 px-2 rounded-md bg-ageno/10 hover:bg-ageno/10 dark:bg-gray-100'
            : 'font-medium text-ageno  hover:text-ageno py-2 px-2 rounded-md hover:bg-ageno/10';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
