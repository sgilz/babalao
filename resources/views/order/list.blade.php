@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 ">
        <h3 class="title">Registered orders</h3>
        <br>
        <ul id="errors">
            @foreach($data["orders"] as $order)
                <div class="card">
                    @if($order->getId()<3)
                        <a  href="{{ route('order.details', $order->getId()) }}"> <b>{{ $order->getId() }}</b> </a>
                    @else
                        <a  href="{{ route('order.details', $order->getId()) }}"> {{ $order->getId() }} </a>
                    @endif
                    <label >Total: {{ $order->getTotal() }}</label>
                </div>
            @endforeach
        </ul>
    </div>
</div>
@endsection
