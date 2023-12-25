<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Banner;
use App\Models\Card;
use Illuminate\Database\Seeder;
use Str;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //дефолтное создание записей
        //Card::factory(5)->create();

        //персонализированный контент
        Card::factory(1)->create([
            'head' => '108 чел.',
            'underhead' => '108 человек из 649',
            'basic' => 'Искусственный интеллект и большие данные',
            'qualification' => '«Информатика и ВТ», «Прикладная математика»',
            'more' => 'По итогам обучения студентам будет присвоена квалификация «Аналитик данных»'
        ]);

        Card::factory(1)->create([
            'head' => '227 чел.',
            'underhead' => '227 человек из 649',
            'basic' => 'Управление проектами в области искусственного интеллекта',
            'qualification' => '«Информатика и ВТ», «Прикладная математика»',
            'more' => 'По итогам обучения студентам будет присвоена квалификация «Менеджер проектов в области искусственного интеллекта»'
        ]);

        Card::factory(1)->create([
            'head' => '314 чел.',
            'underhead' => '314 человек из 649',
            'basic' => 'Графический дизайн и визуальные коммуникации',
            'qualification' => '«Информатика и ВТ», «Прикладная математика»',
            'more' => 'По итогам обучения студентам будет присвоена квалификация «Графический дизайнер»'
        ]);

    }
}
