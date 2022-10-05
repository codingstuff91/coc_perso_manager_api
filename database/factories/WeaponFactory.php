<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
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
            'name' => $this->faker->word,
            'dm_score' => Arr::random(['1D6', '2D10', '3D4']),
            'attack_score' => Arr::random(['1D10', '2D10', '3D4']),
        ];
    }
}
