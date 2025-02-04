<?php

namespace Database\Seeders;

use App\Helpers\CuratorSeederHelper;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        CuratorSeederHelper::clearStorage();

        $this->call([
            // KeyPointSeeder::class,
            ShieldSeeder::class,
            UserSeeder::class,
            RegionSeeder::class,
            DestinationSeeder::class,
            ExpeditionSeeder::class,
            PeakSeeder::class,
            TrekSeeder::class,
            TourSeeder::class,
            ItinerarySeeder::class,
            ServiceSeeder::class,
            ContactUsSeeder::class,
            InquirySeeder::class,
            FaqSeeder::class,
            WebsiteSettingSeeder::class,
            KeyHighlightSeeder::class,
            EssentialTipsSeeder::class,
            ReviewSeeder::class,
            OurSherpasSeeder::class,
        ]);
    }
}
