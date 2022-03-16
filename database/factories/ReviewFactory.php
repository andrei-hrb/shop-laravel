<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'stars' => $this->faker->numberBetween(1, 5),
            'product_id' => $this->faker->numberBetween(1, Product::count()),
            'content' => $this->faker->text,
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
