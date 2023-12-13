<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Str;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'text' => Str::random(5),
            'email' => Str::random(6).'@gmail.com',
            'buttontext' => Str::random(10),
            'button' => Str::random(10)
        ]);
    }
}
