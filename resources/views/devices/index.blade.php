@extends('layouts.full')
@section('title', 'Devices')

@section('content')
    <div class="container main">
        <h1>Device List</h1>
        <p class="lead">This is the page where you can find all the hardware we support.</p>
        <hr>
        @if (count($records) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Platform</th>
                        <th class="text-xs-center">Status</th>
                        <th>Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($records as $hw)
                        <tr>
                            @if(is_null($hw->brand))
                                <td>{{ $hw->name }}</td>
                                <td>-</td>
                            @else
                                <td>
                                    <a href="{{ url('/device/'. $hw->brand->slug .'/' . $hw->slug)}}">{{ $hw->name }}</a>
                                </td>
                                <td>
                                    {{ $hw->brand->name }}
                                </td>
                                {{ $hw->brand->name }}
                            @endif
                            <td>
                                {{ $hw->platform->brand->name }} - <a
                                        href="{{ url('/platform/'. $hw->platform->brand->slug .'/' . $hw->platform->slug)}}">{{ $hw->platform->name }}</a>
                            </td>
                            <td></td>
                            <td>
                                @foreach ($hw->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @endforeach
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