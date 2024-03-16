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
            'phone' => '8 (816) 297 42 25',
            'email' => 'dpo@novsu.ru'
        ];
    }
}
