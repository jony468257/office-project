<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function change($le)
    {
//        return $le;
        Session::put('language', $le);
        App::setLocale($le);
//        return App::getLocale();
        return redirect()->back();
    }
}
