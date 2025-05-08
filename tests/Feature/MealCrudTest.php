<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Meal;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MealCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_a_meal(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/meals', [
            'name' => 'Salade',
            'calories' => 150,
            'proteins' => 5,
            'carbohydrate' => 20,
            'lipids' => 3,
        ]);

        $response->assertRedirect('/meals');
        $this->assertDatabaseHas('meals', ['name' => 'Salade']);
    }

    public function test_user_can_update_a_meal(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $meal = Meal::factory()->create();

        $response = $this->put("/meals/{$meal->id}", [
            'name' => 'Updated Meal',
            'calories' => 400,
            'proteins' => 10,
            'carbohydrate' => 50,
            'lipids' => 15,
        ]);

        $response->assertRedirect('/meals');
        $this->assertDatabaseHas('meals', ['name' => 'Updated Meal']);
    }

    public function test_user_can_soft_delete_a_meal(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $meal = Meal::factory()->create();

        $response = $this->delete("/meals/{$meal->id}");

        $response->assertRedirect('/meals');
        $this->assertSoftDeleted($meal);
    }
}
