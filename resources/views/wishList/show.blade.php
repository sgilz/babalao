@extends('layouts.account')
@section("title",$data["title"])
@section('tab')

<div class="wish-list-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4" >{{ __('wishList.title') }}</h1>
                <hr class="my-4">
                @foreach($data["products"] as $product)
                <div class="row">
                    <div class="col-sm">
                        <img src="{{ URL::asset('storage/products/'.$product->getId().'.png') }}" class="img-thumbnail"
                            alt="...">
                    </div>
                    <div class="col-sm">
                        <ul class="list-group">
                            <a href="{{route('product.show',$product->getId() ) }}"> <b>{{$product->getName() }}</b> </a>
                            <li class="list-group-item"> {{ __('wishList.price') }} <b> {{$product->getPrice()}}</b> </li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <form action="{{ route('wishList.deleteProduct', $product->getId() ) }}" method="POST">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <span class="fa fa-trash-o fa-lg" aria-hidden="true" style="color:red"></span>
                            </button>
                            @csrf
                        </form>
                        <form action="{{ route('cart.addToCart',['id'=> $product->getId()]) }}" method="POST">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                            </button>
                            @csrf
                        </form>
                    </div>
                </div>
                <hr class="my-4">
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection