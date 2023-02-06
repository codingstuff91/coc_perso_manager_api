<?php

namespace Database\Seeders;

use App\Models\Advantage;
use App\Models\Capacity;
use App\Models\Character;
use App\Models\Weapon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            ProfileSeeder::class,
        ]);

        Advantage::factory(10)->create();
        Capacity::factory(4)->create();
        Character::factory(5)->create();
        Weapon::factory(4)->create();

        $this->call([
            AttributeSeeder::class,
            AttributeCharacterSeeder::class,
            CharacterWeaponSeeder::class,
            CharacterUserSeeder::class,
            CharacterCapacitySeeder::class,
        ]);
    }
}
