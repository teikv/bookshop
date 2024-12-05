<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'Title' => $this->faker->sentence(3),
            'Price' => $this->faker->randomFloat(2, 10, 200),
            'PublicationDate' => $this->faker->date(),
            'Description' => $this->faker->paragraph(),
            'StockQuantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
