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
            'text' => '2-4',
            'head' => 'Курсы бакалавриата'
        ]);
        Audience::create([
            'text' => '3-5',
            'head' => 'Курсы специалитета'
        ]);
        Audience::create([
            'text' => '1-2',
            'head' => 'Курс магистратуры'
        ]);
    }
}
