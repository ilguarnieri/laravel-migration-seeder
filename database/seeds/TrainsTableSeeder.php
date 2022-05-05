<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $companies = ['Trenitalia', 'Italo', 'Treno Nord', 'Ferrotramviaria', 'Rail Cargo'];

        for($i = 0; $i < 100; $i++){

            $train = new Train();
    
            $train->company = $faker->randomElement($companies);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->date = $faker->dateTimeBetween('-2 week', '+2 week');
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->code = $faker->bothify('??-#####');
            $train->carriages = $faker->numberBetween(3, 25);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
    
            $train->save();
        }
    }
}
