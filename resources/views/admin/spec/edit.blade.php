@extends('layouts.admin')

@section('title', 'Edit: ' . $spec->name)

@section('content')
    <h1>Edit: {{ $spec->name }}</h1>
    <p class="lead">Edit the selected spec!</p>

    <hr>

    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::model($spec, ['method' => 'PATCH', 'action' => ['Admin\SpecController@update', $spec->id]]) !!}
    <fieldset class="form-group row">
        {!! Form::label('name', 'Name:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => 'form-control slugify-src', 'placeholder' => 'Name']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('slug', 'Slug:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('slug', null, ['class' => 'form-control slugify', 'placeholder' => 'Slug']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('description', 'Description:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="row">
                <div class="col-sm-1">
                    <a href="{{ url('admin/specs') }}" class="btn btn-danger">Cancel</a>
                </div>
                <div class="col-sm-11">
                    {!! Form::button('Update', ['class' => 'btn btn-success form-control', 'type' => 'submit']) !!}
                </div>
            </div>
        </div>
    </fieldset>

    {!! Form::close() !!}
@endsection