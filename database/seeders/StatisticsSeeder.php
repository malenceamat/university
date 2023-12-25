<?php

namespace Database\Seeders;

use App\Models\Banner;
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
        // дефолтное создание записей
      //  Statistics::factory(4)->create();

        //персонализированный контент

        Statistics::create([
            'head' => '1200',
            'text' => 'Обучающихся ежегодно'
        ]);

        Statistics::create([
            'head' => '9 мес.',
            'text' => 'длительность программы'
        ]);

        Statistics::create([
            'head' => '10',
            'text' => 'индустриальных партнеров'
        ]);
    }
}
