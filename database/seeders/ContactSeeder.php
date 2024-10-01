<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('contacts')->insert([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'identification' => $faker->unique()->numerify('#########'), // 9 dígitos únicos
                'birth_date' => $faker->date('Y-m-d', '2003-12-31'), // Fecha anterior a 2003
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
