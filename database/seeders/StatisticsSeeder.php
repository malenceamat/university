<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Faq;
use App\Models\partner;
use App\Models\Statistics;
use Illuminate\Database\Seeder;
use Str;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //персонализированный контент

        Faq::create([
            'question' => 'Категория 1',
        ]);
        Faq::create([
            'question' => 'Категория 2',
        ]);
        Faq::create([
            'question' => 'Категория 3',
        ]);
    }
}
