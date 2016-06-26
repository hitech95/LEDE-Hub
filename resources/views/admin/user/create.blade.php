@extends('layouts.admin')

@section('title', 'New User')

@section('content')

    <h1>New User</h1>
    <p class="lead">Add a new user to the hub!</p>
    <hr>

    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::open(['action' => 'Admin\AUserController@store']) !!}

    <fieldset class="form-group row">
        {!! Form::label('name', 'Nickname:', ['class'=> 'col-sm-2 form-control-label']) !!}

        <div class="col-sm-10">
            <input id="name" type="text"
                   class="form-control{{ $errors->has('name') ? ' form-control-danger' : '' }}"
                   name="name"
                   value="{{ old('name') }}">

            @if ($errors->has('name'))
                <span class="text-muted text-help">
                    {{ $errors->first('name') }}
                </span>
            @endif
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('email', 'E-Mail Address:', ['class'=> 'col-sm-2 form-control-label']) !!}

        <div class="col-sm-10">
            <input id="email" type="email"
                   class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}"
                   name="email"
                   value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="text-muted text-help">
                    {{ $errors->first('email') }}
                </span>
            @endif
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('password', 'Password:', ['class'=> 'col-sm-2 form-control-label']) !!}

        <div class="col-sm-10">
            <input id="password" type="password"
                   class="form-control{{ $errors->has('password') ? ' form-control-danger' : '' }}"
                   name="password">

            @if ($errors->has('password'))
                <span class="text-muted text-help">
                    {{ $errors->first('password') }}
                </span>
            @endif
        </div>
    </fieldset>

    <fieldset class="form-group row">
        {!! Form::label('password-confirm', 'Confirm Password:', ['class'=> 'col-sm-2 form-control-label']) !!}

        <div class="col-sm-10">
            <input id="password-confirm" type="password"
                   class="form-control{{ $errors->has('password_confirmation') ? ' form-control-danger' : '' }}"
                   name="password_confirmation">

            @if ($errors->has('password_confirmation'))
                <span class="text-muted text-help">
                    {{ $errors->first('password_confirmation') }}
                </span>
            @endif
        </div>
    </fieldset>

    <fieldset class="form-group row">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::button('Register', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
        </div>
    </fieldset>
    {!! Form::close() !!}
@endsection