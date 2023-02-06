<?php

namespace Database\Seeders;

use App\Models\Capacity;
use App\Models\Capacity_character;
use App\Models\Character;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterCapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('capacity_character')->insert([
            'capacity_id'  => Capacity::first()->id,
            'character_id' => Character::first()->id,
        ]);
    }
}
