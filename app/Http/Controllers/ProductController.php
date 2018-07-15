<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
      $products = Product::all();
      return view('shop.shop', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id) {
      $product = Product::find($id);
      $oldcart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldcart);
      $cart->add($product, $product->id);

      $request->session()->put('cart', $cart);
      return redirect()->route('product.index');
    }

    public function update(Request $request)
    {
        $product = Product::find($request->get('id'));
        $product->name = $request->get('new_name');
        $product->update(); //  <== will trigger HTTP call to Algolia
                            //      after the model is saved in DB

        // ...
    }

    public function getCart() {
      if (!Session::has('cart')) {
        return view('shop.shoppingcard');
      }
      $oldcart = Session::get('cart');
      $cart = new Cart($oldcart);
      return view('shop.shoppingcard', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout() {
      if (!Session::has('cart')) {
        return view('shop.shoppingcard');
    }
     $oldcart = Session::get('cart');
     $cart = new Cart($oldcart);
     $total = $cart->totalPrice;
     return view('shop.checkout', ['total' => $total]);
   }
   public function getSearch() {
     return back();
   }

   public function postSearch($searchKey) {
     $products = Product::search($searchKey)->get();
     return view('search',compact('products'));
   }

}
