@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-medium text-md px-4 py-2 block px-1 hover:text-gray-800 hover:bg-white rounded-b-md dark:hover:text-gray-50 dark:hover:bg-gray-600 dark:text-gray-50'
            : 'font-medium text-md px-4 py-2 block px-1 hover:text-gray-800 hover:bg-white rounded-b-md dark:hover:text-gray-50 dark:hover:bg-gray-600 dark:text-gray-50';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
