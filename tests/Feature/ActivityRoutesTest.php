<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ActivityRoutesTest extends TestCase
{
    use RefreshDatabase;
    public function test_activities_index_route()
    {
        $response = $this->get(route('activities.index'));

        $response->assertStatus(200);
        $response->assertSee('Actividades');
    }

    public function test_activities_show_route()
    {
        $user = User::create([
            'name' => 'testeo',
            'email' => 'test@example.com',
            'password' => bcrypt('1234'),
        ]);

        $activity = Activity::create([
            'type' => 'surf',
            'user_id' => $user->id,
            'datetime' => now(),
            'paid' => false,
            'notes' => 'Notas de la actividad',
            'satisfaction' => 8,
        ]);

        $response = $this->get(route('activities.show', $activity->id));

        $response->assertStatus(200);
     
    }

    public function test_activities_store_route()
    {
        $user = User::create([
            'name' => 'testeo',
            'email' => 'test@example.com',
            'password' => bcrypt('1234'),
        ]);

        $response = $this->post(route('activities.store'), [
            'type' => 'surf',
            'user_id' => $user->id,
            'datetime' => now(),
            'paid' => false,
            'notes' => 'Notas de la actividad',
            'satisfaction' => 9,
        ]);

        $response->assertRedirect(route('activities.index'));
        $this->assertDatabaseHas('activities', [
            'type' => 'surf',
            'user_id' => $user->id,
        ]);
    }

    public function test_activities_destroy_route()
    {
        $user = User::create([
            'name' => 'testeo',
            'email' => 'test@example.com',
            'password' => bcrypt('1234'),
        ]);
    
        $activity = Activity::create([
            'type' => 'surf',
            'user_id' => $user->id,
            'datetime' => now(),
            'paid' => false,
            'notes' => 'Notas de la actividad',
            'satisfaction' => 9,
        ]);
    
        $response = $this->delete(route('activities.destroy', $activity->id));
        $this->assertDatabaseMissing('activities', ['id' => $activity->id]);
    }
    
}
