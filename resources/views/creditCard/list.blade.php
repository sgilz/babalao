@extends('layouts.account')

@section("title", $data["title"])

@section('tab')
<div class="row justify-content-center">
    <div class="col-md-5 card-list">
        <h1>{{ __("creditCard.list.title") }}</h1>
        @include('util.message')
        @foreach($data["cards"] as $card)
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <b>{{ __("creditCard.list.card.card_tail", ["tail" => Str::substr($card->getCardNumber(), -4)]) }}</b>
                        </div>
                        <div class="col">
                            <form action="{{ route('card.delete', $card->getId())}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm float-right">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4>{{ __("creditCard.list.card.balance")}}: {{ $card->getBalance() }}</h4>
                    <label>{{ __("creditCard.list.card.expiration") }}: {{ $card->getExpirationDate() }}</label>
                    <br>
                    <form action="{{ route('card.recharge', $card->getId()) }}" method="post">
                        @csrf
                        <label for="balance">{{ __("creditCard.list.card.recharge") }}</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="balance" name="balance" value="{{ old("balance") }}" min="1000" value="1000" step="1000">
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-success">
                                    <i class="fa fa-check"></i>
                                    {{__("creditCard.list.card.submit_balance")}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <a class="btn btn-dark mt-3" type="button" href="#" data-toggle="modal" data-target="#create-card-modal">
            <i class="fa fa-plus"></i>
            {{ __('account.side_bar.add_credit_card') }}
        </a>
    </div>

    {{-- Modal for adding a new credit card --}}
    <div class=" modal" id="create-card-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('creditCard.create.header_title') }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('creditCard.create')
                </div>
            </div>
        </div>
    </div>
    {{-- modal end --}}
</div>
@endsection
