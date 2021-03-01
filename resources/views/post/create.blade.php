@extends('layouts.app')

@section('content')
    <h1>POST CREATE</h1>

    <form action="/post" method="POST">
        @csrf
        @method('POST')
        <label for="">Post title</label>
        <input type="text" name="title">
        <label for="">Post body</label>
        <textarea name="body" id="" cols="30" rows="10"></textarea>
        <button type="submit">Create post</button>
    </form>
@endsection