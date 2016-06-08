@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p class="lead">Welcome to the backend!</p>
    <hr>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-inverse card-info">
                <div class="card-block bg-info">
                    <div class="rotate">
                        <i class="fa fa-code fa-5x"></i>
                    </div>
                    <h6 class="text-uppercase">Developers</h6>
                    <h1 class="display-1">{{ $developer }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-inverse card-danger">
                <div class="card-block bg-danger">
                    <div class="rotate">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <h6 class="text-uppercase">User</h6>
                    <h1 class="display-1">{{  $user }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-inverse card-success">
                <div class="card-block bg-success">
                    <div class="rotate">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <h6 class="text-uppercase">Devices</h6>
                    <h1 class="display-1">{{ $devices }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-inverse card-warning">
                <div class="card-block bg-warning">
                    <div class="rotate">
                        <i class="fa fa-wrench fa-5x"></i>
                    </div>
                    <h6 class="text-uppercase">Platforms</h6>
                    <h1 class="display-1">{{ $platforms }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection