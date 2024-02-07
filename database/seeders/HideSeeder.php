<?php

namespace Database\Seeders;

use App\Models\BlockHide;
use Illuminate\Database\Seeder;

class HideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlockHide::create([
            'banner_hide' => 'true',
            'partners_hide' => 'true',
            'about_us_hide' => 'true',
            'advantagesh' => 'true',
            'gives_hide' => 'true',
            'stages_hide' => 'true',
            'programs_hide' => 'true',
            'faqs_hide' => 'true',
            'contact_hide' => 'true',
            'teacher_hide' => 'true'
        ]);
    }
}
