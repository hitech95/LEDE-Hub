@extends('layouts.admin')

@section('title', 'Edit: ' . $release->name)

@section('content')
    <h1>Edit: {{ $release->name }}</h1>
    <p class="lead">Edit the selected revision!</p>

    <hr>

    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::model($release, ['method' => 'PATCH', 'action' => ['Admin\AReleaseController@update', $release->id]]) !!}
    <fieldset class="form-group row">
        {!! Form::label('name', 'Code name:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Code Name']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('version', 'Version:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('version', null, ['class' => 'form-control', 'placeholder' => 'Version']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('revision', 'Revision:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('revision', null, ['class' => 'form-control', 'placeholder' => 'Revision']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="row">
                <div class="col-sm-1">
                    <a href="{{ url('admin/releases') }}" class="btn btn-danger">Cancel</a>
                </div>
                <div class="col-sm-11">
                    {!! Form::button('Update', ['class' => 'btn btn-success form-control', 'type' => 'submit']) !!}
                </div>
            </div>
        </div>
    </fieldset>

    {!! Form::close() !!}
@endsection