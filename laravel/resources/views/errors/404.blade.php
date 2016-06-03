@extends('layouts.full')
@section('title', 'Not found')

@section('content-header')
    <div class="jumbotron bg-primary main-head">
        <div class="container-fluid">
            <div class="row">
                <h1 class=" display-3 text-xs-center">404 - Page not found!</h1>
                <p class="lead text-xs-center">
                    The page you are looking for does not exist.
                </p>
                <p class="text-xs-center">
                    <a href="{{ url('/') }}" class="btn btn-secondary btn-lg">Go home</a>
                </p>
            </div>
        </div>
    </div>
@endsection
