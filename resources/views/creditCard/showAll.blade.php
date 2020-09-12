@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="row p-5">
    <div class="col-md-12 card-list">
        <h1>REGISTERED CARDS</h1>
        <ul id="errors">
            @foreach($data["cards"] as $card)
            <li>
                @if($card->getId()<3)
                <a  href="{{ route('card.show', $card->getId()) }}"> <b>{{ $card->getId() }}</b> </a> - {{ $card->getNumber() }}
                @else
                <a  href="{{ route('card.show', $card->getId()) }}"> {{ $card->getId() }} </a> - {{ $card->getNumber() }}
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
