<?php

/*
 * @author    Manuel Alejandro Gutierrez Mejia magutierrm@eafit.edu.co
 */

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\WishList;
use App\Models\WishListProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WishListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addProduct(int $product_id)
    {
        $user = Auth::User();
        $wish_list = WishList::where('user_id',$user->getId())->first();
        $wish_list_product = WishListProduct::where('product_id',$product_id)->get();

        if($wish_list_product->isEmpty()){
            $wish_list_product = new WishListProduct();
            $wish_list_product->setProductId($product_id);
            $wish_list_product->setWishListId($wish_list->getId());
            $wish_list_product->save();
        }

        return redirect()->route('home');
    }

    public function show()
    {
        $data = [];
        $product_list = [];
        $user = Auth::User();
        $wish_list = WishList::where('user_id',$user->getId())->first();
        $wish_list_products = WishListProduct::where('wish_list_id',$wish_list->getId())->get();

        foreach($wish_list_products as $wish_list_product){
            $product_id = $wish_list_product->getProductId();
            $product = Product::find($product_id);
            array_push($product_list, $product);
        }

        $data["products"] = $product_list;
        $data["title"] =  __("wishList.title");
        return view('wishList.show')->with("data", $data);
    }

    public function deleteProduct($id_product)
    {
        WishListProduct::where('product_id',$id_product)->delete();
        return redirect()->route('wishList.show');
    }
}
