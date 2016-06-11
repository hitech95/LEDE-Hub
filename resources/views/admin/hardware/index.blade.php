@extends('layouts.admin')

@section('title', 'Hardware')

@section('content')
    <h1>Hardware</h1>
    <p class="lead">In this page you can add and review hardware that users have modified or that is generated on build
        time</p>

    <hr>
    <!-- TODO - Better error handling -->

    <p>Add a new hardware: <a href="{{ url('admin/hardware/create') }}" class="btn btn-success">Add</a></p>

    <hr>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-inverse">
            <tr>
                <td class="col-md-1 pull-md-none">Visible</td>
                <td class="col-md-2 pull-md-none">Name</td>
                <td class="col-md-1 pull-md-none">Slug</td>
                <td class="col-md-1 pull-md-none">Brand</td>
                <td class="col-md-2 pull-md-none">Platform</td>
                <td class="col-md-3 pull-md-none">Tags</td>
                <td class="col-md-2 pull-md-none">Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($hardware as $hw)
                <tr>
                    <td>
                        @if($hw->published)
                            <span class="text-success"><i class="fa fa-circle" aria-hidden="true"></i></span>
                        @else
                            <span class="text-danger"><i class="fa fa-circle" aria-hidden="true"></i></span>
                        @endif
                    </td>
                    <td>{{ $hw->name }}</td>
                    <td>{{ $hw->slug }}</td>
                    <td>
                        @if(is_null($hw->brand))
                            -
                        @else
                            {{ $hw->brand->name }}
                        @endif
                    </td>
                    <td>
                        @if(is_null($hw->platform))
                            -
                        @else
                            {{ $hw->platform->name }}
                        @endif
                    </td>
                    <td>
                        @foreach ($hw->tags as $tag)
                            <span class="label label-default">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        {!! Form::open(['url' => 'admin/hardware/' . $hw->id, 'method' => 'DELETE', 'class' => 'form-inline form-delete']) !!}
                        <a href="{{ url('/admin/hardware/' . $hw->id . '/edit') }}" class="btn btn-warning">Edit</a>
                        {!! Form::submit('Remove', ['class' => 'btn btn-danger form-control']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade modal-delete-dialog" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Delete</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Delete the item?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger btn-delete">Delete</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection