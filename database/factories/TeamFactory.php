<?php

namespace Database\Factories;

use App\Models\Banner;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Str;

class TeamFactory extends Factory
{

    protected $model = Team::class;


    public function definition()
    {
        return [
            'image' => 'content/green.png',
        ];
    }
}
