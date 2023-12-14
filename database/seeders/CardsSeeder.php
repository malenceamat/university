<?php

namespace Database\Seeders;

use App\Models\Audience;
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
        Card::factory(5)->create();
    }
}
