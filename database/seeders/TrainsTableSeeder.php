<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $numOfElements = 100;
        for($i = 0 ; $i<$numOfElements ; $i++){
            $new_train_object = new Train();
            $new_train_object->company = $faker->words(3,true);
            $new_train_object->arrival_station = $faker->word(5,true);
            $new_train_object->departure_time = $faker->date() . '->' . $faker->time();
            $new_train_object->arrival_time = $faker->date() . '->' . $faker->time();
            $new_train_object->train_code = $faker->lexify();
            $new_train_object->num_of_railways = $faker->randomNumber(2,false);
            $new_train_object->is_on_time = $faker->randomElement([true,false]);
            $new_train_object->was_removed = $faker->randomElement([true,false]);
            $new_train_object->save();
        }
    }
}