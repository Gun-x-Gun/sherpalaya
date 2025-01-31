<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorSeederHelper;
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
            'title' => 'Everest Base Camp Trek',
            'description' => 'Followed by Real Sherpa’s village everybody wants to see a glimpse of the world’s highest mountain and that’s the reason why the Everest Base Camp Trek is very popular. The trek has a number of stunning attractions, not least of these is being able to say you’ve visited the highest mountain in the world. The trek gets you right into the high-altitude heart of the high Himalaya, more so than any other teahouse trek. There are some lovely villages and gompas (monasteries), and the friendly Sherpa people of the Solukhumbu region make trekking through the area a joy.

Everest Base Camp Trekking is known as the one of the most popular trekking in the world with the most thrilling and unforgettable experience of them all. If you are in search of quality service, Nepal Everest base camp trekking company provides you with quality services, guide and other necessary things which are needed for the trekking. We ensure that you won’t regret your decision for choosing us

The best season for this trip starts from beginning of March to May and  September to October is also favorable for the trek. During the trek, you can easily find food(local and continental), comfortable lodges. Hot shower is also available for some extra charge. Supplies are shipped to the Base Camp by guides or porters, and with the help of animals, usually yaks, mules and Jyopkyos.
',
            'duration' => '10',
            'grade' => '7',
            'starting_point' => 'Lukla',
            'ending_point' => 'Kathmandu',
            'best_time_for_trek' => 'Autumn (Sep-Oct-Nov) and Spring        (March-April-May)',
            'starting_altitude' => 2610,
            'highest_altitude' => 5545,
            'region_id' => Region::first()->id,
            'trek_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                'Transfer from airport to your hotel during both arrival and departure.',
                'Stay three nights in Kathmandu with a BB plan.',
                'Go sightseeing around Kathmandu on a private vehicle.',
                'All entrance fees during Kathmandu Day Tour.',
                'Ground 4x4 luxury transportation through the private vehicle as referred to in the itinerary.',
                'All mandatory permit fees, including entry permit, national park permit, and restricted area permit.',
                'Accommodation in tea houses or lodges during the trekking.',
                'Three-course meals (breakfast, lunch, and dinner) during the trekking period.',
                'A skillful trekking guide with excellent communication skills.',
                'Two porters for three trekkers during the trekking.',
                'Insurance for the guide and porters.',
                'Farewell dinner at Kathmandu.',
                'All applicable VAT, Tax, and needed paperwork.',
            ],
            'costs_exclude' => [
                'Dinner and lunch in Kathmandu except for the farewell dinner.',
                'Your personal expenses for mineral water, soft beverages, confectionaries, laundries, phone calls, hot drinking water, bar bills, showers, etc.',
                'Internet facility, battery chargers, multi-plugs, etc.',
                'Personal trekking equipment.',
                'Your travel insurance that covers Helicopter evacuation.',
                'Medical expenses and trip cancellation.',
                'Any other extended trips and accommodation.',
                'Tips for the guide, porters, and driver as a token of appreciation.',
                'Any other expenses or charges that are not mentioned in the "costs include" list.',
                'Nepal arrival visa.',
            ],
            'is_featured' => true,
        ]);

        $mountain5  = CuratorSeederHelper::seedBelongsToMany(
            $trek,
            'images',
            public_path('photos/mountain5.jpg')
        );

        $mountain6  = CuratorSeederHelper::seedBelongsTo(
            $trek,
            'cover_image_id',
            public_path('photos/mountain6.jpg')
        );
        $mountain7  = CuratorSeederHelper::seedBelongsTo(
            $trek,
            'feature_image_id',
            public_path('photos/mountain7.jpg')
        );

        
        
        

        $trek2 = Trek::create([
            'title' => 'Annapurna Base Camp Trek',
            'description' => 'The Annapurna Base Camp (ABC) Trek is one of the most popular trekking routes in Nepal, offering breathtaking views of the Annapurna massif and other Himalayan peaks.',
            'duration' => '7', // Assuming duration
            'grade' => '6', // Moderate to Challenging
            'starting_point' => 'Nayapul',
            'ending_point' => 'Nayapul',
            'best_time_for_trek' => 'Spring (March-May) and Autumn (September-November)',
            'starting_altitude' => 1070,
            'highest_altitude' => 4130,
            'region_id' => 3,
            'trek_difficulty' => TrekDifficulty::MODERATE,
            'costs_include' => [
                'Transfer from airport to your hotel during both arrival and departure.',
                'Stay two nights in Kathmandu and two nights in Pokhara with a BB plan.',
                'Go sightseeing around Kathmandu on a private vehicle.',
                'All entrance fees during Kathmandu and Pokhara Day Tours.',
                'Ground 4x4 luxury transportation through the private vehicle as referred to in the itinerary.',
                'All mandatory permit fees, including TIMS card and Annapurna Conservation Area Permit.',
                'Accommodation in tea houses or lodges during the trekking.',
                'Three-course meals (breakfast, lunch, and dinner) during the trekking period.',
                'A skillful trekking guide with excellent communication skills.',
                'Two porters for three trekkers during the trekking.',
                'Insurance for the guide and porters.',
                'Farewell dinner at Kathmandu.',
                'All applicable VAT, Tax, and needed paperwork.',
            ],
            'costs_exclude' => [
                'Dinner and lunch in Kathmandu and Pokhara except for the farewell dinner.',
                'Your personal expenses for mineral water, soft beverages, confectionaries, laundries, phone calls, hot drinking water, bar bills, showers, etc.',
                'Internet facility, battery chargers, multi-plugs, etc.',
                'Personal trekking equipment.',
                'Your travel insurance that covers Helicopter evacuation.',
                'Medical expenses and trip cancellation.',
                'Any other extended trips and accommodation.',
                'Tips for the guide, porters, and driver as a token of appreciation.',
                'Any other expenses or charges that are not mentioned in the "costs include" list.',
                'Nepal arrival visa.',
            ],
            'is_featured' => true,
        ]);

        $trek->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        $trek2->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek2,
            'cover_image_id',
            $mountain7
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek2,
            'feature_image_id',
            $mountain6
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain1.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain4.jpg')
        );
    }
}
