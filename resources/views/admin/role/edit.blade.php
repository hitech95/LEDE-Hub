@extends('layouts.admin')

@section('title', 'Edit: ' . $role->name)

@section('content')
    <h1>Edit: {{ $role->name }}</h1>
    <p class="lead">Edit the selected role!</p>

    <hr>

    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::model($role, ['method' => 'PATCH', 'action' => ['Admin\ARoleController@update', $role->id]]) !!}
    <fieldset class="form-group row">
        {!! Form::label('name', 'Role name:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="row">
                <div class="col-sm-1">
                    <a href="{{ url('admin/roles') }}" class="btn btn-danger">Cancel</a>
                </div>
                <div class="col-sm-11">
                    {!! Form::button('Update', ['class' => 'btn btn-success form-control', 'type' => 'submit']) !!}
                </div>
            </div>
        </div>
    </fieldset>

    {!! Form::close() !!}
@endsection