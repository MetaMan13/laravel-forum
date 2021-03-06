@props([
    'href' => ''
])

<li class="mb-2">
    <a href="{{ $href }}" class="flex py-2 px-4 font-semibold text-md border-l-4 shadow-sm  bg-white text-blue-600 border-blue-600 dark:border-blue-300 dark:text-blue-300 dark:bg-gray-700">
        {{ $slot }}
    </a>
</li>