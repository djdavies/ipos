<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DrinksTableSeeder::class);
        $this->call(FoodsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
