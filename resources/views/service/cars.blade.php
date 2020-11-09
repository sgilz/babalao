@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4 class="orderTitle"
                style="font-weight: bolder; color: black; padding-left: 20px">
                <a href="https://www.google.com/" style="color: #0b0201">{{__('service.cars.title')}}</a>
            </h4>
            <hr>
            @include('util.message')
            <ul id="OrderList">
                @foreach($data["cars"] as $car)
                    <div class="order-list-container col-md-9 col-xs-12">
                        <div class="order-container">
                            <div class="order-header row">
                                <div class="order-title">
                                    <span>
                                        <h3>
                                            {{$car["brand"]}} {{$car["color"]}}: {{$car["model"]}}
                                        </h3>
                                        </span>
                                    <br>
                                    <span
                                        class="block float-left">{{__('service.cars.description')}} {{$car["description"]}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
