<?php

namespace Database\Seeders;

use App\Models\Additional;
use App\Models\Banner;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Str;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'image' => 'teachers/telina.png',
            'fio' => 'Телина Ирина Сергеевна',
            'job' => 'Доцент, руководитель программы',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/levickin.png',
            'fio' => 'Левицкий Иван Александрович',
            'job' => 'Преподаватель Политехнического колледжа НовГУ',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/rizhov.png',
            'fio' => 'Рыжов Андрей Сергеевич',
            'job' => 'Cотрудник ПАО Ростелеком',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/cimbaluc.png',
            'fio' => 'Цымбалюк Лариса Николаевна',
            'job' => 'Преподаватель ИЭИС',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/kudryacheva.png',
            'fio' => 'Кудряшова Татьяна Вячеславовна',
            'job' => 'Менеджер проектов Школы проектного обучения',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/trofimova.png',
            'fio' => 'Трофимова Марина Сергеевна',
            'job' => 'к.ю.н. доцент',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/noviktova.png',
            'fio' => 'Новиктова Яна Владимировна',
            'job' => 'доцент, ИПТ',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/himmelraih.png',
            'fio' => 'Химмельрайх Анна Викторовна',
            'job' => 'Преподаватель ИЭИС',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/klevin.png',
            'fio' => 'Клевин Виталий Геннадьевич',
            'job' => 'Преподаватель ИПТ',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/gareeva.png',
            'fio' => 'Гареева Татьяна Юрьевна',
            'job' => 'Преподаватель ИЭИС и ИПТ',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/noname.png',
            'fio' => 'Ионина Елизавета Вячеславовна',
            'job' => 'Начальник дизайнерского отдела ООО торговый дом Новопласт',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/noname.png',
            'fio' => 'Никифорова Анастасия Михайловна',
            'job' => 'Технический редактор отдела развития бренда',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/fedorova.png',
            'fio' => 'Федорова Маргарита Михайловна',
            'job' => 'Технический редактор отдела развития бренда',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/noname.png',
            'fio' => 'Зуева Татьяна Александровна',
            'job' => 'Дизайнер ООО ПК «Плюмар',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/noname.png',
            'fio' => 'Коваленко Андрей Валентинович',
            'job' => 'Преподаватель VR, Новгородский кварториум',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/mayackaya.png',
            'fio' => 'Маяцкая Мария Владимировна',
            'job' => 'Дизайнер-оператор ООО ТПК «Печатный двор»',
            'merits' => 'Преподаватель'
        ]);

        Team::create([
            'image' => 'teachers/kononova.png',
            'fio' => 'Кононова Яна Дмитриевна',
            'job' => 'Фрилансер',
            'merits' => 'Преподаватель'
        ]);
    }
}
