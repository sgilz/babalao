@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="row p-5 justify-content-center">
    <div class="col-md-12 card-list">
        <h1>{{ __("creditCard.list.title") }}</h1>
        @foreach($data["cards"] as $card)
            <div class="card">
                <div class="card-header">
                    <b>{{ __("creditCard.list.card_tail", ["tail" => Str::substr($card->getCardNumber(), -4)]) }}</b>
                </div>
                <div class="card-body">
                    <tr>
                        <td>{{ __("creditCard.list.expiration") }}: {{ $card->getExpirationDate() }}</td>
                        <td class="justify-content-end">
                            <form action="{{ route('card.delete', $card->getId())}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
