@extends('layouts.master')

@section('content')

    <div class="checkoutrow">
        <div class="checkoutcol-75">
            <div class="checkoutcontainer">
                <form action="{{ route('cart.buy') }}" method="POST">
                    @csrf
                    <div class="checkoutrow">
                        <div class="checkoutcol-50">
                            <h3>{{__('checkout.title')}}</h3>
                            @include('util.message')
                            <label for="fname"><i class="fa fa-user"></i>{{__('checkout.username')}}</label>
                            <b> {{$data['user_name']}} </b>
                            <hr>
                            <label for="email"><i class="fa fa-envelope"></i>{{__('checkout.email')}}</label>
                            <b> {{$data['email']}} </b>
                            <hr>
                            <label for="adr"><i class="fa fa-address-card-o"></i>{{__('checkout.address')}}</label>
                            <b> {{$data['city']}}, {{$data['neighborhood']}}, {{$data['address']}} </b>
                            <hr>
                        </div>

                        <div class="checkoutcol-50">
                            <h3>Payment</h3>
                            <label for="fname">{{__('checkout.accepted_cards')}}</label>
                            <div class="checkouticon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">{{__('checkout.card_selection')}}</label>
                            <br>
                            <select name="selected_card" id="selected_card">
                                @foreach($data["credit_cards"] as $card)
                                    <b>
                                        {{--                                        <option>****{{Str::substr($card,-4)}}</option>--}}
                                        <option>{{$card}}</option>
                                    </b>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr" value="{{ old("sameadr") }}"> {{__('checkout.checkbox')}}
                    </label>
                    <button class="btn btn-success" type="submit">{{__('checkout.buy')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
