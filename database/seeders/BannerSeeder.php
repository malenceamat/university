<?php

namespace Database\Seeders;

use App\Models\Banner;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Str;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'image' => 'content/bannernew.png',
            'button' => 'Смотреть видео',
            'emailbutton' => 'https://www.youtube.com/watch?v=Jp2gDOONOd0',
            'colortext' => 'Цифровая',
            'text' => 'кафедра НовГУ',
            'smalltext' => 'Цифровая кафедра — программа федерального проекта «Развитие кадрового потенциала ИТ-отрасли» национальной программы «Цифровая экономика Российской Федерации».',
            'bigtext' => 'Это совместный проект Минобрнауки и Минцифры России, который дает возможность студентам получить новую профессию в сфере информационных технологий.',
            'secondbutton' => 'Записаться',
            'urlsecondbutton' => 'https://www.google.ru/'
        ]);

    }
}
