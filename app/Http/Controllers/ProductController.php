<?php

namespace App\Http\Controllers;
use Illuminate\Support\File;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function creaprodotto () {
        return view('product.create');
    }

    public function listaprodotti () {
        $products=Product::all();

        return view('product.list-product', compact('products'));
    }

    public function prodottocreato (Request $request){

        // dd($request->all());
        $products = Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'img'=>$request->file('img')->store('public/img')
        ]);

        return redirect(route('home'))->with('message','hai inserito correttamente il prodotto');
    }
}
