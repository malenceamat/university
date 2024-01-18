<?php

namespace Database\Seeders;

use App\Models\Additional;
use App\Models\Banner;
use App\Models\Possibilities;
use Illuminate\Database\Seeder;
use Str;

class PossibilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Possibilities::create([
            'image' => 'content/proffesiya.png',
            'text'  => 'вторую востребованную профессию'
        ]);
        Possibilities::create([
            'image' => 'content/education.svg',
            'text' => 'новые знания и умения в программировании и искусственном интеллекте'
        ]);

        Possibilities::create([
            'image' => 'content/pedagog.png',
            'text' => 'общения с педагогами- программистами и специалистами IT- компаний и получения от них уникальных знаний и умений'
        ]);

        Possibilities::create([
            'image' => 'content/ocenka.png',
            'text' => 'независимую оценку уровня сформированности ИТ-компетенций, которую проводит университет "Иннополис"'
        ]);

        Possibilities::create([
            'image' => 'content/diplom.svg',
            'text' => 'диплом о профессиональной переподготовке, дающий право работы по IT-специальности'
        ]);

        Possibilities::create([
            'image' => 'content/portfolio.svg',
            'text' => 'реализованный проект по заказу IT или отраслевой компании в портфолио'
        ]);

        Possibilities::create([
            'image' => 'content/practica.svg',
            'text' => 'практическая подготовка на базе компании-партнера'
        ]);
    }
}
