<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Character_weapon;
use App\Models\Weapon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterWeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $characters = Character::pluck('id');

        foreach ($characters as $character) {
            DB::table('character_weapon')->insert([
                'character_id' => $character,
                'weapon_id'    => Weapon::inRandomOrder()->first()->id,
            ]);
        }
    }
}
