@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! 
$attributes->merge(['class' => 'border-gray-300 font-medium dark:border-gray-700  dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm']) !!}>
