<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops=Shop::all();
        return view('shop.list-shop', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('shop.createshops');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Auth::user()->shops()->create([
        //     'name'=>$request->name,
        //     'city'=>$request->city,
        //     'description'=>$request->description,
        //     'img'=>$request->file('img')->store('public/img')
        // ]);
        $shop = Shop::create([
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,
            'img'=>$request->file('img')->store('public/img'),
            'user_id'=>Auth::user()->id
        ]);

        return redirect(route('home'))->with('message','hai creato correttamente il negozio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        return view('shop.list-shop', compact('shops'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        return view('shop.editshop',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        $shop->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,
            'img'=>$request->has('img') ? $request->file('img')->store('public/image') : $shop->image,
            'user_id'=>Auth::user()->id
        ]);
        return redirect(route('home'))->with('message','hai modificato correttamente il negozio');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect(route('home'))->with('message','hai cancellato correttamente il negozio');
    }
}
