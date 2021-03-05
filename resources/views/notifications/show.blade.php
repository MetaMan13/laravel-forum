@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class="pt-16 min-h-screen flex">
        <x-menu.layout>
            <x-menu.item href="/">
                <x-icons.home></x-icons.home>
                Home
            </x-menu.item>
            <x-menu.item href="/post">
                <x-icons.compas></x-icons.compas>
                Posts
            </x-menu.item>
            <x-menu.item href="/profile">
                <x-icons.users></x-icons.users>
                People
            </x-menu.item>
        </x-menu.layout>
        
        <x-main-content.layout>
            @foreach ($notifications as $notification)
                <div class=" bg-gray-50 py-4 px-4 mb-10 text-md border-2 border-gray-200 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-700">
                    {{-- User who liked the post data --}}
                    <div class="flex">
                        <img src="{{ $notification->data['user_image'] }}" alt="" class="h-7 rounded-full">
                        <a href="/profile/{{ $notification->data['user_nickname'] }}" class="self-center ml-2 text-sm text-gray-500 dark:text-gray-400">
                            <span class="font-semibold text-gray-600 dark:text-gray-300">{{ $notification->data['user_nickname'] }}</span> liked your post
                        </a>
                    </div>
                    
                    {{-- Post title --}}
                    <div class="mt-2">
                        <a href="/post/{{ $notification->data['post_id'] }}" class="self-center font-semibold text-lg text-gray-600 dark:text-gray-300">
                            {{ $notification->data['post_title'] }}
                        </a>
                    </div>
                    
                    {{-- Time elapsed between the like notification created_at and current time --}}
                    <div class="mt-2">
                        <p class="self-center text-xs text-left text-gray-500 dark:text-gray-400">
                            {{ now()->diffForHumans($notification->created_at, true) }} ago
                        </p>
                    </div>
                </div>
            @endforeach
        </x-main-content.layout>
        
        <div class="hidden md:block md:min-h-full md:w-3/12 md:-mt-1 fixed right-0">
            <div class="w-full h-screen bg-gray-50 pr-4 md:pr-8 lg:pr-16 xl:pr-24 2xl:pr-32 text-right border-l border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full h-full">
                    <h3>HEWO</h3>
                </div>
            </div>
        </div>
    </div>
    @include('page-parts.mobile-user-bar')
@endsection