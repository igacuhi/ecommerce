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
}
