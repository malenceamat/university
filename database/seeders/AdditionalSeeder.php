<?php

namespace Database\Seeders;

use App\Models\Additional;
use App\Models\Banner;
use Illuminate\Database\Seeder;
use Str;

class AdditionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Additional::factory(1)->create();
    }
}
