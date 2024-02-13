<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     private $products = [
        "Pulse Performance Tights",
        "Agile Windbreaker Jacket",
        "Rebound Basketball Jersey",
        "Swift Running Shorts",
        "Victory Compression Socks",
        "Apex Soccer Ball",
        "Precision Hockey Stick",
        "Glide Tennis Racket",
        "Pro Fitness Dumbbells",
        "Balance Yoga Mat",
        "Dominate Basketball Shoes",
        "Crosscourt Crossover Backpack",
        "Net Swish Hoop Net",
        "Slam Dunk Practice Ball",
        "Free Throw Trainer",
        "Diamond Swing Bat",
        "Home Run Hitter Helmet",
        "Leather Catch Glove",
        "Curveball Pitching Machine",
        "Base Stealer Sliding Shorts",
     ];
    public function definition(): array
    {
        // $random_index = array_rand($this->products);
        return [
            "name"=>fake()->randomElement($this->products),
            "description"=>fake()->sentence,
            "price"=>fake()->randomNumber(2),

        ];
    }
}
