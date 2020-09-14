@extends('layouts.master')

@section('content')
<div class="container">
    @include('util.message')
    @foreach($data["products"] as $product)
    <div class="row">
        <div class="col-md-3">
            <figure class="card card-product">
                <div class="img-wrap">
                    <img style="width: 200px"
                         src="https://static-geektopia.com/storage/geek/products/intel/core-i5-9400f/99a7105bf5fd9e30d4e8de3ce5969e383078a6c0.jpg">
                </div>
                <figcaption class="info-wrap">
                    <h6 class="title text-dots"><a href="#"><h6>{{ $product->getName() }}</h6></a></h6>
                    <div class="action-wrap">
                        <a href="{{ route('product.show',['id'=> $product->getId()]) }}"
                           class="btn btn-primary btn-sm float-right"> details </a>
                        <div class="price-wrap h5">
                            <span class="price-new">$ {{ $product->getPrice() }}</span>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- action-wrap -->
                </figcaption>
            </figure> <!-- card // -->
        </div> <!-- col // -->
    </div> <!-- row.// -->
    @endforeach
</div>
<!--container end-->
@endsection
