@extends('layouts.app')

@section('content')

    @include('page-parts.navigation')

    <div class="min-h-screen w-full pt-20 mx-auto px-4 py-4 flex justify-between md:px-8 lg:px-16 xl:px-24 2xl:px-32">
        <div class="min-h-full w-full md:grid md:grid-cols-12 md:border-2 border-gray-200 dark:border-gray-700 -mt-5 -mb-4">

            {{-- DESKTOP USER --}}
            <div class="bg-gray-50 dark:bg-gray-800 md:border-r-2 border-gray-200 dark:border-gray-700 md:block md:min-h-full md:col-span-4 lg:col-span-4 xl:col-span-3 2xl:col-span-2 px-4 pt-4">

                <div class="flex flex-col content-center items-center border-b-2 border-gray-200 dark:border-gray-700">

                    <div class="flex md:flex-col w-full md:w-auto">
                        <div>
                            <img src="{{ $user->image }}" alt="" class="h-14 md:h-40 rounded-full">
                        </div>
    
                        <div class="mt-3 md:mt-2 ml-4 md:ml-0 md:text-center">
                            <h3 class="text-xl md:text-2xl font-medium">{{ $user->nickname }}</h3>
                        </div>
                    </div>

                    @if (auth()->user()->follows->contains('follow_id', $user->id))
                        <div class="flex mt-4 mb-4 w-full">
                            <form action="/unfollow" method="POST" class="self-center w-full">
                                @csrf
                                @method('POST')
                                    <input type="hidden" value="{{ $user->id }}" name="user_id">
                                    <button type="submit" class="w-full bg-white text-sm md:text-md border rounded-md py-1 px-1.5 font-semibold focus:ring-0 focus:outline-none ring-offset-transparent border-gray-400 hover:text-blue-600 hover:border-blue-600 dark:text-gray-300 dark:border-gray-500 dark:hover:text-blue-300 dark:hover:border-blue-300 dark:bg-gray-700">Unfollow</button>
                            </form>
                        </div>
                    @else
                        <div class="flex mt-4 mb-4 w-full">
                            <form action="/follow" method="POST" class="self-center w-full">
                                @csrf
                                @method('POST')
                                    <input type="hidden" value="{{ $user->id }}" name="user_id">
                                    <button type="submit" class="w-full bg-white text-sm md:text-md border rounded-md py-1 px-1.5 font-semibold focus:ring-0 focus:outline-none ring-offset-transparent border-gray-400 hover:text-blue-600 hover:border-blue-600 dark:text-gray-300 dark:border-gray-500 dark:hover:text-blue-300 dark:hover:border-blue-300 dark:bg-gray-700">Follow</button>
                            </form>
                        </div>
                    @endif

                </div>

                <div class="mt-4">

                    <div>
                        <h3 class="font-medium text-lg">Country:</h3>
                    </div>

                    <div class="flex mt-2">         
                        <div class="flex-shrink-0 self-start">
                            <img src="{{ $user->country->image }}" alt="" class="h-7">
                        </div>

                        <div class="w-full ml-2 self-center">
                            <h4>{{ $user->country->name }}</h4>
                        </div>

                    </div>

                </div>

                @if (count($user->groups) != 0)
                    <div class="mt-6">
                        <div>
                            <h3 class="font-medium text-lg">Groups:</h3>
                        </div>

                        <div class="mt-2">
                            @foreach ($user->groups as $group)
                                <div class="mr-3">
                                    <h3>
                                        {{ $group->name }}
                                    </h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="mt-6">

                    <x-profile.show-menu-item href="/profile/{{ $user->nickname }}" text="Timeline" active="true">
                        <x-icons.timeline></x-icons.timeline>
                    </x-profile.show-menu-item>
                    
                    @if (auth()->user()->id === $user->id)
                        <x-profile.show-menu-item href="/profile/{{ $user->nickname }}/edit" text="Edit profile">
                            <x-icons.edit></x-icons.edit>
                        </x-profile.show-menu-item>
                        
                        <x-profile.show-menu-item href="#" text="Security">
                            <x-icons.lock></x-icons.lock>
                        </x-profile.show-menu-item>
                    @endif

                </div>

            </div>

            {{-- DESKTOP CONTENT --}}
            <div class="bg-gray-50  dark:bg-gray-800 md:block md:min-h-full md:col-span-8 lg:col-span-8 xl:col-span-9 2xl:col-span-10 border-b border-gray-200 dark:border-gray-700">
                <div class="w-full h-auto md:min-h-full px-4 pt-10 pb-6 md:px-12 md:py-4 mb-10 md:mb-0">

                    <div>
                        <h1 class="text-5xl font-semibold">Timeline</h1>
                    </div>

                    <div class="mt-8">

                        @foreach ($user->posts as $post)
                            <div class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 px-4 py-4 mb-8 rounded-md md:flex md:justify-between">
                                <div>
                                    <div>
                                        <h4 class="text-md md:text-base">
                                            {{ now()->diffForHumans($post->created_at, true) }} ago
                                        </h4>
                                    </div>
    
                                    <div class="mt-1 md:mt-0">
                                        <a class="text-xl md:text-2xl hover:text-blue-600 dark:hover:text-blue-300" href="#">{{ $post->title }}</a>
                                    </div>
                                </div>

                                <div class="flex self-center mt-3 md:mt-1">

                                    <div class="mr-3 flex">
                                        <x-icons.like postId="{{ $post->id }}" height="18" width="18" md:height="20" md:width="20"></x-icons.like>
                                        <p class="text-lg">{{ count($post->likes )}}</p>
                                    </div>
                                    
                                    <div class="mr-3 flex">
                                        <x-icons.dislike postId="{{ $post->id }}" height="18" width="18" md:height="20" md:width="20"></x-icons.dislike>
                                        <p class="text-lg">{{ count($post->dislikes )}}</p>
                                    </div>
                                    
                                    <div class="flex">
                                        <x-icons.comment height="18" width="18" md:height="20" md:width="20"></x-icons.comment>
                                        <p class="text-lg">{{ count($post->comments )}}</p>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

    
    @include('page-parts.mobile-user-bar')

@endsection