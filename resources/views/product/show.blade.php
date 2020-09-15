@extends('layouts.master')
@section('title', $data["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body controls pl-5 pr-5">
                    <div class="row">
                        <div class="col-8">
                            <img class="card-img-top" alt="Card image cap" src="{{ URL::asset('storage/products/'.$data['product']->getId().'.png') }}">
                        </div>
                        <div class="col-4">
                            <h4>{{ $data['product']->getName() }}</h4>
                            <a href="#" data-toggle="modal" data-target="#review-modal">
                                <div class="star-ratings-sprite">
                                    <span style="width: {{ $data['reviews_avg'] }}%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </a>
                            <hr>
                            @foreach($data['product']->getSpecs() as $spec)
                            <p><b>{{$spec->name}}:</b> {{$spec->value}}</p>
                            @endforeach
                            <hr>
                            <div class="form-group row" id="specs-form-group">
                                <form action="{{ route('cart.addToCart',['id'=> $data['product']->getId()]) }}" method="POST">
                                    @csrf
                                    <div class="specs-input-group input-group mb-3">
                                        <input type="number" class="form-control" name="quantity" min="1" value="1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary btn-add" role="submit">{{ __('product.show.cart') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="review-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('product.reviews.title', ['product' => $data['product']->getName()]) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach($data['reviews'] as $review)
                <div class="card mb-4">
                    <div class="card-header">
                        {{ $review->getHeadline() }}
                        <div class="star-ratings-sprite">
                            <span style="width: {{ $review->getRating()*100/5 }}%" class="star-ratings-sprite-rating"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $review->user->getName() }}</h5>
                        <p class="card-text">{{ $review->getDescription() }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="{{ route('review.create',$data['product']->getId()) }}">{{ __('product.reviews.make') }}</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('product.reviews.exit') }}</button>
            </div>
        </div>
    </div>
</div>
@endsection