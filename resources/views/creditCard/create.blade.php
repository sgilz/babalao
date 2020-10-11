<div class="credit-card-container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __("creditCard.create.formTitle")}}</div>
            <div class="card-body">
                @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form  method="POST" action="{{ route('card.save') }}" >
                    @csrf
                    <div class="col-50">
                        <label>{{ __("creditCard.create.accepted")}}</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="owner">{{ __("creditCard.create.owner")}}</label>
                        <input type="text" id="owner" name="owner" placeholder="{{ __("creditCard.create.ownerPlaceHolder") }}">

                        <label for="owner_id">{{ __("creditCard.create.ownerId")}}</label>
                        <input type="text" id="owner_id" name="owner_id" placeholder="{{ __("creditCard.create.ownerIdPlaceHolder")}}">

                        <label for="card_number">{{ __("creditCard.create.cardId")}}</label>
                        <input type="text" id="card_number" name="card_number" placeholder="{{ __("creditCard.create.cardIdPlaceHolder")}}">

                        <div class="row">

                            <div class="col-25">
                                <label for="expiration_month">{{ __("creditCard.create.expMonth")}}</label>
                                <select name="expiration_month" id="expiration_month" placeholder="{{ __("creditCard.create.expMonthPlaceHolder")}}">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option>{{ sprintf('%02d', $i) }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-25">
                                <label for="expiration_year">{{ __("creditCard.create.expYear")}}</label>
                                <select name="expiration_year" id="expiration_year" placeholder="{{ __("creditCard.create.expYearPlaceHolder")}}">
                                    @for ($i = 0; $i <= 10; $i++)
                                        <option>{{ $data["this_year"] + $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-50">
                                <label for="cvv">{{ __("creditCard.create.cvv")}}</label>
                                <input type="text" id="cvv" name="cvv" placeholder="{{ __("creditCard.create.cvvPlaceHolder")}}">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="{{ __("creditCard.create.submit") }}" class="btn">
                </form>
            </div>
        </div>
    </div>
</div>
