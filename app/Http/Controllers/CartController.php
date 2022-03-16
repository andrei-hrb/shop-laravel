<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function add(Product $product)
    {
        \Cart::add($product->id, $product->title, 1, $product->price, ['image' => $product->image]);

        return response('added');
    }

    public function order(Request $request)
    {
        \Mail::raw("Name: $request->name; Phone: $request->phone; Adress: $request->adress; JSON: " . json_encode(\Cart::content()), function ($message) {
            $message->from('us@cubeshop.com', 'Cube Shop');

            $message->to('hirbu.z@gmail.com');
        });

        \Cart::destroy();

        return redirect()->back();
    }
}
