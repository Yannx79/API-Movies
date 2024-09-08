<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\MovieType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->numberBetween(0, 1), // Genera un estado aleatorio (0 o 1)
            'actor_id' => Actor::inRandomOrder()->first()->id, // Selecciona un ID de actor aleatorio
            'movie_type_id' => MovieType::inRandomOrder()->first()->id, // Selecciona un ID de tipo de película aleatorio
        ];
    }
}
