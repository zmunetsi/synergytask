@extends('layouts.login')
@section('title', 'Synergise - Innovate Learning login')


@section('content')

<div class="wrapper-page">
            <div class="panel-pages login">
                <div class="panel-body">
                    <div class="logo text-center m-b-20"> 
                        <a href="#"><img src="assets/images/synrgise-logo-white.png"></a>
                    </div> 
                    <form method="POST" class="form-horizontal m-t-20" action="{{ route('login') }}">

                        @csrf
                        
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="@error('username') is-invalid @enderror form-control input-lg" type="text" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
                                 @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control input-lg @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-md-8">
                                <div class="checkbox checkbox-primary">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <button class="btn btn-black btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30">
                            <div class="col-sm-7">
                                <a href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="{{ route('register') }}">Create an account</a>
                            </div>
                        </div>
                    </form> 
                </div>     
            </div>
        </div>


@endsection
