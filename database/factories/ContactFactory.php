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
        return [
            'image' => 'content/gradient.png',
            'text' => 'Электронная почта для справок',
            'email' => $this->faker->unique()->safeEmail(),
            'button' => 'https://www.google.ru/',
            'buttontext' => 'Подать заявку'
        ];
    }
}
