<?php

namespace Database\Seeders;

use App\Models\Additional;
use App\Models\Banner;
use App\Models\partner;
use Illuminate\Database\Seeder;
use Str;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        partner::create([
            'image' => 'content/rostelecom.png',
        ]);

        partner::create([
            'image' => 'content/npo.png',
        ]);

        partner::create([
            'image' => 'content/endy.png',
        ]);

        partner::create([
            'image' => 'content/flyes.png',
        ]);

        partner::create([
            'image' => 'content/logo-servizoria.png'
        ]);
    }
}
