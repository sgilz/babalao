@extends('layouts.master')

@section('content')


    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1 class="Display-1 text-dark font-weight-light">{{__('cart.title')}}</h1>

                <div class="table-responsive">
                    <table class="table bg-white table-borderless rounded">
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
                                <td><img width="100px" src="{{ URL::asset('storage/products/'.$product->getId().'.png') }}"/></td>
                                <td>{{$product->getName()}}</td>
                                <td>{{__('cart.availableOptions.inStock')}}</td>
                                <td class="text-center">{{ Session::get('products')[$product->getId()] }}</td>
                                <td class="text-right text-primary font-weight-bold">{{__('cart.coin.cop')}}
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
                    <div class="float-right">
                        <a href="{{ route('cart.removeCart') }}" class="btn btn-danger"
                        style="margin-right: 30px">{{__('cart.delete')}}</a>
                     <a href="{{ route('order.checkout')}}" class="btn btn-success" type="submit">{{__('cart.checkout')}}</a>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
