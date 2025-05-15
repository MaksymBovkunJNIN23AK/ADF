<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;
use App\Models\Car;
use Illuminate\Support\Str;

class OwnerCarSeeder extends Seeder
{
    public function run(): void
    {
        Owner::factory(10)->create()->each(function ($owner) {
            $numCars = rand(1, 3);

            for ($i = 0; $i < $numCars; $i++) {
                Car::create([
                    'reg_number' => strtoupper(Str::random(6)),
                    'brand' => fake()->randomElement(['Toyota', 'Ford', 'BMW', 'Tesla','Mazda', 'Volvo']),
                    'model' => fake()->word(),
                    'year' => fake()->numberBetween(2000, 2024),
                    'owner_id' => $owner->id,
                ]);
            }
        });
    }
}

