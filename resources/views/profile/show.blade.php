@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')

    <div class="pt-16 min-h-screen flex">
        <div class="min-h-full w-full -mt-1 px-4 py-10 dark:bg-gray-800 md:px-10 lg:px-16 xl:px-24 2xl:px-32 mx-auto">
            <div class="w-full min-h-full bg-gray-50 dark:bg-gray-800">
                {{-- User icon and nickname --}}
                <div class="flex flex-col">
                    <div class="flex justify-center">
                        <img src="{{ $user->image }}" alt="" class="h-14 rounded-full self-center">
                    </div>
                    <div class="flex justify-center mt-2">
                        <h2 class="self-center text-lg font-bold dark:text-gray-300">{{ $user->nickname }}</h2>
                    </div>
                </div>

                {{-- If the id of the authenticated user matches the id of the view passed user display edit profile option/button --}}
                @if (auth()->user()->id === $user->id)
                    <div class="py-1 text-center mt-4 bg-blue-600 text-gray-50 border-2 border-gray-200 dark:bg-blue-300 dark:border-gray-700 dark:text-gray-800">
                        <a href="/profile/{{ $user->nickname }}/edit" class="text-sm font-semibold uppercase">Edit profile</a>
                    </div>
                @endif

                {{-- User stats likes, dislikes, comments, friends,--}}
                <div class="mt-4 flex justify-between">
                    {{-- <div class="flex">
                        <x-icons.like></x-icons.like>
                        <p>{{ count($user->likes) }}</p>
                    </div>
                    <div class="ml-4 flex">
                        <x-icons.dislike></x-icons.dislike>
                        <p>{{ count($user->dislikes) }}</p>
                    </div>
                    <div class="ml-4 flex">
                        <x-icons.comment></x-icons.comment>
                        <p>{{ count($user->comments) }}</p>
                    </div> --}}
                </div>
                {{-- User posts tab, activity history tab, groups --}}
                <div class="bg-red-300">

                </div>
            </div>
        </div>
    </div>

    @include('page-parts.mobile-user-bar')

@endsection