@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-medium text-md px-4 py-2 block px-1 hover:text-gray-800 hover:bg-white rounded-b-md'
            : 'font-medium text-md px-4 py-2 block px-1 hover:text-gray-800 hover:bg-white rounded-b-md';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
