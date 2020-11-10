@extends('layouts.master')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{__('cart.title')}}</h1>
        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">{{__('cart.labels.product')}}</th>
                            <th scope="col">{{__('cart.labels.available')}}</th>
                            <th scope="col" class="text-center">{{__('cart.labels.quantity')}}</th>
                            <th scope="col" class="text-right">{{__('cart.labels.subtotal')}}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data["products"] as $product)
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff"/></td>
                                <td>{{$product->getName()}}</td>
                                <td>{{__('cart.availableOptions.inStock')}}</td>
                                <td>{{ Session::get('products')[$product->getId()] }}</td>
                                <td class="text-right">{{__('cart.coin.cop')}}
                                    {{$product->getPrice()*Session::get('products')[$product->getId()]}}
                                </td>

                                <td class="text-right">
                                    <a href="{{ route('cart.removeFromCart',$product->getId()) }}"
                                       class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{__('cart.subtotal')}}</td>
                            <td class="text-right">$ {{$data['total']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{__('cart.shipping')}}</td>
                            <!--                        this thing has a 0 because we don't know yet how to calculate it-->
                            <td class="text-right">$ 0</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>{{__('cart.total')}}</strong></td>
                            <td class="text-right"><strong>$ {{$data['total']}}</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('cart.removeCart') }}" class="btn btn-danger"
               style="margin-right: 30px">{{__('cart.delete')}}</a>
            <a href="{{ route('order.checkout')}}" class="btn btn-success" type="submit">{{__('cart.checkout')}}</a>
        </div>
    </div>

@endsection
