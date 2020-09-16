<?php

/*
 * @author    Manuel Alejandro Gutierrez Mejia magutierrm@eafit.edu.co
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CreditCard;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showInformation()
    {
        $data = [];
        $user = Auth::user();

        $data["credit_cards"] = CreditCard::where('user_id', $user->getId())->get();
        $data["title"] = __("user.title_header");
        $data["user"] = $user;

        return view('user.showInformation')->with("data",$data);
    }
}
