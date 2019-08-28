<?php

use Illuminate\Database\Seeder;
use App\House;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class housesTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) { 
            $house = new House();
            $house->name = $faker->sentence(2);
            $house->city = $faker->city;
            $house->price = $faker->randomFloat(0, 50, 200);
            $house->description = $faker->sentence(20);
            $house->floor = $faker->randomFloat(0, 0, 10);
            $house->mq = $faker->randomFloat(0, 30, 200);
            $house->email = $faker->email;
            $house->geolocalization = $faker->longitude;
            $house->telephone = $faker->phoneNumber;
            $house->slug = Str::slug($house->name);
            $house->save();
        }

    }
}
