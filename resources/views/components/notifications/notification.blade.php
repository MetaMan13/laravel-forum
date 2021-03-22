@props([
    'userImage' => '',
    'userNickname' => '',
    'postId' => '',
    'postTitle' => '',
    'createdAt' => ''
])

<div class=" bg-gray-50 py-4 px-4 mb-10 text-md border-2 border-gray-200 rounded-md shadow-sm dark:bg-gray-800 dark:border-gray-700">
    {{-- User who liked the post data --}}
    <div class="flex">
        <img src="{{ $userImage }}" alt="" class="h-7 rounded-full">
        <a href="/profile/{{ $userNickname }}" class="self-center ml-2 text-sm">
            <span class="font-semibold">{{ $userNickname }}</span> {{ $slot }}
        </a>
    </div>
    
    {{-- Post title --}}
    <div class="mt-2">
        <a href="/post/{{ $postId }}" class="self-center font-semibold text-lg">
            {{ $postTitle }}
        </a>
    </div>
    
    {{-- Time elapsed between the like notification created_at and current time --}}
    <div class="mt-2">
        <p class="self-center text-xs text-left">
            {{ now()->diffForHumans($createdAt, true) }} ago
        </p>
    </div>
</div>