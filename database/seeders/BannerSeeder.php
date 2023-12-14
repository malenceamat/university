<?php

namespace Database\Seeders;

use App\Models\Banner;

use Illuminate\Database\Seeder;
use Str;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::factory(1)->create();
    }
}
