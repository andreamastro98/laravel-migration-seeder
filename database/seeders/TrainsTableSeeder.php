<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 20; $i++ ){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->bothify('??-#####');
            $newTrain->number_train_carriage = $faker->numberBetween(5,20);
            $newTrain->train_in_time = $faker->randomElement([true,false]);
            $newTrain->train_cancelled = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
