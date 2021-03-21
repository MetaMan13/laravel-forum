@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')

    <div class="pt-16 min-h-screen flex">
        <div class="min-h-full w-full -mt-1 px-4 py-10 bg-gray-100 dark:bg-gray-800 md:px-10 lg:px-16 xl:px-24 2xl:px-32 mx-auto">
            <div class="w-full min-h-full bg-gray-100 dark:bg-gray-800">

                <div>
                    <img src="{{ $user->image }}" alt="" class="h-24">
                </div>

                <form action="/profile" method="POST" class="bg-red-500" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div>
                        <label for="userProfilePicture">Profile picture</label>
                        <input type="file" value="{{ $user->image }}" name="image">
                    </div>

                    <div>
                        <label for="userNickname">Nickname</label>
                        <input type="text" value="{{ $user->nickname }}" name="nickname">
                    </div>

                    <div>
                        <label for="userName">Name</label>
                        <input type="text" value="{{ $user->name }}" name="name">
                    </div>

                    <div>
                        <label for="userEmail">Email</label>
                        <input type="email" value="{{ $user->email }}" name="email">
                    </div>

                    <button type="submit">Update information</button>

                </form>

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

                {{-- If the id of the authenticated user matches the id of the view passed user display edit profile option/button --}}
                {{-- @if (auth()->user()->id === $user->id)
                    <div class="py-1 text-center mt-6 bg-blue-600 text-gray-50 border-2 border-gray-200 dark:bg-blue-300 dark:border-gray-700 dark:text-gray-800">
                        <a href="/profile/{{ $user->nickname }}/edit" class="text-sm font-semibold uppercase">Edit profile</a>
                    </div>
                @endif --}}

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
            </div>
        </div>
    </div>

    @include('page-parts.mobile-user-bar')

@endsection