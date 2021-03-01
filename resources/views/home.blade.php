@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class="min-h-screen">
        <h1 class="pt-20">Hewo {{ auth()->user()->name }}</h1>
        <a href="/profile">All profiles</a>
        <br>
        <a href="/post">All posts</a>
    </div>
@endsection