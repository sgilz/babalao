<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLang($locale)
    {
        Session::put('applocale', $locale);
        return redirect()->back();
    }
}
