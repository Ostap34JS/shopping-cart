<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function getIndex(){
        $products = Product::All();
        return view('shop.index', ['products' => $products]);
    }

    public function show($id){
        $product = Product::find($id);
        return view('shop.single-product', ['product' => $product]);
    }

    public function getAddToCart(Request $request,$id){
        $product = Product::find($id);
        $old_cart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($old_cart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);

        return redirect()->back();
    }

    public function deleteFromCart(Request $request, $id){
        $product = Product::find($id);
        $cartProducts = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($cartProducts);
        foreach ($cart->items as $productFromCart) {
            if ($productFromCart['item']['id'] == $id) {
                $request->session()->forget('cart');
                unset($cart->items[$id]);
                $cart->totalQty -= $productFromCart['qty'];
                $cart->totalPrice -= $product->price;
            }
        }
        if ($cart->totalQty == 0) {
          $request->session()->forget('cart');
        } else {
          $request->session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart    = new Cart($oldCart);
        return view('shop.shopping-cart', ['cart' => $oldCart, 'products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
