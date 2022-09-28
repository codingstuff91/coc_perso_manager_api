<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'name' => 'Action',
            'description' => 'Dé de vie : 1D10'
        ]);

        Profile::create([
            'name' => 'Aventure',
            'description' => 'Dé de vie : 1D8 et +2 pts de chance'
        ]);

        Profile::create([
            'name' => 'Reflexion',
            'description' => 'Dé de vie : 1D6 et +2 pts de capacité'
        ]);
    }
}
