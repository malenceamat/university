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
        $image = $this->faker->image();
        $fileName = "image/" . Str::random(20) . '.png';
        Storage::disk('public')->put($fileName,file_get_contents($image));

        return [
            'image' => $fileName,
        ];

    }
}
