<?php

namespace Database\Seeders;

use App\Models\Additional;
use App\Models\Banner;
use App\Models\Possibilities;
use App\Models\Question;
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
        Question::create([
            'ask' => 'Вопрос 1-1',
            'response'  => 'Ответ 1-1',
            'faq_id' => '1'
        ]);
        Question::create([
            'ask' => 'Вопрос 1-2',
            'response'  => 'Ответ 1-2',
            'faq_id' => '1'
        ]);
        Question::create([
            'ask' => 'Вопрос 2-1',
            'response'  => 'Ответ 2-1',
            'faq_id' => '2'
        ]);
        Question::create([
            'ask' => 'Вопрос 3-1',
            'response'  => 'Ответ 3-1',
            'faq_id' => '3'
        ]);
        Question::create([
            'ask' => 'Вопрос 3-2',
            'response'  => 'Ответ 3-2',
            'faq_id' => '3'
        ]);
    }
}
