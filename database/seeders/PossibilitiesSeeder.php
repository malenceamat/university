<?php

namespace Database\Seeders;

use App\Models\Additional;
use App\Models\Banner;
use App\Models\Possibilities;
use Illuminate\Database\Seeder;
use Str;

class PossibilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Possibilities::factory(1)->create();
    }
}
