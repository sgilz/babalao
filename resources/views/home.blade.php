@extends('layouts.master')

@section('title', __('home.title'))

@section('content')
<div class="row justify-content-md-center">
  <div class="col-10">
    <div class="card text-white p-5" style="background-size: cover; background-image: url(&quot;https://images.unsplash.com/photo-1568781269551-3e3baf5ec909?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80&quot;);">
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
            <h5 class="card-title">{{ $category->getName() }}</h5>
            
            @foreach($category->getSpecs() as $spec)
                {{$spec}}<br>
            @endforeach
            
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</div>
@endsection