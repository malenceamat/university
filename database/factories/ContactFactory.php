<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Str;

class ContactFactory extends Factory
{
    protected $model = Contact::class;


    public function definition()
    {
        $image = $this->faker->image();
        $fileName = "image/" . Str::random(20) . '.png';
        Storage::disk('public')->put($fileName,file_get_contents($image));

        return [
            'image' => $fileName,
            'text' => $this->faker->text(10),
            'email' => $this->faker->unique()->safeEmail(),
            'button' => $this->faker->text(10),
            'buttontext' => $this->faker->text(10)
        ];

    }
}
