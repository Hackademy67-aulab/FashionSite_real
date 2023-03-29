<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{


    public function home () {
        return view('home');
    }

    public function profile () {
        return view('profile');
    }

    public function destroy () {

        Auth::user()->delete();

        return redirect(route('homePage'))->with('message','Utente cancellato correttamente! Addddddddiosssss!!!');
    }





}
