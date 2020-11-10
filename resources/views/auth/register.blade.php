@extends('layouts.master')

@section("title", __('auth.register_title'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">{{ __('auth.register_title') }}</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="input_email">{{ __('auth.input.email') }}</label>
                            <input type="email" class="form-control" name="email" placeholder="{{ __('auth.place_holder.email') }}" value="{{ old("email") }}">
                        </div>
                        <div class="form-group">
                            <label for="input_name">{{ __('auth.input.name') }}</label>
                            <input type="text" class="form-control" name="name" placeholder="{{ __('auth.place_holder.name') }}" value="{{ old("name") }}">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="input_password">{{ __('auth.input.password') }}</label>
                                    <input type="password" class="form-control" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="input_confirm_password">{{ __('auth.input.confirm_password') }}</label>
                                    <input type="password" class="form-control" name="passwordConfirm"
                                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                                </div>
                            </div>
                          </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="input_city">{{ __('auth.input.city') }}</label>
                                    <input type="text" class="form-control" name="city" placeholder="{{ __('auth.place_holder.city') }}" value="{{ old("city") }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="input_neighborhood">{{ __('auth.input.neighborhood') }}</label>
                                    <input type="text" class="form-control" name="neighborhood" placeholder="{{ __('auth.place_holder.neighborhood') }}" value="{{ old("neighborhood") }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input_address">{{ __('auth.input.address') }}</label>
                            <input type="address" class="form-control" name="address" placeholder="{{ __('auth.place_holder.address') }}" value="{{ old("address") }}">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block">{{ __('auth.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
