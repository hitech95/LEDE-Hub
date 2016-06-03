@extends('layouts.full')
@section('title', 'Staff')

@section('content')
    <div class="container main">
        <h1>Staff List</h1>
        <p class="lead">Do you want to know the staff? There it is!</p>
        <hr>
        @if (count($records) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Nickname</th>
                        <th>Name</th>
                        <th>Roles</th>
                        <th>Platforms</th>
                        <th>Boards</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($records as $staff)
                        <tr>
                            <td><a href="{{url('/staff/' . $staff->nickname )}}">{{ $staff->nickname }}</a></td>
                            <td>{{ $staff->full_name }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="card card-inverse card-info">
                        <div class="card-block bg-info">
                            <div class="rotate">
                                <i class="fa fa-exclamation-triangle fa-5x"></i>
                            </div>
                            <span>Nothing here <strong>:(</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection