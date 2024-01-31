<?php

namespace Database\Factories;

use App\Models\Banner;
use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Str;

class ResultFactory extends Factory
{

    protected $model = Result::class;

    public function definition()
    {
        return [
            'image' => 'content/award.svg',
            'head' => 'Победитель марафона',
            'subtext' => 'цифровых кафедр',
            'text' => $this->faker->text(10),
            'hideblock' => 'on'
        ];
    }

}
