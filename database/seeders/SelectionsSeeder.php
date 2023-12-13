<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Selection;
use Illuminate\Database\Seeder;
use Str;

class SelectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Selection::create([
            'head' => Str::random(5),
            'text' => Str::random(10),
            'button' => Str::random(10),
            'url' => Str::random(10)
        ]);
    }
}
