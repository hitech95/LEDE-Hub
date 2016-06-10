@extends('layouts.full')
@section('title', 'Login')

@section('content')
    <div class="container main">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-block">
                        <form role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group row{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label for="email" class="col-md-4 form-control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}"
                                           name="email" value="{{ old('email') }}">

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

                            <div class="form-group row">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-sm-6 text-xs-center">
                                <a class="btn btn-link" href="{{ url('/register') }}">Need an account?</a>
                            </div>
                            <div class="col-sm-6 text-xs-center">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
