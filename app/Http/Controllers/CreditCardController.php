<?php


namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreditCardController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = __("creditCard.create.header_title");

        return view('creditCard.create')->with("data",$data);
    }

    public function list()
    {
        $data = []; //to be sent to the view
        $data["title"] = __("creditCard.list.header_title");
        $data["cards"] = CreditCard::all();

        return view('creditCard.list')->with("data",$data);
    }

    public function delete($id)
    {
        $user = CreditCard::find($id);
        $user->delete();
        return back()->with('deleted', __("creditCard.message.deleted"));
    }

    public function save(Request $request)
    {
        CreditCard::validate($request);
        $credit_card = new CreditCard($request->only(["owner", "owner_id", "card_number", "expiration_date", "cvv"]));
        $credit_card->setUserId(Auth::user()->getId());
        $credit_card->save();
        return back()->with('success', __("creditCard.message.success"));
    }

}
