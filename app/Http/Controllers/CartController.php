<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use cart;

class CartController extends Controller
{
    public function index(){
        $CartItems = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content();
        return view('cart',['CartItems'=>$CartItems]);
    }
    public function addToCart(Request $request){
        $product = Product::find($request->id);   
        $price = $product->sale_price ? $product->sale_price : $product->regular_price;
        \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->add($product->name,$request->quantity,$price)->associate('App\Models\Product');
        return redirect()->back()->with('message','success ! Item has been added successfully!');

    }
}
