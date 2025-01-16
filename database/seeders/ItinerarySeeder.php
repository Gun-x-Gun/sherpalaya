<?php

namespace Database\Seeders;

use App\Models\Itinerary;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $trekItineraries = [
            [
                'title' => 'Day 1: Arrival'
            ],
            [
                'title' => 'Day 2: Kathmandu'
            ],
            [
                'title' => 'Day 3: Pokhara'
            ],
            [
                'title' => 'Day 4: Departure'
            ]
        ];

        $this->createItineraries(
            Trek::first(),
            $trekItineraries
        );
    }

    protected function createItineraries(Model $model, $itineraries)
    {
        $model->itineraries()->createMany($itineraries);
    }
}
