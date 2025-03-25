<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Lina Morgan Freeman',
            'email' => 'correo@example.com',
            'password' => bcrypt('password123'), 
        ]);

        User::create([
            'name' => 'Martin Router King',
            'email' => 'dream@example.com',
            'password' => bcrypt('1234'),
        ]);

    }
}
