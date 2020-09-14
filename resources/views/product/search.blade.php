@extends('layouts.master')
@section('title', $data["title"])
@section('content')
<div class="container">
    <div class="card text-white p-5" style="background-size: cover; background-image: url(&quot;https://images.unsplash.com/photo-1568781269551-3e3baf5ec909?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80&quot;);">
        <div class="col-md-5">
            <h4>
                {{ __('product.search') }} <br>
                <span class="text-primary">{{ $data["search"]}}</span>
            </h4>
        </div>
        <img src="{{ URL::asset('storage/categories/'.$data["product"]->getCategoryId().'.png') }}" class="category-img" alt="" loading="lazy">

    </div>
    <div class="row mt-5">
        @foreach($data["products"] as $product)
        <div class="col-md-3 mb-5 d-flex align-items-stretch">
            <div class="card card-product">
                <div class="card-header">
                    <img class="card-img-top" alt="Card image cap" src="{{ URL::asset('storage/products/'.$product->getId().'.png') }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('product.show',$product->getId()) }}" class="stretched-link">
                            {{ $product->getName() }}
                        </a>
                    </h5>
                    @foreach($product->getSpecs() as $spec)
                    {{$spec->value}}&nbsp;
                    @endforeach

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection