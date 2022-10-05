<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            'Force', 
            'Dextérité', 
            'Constitution', 
            'Intelligence', 
            'Charisme', 
            'Intelligence',
            'initiative',
            'defense',
            'attaque_contact',
            'attaque_distance',
            'attaque_mentale',
            'de_de_vie',
            'points_vie',
            'points_vie_max',
            'blessure_grave',
            'resistance_degats',
            'points_chance',
            'points_chance_max',
            'niveau_vie'
        ];

        foreach ($attributes as $attribute) {
            Attribute::create([
                'name' => $attribute,
                'description' => ''
            ]);
        }
    }
}
