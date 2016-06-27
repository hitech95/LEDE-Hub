@extends('layouts.admin')

@section('title', 'New User')

@section('content')

    <h1>New Staff Member</h1>
    <p class="lead">Add a new member to the hub!</p>
    <hr>

    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::open(['action' => 'Admin\AStaffController@store']) !!}

    <fieldset class="form-group row">
        {!! Form::label('nickname', 'Nickname:', ['class'=> 'col-sm-2 form-control-label']) !!}

        <div class="col-sm-10">
            <input id="nickname" type="text"
                   class="form-control{{ $errors->has('nickname') ? ' form-control-danger' : '' }}"
                   name="nickname"
                   value="{{ old('nickname') }}">

            @if ($errors->has('nickname'))
                <span class="text-muted text-help">
                    {{ $errors->first('nickname') }}
                </span>
            @endif
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('full_name', 'Full Name:', ['class'=> 'col-sm-2 form-control-label']) !!}

        <div class="col-sm-10">
            <input id="full-name" type="text"
                   class="form-control{{ $errors->has('full_name') ? ' form-control-danger' : '' }}"
                   name="full_name"
                   value="{{ old('full_name') }}">

            @if ($errors->has('full_name'))
                <span class="text-muted text-help">
                    {{ $errors->first('full_name') }}
                </span>
            @endif
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('roles[]', 'Roles:', ['class'=> 'col-sm-2 form-control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('roles[]', $roles, null, ['class' => 'form-control selectized', 'multiple' => 'multiple', 'placeholder' => 'Pick some roles...']) !!}
            <small class="text-muted">
                Select the roles that this member have.
            </small>
        </div>
    </fieldset>

    <fieldset class="form-group row">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::button('Add', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
        </div>
    </fieldset>
    {!! Form::close() !!}
@endsection