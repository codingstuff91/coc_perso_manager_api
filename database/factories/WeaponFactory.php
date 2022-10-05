<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WeaponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'dm_score' => $this->faker->unique()->safeEmail,
            'attack_score' => now(),
        ];
    }
}
