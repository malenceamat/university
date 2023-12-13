<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Str;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'fio' => Str::random(5),
            'job' => Str::random(10),
            'merits' => Str::random(10)
        ]);
    }
}
