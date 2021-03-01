@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-medium text-md block px-4 py-2 border-b border-gray-300 hover:text-blue-600 hover:bg-white rounded-t-md dark:hover:text-blue-300 dark:hover:bg-gray-700 dark:text-gray-300 dark:border-gray-600'
            : 'font-medium text-md block px-4 py-2 border-b border-gray-300 hover:text-blue-600 hover:bg-white rounded-t-md dark:hover:text-blue-300 dark:hover:bg-gray-700 dark:text-gray-300 dark:border-gray-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
