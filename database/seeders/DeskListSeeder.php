<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeskList;

class DeskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeskList::factory()->count(10)->create();
    }
}
