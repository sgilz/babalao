<?php

/*
 * @author    Luis Miguel Arroyave Quiñones larroy13@eafit.edu.co - Manuel Gutierrez magutierrm@eafit.edu.co
 */

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($product_id)
    {
        $data = [];
        $data["product"] = Product::findOrFail($product_id);
        $data["title"] = $data["product"]->getName();
        $data["reviews"] = Review::where('product_id', $product_id)->get();
        $reviews_avg = Review::with(['product_id', $product_id])->avg('rating');
        $data["reviews_avg"] = ($reviews_avg / 5) * 100;

        /*
        We'll get values of different currencies with a external service
        Read: https://rapidapi.com/labstack/api/currency13
        */
        $currencies = ["COP", "EUR", "HUF"];
        $amounts = Array();
        $price = $data["product"]->getPrice();
        $curl = curl_init();
        foreach ($currencies as $currencie) {
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://currency13.p.rapidapi.com/convert/1/USD/{$currencie}",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: currency13.p.rapidapi.com",
                    "x-rapidapi-key: 505db7743fmsh6b3e62f328e7d79p185f96jsn93f77a39c1d9"
                ],
            ]);
            $amounts[$currencie] = (json_decode(curl_exec($curl),true))["amount"];
        }
        curl_close($curl);

        $data["price_cop"] = (int)($amounts['COP']*$price);
        $data["price_eur"] = (int)($amounts['EUR']*$price);
        $data["price_huf"] = (int)($amounts['HUF']*$price);

        return view('product.show')->with("data", $data);
    }

    public function search($search)
    {
        $data = [];
        $data["title"] = __('product.search.title', ['search' => $search]);
        $data["search"] = $search;
        $results = Product::where('name', 'like', '%' . $search . '%')->get();
        if ($results->isEmpty()) {
            return view('product.empty')->with("data", $data);
        } else {
            $data["products"] = $results;
            $data["product"] = $data["products"]->first();
            return view('product.search')->with("data", $data);
        }
    }

    public function searchBar(Request $request)
    {
        $search = $request['search'];
        if (!$search) {
            $search = " ";
        }
        return redirect()->route("product.search", ['search' => $search]);
    }


    public function list($category_id)
    {
        $data = [];
        $data['category'] = Category::findOrFail($category_id);
        $data["products"] = Product::where('category_id', $category_id)->get();
        $data["title"] = $data['category']->getName();


        return view('product.list')->with("data", $data);
    }

    public function add($category_id)
    {
        if (Auth::user()->getIsAdmin()) {
            $data = [];
            $data['category'] = Category::findOrFail($category_id);
            $data["title"] = __('product.formTitle', ['category' => $data['category']->getName()]);

            return view('product.add')->with("data", $data);
        }
        return redirect()->route('home');
    }

    public function save(Request $request, int $category_id)
    {
        Product::validate($request);

        $product = Product::create([
            'brand' => $request['brand'],
            'category_id' => $category_id,
            'name' => $request['name'],
            'price' => $request['price'],
            'specs' => $request['specs']
        ]);

        $request->file('image')->storeAs(
            'public/products',
            $product->getId() . ".png"
        );

        return redirect()->route('home');
    }
}
