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
        //Audience::factory(3)->create();

        Audience::create([
           'image' => 'content/new-2-4.png',
            'head' => 'Курсы бакалавриата'
        ]);
        Audience::create([
            'image' => 'content/new-3-5.png',
            'head' => 'Курсы специалитета'
        ]);
        Audience::create([
            'image' => 'content/new-1-2.png',
            'head' => 'Курс магистратуры'
        ]);
    }
}
