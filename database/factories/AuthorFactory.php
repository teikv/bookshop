<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author_name' => fake()->name(),
            'biography' => fake()->paragraph(),
        ];
    }
} 