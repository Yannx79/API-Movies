<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actor>
 */
class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // Genera un nombre aleatorio
            'birth_date' => $this->faker->date(), // Genera una fecha de nacimiento aleatoria
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
