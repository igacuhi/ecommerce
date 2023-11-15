<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart; // Replace "App" with the actual namespace


use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    public function index(Request $request){
        $products = Product::orderBy('created_at','DESC')->paginate(12);
        return view('shop', compact('products'));

    }
    public function productDetails($slug){
        $product = product::where('slug','')->first();
        $rproducts=product::where('slug','!=',$slug)->inRandomOrder('id')->get()->take(8); 
        return view('details',['product'=>$product,'rproducts'=>$rproducts]);

    }
}
