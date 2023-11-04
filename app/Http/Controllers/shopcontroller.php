<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    public function index(){
        $products = \App\Models\Product::orderBy('created_at','DESC')->paginage(12);
        return view('shop',[$products]);
    }
}
