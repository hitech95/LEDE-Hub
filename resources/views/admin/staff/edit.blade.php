@extends('layouts.admin')

@section('title', 'Edit: ' . $staff->nickname)

@section('content')
    <h1>Edit: {{ $staff->nickname }}</h1>
    <p class="lead">Edit the selected staff!</p>

    <hr>

    <!-- TODO - Better error handling -->
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ui>
    @endif

    {!! Form::model($staff, ['method' => 'PATCH', 'action' => ['Admin\AStaffController@update', $staff->id]]) !!}
    <fieldset class="form-group row">
        {!! Form::label('nickname', 'Nickname:', ['class'=> 'col-sm-2 form-control-label']) !!}

        <div class="col-sm-10">
            {!! Form::text('nickname', null, ['class' => 'form-control' . ($errors->has('nickname') ? ' form-control-danger' : ''), 'placeholder' => 'Nickname']) !!}

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
            {!! Form::text('full_name', null, ['class' => 'form-control' . ($errors->has('full_name') ? ' form-control-danger' : ''), 'placeholder' => 'Full Name']) !!}

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
        <div class="col-sm-offset-2 col-sm-10">
            <div class="row">
                <div class="col-sm-1">
                    <a href="{{ url('admin/staff') }}" class="btn btn-danger">Cancel</a>
                </div>
                <div class="col-sm-11">
                    {!! Form::button('Update', ['class' => 'btn btn-success form-control', 'type' => 'submit']) !!}
                </div>
            </div>
        </div>
    </fieldset>

    {!! Form::close() !!}
@endsection