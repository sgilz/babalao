@extends('layouts.master')
@section('title', $data["title"])
@section('content')
<div class="container">
    <div class="card text-white p-5 banner">
        <div class="col-md-5">
            <h4>
                {{ __('product.search.empty') }} <br>
                <span class="text-primary">{{ $data["search"]}}</span>
            </h4>
        </div>
    </div>
</div>
@endsection