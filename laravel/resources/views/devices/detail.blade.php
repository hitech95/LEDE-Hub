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
    <p class="lead">
        @foreach( $hardware->tags as $tag )
            <span class="label label-default">{{ $tag->name }}</span>
        @endforeach
    </p>

    <a id="overview"></a>
    <hr>
    <p class="lead">
        {!! $hardware->description !!}
    </p>

    <hr>
    <div class="row">
        <div class="col-lg-3 col-md-4">

            <div class="card card-inverse bg-inverse" style="border-color: #333;">
                <div class="card-block">
                    <h3 class="card-title">Hardware Highlights
                        <span class="text-warning"><i class="fa fa-circle" aria-hidden="true"></i></span>
                    </h3>
                    <p class="card-text">
                    </p>
                    <ul>
                        <li><span class="font-weight-bold">CPU:</span>Lantiq XWAY ARX168@333MHz</li>
                        <li><span class="font-weight-bold">RAM:</span>64MiB</li>
                        <li><span class="font-weight-bold">ROM:</span>16MiB</li>
                        <li><span class="font-weight-bold">Switch:</span>Realtek 4 x 1GBE</li>
                        <li><span class="font-weight-bold">USB:</span>1 x 2.0 HOST</li>
                        <li><span class="font-weight-bold">ADSL:</span>YES</li>
                    </ul>
                    <p class="text-danger">FAKE DATA!!! NOT DB RELATED</p>
                    <a href="#" class="btn btn-secondary-outline">More details</a>
                </div>
            </div>

        </div>
        <div class="col-lg-9 col-md-8">

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
                                <td><span class="text-success"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>ADSL works, new SPI driver make the device faster</td>
                            </tr>
                            <tr>
                                <td>DGN3500B</td>
                                <td>2012-11</td>
                                <td>15.05</td>
                                <td><span class="text-warning"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>ADSL don't works</td>
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
                                <td><span class="text-warning"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>USB not working</td>
                            </tr>
                            <tr>
                                <td>DGN3500</td>
                                <td>r1850</td>
                                <td>2013-03</td>
                                <td>9.05</td>
                                <td><span class="text-success"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DGN3500B</td>
                                <td>r540</td>
                                <td>2012-11</td>
                                <td>5.00</td>
                                <td><span class="text-danger"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>USB not working, ADSL not working</td>
                            </tr>
                            <tr>
                                <td>DGN3500B</td>
                                <td>r1940</td>
                                <td>2013-03</td>
                                <td>9.05</td>
                                <td><span class="text-warning"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>ADSL don't works</td>
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
                                <td><span class="text-success"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>ADSL not initialize</td>
                            </tr>
                            <tr>
                                <td>DGN3500/B</td>
                                <td>2012-11</td>
                                <td>15.05</td>
                                <td><span class="text-success"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>USB not initialize</td>
                            </tr>
                            <tr>
                                <td>DGN3500/B</td>
                                <td>2012-11</td>
                                <td>15.05</td>
                                <td><span class="text-warning"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>Missing mapping of some leds (I have found it, must add to DTS on
                                    mainstream, that is <a
                                            href="https://github.com/hitech95/OpenWrt-Enviroment/blob/master/profiles/dgn3500/trunk-openwrt.patch#L39">real</a>
                                    ... by hitech95)
                                </td>
                            </tr>
                            <tr>
                                <td>DGN3500B</td>
                                <td>2012-11</td>
                                <td>15.05</td>
                                <td><span class="text-danger"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </td>
                                <td>ADSL don't works</td>
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