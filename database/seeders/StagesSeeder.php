<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Stages;
use Illuminate\Database\Seeder;
use Str;

class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stages::create([
            'number' => '1',
            'date' => 'март-апрель',
            'stages' => 'стадия'
        ]);
    }
}
