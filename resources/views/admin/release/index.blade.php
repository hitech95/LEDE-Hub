@extends('layouts.admin')

@section('title', 'Releases')

@section('content')
    <h1>Releases</h1>
    <p class="lead">In this page you can add end edit the releases of LEDE</p>

    <hr>
    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::open(['url' => 'admin/releases', 'class' => 'form-inline']) !!}
    <fieldset  class="form-group">
        {!! Form::label('name', 'Code name:', ['class'=> 'form-control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Code name']) !!}
    </fieldset >

    <fieldset  class="form-group">
        {!! Form::label('version', 'Version:', ['class'=> 'form-control-label']) !!}
        {!! Form::text('version', null, ['class' => 'form-control', 'placeholder' => 'Version']) !!}
    </fieldset >

    <fieldset  class="form-group">
        {!! Form::label('revision', 'Revision:', ['class'=> 'form-control-label']) !!}
        {!! Form::text('revision', null, ['class' => 'form-control', 'placeholder' => 'Revision No.']) !!}
    </fieldset >

    <fieldset  class="form-group">
        {!!  Form::submit('Add', ['class' => 'btn btn-success form-control'])!!}
    </fieldset >
    {!! Form::close() !!}

    <hr>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-inverse">
            <tr>
                <td class="col-md-7 pull-md-none">Release</td>
                <td class="col-md-1 pull-md-none">Version</td>
                <td class="col-md-2 pull-md-none">Revision</td>
                <td class="col-md-2 pull-md-none">Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($releases as $release)
                <tr>
                    <td>{{ $release->name }}</td>
                    <td>{{ $release->version }}</td>
                    <td>#{{ $release->revision }}</td>
                    <td>
                        {!! Form::open(['url' => 'admin/releases/' . $release->id, 'method' => 'DELETE', 'class' => 'form-inline form-delete']) !!}
                        <a href="{{ url('/admin/releases/' . $release->id . '/edit') }}" class="btn btn-warning">Edit</a>
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