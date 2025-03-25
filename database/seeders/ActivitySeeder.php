<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
            'type' => 'surf',
            'user_id' => 1, // El ID del usuario tiene que existir ejecuta despues de seeder de user
            'datetime' => now(), 
            'paid' => true,
            'notes' => 'Actividad realizada con buen clima.',
            'satisfaction' => 8,
        ]);

        Activity::create([
            'type' => 'windsurf',
            'user_id' => 1,
            'datetime' => now()->addDays(1), 
            'paid' => false,
            'notes' => 'La actividad fue divertida, pero hubo mucho viento.',
            'satisfaction' => 7,
        ]);

    }
}
