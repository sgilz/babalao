@extends('layouts.master')

@section('title', __('home.title'))

@section('content')
<section class="hero-section">
  <div class="overlay"></div>
  <video class="bg-video" autoplay muted loop>
    <source src="{{ URL::asset('storage/home/bg.mp4') }}" type="video/mp4">
  </video>
  <div class="container text-center">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <h1 class="mt-5">{{__('home.searchTitle')}}</h1>
        <div class="searchbar mt-4">
          <form class="d-flex" method="POST" action="{{ route('product.searchBar') }}">
            @csrf
            <button class="search_icon"><i class="fas fa-search"></i></button>
            <input class="search_input" type="text" name="search" placeholder="{{ __('navigation.search') }}">
          </form>
        </div>
        <h4 class="mt-4">{{__('home.searchSubTitle')}}</h4>
      </div>
    </div>
  </div>
</section>
<div class="row justify-content-md-center">
  <div class="col-10">
    <div class="card text-white p-5 banner">
      <div class="col-xs-5">
        <h4>{{ __('home.banner.start') }} <br>{{ __('home.banner.end') }}</h4>
        <a name="" id="" class="btn btn-dark mt-3" href="{{ route('cars.show') }}" role="button">{{ __('home.banner.buttonText') }}</a>
      </div>
      <img src="{{ URL::asset('storage/home/case.png') }}" class="category-img" alt="" loading="lazy">

    </div>
    <div class="row mt-5">
      @foreach($data["categories"] as $category)
      <div class="col-md-3 mb-5 d-flex align-items-stretch">
        <div class="card">
          <div class="card-body d-flex flex-column justify-content-between">
            <div class="h-100 d-flex flex-column justify-content-center">
              <img class="card-img-top img-fluid" alt="Card image cap"
              src="{{ URL::asset('storage/categories/'.$category->getId().'.png') }}">
            </div>
            <h5 class="card-title mt-3">
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

@push('custom-scripts')
<script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>
@endpush
@endsection