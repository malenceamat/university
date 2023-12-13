<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Stages;
use Illuminate\Database\Seeder;
use Str;

class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stages::create([
            'number' => Str::random(5),
            'date' => Str::random(10),
            'stages' => Str::random(10)
        ]);
    }
}
