@extends('layouts.master')
@section('title', $data["title"])
@section('content')
<div class="container">
    <div class="row align-content-center">
        @include('util.message')
        <div class="card">
            <div class="card-body">
                @if($errors->any())
                        <ul id="errors">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                @endif
                <form method="POST" action="{{ route('order.save') }}">
                    @csrf
                    <label>
                        <input name="date" id="date" type="date" />
                        <div class="label-text">{{__('order.views.create.date')}}</div>
                    </label>
                    <label>
                        <select name="status">

                            <option value="PENDING" selected>{{__('order.views.create.pending')}}</option>

                            <option value="CONFIRMED" selected>{{__('order.views.create.confirmed')}}</option>

                            <option value="DISPATCHED" selected>{{__('order.views.create.dispatched')}}</option>

                            <option value="DELIVERED" selected>{{__('order.views.create.delivered')}}</option>
                        </select>
                        <div class="label-text">{{__('order.views.create.status')}}</div>
                    </label>
                    <label>
                        <input type="number" name="total" id="total" />
                        <div class="label-text">{{__('order.views.create.total')}}</div>
                    </label>
                    <button type="submit" value="Submit">{{__('order.views.create.submit')}}</button>
                </form>
                <button onclick="location.href='{{ route('order.index') }}'">{{__('order.views.details.back')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection
