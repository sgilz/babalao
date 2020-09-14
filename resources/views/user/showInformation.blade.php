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
                @foreach($data["user"]->creditCards as $credit_card))- {{ $comment->getDescription() }}
                <ul class="list-group">
                    <li class="list-group-item"> {{ __('ending_in') }} {{$credit_card>getCardNumber()}}</li>
                    <li class="list-group-item"> {{ __('ex_date') }} {{$credit_card>getExpirationDate()}}</li>
                </ul>
                @endforeach
                <button type="button" class="btn btn-info">{{ __('user.add_credit_card)') }}</button>
            </div>
        </div>
    </div>
</div>
@endsection