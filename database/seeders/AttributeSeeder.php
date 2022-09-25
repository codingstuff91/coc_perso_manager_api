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
        $attributes = ['Force', 'Dextérité', 'Constitution', 'Intelligence', 'Charisme', 'Intelligence'];

        foreach ($attributes as $attribute) {
            Attribute::create([
                'name' => $attribute,
                'description' => ''
            ]);
        }
    }
}
