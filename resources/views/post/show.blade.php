@extends('layouts.app')

@section('content')

    @include('page-parts.navigation')

    <div class="pt-20">
        <h3>SHOW POST</h3>

        <div>
            <h2>POST ID: {{ $post->id }}</h2>
            <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
            <h2>POST BODY: {{ $post->body }}</h2>
        </div>
    
        <a href="/post/{{ $post->id }}/edit">Edit this post</a>
        <br>
        <form action="/post/{{ $post->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete this post</button>
        </form>
    </div>
@endsection