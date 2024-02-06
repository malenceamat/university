<?php

namespace Database\Factories;

use App\Models\Additional;
use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Str;

class AdditionalFactory extends Factory
{
    protected $model = Additional::class;


    public function definition()
    {
        return [
            'image' => 'content/gfx-y-light.png',
            'text' => 'О Цифровой Кафедре',
            'more' => 'Использование интерактивных платформ и онлайн-ресурсов, которые позволяют студентам более эффективно усваивать и применять знания.
            <br>
            <br>
            Студенты получают доступ к широкому спектру учебных материалов, лекций и заданий, которые можно изучать в любом удобном для них месте и в удобное время.
            <br>
            <br>
            Цифровая кафедра позволяет студентам взаимодействовать друг с другом и с преподавателями через онлайн-форумы и чаты, обсуждать материалы и задавать вопросы.
            <br>
            <br>
            Благодаря использованию онлайн-платформ и электронных ресурсов студенты могут получать знания из любой точки мира, не выходя из дома.',
            'button' => 'Смотреть видео',
            'emailbutton' => 'https://www.youtube.com/',
        ];
    }
}
