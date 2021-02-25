@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')

    <div class="bg-gray-50 dark:bg-gray-800">
        @if ($message = Session::get('success'))
            <p class="text-green-400 font-semibold text-xs absolute top-0 right-0 mr-4 mt-20 bg-white border border-gray-200 py-2 px-2 shadow-sm rounded-md dark:bg-gray-700 dark:border-gray-600">{{ $message }}</p>
        @endif

        <div class="w-full mt-20 border-b border-gray-200 dark:border-gray-600 md:hidden">
            <img src="/images/bear.jpg" alt="" class="block w-28 rounded-full mx-auto">
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

        <div class="md:hidden">
            <form action="/profile" method="POST" class="px-4 py-6">
                @csrf
                @method('PATCH')
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
                <button type="submit" class="bg-gray-900 w-full mt-6 py-2 text-gray-50 font-semibold dark:text-gray-50">Save info</button>
            </form>
        </div>
    </div>
@endsection