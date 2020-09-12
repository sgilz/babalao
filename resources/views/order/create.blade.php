@extends('layouts.master')
@section('title', $data["title"])
@section('content')
<div class="container">
    <div class="row align-content-center">
        @include('util.message')
        <div class="card">
            <div class="card-body">
                <!--For if the flies-->
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
                        <div class="label-text">Date</div>
                    </label>
                    <label>
                        <select name="state">
                            <option value="SHOPPING_CART" selected>SHOPPING_CART</option>

                            <option value="CONFIRMED" selected>CONFIRMED</option>

                            <option value="SHIPPED" selected>SHIPPED</option>

                            <option value="DELIVERED" selected>DELIVERED</option>
                        </select>
                        <div class="label-text">State</div>
                    </label>
                    <label>
                        <input type="number" name="total" id="total" />
                        <div class="label-text">Total</div>
                    </label>
                    <button type="submit" value="Submit">Submit</button>
                </form>
                <button onclick="location.href='{{ route('order.index') }}'">Back</button>
            </div>
        </div>
    </div>
</div>
@endsection
