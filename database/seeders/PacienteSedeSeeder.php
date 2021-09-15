<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PacienteSede;

class PacienteSedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<50; $i++)
        {
            PacienteSede::create([
                'paciente_id' => $faker->unique()->numberBetween($min=1, $max=50),
                'sede_id' => $faker->numberBetween($min=1, $max=3), 
                'primary_id_tabla' => $faker->numberBetween($min = 500, $max = 9999),               
            ]);
        }
    }
}
