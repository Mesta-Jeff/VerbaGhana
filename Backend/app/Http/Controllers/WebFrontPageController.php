<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebFrontPageController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }
}
