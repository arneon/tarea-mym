<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
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
            Paciente::create([
                'persona_id' => $faker->unique()->numberBetween($min=1, $max=50),
                'diagnostico_inicial' => $faker->text(120),
                'fecha_registro' => $faker->dateTimeThisCentury->format('Y-m-d'), 
                'fecha_ultima_visita' => $faker->dateTimeThisCentury->format('Y-m-d')
            ]);
        }
    }
}
