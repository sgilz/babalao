@extends('layouts.master')
@section("title", $data["title"])
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">{{ __('review.title') }} {{$data['product']->getName()}}</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                    </ul>
                    @endif
                    <form method="POST" action="{{ route('review.save', $data['product']->getId() ) }}">
                        @csrf
                        <div class="form-group">
                            <label for="headline_input">{{ __('review.input.headline') }}</label>
                            <input type="text" class="form-control form-control-sm" name="headline"
                                placeholder="{{ __('review.placeholder.headline') }}">
                        </div>
                        <div class="form-group">
                            <label for="rating_input">{{ __('review.input.rating') }}</label>
                            <input type="text" class="form-control" name="rating" placeholder="0-5">
                        </div>
                        <div class="form-group">
                            <label for="description_input">{{ __('review.input.description') }}</label>
                            <textarea class="form-control" name="description" id="description" rows="3"
                                placeholder="{{ __('review.placeholder.description') }}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block">{{ __('review.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection