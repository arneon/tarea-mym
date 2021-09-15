<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('12345');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@tarea.api',
            'password' => $password,
        ]);
    }
}
