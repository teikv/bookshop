<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Account;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $accounts = Account::all();
        foreach ($accounts as $account) {
            Order::factory()->count(3)->create(['AccountID' => $account->AccountID]);
        }
    }
}

