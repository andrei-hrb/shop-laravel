<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);

        return view('shop', compact('products'));
    }

    public function view(Product $product)
    {
        return view('product', compact('product'));
    }
}
