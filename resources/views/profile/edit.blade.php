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

            <div class=" dark:border-gray-700 md:w-8/12 md:mx-auto">
                <form action="/profile" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
    
                    <div class="flex flex-col mb-4">
                        <label for="userProfilePicture" class="mb-3">Change profile picture</label>
                        <input type="file" value="{{ $user->image }}" name="image">
                    </div>
    
                    <div class="flex flex-col mb-4">
                        <label for="userNickname" class="mb-2">Nickname</label>
                        <input type="text" value="{{ $user->nickname }}" name="nickname" class="dark:bg-gray-700">
                    </div>
    
                    <div class="flex flex-col mb-4">
                        <label for="userName" class="mb-2">Name</label>
                        <input type="text" value="{{ $user->name }}" name="name" class="dark:bg-gray-700">
                    </div>
    
                    <div class="flex flex-col mb-4">
                        <label for="userEmail" class="mb-2">Email</label>
                        <input type="email" value="{{ $user->email }}" name="email" class="dark:bg-gray-700">
                    </div>
    
                    <button type="submit" class="w-full mt-6 rounded-md py-1.5 text-sm block text-center font-semibold uppercase bg-blue-600 text-gray-50 border-2 border-gray-200 dark:bg-blue-300 dark:border-gray-700 dark:text-gray-800">Update information</button>
    
                </form>
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