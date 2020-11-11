@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="Display-1 text-dark font-weight-light">{{__('order.views.list.title')}}</h1>
        @include('util.message')
        <div class="card" id="OrderList">
            <div class="card-body">
                @foreach($data["orders"] as $order)
                <div class="order-list-container col-md-12 col-xs-12">
                    <div class="order-container">
                        <div class="order-header row">
                            <div class="order-title">
                                <p><b>{{__('order.views.list.order#')}}</b> {{$order->getId()}}</p>
                                <p class="pipe">{{__('order.views.list.date')}} {{$order->getDate()}}</p>
                                <p class="pipe">{{__('order.views.list.total')}} {{$order->getTotal()}}</p>
                            </div>
                            <div class="w-100">
                                <a class="btn btn-primary btn-md" href="{{ route('order.details', $order->getId()) }}">
                                {{__('order.views.list.details')}}
                            </a>

                            <a class="btn btn-info "
                                href="{{ route('review.create', $order->items[0]->getProductId()) }}">
                                {{__('order.views.list.review')}}
                            </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection