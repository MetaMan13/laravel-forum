@props([
    'userImage' => '',
    'userNickname' => '',
    'postId' => '',
    'postTitle' => '',
    'createdAt' => ''
])

<div class=" bg-gray-50 py-4 px-4 mb-10 text-md border-2 border-gray-200 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-700">
    {{-- User who liked the post data --}}
    <div class="flex">
        <img src="{{ $userImage }}" alt="" class="h-7 rounded-full">
        <a href="/profile/{{ $userNickname }}" class="self-center ml-2 text-sm text-gray-500 dark:text-gray-400">
            <span class="font-semibold text-gray-600 dark:text-gray-300">{{ $userNickname }}</span> {{ $slot }}
        </a>
    </div>
    
    {{-- Post title --}}
    <div class="mt-2">
        <a href="/post/{{ $postId }}" class="self-center font-semibold text-lg text-gray-600 dark:text-gray-300">
            {{ $postTitle }}
        </a>
    </div>
    
    {{-- Time elapsed between the like notification created_at and current time --}}
    <div class="mt-2">
        <p class="self-center text-xs text-left text-gray-500 dark:text-gray-400">
            {{ now()->diffForHumans($createdAt, true) }} ago
        </p>
    </div>
</div>