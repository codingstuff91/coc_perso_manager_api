<?php

namespace Database\Factories;

use App\Models\Advantage;
use App\Models\Particularity;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id'      => User::factory(),
            'level'        => $this->faker->numberBetween(1, 5),
            'name'         => $this->faker->name,
            'gender'       => $this->faker->randomElement(['M', 'F']),
            'age'          => $this->faker->numberBetween(25, 45),
            'height'       => $this->faker->numberBetween(155, 195),
            'advantage_id' => Advantage::inRandomOrder()->first()->id,
            'profile_id'   => Profile::inRandomOrder()->first()->id,
        ];
    }
}
