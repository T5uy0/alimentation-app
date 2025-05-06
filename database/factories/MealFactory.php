<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meal>
 */
class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'calories' => $this->faker->numberBetween(100, 1000),
            'proteins' => $this->faker->randomFloat(1, 0, 100),
            'carbohydrate' => $this->faker->randomFloat(1, 0, 100),
            'lipids' => $this->faker->randomFloat(1, 0, 100),
        ];
    }
}
