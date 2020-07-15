@extends('layouts.login')
@section('title', 'Synergise - Innovate Learning Register')

@section('content')

<div class="wrapper-page">
            <div class="panel-pages login">
                <div class="panel-body">
                    <div class="logo text-center m-b-20"> 
                        <a href="#"><img src="assets/images/synrgise-logo-white.png"></a>
                    </div> 

                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                        @csrf


                                <div class="form-group">
                            <div class="col-xs-12">
                      
                                <input id="name" type="text" class="input-lg form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-xs-12">
                                <input id="username" type="username" class="input-lg form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      <div class="form-group">
                            <div class="col-xs-12">
                                <input id="email" type="email" class="input-lg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password" type="password" class="input-lg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password-confirm" type="password" class="input-lg form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-black btn-block waves-effect waves-light">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                         <div class="form-group m-t-30">
                            <div class="col-sm-7">
                                <a><i class="fa fa-lock m-r-5"></i> Already have an account?</a>
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

@endsection
