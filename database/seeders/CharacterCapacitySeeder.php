<?php

namespace Database\Seeders;

use App\Models\Capacity;
use App\Models\Character;
use App\Models\Capacity_character;
use Illuminate\Database\Seeder;

class CharacterCapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Capacity_character::create([
            'capacity_id' => Capacity::first()->id,
            'character_id' => Character::first()->id
        ]);
    }
}
