<?php

namespace Database\Seeders;

use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trek::factory()
            ->count(5) // Generate 5 treks
            ->hasItineraries(3) // Each trek will have 3 itineraries
            ->create();
    }
}
