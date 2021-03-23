<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Auth;

class CartController extends Controller
{
    //
    public function addCart(Request $request, $id) {

        // create cart user
        $cart_id = Cart::where('user_id', Auth::user()->id)->get();
        if(count($cart_id) == 0) {
            Cart::create([
                'user' => Auth::user()->name,
                'user_id' => Auth::user()->id
                ]);
        }
        // add 
        $cart = Cart::where('user_id', Auth::user()->id)->paginate(1);
        // foreach($cart[0]->products as $p){
        //     if( $p->id == $id){
        //         dd($cart);
        //     }
        // }
        $product = Product::findOrFail($id);
        $product->carts()->attach($cart[0]->id);

        // $ca = $cart[0];
        // foreach($ca->products as $c){
        //     echo $c->id ;
        //     echo '<br>';
        // }
        $products = $cart[0]->products;
        // dd($products);
        // echo gettype($products);

        return view('user.cart')->with('products', $products);
    }
}
