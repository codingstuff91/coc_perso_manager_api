<?php

namespace Database\Seeders;

use App\Models\Weapon;
use App\Models\Character;
use Illuminate\Database\Seeder;
use App\Models\Character_weapon;

class CharacterWeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = Character::all();

        foreach ($characters as $character) 
        {
            Character_weapon::create([
                'character_id' => $character->id,
                'weapon_id' => Weapon::all()->random()->id
            ]);
        }
    }
}
