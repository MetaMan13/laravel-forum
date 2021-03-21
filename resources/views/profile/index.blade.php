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
            <x-menu.item-active href="/profile">
                <x-icons.users></x-icons.users>
                People
            </x-menu.item-active>
        </x-menu.layout>
        
        <x-main-content.layout>
            
            @foreach ($users as $user)
                <x-profile.index-item-layout>
                    
                    <div class="flex justify-between">
                        <div class="flex">
                            <img src="{{ $user->image }}" alt="" class="h-8 rounded-full">
                            <a href="/profile/{{ $user->nickname }}" class="text-md font-semibold self-center ml-2 text-md text-gray-500 dark:text-gray-400">
                                {{ $user->nickname }}
                            </a>
                        </div>

                        @if (auth()->user()->follows->contains('follow_id', $user->id))
                            <div class="flex">
                                <form action="/unfollow" method="POST" class="self-center">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" value="{{ $user->id }}" name="user_id">
                                    <button type="submit" class="text-sm md:text-md border rounded-md py-1 px-1.5 font-semibold border-gray-400 hover:text-blue-600 hover:border-blue-600 dark:text-gray-300 dark:border-gray-300 dark:hover:text-blue-300 dark:hover:border-blue-300">Unfollow</button>
                                </form>
                            </div>
                        @else
                            <div class="flex">
                                <form action="/follow" method="POST" class="self-center">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" value="{{ $user->id }}" name="user_id">
                                    <button type="submit" class="text-sm md:text-md border rounded-md py-1 px-1.5 font-semibold border-gray-400 hover:text-blue-600 hover:border-blue-600 dark:text-gray-300 dark:border-gray-300 dark:hover:text-blue-300 dark:hover:border-blue-300">Follow</button>
                                </form>
                            </div>
                        @endif
                    </div>

                </x-profile.index-item-layout>
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