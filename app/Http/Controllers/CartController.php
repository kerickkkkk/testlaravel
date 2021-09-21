<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    //
    function index(Request $request){
        $cart = $request->cookie('cart');
        // var_dump($cart); string(7) "{"1":1}"
        
        if(!is_null($cart)){
            $cart = json_decode($cart, true);
            // 加 true 才會是 array 
            // var_dump($cart); array(1) { [1]=> int(1) }
            foreach($cart as $productId => $quantity){
                $cart[$productId] = $quantity + 1;
            }
            $cart = json_encode($cart);
            // var_dump($cart); string(7) "{"1":2}"
        }

        var_dump($cart);

        // return view('cart.index');

        // 方法一：
        // 只顯示 cart.index 要改下面的方式
        // 官方
        // return response('Hello World')->cookie(
        //     'name', 'value', $minutes
        // );
        // return response('cart.index')->cookie(
        //     'cart', $cart
        // ); 

        // return response() -> view('cart.index') -> cookie(
        //     'cart', $cart
        // );

        // 方法二：

        Cookie::queue('cart', $cart);
        
        return view('cart.index');

    }
}
