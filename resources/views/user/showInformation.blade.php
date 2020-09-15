@extends('layouts.master')
@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">{{ __('user.title_header') }}</h1>
                <hr class="my-4">
                <h2>{{ __('user.title.account_information') }}</h2>
                <ul class="list-group">
                    <li class="list-group-item"> {{ __('user.email') }} {{$data["user"]->getEmail()}}</li>
                </ul>
                <hr class="my-4">
                <h2>{{ __('user.title.personal_information') }}</h2>
                <ul class="list-group">
                    <li class="list-group-item"> {{ __('user.name') }} {{$data["user"]->getName()}}</li>
                </ul>
                <hr class="my-4">
                <h2>{{ __('user.title.shipment_information') }}</h2>
                <ul class="list-group">
                    <li class="list-group-item"> {{ __('user.city') }} {{$data["user"]->getCity()}}</li>
                    <li class="list-group-item"> {{ __('user.neighborhood') }} {{$data["user"]->getNeighborhood()}}</li>
                    <li class="list-group-item"> {{ __('user.address') }} {{$data["user"]->getAddress()}}</li>
                </ul>
                <hr class="my-4">
                <h2>{{ __('user.title.credit_cards') }}</h2>
                @foreach($data["credit_cards"] as $credit_card)
                <ul class="list-group">
                    <li class="list-group-item"> {{ __('user.card_number') }} {{$credit_card->getCardNumber()}}</li>
                    <li class="list-group-item"> {{ __('user.ex_date') }} {{$credit_card->getExpirationDate()}}</li>
                </ul>
                @endforeach
                <a type="button" href = {{ route('card.create') }} class="btn btn-info">{{ __('user.add_credit_card') }}</a>
                <a type="button" href = {{ route('wishList.show') }} class="btn btn-warning">{{ __('user.wish_list') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection