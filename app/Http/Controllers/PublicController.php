<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function __construct()
    {
        $this->middleware('verified');
    }
    public function home () {
        return view('home');
    }

}
