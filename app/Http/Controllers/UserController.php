<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showInformation(){
        $data = [];
        $user = Auth::user();

        $data["user"] = $user;

        return view('user.showInformation')->with("data",$data);
    }
}
