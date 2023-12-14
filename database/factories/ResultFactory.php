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
        $image = $this->faker->image();
        $fileName = "image/" . Str::random(20) . '.png';
        Storage::disk('public')->put($fileName,file_get_contents($image));

        return [
            'image' => $fileName,
            'head' => $this->faker->text(10),
            'subtext' => $this->faker->text(10),
            'text' => $this->faker->text(10)
        ];

    }
}
