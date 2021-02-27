@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class="min-h-screen">
        <h1>Hewo {{ auth()->user()->name }}</h1>
    </div>
@endsection