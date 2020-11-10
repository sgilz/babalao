<nav class="navbar main-navbar navbar-light d-flex justify-content-between">
    <div class="d-flex justify-content-between">
        <a class="navbar-brand d-flex" href="{{ route('home') }}">
            <img src="{{ url('storage/brand/favicon.png') }}" width="45" height="50" class="d-inline-block align-top"
                alt="" loading="lazy">
            <h1 class="brand-text d-inline-block align-self-center ml-3">{{ __('navigation.brand') }} </h1>
        </a>
        <div class="searchbar ml-2">
            <form class="d-flex" method="POST" action="{{ route('product.searchBar') }}">
                @csrf
                <button class="search_icon"><i class="fas fa-search"></i></button>
                <input class="search_input" type="text" name="search" placeholder="{{ __('navigation.search') }}">
            </form>
        </div>
    </div>
    @auth
    <div class="d-flex toolbar">
        <div class="user-menu dropdown btn-toolbar">
            <a href="{{route('order.list')}}" class="search_icon icon-toolbar">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
            </a>
        </div>
        <div class="user-menu dropdown btn-toolbar">
            <a href="{{route('cart.cart')}}" class="search_icon icon-toolbar">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
                </svg>
            </a>
        </div>
        <div class="user-menu dropdown btn-toolbar">
            <a href="#" class="user_icon icon-toolbar dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg>
            </a>
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
        <div>
            <a href="{{route('language.changeLang','en')}}"><img src="{{ url('storage/brand/uk-flag.png') }}" width="25"
                    height="25"> </a>
            <p></p>
            <a href="{{route('language.changeLang','es')}}"><img src="{{ url('storage/brand/sp-flag.png') }}" width="25"
                    height="25"> </a>

        </div>
    </div>
    @else
    <div class="d-flex toolbar">
        <a href="{{ route('login') }}" class="btn btn-primary">
            {{ __('auth.login.buttons.login') }}
        </a>
        <a href="{{ route('register') }}" class="btn btn-outline-dark">
            {{ __('auth.title') }}
        </a>
    </div>
    @endauth
</nav>