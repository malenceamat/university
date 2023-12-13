<?php

namespace Database\Seeders;

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
        Possibilities::create([
            'text' => Str::random(5)
        ]);
    }
}
