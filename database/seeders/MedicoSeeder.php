<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medico;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        for($i=0; $i<9; $i++)
        {
            Medico::create([
                'persona_id' => $faker->unique()->numberBetween($min=1, $max=50),
                'especialidad' => $faker->jobTitle,
                'fecha_inicio' => $faker->dateTimeThisCentury->format('Y-m-d'), 
                'activo' => $faker->boolean   
            ]);
        }
    }
}
