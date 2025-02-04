<?php

namespace Database\Seeders;

use App\Helpers\CuratorSeederHelper;
use App\Models\Expedition;
use App\Models\OurSherpa;
use App\Models\Peak;
use App\Models\Tour;
use App\Models\Trek;
use Illuminate\Database\Seeder;

class OurSherpasSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch related models
        $expedition = Expedition::first();
        $peak = Peak::first();
        $treks = Trek::limit(2)->get();
        $tours = Tour::limit(4)->get();

        // Ensure related models exist
        if (!$expedition || !$peak || $treks->count() < 2 || $tours->count() < 4) {
            return;
        }

        // Define two sherpas manually
        $sherpas = [
            [
                'name' => 'Tenzing Norgay',
                'title' => 'Legendary Mountaineer',
                'description' => 'One of the first climbers to reach the summit of Mount Everest.',
            ],
            [
                'name' => 'Kami Rita Sherpa',
                'title' => 'Everest Record Holder',
                'description' => 'Holds the record for the most Everest summits.',
            ],
        ];

        foreach ($sherpas as $sherpaData) {
            $sherpa = OurSherpa::create($sherpaData);

            CuratorSeederHelper::seedBelongsTo(
                $sherpa,
                'profile_picture_id',
                public_path('photos/Chor.jpg')
            );
            CuratorSeederHelper::seedBelongsToMany(
                $sherpa,
                'awardsAndCertificates',
                public_path('photos/culture.jpg')
            );
            CuratorSeederHelper::seedBelongsToMany(
                $sherpa,
                'awardsAndCertificates',
                public_path('photos/culture2.jpg')
            );
            CuratorSeederHelper::seedBelongsToMany(
                $sherpa,
                'awardsAndCertificates',
                public_path('photos/culture3.jpg')
            );

            // Attach Expedition
            $sherpa->expeditions()->attach($expedition->id, ['order' => 1]);

            // Attach Peak
            $sherpa->peaks()->attach($peak->id, ['order' => 1]);

            // Attach Two Treks
            foreach ($treks as $index => $trek) {
                $sherpa->treks()->attach($trek->id, ['order' => $index + 1]);
            }

            // Attach Four Tours
            foreach ($tours as $index => $tour) {
                $sherpa->tours()->attach($tour->id, ['order' => $index + 1]);
            }
        }
    }
}
