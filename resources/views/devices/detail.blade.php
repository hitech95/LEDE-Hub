@extends('layouts.sidebar')

@section('title', $brand->name . ' ' . $hardware->name)

@section('sidebar')
    <ul class="nav nav-pills nav-stacked">
        <li class="nav-item"><a class="nav-link" href="#">Overview</a>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#">Hardware Summary</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Supported Versions</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Download</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Bug Tracker</a></li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#Installation_5">Installation</a></li>
        <li class="nav-item"><a class="nav-link" href="">Configuration</a></li>
        <li class="nav-item"><a class="nav-link" href="#Hardware_40">Hardware Details</a>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#">Hardware Table</a></li>
                <li class="nav-item"><a class="nav-link" href="#Serial_43">Serial</a></li>
                <li class="nav-item"><a class="nav-link" href="#JTAG_56">JTAG</a></li>
                <li class="nav-item"><a class="nav-link" href="#Photos_58">Photos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Mod</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Bug Tracker</a></li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="">Debrick</a></li>
        <li class="nav-item"><a class="nav-link" href="">Logs</a></li>
    </ul>
@endsection

@section('content')
    <h1 class="display-3 hidden-xs-down">
        {{ $brand->name }} {{ $hardware->name }}
    </h1>
    <p class="lead"><i class="fa fa-tag"></i>
        @forelse( $hardware->tags as $tag )
            <span class="label label-default">{{ $tag->name }}</span>
        @empty
            <span class="text-info">No tags.</span>
        @endforelse
    </p>

    <a id="overview"></a>
    <hr>
    <p class="lead">
        {!! $hardware->description !!}
    </p>

    <hr>
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <div class="card card-inverse bg-inverse" style="border-color: #333;">
                <div class="card-block">
                    <h3 class="card-title"><i class="fa fa-gears"></i> Hardware Highlights
                        <!-- TODO - Load the color from DB using compatibility -->
                        <span class="text-warning"><i class="fa fa-circle" aria-hidden="true"></i></span>
                    </h3>
                    <p class="card-text">
                    </p>
                    <ul>
                        @forelse($hardware->specs as $spec)
                        @if(strpos($spec->slug, 'url') !== false)
                        <li><span class="font-weight-bold">{{ $spec->name }}:</span> <a href="{{ $spec->pivot->value }}">Link</a></li>                                </li>
                        @else
                        <li><span class="font-weight-bold">{{ $spec->name }}:</span> {{ $spec->pivot->value }}</li>
                        @endif
                        @empty
                        <li>No specs for this device :(</li>
                        @endforelse
                    </ul>
                    <a href="#hardware" class="btn btn-secondary-outline">More details</a>
                </div>
            </div>

        </div>
        <div class="col-lg-8 col-md-7">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#supportedw" role="tab">Supported
                        Version</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#downloads" role="tab">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#busg" role="tab">Bugs</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="supportedw" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                            <tr>
                                <th>Revision</th>
                                <th>Date</th>
                                <th>Version</th>
                                <th>Status</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>DGN3500</td>
                                <td>2012-11</td>
                                <td>15.05</td>
                                <td><span class="text-success"><i class="fa fa-circle"
                                                                  aria-hidden="true"></i></span>
                                </td>
                                <td>ADSL works, new SPI driver make the device faster</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="downloads" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                            <tr>
                                <th>Revision</th>
                                <th>Release</th>
                                <th>Date</th>
                                <th>Version</th>
                                <th>Status</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>DGN3500</td>
                                <td>r500</td>
                                <td>2012-11</td>
                                <td>5.00</td>
                                <td><span class="text-warning"><i class="fa fa-circle"
                                                                  aria-hidden="true"></i></span>
                                </td>
                                <td>USB not working</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="busg" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                            <tr>
                                <th>Revision</th>
                                <th>Date</th>
                                <th>Version</th>
                                <th>Status</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>DGN3500</td>
                                <td>2012-11</td>
                                <td>15.05</td>
                                <td><span class="text-success"><i class="fa fa-circle"
                                                                  aria-hidden="true"></i></span>
                                </td>
                                <td>ADSL not initialize</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="text-danger">FAKE DATA!!! NOT DB RELATED</p>
            </div>
        </div>
    </div>
    <div class="container-fluid main">
        <div class="row">
            <hr>

            {!! $hardware->content !!}

        </div>
    </div>
@endsection