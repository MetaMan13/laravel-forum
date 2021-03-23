@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')

    <div class="pt-16 min-h-screen flex">
        <div class="min-h-full w-full -mt-1 px-4 py-10 bg-gray-50 dark:bg-gray-800 md:px-10 lg:px-16 xl:px-24 2xl:px-32 mx-auto">
            <div class="w-full min-h-full bg-gray-50 dark:bg-gray-800">

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

                <div class="mt-8 mb-12">
                    @foreach ($user->posts as $post)
                        <div class="border-2 border-gray-200 dark:border-gray-700 mb-8 py-2 px-2 shadow-sm">
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

            </div>
        </div>
    </div>

    @include('page-parts.mobile-user-bar')

@endsection