<?php

namespace Database\Seeders;

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
        Result::create([
            'head' => Str::random(5),
            'subtext' => Str::random(10),
            'text' => Str::random(10)
        ]);
    }
}
