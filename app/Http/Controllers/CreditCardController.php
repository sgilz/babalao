<?php

/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */


namespace App\Http\Controllers;

use App\Models\CreditCard;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreditCardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = __("creditCard.create.header_title");
        $data["this_year"] = date('y');

        return view('creditCard.create')->with("data",$data);
    }

    public function list()
    {
        $user = (object)Auth::user();
        $data = []; //to be sent to the view
        $data["title"] = __("creditCard.list.header_title");
        $data["cards"] = CreditCard::where('user_id', $user->getId())->get();
        $data["this_year"] = date('y');
        return view('creditCard.list')->with("data",$data);
    }

    public function delete($id)
    {
        $card = CreditCard::find($id);
        $card->delete();
        return back()->with('danger', __("creditCard.message.deleted"));
    }

    public function recharge(Request $request, $id)
    {
        $card = CreditCard::find($id);
        $card->setBalance($card->getBalance() + $request->balance);
        $card->save();
        return back()->with('success', __("creditCard.message.recharged"));
    }

    public function save(Request $request)
    {
        CreditCard::validate($request);

        $user = (object)Auth::user();
        $credit_card = new CreditCard($request->only(["owner", "owner_id", "card_number", "cvv"]));
        $credit_card->setUserId($user->getId());
        $credit_card->setExpirationDate($request->expiration_month . '/'.$request->expiration_year);
        $credit_card->save();
        return back()->with('success', __("creditCard.message.created"));
    }

}
