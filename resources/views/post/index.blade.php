@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class="pt-16 min-h-screen flex">

        <div class="min-h-full w-3/12 -mt-1 text-gray-600">
            <div class="w-full h-full bg-gray-50 pl-4 flex justify-between md:pl-8 lg:pl-16 xl:pl-24 2xl:pl-32 border-r-2 border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                <ul class="w-full pt-10">
                    <li class="mb-2">
                        <x-menu.item>
                            <x-icons.home></x-icons.home>
                            Home
                        </x-menu.item>
                    </li>
                    <li class="mb-2">
                        <x-menu.item-active>
                            <x-icons.compas></x-icons.compas>
                            Posts
                        </x-menu.item-active>
                    </li>
                    <li>
                        <x-menu.item>
                            <x-icons.users></x-icons.users>
                            People
                        </x-menu.item>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="min-h-full w-6/12 bg-gray-100 -mt-1 dark:bg-gray-800"></div>
        
        <div class="min-h-full w-3/12 -mt-1">
            <div class="w-full h-full bg-gray-50 pr-4 md:pr-8 lg:pr-16 xl:pr-24 2xl:pr-32 text-right border-l-2 border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                <div class="bg-gray-300 w-full h-full"></div>
            </div>
        </div>
    </div>
@endsection