<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Character_user;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('character_user')->insert([
            'user_id'      => User::first()->id,
            'character_id' => Character::inRandomOrder()->first()->id,
        ]);

        DB::table('character_user')->insert([
            'user_id'      => User::first()->id,
            'character_id' => Character::inRandomOrder()->first()->id,
        ]);
    }
}
