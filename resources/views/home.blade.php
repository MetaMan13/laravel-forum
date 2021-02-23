@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <h1>Hewo {{ auth()->user()->name }}</h1>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">{{ __('Log out') }}</x-responsive-nav-link>
    </form>
@endsection