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
        
        <div class="min-h-full w-6/12 bg-gray-100 -mt-1 dark:bg-gray-800"></div>
        
        <div class="min-h-full w-3/12 -mt-1">
            <div class="w-full h-full bg-gray-50 pr-4 md:pr-8 lg:pr-16 xl:pr-24 2xl:pr-32 text-right border-l-2 border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                <div class="w-full h-full"></div>
            </div>
        </div>
    </div>
@endsection