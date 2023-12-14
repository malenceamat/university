<?php

namespace Database\Seeders;

use App\Models\Additional;
use App\Models\Banner;
use App\Models\Result;
use Illuminate\Database\Seeder;
use Str;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Result::factory(1)->create();
    }
}
