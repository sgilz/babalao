<?php

/*
 * @author    Luis Miguel Arroyave Quiñones larroy13@eafit.edu.co
 */

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = []; //to be sent to the view

        $user = Auth::user();
        $wish_list_aux = WishList::where('user_id',$user->getId())->get();

        if($wish_list_aux->isEmpty()){
            $wish_list = new WishList();
            $wish_list->setUserId($user->getId());
            $wish_list->save();
        }

        $data["categories"] = Category::all();
        return view('home')->with("data", $data);
    }
}
