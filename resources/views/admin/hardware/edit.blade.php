@extends('layouts.admin')

@section('title', 'Edit: ' . $hardware->name)

@section('content')

    <h1>Edit: {{ $hardware->name }}</h1>
    <p class="lead">Edit the selected hardware!</p>

    <hr>

    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::model($hardware, ['method' => 'PATCH', 'action' => ['Admin\AHardwareController@update', $hardware->id]]) !!}
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
        {!! Form::label('specs', 'Specifications:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10 btn-group" data-toggle="buttons">
            <table id="specs" class="table table-striped table-hover">
                <thead class="table-inverse">
                <tr>
                    <td class="col-md-3 pull-md-none">Spec</td>
                    <td class="col-md-4 pull-md-none">Value</td>
                    <td class="col-md-5 pull-md-none">Description</td>
                </tr>
                </thead>
                <tbody>
                @foreach($specs as $spec)
                    <tr>
                        <td>{!! Form::label('specs[' . $spec->id . '][value]', $spec->name . ':', ['class'=> 'form-control-label']) !!}</td>
                        <td>{!! Form::text('specs[' . $spec->id . '][value]', null, ['class' => 'form-control', 'placeholder' => $spec->name]) !!}</td>
                        <td>{{ $spec->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
        {!! Form::label('published', 'Visible:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10 btn-group" data-toggle="buttons">
            <label class="btn btn-success{{ ($hardware->published) ? ' active' : '' }}">
                {!! Form::radio('published', 'true', true) !!} True
            </label>
            <label class="btn btn-danger{{ (!$hardware->published) ? ' active' : '' }}">
                {!! Form::radio('published', 'false') !!} False
            </label>
        </div>
    </fieldset>

    <fieldset class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="row">
                <div class="col-sm-1">
                    <a href="{{ url('admin/hardware') }}" class="btn btn-danger">Cancel</a>
                </div>
                <div class="col-sm-11">
                    {!! Form::button('Update', ['class' => 'btn btn-success form-control', 'type' => 'submit']) !!}
                </div>
            </div>
        </div>
    </fieldset>

    {!! Form::close() !!}

@endsection