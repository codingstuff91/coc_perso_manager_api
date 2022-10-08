<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Character;
use App\Models\Character_user;
use Illuminate\Database\Seeder;

class CharacterUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character_user::create([
            'user_id' => User::first()->id,
            'character_id' => Character::all()->random(1)->first()->id
        ]);

        Character_user::create([
            'user_id' => User::first()->id,
            'character_id' => Character::all()->random(1)->first()->id
        ]);
    }
}
