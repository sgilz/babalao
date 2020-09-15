@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <button onclick="location.href='{{ route('order.create') }}'">{{__('order.views.index.new')}}</button>
                <button onclick="location.href='{{ route('order.list') }}'">{{__('order.views.index.list')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection
