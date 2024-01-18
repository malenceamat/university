<?php

namespace Database\Factories;

use App\Models\Banner;
use App\Models\Selection;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Str;

class SelectionFactory extends Factory
{

    protected $model = Selection::class;

    public function definition()
    {
        return [
            'image' => 'content/intelekt.png',
            'head' => $this->faker->text(10),
            'text' => $this->faker->text(10),
            'button' => $this->faker->text(5),
            'url' => $this->faker->url(),
        ];
    }
}
