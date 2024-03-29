<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switch($lang)
    {
        App::setLocale($lang);
        session()->put('locale', $lang);
        return Redirect::back();
    }
}

