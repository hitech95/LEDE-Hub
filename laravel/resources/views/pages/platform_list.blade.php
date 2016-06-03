@extends('layouts.full')
@section('title', 'Platforms')

@section('content')
    <div class="container main">
        <h1>Platform List</h1>
        <p class="lead">On this page you will find the platforms on which is based the hardware supported by us.</p>
        <hr>
        @if (count($records) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Name</th>
                        <th>Brand</th>
                        <th class="text-xs-center">Status</th>
                        <th>Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($records as $device)
                        <tr>
                            <td>
                                <a href="{{url('/platform/'. $device->brand->slug .'/' . $device->slug)}}">{{ $device->name }}</a>
                            </td>
                            <td>
                                {{ $device->brand->name }}
                            </td>
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