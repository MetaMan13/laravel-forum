@props([
    'text' => '',
    'href' => '',
    'active' => false
])

<div class="mb-4">

    @if ($active)
        <a href="{{ $href }}" class="flex shadow-md rounded-md font-medium text-base text-white dark:text-gray-900 py-2 px-4 bg-blue-600 dark:bg-blue-300 border border-gray-300 dark:border-gray-600">

            <div class="self-center mr-2">
                {{ $slot }}
            </div>
    
            {{ $text }}
        </a>
    @else
        <a href="{{ $href }}" class="flex rounded-md text-base py-2 px-4 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 group hover:border-gray-400 dark:hover:border-gray-500">

            <div class="self-center mr-2 group-hover:text-blue-600 dark:group-hover:text-blue-300">
                {{ $slot }}
            </div>

            {{ $text }}
        </a>
    @endif

</div>