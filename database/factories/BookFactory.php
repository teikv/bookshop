<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'price' => fake()->randomFloat(2, 10, 100),
            'publication_date' => fake()->date(),
            'description' => fake()->paragraph(),
            'stock_quantity' => fake()->numberBetween(0, 100),
        ];
    }
}
