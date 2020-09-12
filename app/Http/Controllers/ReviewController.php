<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(int $product_id)
    {
        $data = [];
        $user = Auth::user();
        $product = Product::findOrFail($product_id);

        $data["user"] = $user;
        $data["product"] = $product;

        return view('review.create')->with("data", $data);
    }

    public function save(Request $request, int $product_id)
    {
        Review::validate($request);

        $user = Auth::user();

        Review::create([
            'description' => $request['description'],
            'headline' => $request['headline'],
            'product_id' => $product_id,
            'rating' => $request['rating'],
            'user_id' => $user->getId(),
        ]);

        return redirect()->route('home');
    }
}
