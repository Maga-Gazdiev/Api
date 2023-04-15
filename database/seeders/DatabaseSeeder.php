<?php

namespace Database\Seeders;

use Database\Seeders\CardSeeder;
use Database\Seeders\TaskSeeder;
use Database\Seeders\DeskListSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\DeskSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([    
            DeskSeeder::class,
            DeskListSeeder::class,
            CardSeeder::class,
            TaskSeeder::class,
        ]);
    }
}
