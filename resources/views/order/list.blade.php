@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <h4 class="orderTitle" style="font-weight: bolder; color: black; padding-left: 20px">{{__('order.views.list.title')}}</h4>
        <hr>
        @include('util.message')
        <ul id="OrderList">
            @foreach($data["orders"] as $order)
                <div class="order-list-container col-md-9 col-xs-12">
                    <div class="order-container">
                        <div class="order-header row">
                            <div class="order-title">
                                <span>{{__('order.views.list.order#')}} {{$order->getId()}}</span>
                                <span class="pipe">{{__('order.views.list.date')}} {{$order->getDate()}}</span>
                                <span class="pipe">{{__('order.views.list.total')}} {{$order->getTotal()}}</span>
                            </div>
                            <div class="row order-action-buttons">
                                <div class="col-xs-12 col-md-3 ml-5 mr-5">
                                    <a class="btn btn-success btn-md" href="{{ route('order.details', $order->getId()) }}">
                                        {{__('order.views.list.details')}}
                                    </a>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <a class="btn btn-info " href="{{ route('review.create', $order->getId()) }}">
                                        {{__('order.views.list.review')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
</div>
@endsection
