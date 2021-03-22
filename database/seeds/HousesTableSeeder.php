<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++){
            $newHouse = new House();
            $newHouse->street = $faker->streetAddress();
            $newHouse->construction_date = $faker->date();
            $newHouse->mq = $faker->numberBetween(35, 500);
            $newHouse->rooms = $faker->numberBetween(3, 20);
            $newHouse->price = $faker->randomNumber(6, true);

            $newHouse->save();
        }
    }
}