<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<70; $i++)
        {
            Persona::create([
                'nombres' => $faker->name,
                'apellidos' => $faker->lastName,
                'fecha_nacimiento' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'email' => $faker->unique()->safeEmail,
                'ciudad' => $faker->city,
                'direccion' => $faker->streetAddress,
            ]);
        }
    }
}
