<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Sede;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sede::create([
            'nombre_sede' => 'Principal',
            'activo' =>  true
        ]);
        Sede::create([
            'nombre_sede' => 'Secundaria',
            'activo' =>  true
        ]);
        Sede::create([
            'nombre_sede' => 'Tercera',
            'activo' =>  true
        ]);
    }
}
