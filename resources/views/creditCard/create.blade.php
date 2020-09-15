@extends('layouts.master')
@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">{{ __("creditCard.create.formTitle")}}</div>
                <div class="card-body">
                    @if($errors->any())
                        <ul id="errors">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form  method="POST" action="{{ route('card.save') }}" >
                        @csrf
                        <div class="col-50">
                            <label>{{ __("creditCard.create.accepted")}}</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>

                            <label for="owner">{{ __("creditCard.create.owner")}}</label>
                            <input type="text" id="owner" name="owner" placeholder="{{ __("creditCard.create.ownerPlaceHolder") }}">

                            <label for="owner_id">{{ __("creditCard.create.ownerId")}}</label>
                            <input type="text" id="owner_id" name="owner_id" placeholder="{{ __("creditCard.create.ownerIdPlaceHolder")}}">

                            <label for="card_number">{{ __("creditCard.create.cardId")}}</label>
                            <input type="text" id="card_number" name="card_number" placeholder="{{ __("creditCard.create.cardIdPlaceHolder")}}">

                            <div class="row">
                                <div class="col-50">
                                    <label for="expiration_date">{{ __("creditCard.create.expDate")}}</label>
                                    <input type="text" id="expiration_date" name="expiration_date" placeholder="{{ __("creditCard.create.expDatePlaceHolder")}}">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">{{ __("creditCard.create.cvv")}}</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="{{ __("creditCard.create.cvvPlaceHolder")}}">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="{{ __("creditCard.create.submit") }}" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
