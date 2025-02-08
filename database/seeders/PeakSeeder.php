<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorSeederHelper;
use App\Models\Destination;
use App\Models\Peak;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peak = Peak::create([
            'title' => [
                'en' => 'Lobuche Peak',
                'fr' => 'Pic de Lobuche',
            ],
            'description' => [
                'en' => 'Lobuche Peak is one the best peak in Everest region as it’s best view is seen from the summit. Summit is sourounded by panoramic view including Mt. Everest.
        We approach Lobuche via completing Everest Base Camp and Kalapattar trip which helps you with proper acclimatization and return to Lukla along the famous Khumbu Valley, with its diverse wildlife and vegetation, as well as its rich culture, where villages and rustic dwellings have seemingly scrambled up to perch atop rocky outcrops and vertiginous ledges. A truly memorable experience closely following the footsteps of legendary mountaineers.',
                'fr' => 'Le pic de Lobuche est l\'un des meilleurs sommets de la région de l\'Everest, car sa meilleure vue est visible depuis le sommet. Le sommet est entouré d\'une vue panoramique comprenant le mont Everest.
        Nous approchons de Lobuche en réalisant le voyage au camp de base de l\'Everest et à Kalapattar, ce qui vous aide à une bonne acclimatation et revenons à Lukla le long de la célèbre vallée de Khumbu, avec sa faune et sa végétation diversifiées, ainsi que sa riche culture, où les villages et les habitations rustiques semblent s\'être précipités pour se percher au sommet d\'affleurements rocheux et de corniches vertigineuses. Une expérience vraiment mémorable suivant de près les traces d\'alpinistes légendaires.',
            ],
            'duration' => '17',
            'region_id' => Region::first()->id,
            'grade' => '5',
            'is_featured' => true,
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_peak' => [
                'en' => 'March-May October-November',
                'fr' => 'Mars-Mai Octobre-Novembre',
            ],
            'starting_altitude' => 2640,
            'highest_altitude' => 6119,
            'peak_difficulty' => TrekDifficulty::HARD,
            'costs_include' => [
                [
                    'en' => 'Travel Guides',
                    'fr' => 'Guides de voyage',
                ],
                [
                    'en' => 'Any Pass and Permits',
                    'fr' => 'Pass et permis',
                ],
                [
                    'en' => 'Accomodation',
                    'fr' => 'Hébergement',
                ],
                [
                    'en' => 'Porters',
                    'fr' => 'Porteurs',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'Alcohol/Drugs',
                    'fr' => 'Alcool/Drogues',
                ],
                [
                    'en' => 'Wifi/Charging/Hot Water',
                    'fr' => 'Wifi/Recharge/Eau chaude',
                ],
                [
                    'en' => 'Extra Curricular stuff',
                    'fr' => 'Activités extra-scolaires',
                ],
                [
                    'en' => 'Personal Expenses',
                    'fr' => 'Dépenses personnelles',
                ],
            ],
        ]);

        CuratorSeederHelper::seedBelongsTo(
            $peak,
            'cover_image_id',
            public_path('photos/lobuche.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $peak,
            'feature_image_id',
            public_path('photos/lobuche.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $peak,
            'images',
            public_path('photos/lobuche.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $peak,
            'images',
            public_path('photos/mountain7.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $peak,
            'images',
            public_path('photos/mountain1.jpg')
        );

        $peak->destinations()->sync(
            Destination::inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
    }
}
