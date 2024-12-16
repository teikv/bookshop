<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AccountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'username' => fake()->unique()->userName(),
            'password' => Hash::make('password'), // mật khẩu mặc định
            'email' => fake()->unique()->safeEmail(),
            'role' => fake()->randomElement(['admin', 'user']),
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'shipping_address' => fake()->address(),
        ];
    }
}
