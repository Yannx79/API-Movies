<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MovieType>
 */
class MovieTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = config('data.movies.es');
        return [
            'title' => $this->faker->word(), // Genera una palabra aleatoria para el título
            'status' => $this->faker->numberBetween(0, 1), // Genera un estado aleatorio (0 o 1)
            'category' => $this->faker->randomElement($categories),
        ];
    }
}
