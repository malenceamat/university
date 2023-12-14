<?php

namespace Database\Factories;

use App\Models\Additional;
use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Str;

class CardFactory extends Factory
{

    protected $model = Card::class;


    public function definition()
    {
        $image = $this->faker->image();
        $fileName = "image/" . Str::random(20) . '.png';
        Storage::disk('public')->put($fileName,file_get_contents($image));

        return [
            'image' => $fileName,
            'head' => $this->faker->text(10),
            'underhead' => $this->faker->text(10),
            'basic' => $this->faker->text(10),
            'qualification' => $this->faker->text(5),
            'more' => $this->faker->text(5)
        ];

    }
}
