<?php

namespace Database\Seeders;

use App\Models\TextInCards;
use Illuminate\Database\Seeder;

class TextInCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TextInCards::create([
            'text' => 'Количество часов: 365',
            'card_id' => '1'
        ]);

        TextInCards::create([
            'text' => 'Категория слушателей: студенты IT-специальностей',
            'card_id' => '1'
        ]);

        TextInCards::create([
            'text' => 'Количество часов: 370',
            'card_id' => '2'
        ]);

        TextInCards::create([
            'text' => 'Категория слушателей: студенты не IT-специальностей',
            'card_id' => '2'
        ]);

        TextInCards::create([
            'text' => 'Количество часов: 264',
            'card_id' => '3'
        ]);

        TextInCards::create([
            'text' => 'Категория слушателей: студенты не IT-специальностей',
            'card_id' => '3'
        ]);
    }
}
