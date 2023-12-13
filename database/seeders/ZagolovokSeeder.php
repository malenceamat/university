<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Zagolovok;
use Illuminate\Database\Seeder;
use Str;

class ZagolovokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zagolovok::create([
            'head' => Str::random(10),
            'text' => Str::random(10)
        ]);
    }
}
