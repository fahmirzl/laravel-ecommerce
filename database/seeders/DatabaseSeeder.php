<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->count(5)->create([
            'role' => 'customer'
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class
        ]);

        Order::create([
            'user_id' => 1,
        ]);

        Order::create([
            'user_id' => 2,
        ]);

        Order::create([
            'user_id' => 3,
        ]);

        OrderDetail::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 2
        ]);

        OrderDetail::create([
            'order_id' => 2,
            'product_id' => 1,
            'quantity' => 1
        ]);

        OrderDetail::create([
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 1
        ]);

        OrderDetail::create([
            'order_id' => 3,
            'product_id' => 2,
            'quantity' => 2
        ]);
    }
}
