@extends('layouts.account')
@section("title", $data["title"])

@section('tab')
<div class="row justify-content-center">
    <div class="card">
        <div class="card-body p-5">
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
        </div>
    </div>
</div>
@endsection
