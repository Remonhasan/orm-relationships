<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Profile::class;

    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'bio' => fake()->text(100),
        ];
    }
}
