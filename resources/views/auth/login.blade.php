@extends('layouts.master')

@section('title', __('auth.login.title'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card auth-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 p-4 text-center">
                            <img src="{{ url('storage/brand/favicon.png') }}" width="80" height="90"
                                class="d-inline-block align-top mb-1" alt="" loading="lazy">
                            <form method="POST" action="{{ route('login') }}" class=" p-2">
                                @csrf
                                <h5 class="font-weight-bold mb-5">{{ __('auth.login.title') }}</h5>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}"
                                            placeholder="{{ __('auth.login.place_holder.email') }}" required
                                            autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-12">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="{{ __('auth.login.place_holder.password') }}" required
                                            autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="pretty p-default p-curve p-thick">
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }} />
                                        <div class="state p-primary-o">
                                            <label>{{ __('auth.login.remember') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12 d-flex flex-column">
                                        <button type="submit" class="btn btn-primary btn-block align-self-center">
                                            {{ __('auth.login.buttons.login') }}
                                        </button>

                                        <p class="mb-0 mt-2">{{ __('auth.login.signup') }} <a class="btn btn-link p-0" href="{{ route('register') }}">
                                            {{ __('auth.login.buttons.register') }}
                                        </a></p>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('auth.login.buttons.forgot') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-7 text-center p-5">
                            <img class="auth-img" src="{{ URL::asset('storage/home/login.png') }}" alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection