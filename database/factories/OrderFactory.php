<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'account_id' => Account::factory(),
            'order_date' => fake()->dateTimeThisYear(),
            'total_amount' => fake()->randomFloat(2, 20, 500),
            'status' => fake()->randomElement(['pending', 'processing', 'completed', 'cancelled']),
        ];
    }
}
