<?php

namespace Database\Factories;

use App\Models\Additional;
use App\Models\partner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class partnerFactory extends Factory
{
    protected $model = partner::class;

    public function definition()
    {
        $image = $this->faker->image();
        $fileName = "image/" . Str::random(20) . '.png';
        Storage::disk('public')->put($fileName,file_get_contents($image));

        return [
            'image' => $fileName
        ];

    }
}
