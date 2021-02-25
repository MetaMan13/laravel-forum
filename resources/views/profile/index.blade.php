@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class=" bg-gray-100">
        <div class="bg-gray-50">

            <div class="w-full pt-10 border-b border-gray-200 md:hidden">
                <img src="/images/bear.jpg" alt="" class="block w-28 rounded-full mx-auto">
                <h3 class="font-semibold text-xl text-center mt-2">
                    {{ $user->name }}
                </h3>
                <ul class="mt-8 flex px-4 py-2">
                    <li>
                        <a href="#" class="font-semibold">About</a>
                    </li>
                    <li class="ml-8">
                        <a href="#" class="font-semibold">Stats</a>
                    </li>
                    <li class="ml-8">
                        <a href="#" class="font-semibold">Friends</a>
                    </li>
                </ul>
            </div>

            <div class="">
                <form action="/profile" method="POST" class="px-4 py-6 md:hidden">
                @csrf
                @method('PUT')
                    <div class="flex flex-col">
                        <label for="userEmail" class="font-semibold mb-0.5 text-sm">Full name</label>
                        <input type="text" value="{{ $user->name }}" class="text-md" name="name" required>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="userEmail" class="font-semibold mb-0.5 text-sm">Email</label>
                        <input type="email" value="{{ $user->email }}" class="text-md" name="email" required>
                    </div>
                    <button type="submit" class="bg-gray-900 w-full mt-4 py-2 text-gray-50 font-semibold">Save info</button>
                </form>
            </div>
        </div>
    </div>
@endsection