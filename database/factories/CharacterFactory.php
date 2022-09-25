<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Profile;
use App\Models\Character;
use App\Models\Particularity;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create(),
            'level' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['M', 'F']),
            'age' => $this->faker->numberBetween(25, 45),
            'height' => $this->faker->numberBetween(155, 195),
            'trait_id' => Particularity::all()->random(1)->first(),
            'profile_id' => Profile::all()->random(1)->first()
        ];
    }
}
