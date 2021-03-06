@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')

    {{-- <div class="bg-gray-50 min-h-full dark:bg-gray-800">

        <div class="w-full pt-24 border-b border-gray-200 dark:border-gray-600">
            <img src="{{ $user->image }}" alt="" class="w-28 mx-auto rounded-full">
            <h3 class="font-semibold text-xl text-center mt-2 dark:text-gray-50">
                {{ $user->nickname }}
            </h3>
            <ul class="mt-8 flex px-4 py-2 justify-center">
                <li>
                    <a href="#" class="font-semibold dark:text-gray-50">About</a>
                </li>
                <li class="ml-8">
                    <a href="#" class="font-semibold dark:text-gray-50">Stats</a>
                </li>
                <li class="ml-8">
                    <a href="#" class="font-semibold dark:text-gray-50">Friends</a>
                </li>
            </ul>
        </div>

        <div class="">
            @if (auth()->user()->id === $user->id)
                <form action="/profile" method="POST" class="px-4 py-6" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @if ($message = Session::get('success'))
                        <p class="text-green-400 font-semibold text-sm mb-4 bg-white border border-gray-200 py-2 px-2 shadow-sm rounded-md dark:bg-gray-700 dark:border-gray-600">{{ $message }}</p>
                    @endif
                    <div class="flex flex-col">
                        <label for="name" class="font-semibold mb-0.5 text-sm">Full name</label>
                        <input id="name" type="text" value="{{ $user->name }}" class="text-md dark:bg-gray-600 dark:text-gray-50" name="name">
                    </div>
                    @error('name')
                        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <div class="flex flex-col mt-4">
                        <label for="nickname" class="font-semibold mb-0.5 text-sm">Nickname</label>
                        <input id="nickname" type="text" value="{{ $user->nickname }}" class="text-md dark:bg-gray-600 dark:text-gray-50" name="nickname">
                    </div>
                    @error('nickname')
                        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <div class="flex flex-col mt-4">
                        <label for="email" class="font-semibold mb-0.5 text-sm">Email</label>
                        <input id="email" type="email" value="{{ $user->email }}" class="text-md dark:bg-gray-600 dark:text-gray-50" name="email">
                    </div>
                    @error('email')
                        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <div class="flex flex-col mt-4">
                        <label for="image" class="font-semibold mb-0.5 text-sm">Profile image</label>
                        <input id="image" type="file" class="text-md dark:bg-gray-600 dark:text-gray-50" name="image">
                    </div>
                    @error('image')
                        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="bg-gray-900 w-full mt-6 py-2 text-gray-50 font-semibold dark:text-gray-50">Save info</button>
                </form>
            @endif
        </div>

        <div class="px-6 bg-gray-50 min-h-screen w-full lg:px-8 xl:px-12 2xl:px-16 hidden dark:bg-gray-800">
            <div class="pt-20 h-screen w-full mx-auto border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-600">
                <div class="h-36 w-full flex">
                    <div class="h-full w-40">
                        <img src="/images/bear.jpg" alt="" class="block w-full h-full">
                    </div>
                    <div class="w-full h-full">
                        <h3>Name: {{ $user->name }}</h3>
                        <h3>Nickname: {{ $user->nickname }}</h3>
                        <h3>Email: {{ $user->email }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="pt-16 min-h-screen flex">
        <div class="min-h-full w-full bg-gray-100 -mt-1 px-4 py-4 dark:bg-gray-700 md:px-10 lg:px-16 xl:px-24 2xl:px-32 mx-auto">
            <div class="bg-gray-300 w-full min-h-full">
                {{-- User icon and nickname --}}
                <div class="bg-red-300 flex flex-col">
                    <div class="flex justify-center">
                        <img src="{{ $user->image }}" alt="" class="h-14 rounded-full self-center">
                    </div>
                    <div class="flex justify-center mt-2">
                        <h2 class="self-center text-lg font-bold">{{ $user->nickname }}</h2>
                    </div>
                </div>

                <div class="bg-red-400 py-1 text-center mt-2">
                    <a href="/profile/{{ $user->nickname }}/edit" class="text-sm font-semibold">Edit profile</a>
                </div>
                {{-- User stats likes, dislikes, comments, friends,--}}
                <div class="bg-red-300">
                    <div>
                        <p>{{ count($user->likes) }}</p>
                    </div>
                    <div>
                        <p>{{ count($user->dislikes) }}</p>
                    </div>
                    <div>
                        <p>{{ count($user->comments) }}</p>
                    </div>
                </div>
                {{-- User posts tab, activity history tab, groups --}}
                <div class="bg-red-300"></div>
            </div>
        </div>
    </div>
    @include('page-parts.mobile-user-bar')
@endsection