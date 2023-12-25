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
           'image' => 'content/2-4.svg',
            'head' => 'Курсы бакалавриата'
        ]);
        Audience::create([
            'image' => 'content/3-5.svg',
            'head' => 'Курсы специалитета'
        ]);
        Audience::create([
            'image' => 'content/1-2.svg',
            'head' => 'Курс магистратуры'
        ]);
    }
}
