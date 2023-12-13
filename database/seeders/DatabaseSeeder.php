<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BannerSeeder::class,
            AdminSeeder::class,
            AudiencesSeeder::class,
            AdditionalSeeder::class,
            CardsSeeder::class,
            ContactsSeeder::class,
            PartnersSeeder::class,
            PossibilitiesSeeder::class,
            ResultSeeder::class,
            SelectionsSeeder::class,
            StagesSeeder::class,
            StatisticsSeeder::class,
            TeamsSeeder::class,
            ZagolovokSeeder::class
        ]);
    }
}
