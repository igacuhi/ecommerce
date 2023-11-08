<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    public function index(Request $request){
        $products = Product::orderBy('created_at','DESC')->paginate(12);
        return view('shop', compact('products'));

    }
    public function productDetails($slug){
        $product = product::where('slug','')->first();
        return view('details',['product'=>$product]);
    }
}
