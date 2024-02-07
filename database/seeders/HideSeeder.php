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
            'banner_hide' => 'on',
            'partners_hide' => '0',
            'about_us_hide' => 'on',
            'advantagesh' => 'on',
            'gives_hide' => 'on',
            'stages_hide' => 'on',
            'programs_hide' => 'on',
            'faqs_hide' => 'on',
            'contact_hide' => 'on',
            'teacher_hide' => 'on'
        ]);
    }
}
