@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["order"]->getId() }}</div>
                <div class="card-body">
                    <b>{{__('order.views.details.initialDate')}} </b> {{ $data["order"]->getDate() }}<br />
                    <b>{{__('order.views.details.state')}} </b> {{ $data["order"]->getStatus() }}<br />
                    <b>{{__('order.views.details.initialDate')}} </b> {{ $data["order"]->getTotal() }}<br /><br />

                    <form method="post" action="{{ route('order.delete', $data["order"]->getId()) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit"> {{__('order.views.details.delete')}}</button>
                    </form>
                </div>
                <button onclick="location.href='{{ route('order.list') }}'">{{__('order.views.details.back')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection
