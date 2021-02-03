@extends('layouts.master')

@section("title", __('auth.register_title'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('util.message')
            <div class="card auth-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 p-4 text-center">
                            <img src="{{ url('storage/brand/favicon.png') }}" width="80" height="90"
                                class="d-inline-block align-top mb-1" alt="" loading="lazy">
                            <form method="POST" action="{{ route('register') }}" class=" p-2">
                                @csrf
                                <h5 class="font-weight-bold mb-3">{{ __('auth.register_title') }}</h5>
                                @if($errors->any())
                                <ul id="errors">
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                @endif
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="{{ __('auth.place_holder.email') }}" value="{{ old("email") }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="{{ __('auth.place_holder.name') }}" value="{{ old("name") }}">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="{{ __('auth.input.password') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="passwordConfirm"
                                                placeholder="{{ __('auth.input.confirm_password') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city"
                                                placeholder="{{ __('auth.place_holder.city') }}" value="{{ old("city") }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="neighborhood"
                                                placeholder="{{ __('auth.place_holder.neighborhood') }}" value="{{ old("neighborhood") }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="address" class="form-control" name="address"
                                        placeholder="{{ __('auth.place_holder.address') }}" value="{{ old("address") }}">
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12 d-flex flex-column">
                                        <button type="submit" class="btn btn-primary btn-block align-self-center">
                                            {{ __('auth.submit') }}
                                        </button>

                                        <p class="mb-0 mt-2">{{ __('auth.registered') }} <a class="btn btn-link p-0"
                                                href="{{ route('login') }}">
                                                {{ __('auth.login.buttons.login') }}
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
                        <div class="col-7 text-center p-5 d-flex flex-column justify-content-center">
                            <img class="auth-img" src="{{ URL::asset('storage/home/login.png') }}" alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
