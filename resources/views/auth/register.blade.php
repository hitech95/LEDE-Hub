@extends('layouts.full')
@section('title', 'Register')

@section('content')
    <div class="container main">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-block">
                        <form crole="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group row{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label for="name" class="col-md-4 form-control-label">Nickname</label>

                                <div class="col-md-6">
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
                            </div>

                            <div class="form-group row{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label for="email" class="col-md-4 form-control-label">E-Mail Address</label>

                                <div class="col-md-6">
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
                            </div>

                            <div class="form-group row{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label for="password" class="col-md-4 form-control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' form-control-danger' : '' }}"
                                           name="password">

                                    @if ($errors->has('password'))
                                        <span class="text-muted text-help">
                                        {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                                <label for="password-confirm" class="col-md-4 form-control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password"
                                           class="form-control{{ $errors->has('password_confirmation') ? ' form-control-danger' : '' }}"
                                           name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-muted text-help">
                                        {{ $errors->first('password_confirmation') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-sm-12 text-xs-center">
                                <a class="btn btn-link" href="{{ url('/login') }}"> Already registered?</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
