<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Stages;
use Illuminate\Database\Seeder;
use Str;

class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stages::create([
            'date' => 'Август-Сентябрь 2024',
            'stages' => 'Регистрация на выбранную программу и оформление пакета документов'
        ]);
        Stages::create([
            'date' => 'Сентябрь-Ноябрь 2024',
            'stages' => 'Прохождение входного тестирования (Ассесмента)'
        ]);
        Stages::create([
            'date' => 'Сентябрь-Май 2024',
            'stages' => 'Прохождение модулей выбранной Вами программы'
        ]);
        Stages::create([
            'date' => 'Март 2024',
            'stages' => 'Прохождение промежуточного тестирования (Ассесмента)'
        ]);
        Stages::create([
            'date' => 'Апрель-Май 2024',
            'stages' => 'Прохождение производственной практики на предприятии'
        ]);
        Stages::create([
            'date' => 'Июнь 2024',
            'stages' => 'Прохождение итогового тестирования (Ассесмента)'
        ]);
        Stages::create([
            'date' => 'Июнь 2024',
            'stages' => 'Защита проектов, над которыми студенты работали на протяжении обучения'
        ]);
        Stages::create([
            'date' => 'Июль 2024',
            'stages' => 'Торжественное вручение дипломов студентам'
        ]);
    }
}
