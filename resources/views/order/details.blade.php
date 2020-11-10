@extends('layouts.master')
@section("title", $data["title"])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="grid invoice">
                                    <div class="grid-body">
                                        <div class="invoice-title">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <h2>{{__('order.views.details.order')}} {{ $data["order"]->getId() }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <address>
                                                    <strong>{{__('order.views.details.billedTo')}}</strong><br>
                                                    {{ $data["user"]->getName() }}<br>
                                                    {{ $data["user"]->getCity() }}
                                                    , {{ $data["user"]->getNeighborhood() }}<br>
                                                    {{ $data["user"]->getAddress() }}<br>
                                                    <abbr
                                                        title="Phone">{{__('order.views.details.email')}}</abbr> {{ $data["user"]->getEmail() }}
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <address>
                                                    <strong>{{__('order.views.details.paymentMethod')}}</strong><br>
                                                    {{__('order.views.details.card')}}
                                                    ****{{Str::substr($data["card"],-4)}}<br>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <address>
                                                    <strong>{{__('order.views.details.orderDate')}}</strong><br>
                                                    {{ $data["order"]->getDate() }}
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>{{__('order.views.details.orderSummary')}}</h3>
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr class="line">
                                                        <td class="text-center">
                                                            <strong>{{__('order.views.details.product')}}</strong></td>
                                                        <td class="text-center">
                                                            <strong>{{__('order.views.details.quantity')}}</strong></td>
                                                        <td class="text-right">
                                                            <strong>{{__('order.views.details.subtotal')}}</strong></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {{$count=0}}
                                                    @foreach($data["items"] as $item)
                                                        <tr>
                                                            <td><strong>{{$data["products"][$count]}}</strong></td>
                                                            <td class="text-center">{{$item->getQuantity()}}</td>
                                                            <td class="text-center">{{$item->getSubtotal()}}</td>
                                                        </tr>
                                                        {{$count++}}
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="1"></td>
                                                        <td class="text-right">
                                                            <strong>{{__('order.views.details.taxes')}}</strong></td>
                                                        <td class="text-right">
                                                            <strong>{{__('order.views.details.na')}}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="1">
                                                        </td>
                                                        <td class="text-right">
                                                            <strong>{{__('order.views.details.total')}}</strong></td>
                                                        <td class="text-right">
                                                            <strong>{{$data["order"]->getTotal()}}</strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <a class="btn btn-info float-lg-right" href='{{ route("invoice.show", $data["order"]->getId() ) }}'> {{__('order.views.details.pdf')}}</a>
                                        <form method="post"
                                              action="{{ route('order.delete', $data["order"]->getId()) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                    class="btn btn-danger"> {{__('order.views.details.delete')}}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        onclick="location.href='{{ route('order.list') }}'">{{__('order.views.details.back')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
