@extends('layouts.app')

@section('content')

    @include('page-parts.navigation')

    <div class="pt-4 min-h-screen flex md:pt-16">
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
            <x-menu.item href="/country">
                <x-icons.flag></x-icons.flag>
                Countries
            </x-menu.item>
            <x-menu.item href="/group">
                <x-icons.group></x-icons.group>
                Groups
            </x-menu.item>
        </x-menu.layout>
        
        <x-main-content.layout>

            <div class="flex w-full mt-12 md:mt-0">
                <div class="self-center">
                    <img src="{{ $user->image }}" alt="" class="h-16 rounded-full">
                </div>
                    
                <div class="ml-4 self-center">
                    <div>
                        <h3 class="text-md font-bold">{{ $user->nickname }}</h3>
                    </div>

                    <div class="flex mt-1 text-sm">
                        <div>
                            <p>
                                <span class="font-semibold">
                                    {{ count($user->follows) }}
                                </span>

                                following
                            </p>
                        </div>

                        <div class="ml-2">
                            <p>
                                <span class="font-semibold">
                                    {{ count($user->followers) }}
                                </span>

                                followers
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @if (auth()->user()->id === $user->id)
                <a href="/profile/{{ $user->nickname }}/edit" class="mt-4 rounded-md py-1.5 text-sm block text-center font-semibold uppercase bg-blue-600 text-gray-50 border-2 border-gray-200 dark:bg-blue-300 dark:border-gray-700 dark:text-gray-800">Edit profile</a>
            @endif

            @if (auth()->user()->id !== $user->id)
                @if (auth()->user()->follows->contains('follow_id', $user->id))
                    <div class="block w-full">
                        <form action="/unfollow" method="POST" class="self-center">
                            @csrf
                            @method('POST')
                                <input type="hidden" value="{{ $user->id }}" name="user_id">
                                <button type="submit" class="w-full mt-4 rounded-md py-1.5 text-sm block text-center font-semibold uppercase bg-blue-600 text-gray-50 border-2 border-gray-200 dark:bg-blue-300 dark:border-gray-700 dark:text-gray-800">Unfollow</button>
                        </form>
                    </div>
                @else
                    <div class="block w-full">
                        <form action="/follow" method="POST" class="self-center">
                            @csrf
                            @method('POST')
                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                            <button type="submit" class="w-full mt-4 rounded-md py-1.5 text-sm block text-center font-semibold uppercase bg-blue-600 text-gray-50 border-2 border-gray-200 dark:bg-blue-300 dark:border-gray-700 dark:text-gray-800">Follow</button>
                        </form>
                    </div>
                @endif
            @endif

            <div class="mt-8 mb-12">
                @foreach ($user->posts as $post)
                    <div class="border-2 border-gray-200 dark:border-gray-700 mb-8 py-2 px-2 shadow-sm md:py-4 md:px-4">
                        <div>
                            <a href="/post/{{ $post->id }}" class="text-md font-semibold">
                                {{ $post->title }}
                            </a>
                        </div>

                        <div class="mt-1">
                            <p class="text-sm">
                                {{ now()->diffForHumans($post->created_at, true) }} ago
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

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