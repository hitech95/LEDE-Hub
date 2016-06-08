@extends('layouts.admin')

@section('title', 'Tags')

@section('content')
    <h1>Tags</h1>
    <p class="lead">In this page you can add the tag that users can use to organize the hardware</p>

    <hr>
    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::open(['url' => 'admin/tags', 'class' => 'form-inline']) !!}
    <fieldset  class="form-group">
        {!! Form::label('name', 'Name', ['class'=> 'form-control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control slugify-src', 'placeholder' => 'Name']) !!}
    </fieldset >

    <fieldset  class="form-group">
        {!! Form::label('slug', 'Slug', ['class'=> 'form-control-label']) !!}
        {!! Form::text('slug', null, ['class' => 'form-control slugify', 'placeholder' => 'Slug']) !!}
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
                <td class="col-md-6 pull-md-none">Tag</td>
                <td class="col-md-3 pull-md-none">Slug</td>
                <td class="col-md-2 pull-md-none">Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>
                    <td>


                        {!! Form::open(['url' => 'admin/tags/' . $tag->id, 'method' => 'DELETE', 'class' => 'form-inline form-delete']) !!}
                        <a href="{{ url('/admin/tags/' . $tag->id . '/edit') }}" class="btn btn-warning">Edit</a>
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