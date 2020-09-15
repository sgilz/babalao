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
                                <div class="specs-input-group input-group mb-3">
                                    <input type="number" class="form-control" name="amount" min="1" value="1">
                                    <div class="input-group-append">
                                        <a class="btn btn-outline-primary btn-add" href="#" role="button">{{ __('product.show.cart') }}</a>
                                    </div>
                                </div>
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
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="{{ route('review.create',$data['product']->getId()) }}">Make review</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>
@endsection