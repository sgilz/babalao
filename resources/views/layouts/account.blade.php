@extends('layouts.master')
@section("title", $data["title"])

@section('content')
<!-- Side navigation -->
<aside class="menu ">
    <div class="sidenav bg-white">
        <a href="{{ route('user.showInformation')}}"> {{ __('account.side_bar.info') }} </a>
        <a type="button" href = {{ route('card.list') }}>{{ __('account.side_bar.credit_cards') }}</a>
        <a type="button" href = {{ route('wishList.show') }}>{{ __('account.side_bar.wish_list') }}</a>
    </div>
</aside>
<div class="main">
    <div class="container">
        @yield('tab')
    </div>
</div>
@endsection
