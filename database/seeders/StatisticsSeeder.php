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
            'question' => 'Цифровая кафедра',
        ]);
        Faq::create([
            'question' => 'Студентам',
        ]);
        Faq::create([
            'question' => 'Обучение',
        ]);
    }
}
