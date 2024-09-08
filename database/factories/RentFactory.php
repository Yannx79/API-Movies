<?php

namespace Database\Factories;

use App\Models\Cassette;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rent>
 */
class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penalty' => $this->faker->randomFloat(2, 0, 100), // Genera una penalización aleatoria entre 0 y 100
            'rent_value' => $this->faker->randomFloat(2, 10, 200), // Valor de alquiler entre 10 y 200
            'quantity' => $this->faker->numberBetween(1, 5), // Cantidad de cassettes entre 1 y 5
            'status' => $this->faker->numberBetween(0, 1), // Estado, 0 o 1
            'cassette_id' => Cassette::inRandomOrder()->first()->id, // Relación con el modelo Cassette
            'user_id' => User::inRandomOrder()->first()->id, // Relación con el modelo User
        ];
    }
}
