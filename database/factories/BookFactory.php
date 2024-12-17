<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Author;
use App\Models\Category;

class BookFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        return [
            'title' => $title,
            'author_id' => Author::factory(),
            'category_id' => Category::factory(),
            'price' => $this->faker->numberBetween(50000, 500000),
            'publication_date' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'image' => 'rec-' . $this->faker->numberBetween(1, 10) . '.jpg',
            'country' => $this->faker->randomElement(['Vietnam', 'Japan', 'USA', 'Korea', 'China']),
            'slug' => Str::slug($title) . '-' . uniqid()
        ];
    }
}
