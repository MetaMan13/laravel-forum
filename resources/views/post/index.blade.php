@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class="pt-16 min-h-screen flex">

        <div class="min-h-full w-3/12 -mt-1">
            <div class="w-full h-full bg-gray-50 pl-4 flex justify-between md:pl-6 lg:pl-8 xl:pl-12 2xl:pl-16 border-r-2 border-gray-100 dark:bg-gray-900 dark:border-gray-800 delay-200 transition-all duration-300 ease-in-out">
                <h1>HEWO</h1>
            </div>
        </div>

        <div class="min-h-full w-6/12 bg-gray-100 -mt-1 dark:bg-gray-800 delay-200 transition-all duration-300 ease-in-out"></div>

        <div class="min-h-full w-3/12 -mt-1">
            <div class="w-full h-full bg-gray-50 pr-4 md:pr-6 lg:pr-8 xl:pr-12 2xl:pr-16 text-right border-l-2 border-gray-100 dark:bg-gray-900 dark:border-gray-800  delay-200 transition-all duration-300 ease-in-out">
                <h1>Hewwo</h1>
            </div>
        </div>
        {{-- <h1>Current number  of posts {{ count($posts) }}</h1>
        <a href="/post/create">Create a new post</a>
        @foreach ($posts as $post)
            <div class="border mb-10">
                <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
                <h3>{{ $post->body }}</h3>
            </div>
        @endforeach --}}
    </div>
@endsection