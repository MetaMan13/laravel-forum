@props([
    'href' => ''
])

<li class="mb-2">
    <a href="{{ $href }}" class="flex py-2 px-4 font-semibold text-md border-l-4 border-transparent hover:bg-white hover:border-blue-600 dark:border-transparent dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:border-blue-300 dark:hover:text-blue-300">
        {{ $slot }}
    </a>
</li>