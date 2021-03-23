@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')

    <div class="pt-16 min-h-screen flex">
        <div class="min-h-full w-full -mt-1 px-4 py-10 bg-gray-50 dark:bg-gray-800 md:px-10 lg:px-16 xl:px-24 2xl:px-32 mx-auto">
            <div class="w-full min-h-full bg-gray-50 dark:bg-gray-800">
                {{-- User icon and nickname --}}
                {{-- <div class="flex flex-col">
                    <div class="flex justify-center">
                        <img src="{{ $user->image }}" alt="" class="h-14 rounded-full self-center">
                    </div>
                    <div class="flex justify-center mt-2">
                        <h2 class="self-center text-lg font-bold dark:text-gray-300">{{ $user->nickname }}</h2>
                    </div>
                    <div class="flex text-xs mt-4 dark:text-gray-300">
                        <div class="flex flex-col text-center">
                            <h3 class="font-semibold">Following</h3>
                            <p class="mt-0.5">
                                {{ count($user->follows) }}
                            </p>
                        </div>
                        <div class="ml-4 flex flex-col text-center">
                            <h3 class="font-semibold">Followers</h3>
                            <p class="mt-0.5">
                                {{ count($user->followers) }}
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="mt-8 pb-10">
                    @foreach (auth()->user()->posts as $post)
                        <div class="mt-2 py-2 dark:text-gray-300">
                            <div>
                                <p class="font-semibold">{{ $post->title }}</p>
                            </div>
                            <div class="mt-0.5">
                                <p class="text-xs">
                                    {{ now()->diffForHumans($post->created_at, true) }} ago
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
                {{-- User image, nickname, badges, followers, following --}}

                <div class="flex w-full">

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

            </div>
        </div>
    </div>

    @include('page-parts.mobile-user-bar')

@endsection