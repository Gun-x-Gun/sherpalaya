<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Models\Destination;
use App\Models\Peak;
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
            'title' => 'Lobuche Peak',
        'description' => 'Lobuche Peak is one the best peak in Everest region as it’s best view is seen from the summit. Summit is sourounded by panoramic view including Mt. Everest.
We approach Lobuche via completing Everest Base Camp and Kalapattar trip which helps you with proper acclimatization and return to Lukla along the famous Khumbu Valley, with its diverse wildlife and vegetation, as well as its rich culture, where villages and rustic dwellings have seemingly scrambled up to perch atop rocky outcrops and vertiginous ledges. A truly memorable experience closely following the footsteps of legendary mountaineers.',
        'duration' => '17',
        'grade' => '5',
        'is_featured' => false,
        'starting_ending_point' => 'Kathmandu',
        'best_time_for_peak' => 'March-May October-November',
        'starting_altitude' => '2640',
        'highest_altitude' => '6119',
        'peak_difficulty' => TrekDifficulty::HARD,
        'key_highlights' => [
                'Breathtaking Views',
                'High Altitude',
                'Remote',
                'Challenging'
            ],
            'costs_include' => [
                'Travel Guides',
                'Any Pass and Permits',
                'Accomodation',
                'Porters',
            ],
            'costs_exclude' => [
                'Alcohol/Drugs',
                'Wifi/Charging/Hot Water',
                'Extra Curricular stuff',
                'Personal Expenses'
            ],
            'essential_tips' => [
                'Pack Your Gear',
                'Take Some food',
                'Grab Some money',
                'Prepare by walking regularly',
            ],
        ]);

        $peak->destinations()->sync(
            Destination::inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
    }
}
