<?php


namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreditCardController
{
    public function details($id)
    {
        $data = []; //to be sent to the view
        $card = CreditCard::findOrFail($id);

        $data["title"] = $card->getNumber();
        $data["card"] = $card;
        return view('card.show')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = __("creditCard.create.title");

        return view('creditCard.create')->with("data",$data);
    }

    public function list()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Registered cards";
        $data["cards"] = CreditCard::all();

        return view('card.showAll')->with("data",$data);
    }

    public function delete($id)
    {
        DB::delete('delete from cards where id = ?',[$id]);

        return view('home.index');
    }

    public function save(Request $request)
    {
        CreditCard::validate($request);
        CreditCard::create($request->only(["owner", "owner_id", "card_number", "expiration_date", "cvv"]));
        return back()->with('success', __("creditCard.save.success"));
    }

}
