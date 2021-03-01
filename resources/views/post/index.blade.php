@extends('layouts.app')

@section('content')
    <div class="pt-20">
        <a href="/post/create">Create a new post</a>
        @foreach ($posts as $post)
            <div class="mb-10 border">
                <h3>{{ $post->title }}</h3>
                <h3>{{ $post->body }}</h3>
            </div>
        @endforeach
    </div>
@endsection