<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add(Request $request)
    {
        $review = new Review();

        $review->name = $request["name"];
        $review->content = $request["content"];
        $review->product_id = $request["product_id"];
        if (isset($request["stars-1"])) {
            $review->stars = 1;
        } else if (isset($request["stars-2"])) {
            $review->stars = 2;
        } else if (isset($request["stars-3"])) {
            $review->stars = 3;
        } else if (isset($request["stars-4"])) {
            $review->stars = 4;
        } else if (isset($request["stars-5"])) {
            $review->stars = 5;
        }

        $review->save();

        return redirect()->back();
    }
}
