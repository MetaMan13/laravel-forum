@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <h1>Hewo {{ auth()->user()->name }}</h1>
@endsection