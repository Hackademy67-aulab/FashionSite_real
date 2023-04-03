<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{


    public function __construct()
    {
        $this->middleware('verified')->except('home');
    }

    public function home () {
        return view('home');
    }

    public function profile () {
        return view('profile');
    }

    public function verified () {
        return view('home');
    }

    public function destroy () {
        Auth::user()->delete();

        return redirect(route('home'))->with('message','Utente cancellato correttamente! Addddddddiosssss!!!');
    }





}
