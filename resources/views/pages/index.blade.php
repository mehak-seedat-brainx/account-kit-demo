@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
            <h3>Welcome</h3>
            <br>
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-success" href="{{ route('register') }}">Register</a>
    </div>
@endsection