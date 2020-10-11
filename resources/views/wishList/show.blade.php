@extends('layouts.account')
@section("title",$data["title"])
@section('tab')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="jumbotron">
                <h1 class="display-4">{{ __('wishList.title') }}</h1>
                @foreach($data["products"] as $product)
                <ul class="list-group">
                    <li class="list-group-item"> {{ __('wishList.name') }} {{$product->getName()}}</li>
                    <li class="list-group-item"> {{ __('wishList.price') }} {{$product->getPrice()}}</li>
                </ul>
                <form action="{{ route('wishList.deleteProduct', $product->getId() ) }}" method="post">
                    <input class="btn btn-danger" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                </form>
                <hr class="my-4">
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
