@extends('layouts.master')
@section("title", $data["title"])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="grid invoice">
                    <div class="grid-body">
                        <div class="invoice-title">
                            <div class="row">
                                <div class="col-xs-12">
                                        <h2 class="small">order #1082</h2>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6">
                                <address>
                                    <strong>Billed To:</strong><br>
                                    Twitter, Inc.<br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <address>
                                    <strong>Payment Method:</strong><br>
                                    Visa ending **** 1234<br>
                                    h.elaine@gmail.com<br>
                                </address>
                            </div>
                            <div class="col-xs-6 text-right">
                                <address>
                                    <strong>Order Date:</strong><br>
                                    17/06/14
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>ORDER SUMMARY</h3>
                                <table class="table table-striped">
                                    <thead>
                                    <tr class="line">
                                        <td><strong>#</strong></td>
                                        <td class="text-center"><strong>PROJECT</strong></td>
                                        <td class="text-center"><strong>HRS</strong></td>
                                        <td class="text-right"><strong>RATE</strong></td>
                                        <td class="text-right"><strong>SUBTOTAL</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><strong>Template Design</strong><br>A website template is a pre-designed
                                            webpage, or set of webpages, that anyone can modify with their own content
                                            and images to setup a website.
                                        </td>
                                        <td class="text-center">15</td>
                                        <td class="text-center">$75</td>
                                        <td class="text-right">$1,125.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="text-right"><strong>Taxes</strong></td>
                                        <td class="text-right"><strong>N/A</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                        </td>
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="text-right"><strong>$2,400.00</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $data["order"]->getId() }}</div>
                    <div class="card-body">
                        <b>{{__('order.views.details.initialDate')}} </b> {{ $data["order"]->getDate() }}<br/>
                        <b>{{__('order.views.details.state')}} </b> {{ $data["order"]->getStatus() }}<br/>
                        <b>{{__('order.views.details.initialDate')}} </b> {{ $data["order"]->getTotal() }}<br/><br/>

                        <form method="post" action="{{ route('order.delete', $data["order"]->getId()) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"> {{__('order.views.details.delete')}}</button>
                        </form>
                    </div>
                    <button
                        onclick="location.href='{{ route('order.list') }}'">{{__('order.views.details.back')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
