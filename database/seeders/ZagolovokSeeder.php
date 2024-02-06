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
            'head' => 'Преимущества',
            'text' => 'Цифровая кафедра - это концепция, основанная на использовании современных информационно-коммуникационных технологий в процессе преподавания и организации учебного процесса.',
            'button' => 'Начать обучение',
            'link_button' => 'https://www.google.ru/',
            'telegram' => 'https://www.google.ru/'
        ]);
    }
}
