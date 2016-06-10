@extends('layouts.full')
@section('title', 'Releases')

@section('content')
    <div class="container main">
        <h1>Releases</h1>
        <p class="lead">Here you can find the release of LEDE. There is still much to do!</p>
        <hr>
        @if (count($records) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Codename</th>
                        <th>Version</th>
                        <th>Release</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($records as $release)
                        <tr>
                            <td>{{ $release->name }}</td>
                            <td>{{ $release->version }}</td>
                            <td><a href="#">r{{ $release->revision }}</a></td>
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