@extends('layouts.master')

@section('title', __('home.title'))

@section('content')
<video autoplay muted loop>
  <source src="{{ URL::asset('storage/home/bg.mp4') }}" type="video/mp4">
</video>
<div class="row justify-content-md-center">
  <div class="col-10">
    <div class="card text-white p-5 banner">
      <div class="col-xs-5">
        <h4>{{ __('home.banner.start') }} <br>{{ __('home.banner.end') }}</h4>
        <a name="" id="" class="btn btn-dark mt-3" href="#" role="button">{{ __('home.banner.buttonText') }}</a>
      </div>
      <img src="{{ URL::asset('storage/home/case.png') }}" class="category-img" alt="" loading="lazy">

    </div>
    <div class="row mt-5">
      @foreach($data["categories"] as $category)
      <div class="col-md-3 mb-5 d-flex align-items-stretch">
        <div class="card">
          <div class="card-header">
            <img class="card-img-top" alt="Card image cap" src="{{ URL::asset('storage/categories/'.$category->getId().'.png') }}">
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <a href="{{ route('product.list',$category->getId()) }}" class="stretched-link">
                {{ $category->getName() }}
              </a>
            </h5>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>

</div>
@endsection