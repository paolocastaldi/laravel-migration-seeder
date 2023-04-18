<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        $type = ['Intercity','Trenitalia','regionale'];
        for($i=0;$i<100;$i++) {
            $new_train = new Train();
            $new_train->firm = $faker->randomElement($type);
            $new_train->start_station = $faker->city();
            $new_train->end_station = $faker->city();
            $new_train->time_start = $faker->time();
            $new_train->time_end = $faker->time();
            $new_train->id_train = $faker->numberBetween(10, 120);
            $new_train->carriage = $faker->numberBetween(1, 8);
            $new_train->deletion = $faker->boolean();
            $new_train->save();
        }
    }
}
