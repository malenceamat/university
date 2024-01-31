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
            'image' => 'content/additional.png',
            'head' => $this->faker->text(10),
            'text' => $this->faker->text(10),
            'hideblock' => 'on'
        ];
    }
}
