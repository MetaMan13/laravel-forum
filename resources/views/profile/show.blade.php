@extends('layouts.app')

@section('content')

    @include('page-parts.navigation')

    <div class="bg-red-300 min-h-screen w-full pt-20 mx-auto px-4 py-4 flex justify-between md:px-8 lg:px-16 xl:px-24 2xl:px-32 lg:bg-yellow-300">
        <div class="min-h-full w-full bg-yellow-300 md:grid md:grid-cols-12">

            <div class="bg-blue-600 hidden md:block md:min-h-full md:col-span-4 lg:col-span-3 xl:col-span-2 px-4 pt-4">

                <div class="bg-blue-500 flex flex-col content-center items-center">

                    <div>
                        <img src="{{ $user->image }}" alt="" class="h-40 rounded-full">
                    </div>

                    <div class="mt-2">
                        <h3 class="text-xl font-semibold">{{ $user->nickname }}</h3>
                    </div>

                </div>

                <div class="bg-blue-700 mt-4">
                    <div>

                        <div class="flex">
                             
                            <div class="flex-shrink-0 self-start">
                                <img src="{{ $user->country->image }}" alt="" class="h-8">
                            </div>

                            <div class="w-full ml-2 self-center">
                                <h4> {{ $user->country->name }} </h4>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="bg-blue-800 mt-4">

                    <div>
                        <h4>Timeline</h4>
                    </div>

                    <div>
                        <h4>General information</h4>
                    </div>

                    <div>
                        <h4>Edit information</h4>
                    </div>

                </div>

            </div>

            <div class="bg-gray-50  hidden md:block md:min-h-full md:col-span-8 lg:col-span-9 xl:col-span-10"></div>
        </div>
    </div>

    @include('page-parts.mobile-user-bar')

@endsection