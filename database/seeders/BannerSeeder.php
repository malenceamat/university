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
        Banner::create([
            'button' => Str::random(5),
            'emailbutton' => Str::random(6).'@gmail.com',
            'colortext' => Str::random(10),
            'text' => Str::random(10),
            'smalltext' => Str::random(10),
            'bigtext' => Str::random(10),
            'secondbutton' => Str::random(10),
            'urlsecondbutton' => Str::random(10),
        ]);

    }
}
