<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\partner;
use App\Models\Statistics;
use Illuminate\Database\Seeder;
use Str;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statistics::factory(4)->create();
    }
}
