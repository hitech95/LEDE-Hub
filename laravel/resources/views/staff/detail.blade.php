@extends('layouts.full')
@section('title',  $staff->nickname)

@section('content')
    <div class="container main">
        <h1>{{ $staff->full_name }} - {{ $staff->nickname }}</h1>
        <hr>
        <h2>Platforms</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <h2>Boards</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection