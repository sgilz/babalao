<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{ URL::asset('storage/brand/favicon.png') }}" />
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
  @stack('styles')
</head>

<body>
  <nav class="navbar main-navbar navbar-light d-flex justify-content-between">
    <a class="navbar-brand d-flex" href="{{ route('home') }}">
      <img src="{{ url('storage/brand/favicon.png') }}" width="45" height="50" class="d-inline-block align-top" alt="" loading="lazy">
      <h1 class="brand-text d-inline-block align-self-center ml-3">{{ __('navigation.brand') }} </h1>
    </a>
    <div class="d-flex toolbar">
      <div class="searchbar">
        <form method="POST" action="{{ route('product.searchBar') }}">
          @csrf
          <input class="search_input" type="text" name="search" placeholder="{{ __('navigation.search') }}">
          <button class="search_icon"><i class="fas fa-search"></i></button>
        </form>
      </div>
      <div class="user-menu dropdown btn-toolbar">
        <a href="#" class="search_icon icon-toolbar"><i class="fas fa-shopping-cart"></i></a>
      </div>
      <div class="user-menu dropdown btn-toolbar">
        <a href="#" class="user_icon icon-toolbar dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
          @foreach(__('navigation.dropdown.loggedIn') as $key => $value)
          <a class="dropdown-item" href="#">{{$value}}</a>
          @endforeach
        </div>
      </div>
      
    </div>
  </nav>
  <div class="container-fluid p-5">
    @yield('content')
  </div>

  @include('util.scripts')
  @stack('scripts')
  @stack('custom-scripts')
</body>

</html>