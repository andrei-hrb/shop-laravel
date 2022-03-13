<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $url = 'https://fakestoreapi.com/products';
        $products_original = json_decode(file_get_contents($url));

        $products_parsed = array_map(fn ($product) => [
            'title' => $product->title,
            'price' => $product->price,
            'description' => $product->description,
            'category' => $product->category,
            'image' => $product->image,
            'rating_rate' => $product->rating->rate,
            'rating_count' => $product->rating->count,
        ], $products_original);

        foreach ($products_parsed as $product) {
            \App\Models\Product::create($product);
        }
    }
}
