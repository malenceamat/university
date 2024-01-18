<?php

namespace Database\Factories;

use App\Models\Banner;
use App\Models\Possibilities;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Str;

class PossibilitiesFactory extends Factory
{

    protected $model = Possibilities::class;

    public function definition()
    {
        return [
            'image' => 'content/green.png',
        ];
    }
}
