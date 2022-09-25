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
    public function run()
    {
        $attributes = Attribute::all();

        $characters = Character::all();

        foreach ($characters as $character) 
        {
            foreach ($attributes as $attribute)
            {
                DB::table('attribute_character')->insert([
                    "character_id" => $character->id,
                    "attribute_id" => $attribute->id,
                    "value" => 10,
                    "modificator" => 0
                ]);
            }
        }
    }
}
