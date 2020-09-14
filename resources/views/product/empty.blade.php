@extends('layouts.master')
@section('title', $data["title"])
@section('content')
<div class="container">
    <div class="card text-white p-5" style="background-size: cover; background-image: url(&quot;https://images.unsplash.com/photo-1568781269551-3e3baf5ec909?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80&quot;);">
        <div class="col-md-5">
            <h4>
                {{ __('product.search.empty') }} <br>
                <span class="text-primary">{{ $data["search"]}}</span>
            </h4>
        </div>
    </div>
</div>
@endsection