<?php

namespace Database\Seeders;

use App\Models\Banner;
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
        Statistics::create([
            'head' => Str::random(5),
            'text' => Str::random(10)
        ]);
    }
}
