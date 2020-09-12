@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header number">{{ $data["card"]["number"] }}</div>
                <div class="card-body otherInfo">
                    <b>Expiration date:</b> {{ $data["card"]["expiration_date"] }}<br />
                    <b>cvv:</b> {{ $data["card"]["cvv"] }}<br /><br />
                    <form action="{{ route('card.delete', $data["card"]["id"]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Delete" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
