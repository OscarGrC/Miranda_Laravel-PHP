<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersRoutesTest extends TestCase
{
    use RefreshDatabase;

    //Test Index
    public function test_users_index_route()
    {
        $response = $this->get(route('users.index'));

        $response->assertStatus(200); 
    }
    //create
    public function test_users_create_route()
    {
        $response = $this->get(route('users.create'));

        $response->assertStatus(200); 
    }
    //store
    public function test_users_store_route()
    {
        $data = [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post(route('users.store'), $data);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', [
            'email' => 'testuser@example.com',
        ]); 
    }

    //show
    public function test_users_show_route()
    {
        $user = User::create([
            'name' => 'testeo',
            'email' => 'test@example.com',
            'password' => bcrypt('1234'), 
        ]);

        $response = $this->get(route('users.show', $user->id));
        $response->assertStatus(200);
        $response->assertSee($user->name); 
    }
    //edit
    public function test_users_edit_route()
    {
        $user = User::create([
            'name' => 'testeo',
            'email' => 'test@example.com',
            'password' => bcrypt('1234'), 
        ]);

        $response = $this->get(route('users.edit', $user->id));

        $response->assertStatus(200); 
    }
    //update 
    public function test_users_update_route()
    {
        $user = User::create([
            'name' => 'testeo',
            'email' => 'test@example.com',
            'password' => bcrypt('1234'), 
        ]);

        $data = [
            'name' => 'Updated User',
            'email' => 'updateduser@example.com',
            'password' => 'newpassword',
            'password_confirmation' => 'newpassword',
        ];

        $response = $this->put(route('users.update', $user->id), $data);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', [
            'email' => 'updateduser@example.com',
        ]); 
    }
    // delete o destroy
    public function test_users_destroy_route()
{
    $user = User::create([
        'name' => 'testeo',
        'email' => 'test@example.com',
        'password' => bcrypt('1234'), 
    ]);

    $response = $this->delete(route('users.destroy', $user->id));
    $response->assertRedirect(route('users.index')); 
    $this->assertDatabaseMissing('users', ['id' => $user->id]);
}
}
