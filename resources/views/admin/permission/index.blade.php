@extends('layouts.admin')

@section('title', 'Permissions')

@section('content')
    <h1>Permissions</h1>
    <p class="lead">In this page you can browse all the available permissions</p>

    <hr>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-inverse">
            <tr>
                <td>slug</td>
            </tr>
            </thead>
            <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->slug }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection