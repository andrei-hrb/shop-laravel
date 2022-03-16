<?php

namespace App\Http\Controllers;

use \App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function view(Request $request, $name)
    {
        $products = Product::where('category', $name)->paginate(12);

        return view('shop', compact('products'))->with('category', $name);
    }
}
