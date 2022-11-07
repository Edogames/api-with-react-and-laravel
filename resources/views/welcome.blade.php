@extends('layouts.main')

@section('title', 'Log in')

@section('content')
    @if (Route::has('login'))
        <div class="start">
            @auth
                <a href="{{ url('/home') }}">Home</a><br>
            @else
                <a href="{{ route('login') }}">Log in</a><br>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a><br>
                @endif
            @endauth
        </div>
    @endif
@endsection
