@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="display-4 position-relative ">Welcome to My Portfolio</h1>
            <p class="lead">Hi! I'm Ydrey. This is my Laravel portfolio project. Hope you like it!</p>
        
            <div class="mt-5">
                <a href="/about" class="btn btn-dark">About Me</a>
                <a href="/details" class="btn btn-outline-dark">More Details</a>
            </div>
        </div>
    </div>
@endsection