<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cassette>
 */
class CassetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'copy_number' => $this->faker->randomNumber(),
            'status' => $this->faker->randomElement([0, 1]), // 0 for inactive, 1 for active
            'movie_id' => Movie::inRandomOrder()->first()->id,
        ];
    }
}
