<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++)
            DB::table('drinks')->insert([
                'choices' => $faker->randomElement($array = array ('soft drink', 'spirit', 'bottled beer', 'draught beer')),
                'order_id' => $faker->numberBetween($min = 1, $max = 50),
                'created_at' => Carbon::now()
            ]);
    }
}
