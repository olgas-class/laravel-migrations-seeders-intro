<?php

namespace Database\Seeders;

// use Faker\Generator as Faker;
use Faker;
use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker\Factory::create('it_IT');
            $newHouse = new House();
            $newHouse->address = $faker->streetAddress();
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->state();
            $newHouse->square_meters = $faker->numberBetween(20, 200);
            $newHouse->rooms_number = $faker->numberBetween(1, 10);
            $newHouse->description = $faker->text(300);
            $newHouse->price = $faker->randomFloat(2, 50000, 250000);
            $newHouse->energy_rating = $faker->randomElement(["A", "B", "C", "D", "E", "F"]);
            $newHouse->save(); // Qui salviamo i dati nel database
        }
    }
}
