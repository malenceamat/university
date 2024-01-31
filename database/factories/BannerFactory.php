<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Str;


class BannerFactory extends Factory
{


    protected $model = Banner::class;


    public function definition()
    {
        $image = $this->faker->image();
        $fileName = "image/" . Str::random(20) . '.png';
        Storage::disk('public')->put($fileName,file_get_contents($image));

        return [
            'image' => $fileName,
            'button' => $this->faker->text(10),
            'emailbutton' => $this->faker->unique()->safeEmail(),
            'colortext' => $this->faker->text(10),
            'text' => $this->faker->text(10),
            'smalltext' => $this->faker->text(5),
            'bigtext' => $this->faker->text(5),
            'secondbutton' => $this->faker->text(5),
            'urlsecondbutton' => $this->faker->url(),
            'hideblock' => 'on'
        ];

    }

}

