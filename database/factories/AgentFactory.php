<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ime' => $this->faker->name(),
            'brojTelefona' => $this->faker->phoneNumber(),
            'godineIskustva' => $this->faker->numberBetween($min = 1, $max = 30),
            'email' => $this->faker->unique()->safeEmail()
        ];
    }
}
