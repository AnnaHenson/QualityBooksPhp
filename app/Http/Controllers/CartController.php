<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update(Request $request)
    {
        if($request->get('id') and $request->get('quantity'))
        {
            $cart = session()->get('cart');

            $cart[$request->get('id')]["quantity"] = $request->get('quantity');

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->get('id')])) {

                unset($cart[$request->get('id')]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function cart()
    {
        return view('cart/cart');
    }

    public function addToCart($id)
    {
        $book = book::find($id);

        if(!$book) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "id" => $book->id,
                    "name" => $book->title,
                    "quantity" => 1,
                    "price" => $book->price,
                    "photo" => $book->file_name
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $book->id,
            "name" => $book->title,
            "quantity" => 1,
            "price" => $book->price,
            "photo" => $book->file_name
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
