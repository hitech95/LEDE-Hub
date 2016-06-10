@extends('layouts.admin')

@section('title', 'New Hardware')

@section('content')

    <h1>New Hardware</h1>
    <p class="lead">Add a new hardware to the hub!</p>
    <hr>

    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::open(['action' => 'Admin\AHardwareController@store']) !!}

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
        {!! Form::label('brand', 'Brand:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('brand', $brands, null, ['class' => 'form-control selectized', 'placeholder' => 'Pick a brand...']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('platform', 'Platform:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('platform', $platforms, null, ['class' => 'form-control selectized', 'placeholder' => 'Pick a platform...']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('description', 'Description:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('description', null, ['class' => 'form-control tinymce-lite', 'rows'=>'3', 'placeholder' => 'A brief description...']) !!}
            <small class="text-muted">
                This is a brief description on hardware, leaving the important things for later!
            </small>
        </div>

    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('content', 'Body:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('content', null, ['class' => 'form-control tinymce', 'placeholder' => 'Body']) !!}
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('tags[]', 'Tags:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('tags[]', $tags, null, ['class' => 'form-control selectized', 'multiple' => 'multiple', 'placeholder' => 'Pick some tag...']) !!}
            <small class="text-muted">
                Tags are used to search a device in the list, make sure they are accurate!
            </small>
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('public', 'Visible:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10 btn-group" data-toggle="buttons">
            <label class="btn btn-success active">
                {!! Form::radio('public', 'false', true) !!} True
            </label>
            <label class="btn btn-danger">
                {!! Form::radio('public', 'true') !!} False
            </label>
        </div>
    </fieldset>

    <fieldset class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::button('Add', ['class' => 'btn btn-success form-control', 'type' => 'submit']) !!}
        </div>
    </fieldset>

    {!! Form::close() !!}

@endsection