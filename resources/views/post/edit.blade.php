@extends('layouts.app')

@section('content')
    <div>
        <h1>POST EDIT</h1>

        <form action="/post/{{ $post->id }}" method="POST">
            @csrf
            @method('PATCH')
            <label for="">Post title</label>
            <input type="text" name="title" value="{{ $post->title }}">
            <label for="">Post body</label>
            <textarea name="body" id="" cols="30" rows="10">{{ $post->body }}</textarea>
            <button type="submit">Update post</button>
        </form>
    </div>
@endsection