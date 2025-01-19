<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Models\Destination;
use App\Models\Region;
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
        $trek = Trek::create([
            'title' => 'Everest Base Camp Trekking',
            'description' => 'Followed by Real Sherpa’s village everybody wants to see a glimpse of the world’s highest mountain and that’s the reason why the Everest Base Camp Trek is very popular. The trek has a number of stunning attractions, not least of these is being able to say you’ve visited the highest mountain in the world. The trek gets you right into the high-altitude heart of the high Himalaya, more so than any other teahouse trek. There are some lovely villages and gompas (monasteries), and the friendly Sherpa people of the Solukhumbu region make trekking through the area a joy.

Everest Base Camp Trekking is known as the one of the most popular trekking in the world with the most thrilling and unforgettable experience of them all. If you are in search of quality service, Nepal Everest base camp trekking company provides you with quality services, guide and other necessary things which are needed for the trekking. We ensure that you won’t regret your decision for choosing us

The best season for this trip starts from beginning of March to May and  September to October is also favorable for the trek. During the trek, you can easily find food(local and continental), comfortable lodges. Hot shower is also available for some extra charge. Supplies are shipped to the Base Camp by guides or porters, and with the help of animals, usually yaks, mules and Jyopkyos.
',
            'duration' => '10',
            'grade' => '7',
            'starting_ending_point' => 'Lukla',
            'best_time_for_trek' => 'Autumn (Sep-Oct-Nov) and Spring        (March-April-May)',
            'starting_altitude' => 2610,
            'highest_altitude' => 5545,
            'region_id' => Region::first()->id,
            'trek_difficulty' => TrekDifficulty::CHALLENGING,
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
            'is_featured' => false,
        ]);

        $trek->destinations()->sync(
            Destination::inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );

    }
}
