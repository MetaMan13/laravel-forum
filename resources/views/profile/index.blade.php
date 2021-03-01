@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')

    <div class="bg-gray-50 min-h-full dark:bg-gray-800">
        <div class="px-6 bg-gray-50 min-h-screen w-full lg:px-8 xl:px-12 2xl:px-16 hidden md:block dark:bg-gray-800">
            <div class="pt-20 min-h-screen w-full mx-auto border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-600">
                @foreach ($users as $user)
                    <div class="h-36 w-full flex mb-20">
                        <div class="h-full w-40">
                            <img src="/images/bear.jpg" alt="" class="block w-full h-full">
                        </div>
                        <div class="w-full h-full">
                            <h3>Name: {{ $user->name }}</h3>
                            <h3>Nickname: {{ $user->nickname }}</h3>
                            <h3>Email: {{ $user->email }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection