@extends('layouts.sidebar')

@section('title', $brand->name . ' ' . $hardware->name)

@section('sidebar')
    <ul class="nav nav-pills nav-stacked">
        <li class="nav-item"><a class="nav-link" href="#">Overview</a></li>
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
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#supportedw" role="tab">
                    Supported Version
                </a>
            </li>

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
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="text-danger">FAKE DATA!!! NOT DB RELATED</p>
        </div>
    </div>
    <div class="container-fluid main">
        <div class="row">
            <hr>
            {!! $hardware->content !!}
        </div>
    </div>
@endsection