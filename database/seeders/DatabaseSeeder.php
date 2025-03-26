<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Llamar a los seeders de usuarios y actividades
        $this->call([
            UserSeeder::class,
            ActivitySeeder::class,
            RoomSeeder::class,
            BookingSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
