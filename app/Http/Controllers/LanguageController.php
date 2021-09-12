<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index ()
    {
        $languages = ['HTML','CSS','Javascript','PHP','Ruby'];
        return view('language.index', ['languages' => $languages]);
    }
}
