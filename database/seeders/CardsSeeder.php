<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Card;
use Illuminate\Database\Seeder;
use Str;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::create([
            'head' => Str::random(5),
            'underhead' => Str::random(6),
            'basic' => Str::random(10),
            'qualification' => Str::random(10),
            'more' => Str::random(10)
        ]);
    }
}
