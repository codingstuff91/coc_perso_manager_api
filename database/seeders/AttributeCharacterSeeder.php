<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Character;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $attributes = Attribute::pluck('id');
        $characters = Character::pluck('id');

        foreach ($characters as $character) {
            foreach ($attributes as $attribute) {
                DB::table('attribute_character')->insert([
                    'character_id' => $character,
                    'attribute_id' => $attribute,
                    'value'        => 10,
                    'modificator'  => 0,
                ]);
            }
        }
    }
}
