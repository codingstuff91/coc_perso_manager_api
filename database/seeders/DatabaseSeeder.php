<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Capacity;
use App\Models\Character;
use App\Models\Particularity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProfileSeeder::class
        ]);
        
        Particularity::factory(10)->create();
        Capacity::factory(4)->create();
        Character::factory(5)->create();

        $this->call([
            AttributeSeeder::class,
            AttributeCharacterSeeder::class
        ]);
    }
}
