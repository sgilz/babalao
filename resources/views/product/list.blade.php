@extends('layouts.master')
@section('title', $data["title"])
@section('content')
<div class="container">
    <div class="card text-white p-5 banner">
        <div class="col-xs-5">
            <h4>{{__('product.banner.start', ['category' => $data['category']->getName()])}} <br>{{ __('product.banner.end') }}</h4>
            <a name="" id="" class="btn btn-dark mt-3" href="#" role="button">{{ __('product.banner.buttonText') }}</a>
        </div>
        <img src="{{ URL::asset('storage/categories/'.$data["category"]->getId().'.png') }}" class="category-img" alt="" loading="lazy">

    </div>
    <div class="row mt-5">
        @foreach($data["products"] as $product)
        <div class="col-md-3 mb-5 d-flex align-items-stretch">
            <div class="card card-product">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="h-100 d-flex flex-column justify-content-center">
                    <img class="card-img-top" alt="Card image cap" src="{{ URL::asset('storage/products/'.$product->getId().'.png') }}">
                    </div>
                    <h5 class="card-title">
                        <a href="{{ route('product.show',$product->getId()) }}" class="stretched-link">
                            {{ $product->getName() }}
                        </a>
                    </h5>
                    @foreach($product->getSpecs() as $key => $spec)
                    {{$key}}:&nbsp;{{$spec}}&nbsp;
                    @endforeach

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection