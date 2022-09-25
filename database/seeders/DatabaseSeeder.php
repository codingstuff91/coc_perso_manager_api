<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
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
        Particularity::factory(10)->create();
        Profile::factory(3)->create();
        Character::factory(5)->create();
    }
}
