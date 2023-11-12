<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use cart;

class CartController extends Controller
{
    public function index(){
        $CartItems = Cart::instance('cart')->content();
        return view('cart',['CartItems'=>$CartItems]);
    }
    public function addToCart(Request $request){
        $product = product::find($request->id);   
        $price = $product->sale_price ? $product->sale_price : $product->regular_price;
        cart::instance('cart')->($product->name,$request->quantity,$price)->associate('App\Models\Product');
        return redirect()->back()->with('message','success ! Item has been added successfully!');

    }
}
