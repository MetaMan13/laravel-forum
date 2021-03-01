@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class="pt-20">
        <h1>Current number  of posts {{ count($posts) }}</h1>
        <a href="/post/create">Create a new post</a>
        @foreach ($posts as $post)
            <div class="mb-10 border">
                <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
                <h3>{{ $post->body }}</h3>
            </div>
        @endforeach
    </div>
@endsection