<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Banner;
use Illuminate\Database\Seeder;
use Str;

class AudiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Audience::create([
            'head' => Str::random(10),
        ]);
    }
}
