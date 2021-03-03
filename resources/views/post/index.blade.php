@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class="pt-16 min-h-screen flex">
        <x-menu.layout>
            <x-menu.item href="/">
                <x-icons.home></x-icons.home>
                Home
            </x-menu.item>
            <x-menu.item-active href="/post">
                <x-icons.compas></x-icons.compas>
                Posts
            </x-menu.item-active>
            <x-menu.item href="/user">
                <x-icons.users></x-icons.users>
                People
            </x-menu.item>
        </x-menu.layout>
        
        <x-main-content.layout>
            @foreach ($posts as $post)
                <x-post.layout>
                    {{-- User icon and nickname --}}
                    <div class="flex">
                        <x-icons.user></x-icons.user>
                        <a class="self-center ml-2 text-sm text-gray-500 dark:text-gray-400" href="/profile/{{ $post->user->nickname }}">
                            {{ $post->user->nickname }}
                        </a>
                    </div>
                    
                    {{-- Post title --}}
                    <div class="mt-3">
                        <a href="/post/{{ $post->id }}" class="text-md text-lg dark:text-gray-300">
                            {{ $post->title }}
                        </a>
                    </div>
                    {{-- Post likes and comments --}}
                    <div class="mt-3 flex">

                        <div class="flex">
                            <x-icons.like></x-icons.like>
                            <p class="self-center dark:text-gray-400 text-gray-500">
                                {{ count($post->likes) }}
                            </p>
                        </div>

                        <div class="flex ml-4">
                            <x-icons.comment></x-icons.comment>
                            <p class="self-center dark:text-gray-400 text-gray-500">
                                {{ count($post->comments) }}
                            </p>
                        </div>

                    </div>
                </x-post.layout>
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
@endsection