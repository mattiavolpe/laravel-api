<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class IDORTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_cannot_edit_others_type()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $type = new Type();
        $type->user_id = $user1->id;
        $type->name = "User 1 Type";
        $type->slug = "user-1-type";
        $type->save();

        $response = $this->actingAs($user2)->get('/admin/types/user-1-type/edit');

        $response->assertStatus(403);
    }

    public function test_user_cannot_edit_others_technology()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $technology = new Technology();
        $technology->user_id = $user1->id;
        $technology->name = "User 1 Technology";
        $technology->slug = "user-1-technology";
        $technology->save();

        $response = $this->actingAs($user2)->get('/admin/technologies/user-1-technology/edit');

        $response->assertStatus(403);
    }
}
