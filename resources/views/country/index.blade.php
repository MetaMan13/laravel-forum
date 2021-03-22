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
            <x-menu.item-active href="/country">
                <x-icons.flag></x-icons.flag>
                Countries
            </x-menu.item-active>
        </x-menu.layout>
        
        <x-main-content.layout>

            @if ($countries->links())
                <div class="mb-10">
                    {{ $countries->links() }}
                </div>
            @endif

            @foreach ($countries as $country)
                <x-post.layout>
                    <div class="flex">
                        <img src="{{ $country->image }}" alt="" class="h-8">
                        <h3 class="ml-4 self-center dark:text-gray-300 font-semibold">
                            {{ $country->name}}
                        </h3>
                    </div>
                </x-post.layout>
            @endforeach

            @if ($countries->links())
                <div class="mb-10">
                    {{ $countries->links() }}
                </div>
            @endif

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