@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm  font-medium text-red-600 dark:text-red-400 space-y-1 absolute -bottom-6 right-0']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
