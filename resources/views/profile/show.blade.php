@extends('layouts.app')

@section('content')

    @include('page-parts.navigation')

    <div class="bg-red-300 min-h-screen w-full pt-20 mx-auto px-4 py-4 flex justify-between md:px-8 lg:px-16 xl:px-24 2xl:px-32 lg:bg-gray-50">
        <div class="min-h-full w-full bg-yellow-600 md:grid md:grid-cols-12 border-2 border-gray-200 -mt-5">

            <div class="bg-gray-50 border-r-2 border-gray-200 dark:border-gray-700 hidden md:block md:min-h-full md:col-span-4 lg:col-span-3 xl:col-span-2 px-4 pt-4">

                <div class="flex flex-col content-center items-center mt-2 border-b-2 border-gray-200 dark:border-gray-700">

                    <div>
                        <img src="{{ $user->image }}" alt="" class="h-40 rounded-full">
                    </div>

                    <div class="mt-2 mb-3">
                        <h3 class="text-2xl font-bold">{{ $user->nickname }}</h3>
                    </div>

                </div>

                <div class="mt-6">

                    <div>
                        <h3 class="font-semibold text-lg">Country:</h3>
                    </div>

                    <div class="flex mt-2">         
                        <div class="flex-shrink-0 self-start">
                            <img src="{{ $user->country->image }}" alt="" class="h-7">
                        </div>

                        <div class="w-full ml-2 self-center">
                            <h4 class="text-md">{{ $user->country->name }}</h4>
                        </div>
                    </div>

                </div>


                <div class="mt-6">
                    <div>
                        <h3 class="font-semibold text-lg">Groups:</h3>
                    </div>

                    <div class="mt-2">
                        @foreach ($user->groups as $group)
                            <div class="mr-3">
                                <h3 class="text-md">
                                    {{ $group->name }}
                                </h3>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-6">

                    <div class="bg-white py-2 px-4 mb-4 border border-gray-300">
                        <h4>Timeline</h4>
                    </div>

                    <div class="bg-white py-2 px-4 mb-4 border border-gray-300">
                        <h4>General information</h4>
                    </div>

                    <div class="bg-white py-2 px-4 border border-gray-300">
                        <h4>Edit information</h4>
                    </div>

                </div>

            </div>

            <div class="bg-gray-50 hidden md:block md:min-h-full md:col-span-8 lg:col-span-9 xl:col-span-10"></div>
        </div>
    </div>

    @include('page-parts.mobile-user-bar')

@endsection