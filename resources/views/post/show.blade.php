@extends('layouts.app')

@section('content')
    <div>
        <h2>POST ID: {{ $post->id }}</h2>
        <h2>POST TITLE: {{ $post->title }}</h2>
        <h2>POST BODY: {{ $post->body }}</h2>
    </div>
@endsection