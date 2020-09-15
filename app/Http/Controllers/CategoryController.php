<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        $data = [];
        $data["title"] = __('category.formTitle');
        return view('category.add')->with("data", $data);
    }

    public function save(Request $request)
    {

        Category::validate($request);
        $category = Category::create($request->only(["name", "specs"]));

        $request->file('image')->storeAs(
            'public/categories',
            $category->getId().".png"
        );

        return back()->with('success', __('category.success', ['category'=> $category->getName()]));
    }

    public function delete($id)
    {
        if (file_exists('public/categories/'.$id.'.png')) {
            Storage::delete('public/categories/'.$id.'.png');
            @unlink('public/categories/'.$id.'.png');
        }
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('home');
    }
}
