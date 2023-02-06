<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CapacityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'        => $this->faker->word,
            'level'       => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->paragraph(1),
        ];
    }
}
