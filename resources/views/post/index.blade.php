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
                    <h1>{{ $post->title }}</h1>
                </x-post.layout>
            @endforeach
        </x-main-content.layout>
        
        <div class="hidden md:block md:min-h-full md:w-3/12 md:-mt-1 fixed right-0">
            <div class="w-full h-full bg-gray-50 pr-4 md:pr-8 lg:pr-16 xl:pr-24 2xl:pr-32 text-right border-l-2 border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                <div class="w-full h-full">
                    <h3>HEWO</h3>
                </div>
            </div>
        </div>
    </div>
@endsection