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
        Possibilities::factory(1)->create([
            'text' => 'вторую востребованную профессию'
        ]);
        Possibilities::factory(1)->create([
            'text' => 'новые знания и умения в программировании и искусственном интеллекте'
        ]);

        Possibilities::factory(1)->create([
            'text' => 'общения с педагогами- программистами и специалистами IT- компаний и получения от них уникальных знаний и умений'
        ]);

        Possibilities::factory(1)->create([
            'text' => 'независимую оценку уровня сформированности ИТ-компетенций, которую проводит университет "Иннополис"'
        ]);

        Possibilities::factory(1)->create([
            'text' => 'диплом о профессиональной переподготовке, дающий право работы по IT-специальности'
        ]);

        Possibilities::factory(1)->create([
            'text' => 'реализованный проект по заказу IT или отраслевой компании в портфолио'
        ]);

        Possibilities::factory(1)->create([
            'text' => 'практическая подготовка на базе компании-партнера'
        ]);
    }
}
