<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\BlockHide;
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
            SelectionsSeeder::class,
            StagesSeeder::class,
            TeamsSeeder::class,
            StatisticsSeeder::class,
            ZagolovokSeeder::class,
            TextInCardsSeeder::class,
            HideSeeder::class
        ]);
    }
}
