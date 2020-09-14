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
    <a class="navbar-brand d-flex" href="#">
      <img src="{{ url('storage/brand/favicon.png') }}" width="45" height="50" class="d-inline-block align-top" alt="" loading="lazy">
      <h1 class="brand-text d-inline-block align-self-center ml-3">{{ __('navigation.brand') }} </h1>
    </a>
    <div class="d-flex toolbar">
      <div class="searchbar">
        <input class="search_input" type="text" name="" placeholder="Search...">
        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
      </div>
      <div class="user-menu dropdown btn-toolbar">
        <a href="#" class="search_icon icon-toolbar"><i class="fas fa-shopping-cart"></i></a>
      </div>
      <div class="user-menu dropdown btn-toolbar">
        <a href="#" class="user_icon icon-toolbar dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
        @auth
          @foreach(__('navigation.dropdown.loggedIn') as $key => $value)
          <a class="dropdown-item" href="{{route($value['route'])}}">{{$value['label']}}</a>
          @endforeach
        @else
          @foreach(__('navigation.dropdown.loggedOut') as $key => $value)
          <a class="dropdown-item" href="{{route($value['route'])}}">{{$value['label']}}</a>
          @endforeach
        @endauth
        </div>
      </div>
      
    </div>
  </nav>
  <div class="container-fluid p-5">
    @yield('content')
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/65b5c67b82.js" crossorigin="anonymous"></script>
  @stack('scripts')
</body>

</html>