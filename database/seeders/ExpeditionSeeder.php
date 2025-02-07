<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorSeederHelper;
use App\Models\Destination;
use App\Models\Expedition;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpeditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expedition = Expedition::create([
            'title' => 'Everest Expedition',
            'description' => 'Climbing Mount Everest known as the ultimate mountaineering achievement in mountaineering society. The mountain is targeted to summit attempts every year. Everest can be climbed both from the southern side in Nepal and the northern side Tibet. After the Cultural Revolution in the 1950s, China closed Tibetan borders to outsiders, and Nepal began welcoming foreigners to the Everest region. Since then, the southern approach to the mountain via Khumbu Valley has become popular among climbers.
Everest has fascinated mountaineers all over the world since European climbers discovered Everest when Tibet was opened to outsiders in the 1920s. Mount Everest was first summited in 1953 by Tenzing Norgay Sherpa and Sir Edmund Hillary via the South Col.
While climbing Mt. Everest is the opportunity of a lifetime, expeditions encounter many obstacles including high altitude, harsh weather conditions, and sheer exhaustion. Snow Leopard Trek strives to conduct the best expedition by putting high importance and priority on the safety aspects of the climb. We believe that our planning, logistics, staffing and experience coupled with your enthusiasm, patience, and perseverance would help you achieve your lifetime dream.
',
            'duration' => '72',
            'region_id' => Region::first()->id,
            'grade' => '9',
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => 'Autumn (Sep-Oct-Nov) and Spring        (March-April-May)',
            'starting_altitude' => 2610,
            'highest_altitude' => 8848,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING,
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
            'is_featured' => true,
        ]);

        $expedition->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $expedition,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $expedition,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain5.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain1.jpg')
        );

        $kanchenjunga_expedition_data = Expedition::create([
            'title' => 'Kanchenjunga Expedition',
            'description' => 'Towering 8,568m above sea-level, Kanchenjunga is more than just the world’s third-highest mountain. Its five peaks are shrouded in myth, considered so sacred that the first men to climb it, a British party from 1955, stopped short of the actual summit in deference to the deities of the mountain. Today, it represents one of the toughest of all the 8000ers and a must for any serious mountaineer’s bucket list.  A challenge for those who have scaled Everest, Kanchenjunga, which translates as “The Five Treasures of Snow” boasts no fewer than five peaks, four of which sit above 8,450m. Lying on the border between Nepal and India’s Sikkim state, it is not only one of the tallest mountains in the world, but also one of the most dangerous. Very few tourists venture into this area of the Himalayas, and even fewer attempt the peak - there are usually only around 25 successful summits a season. This remoteness is one of Kanchenjunga’s great appeals for serious climbers, but it also adds an element of risk. With a high percentage of avalanche and weather hazards, deciding who you climb with perhaps matters more here than anywhere else. Elite Exped’s guiding team - handpicked by our leaders Nimsdai and Mingma David Sherpa - have clocked up multiple ascents of Kanchenjunga. Several of our team - including Nim and Mingma David - have also been involved in high-profile, successful rescues above 8,000m. Simply put, you could not be in better hands when attempting this most tricky of mountains. Our tailored 51-day expedition plan includes plenty of rest and acclimatization days, plus an extensive climbing window. Because we always look after all our logistics and expedition planning - rather than relying on third party providers - we’re adept at all the setup processes and rope-rigging required to scale a more remote peak like Kanchenjunga. Not only that, our team’s Nepalese heritage - and ability to straddle the divide between Western and Himalayan climbing cultures, means we can be sure that every aspect of your expedition will run like clockwork, offering you the best possible opportunity to reach this majestic mountain. From the moment you sign up, to the summit, and safely back home again, Elite Exped’s expert team will be with you, every step of the way. At Elite Exped, we extensively vet our hotel, travel and accommodation partners, and operate using the very best mountaineering equipment available, to ensure the highest standards of safety possible. ',
            'duration' => '51',
            'region_id' => Region::find(5)->id, // Make sure your regions table is seeded correctly
            'grade' => '9',
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => 'Spring & Summer', // Corrected Season information
            'starting_altitude' => 1400, // Kathmandu
            'highest_altitude' => 8586,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or appropriate enum value
            'costs_include' => [
                'Arrival & Departure: Pick and drop facility-Airport/Hotel/Airport',
                'Accommodation: 4 nights stay at a deluxe hotel in Kathmandu on Bed & Breakfast Basis-Double Room',
                'Welcome dinner: One Welcome Dinner in tourist standard restaurant in Kathmandu with Office’s Staffs',
                'Domestic Transportation: Kathmandu-Bhadrapur-Kathmandu by flight inclusive of domestic Airport Tax',
                'Transportation: Required Transportation from Kathmandu/Base Camp/Kathmandu for all Staffs and Members',
                'Permits & Fees: Kanchenjunga Expedition Permit +Summit Route Permit Ice Fall Route, National park & TIMS permit fees',
                'Food & Lodging: 3 meals a day in Trekking & at Basecamp for Members & Staffs',
                'Base Camp Staffs: Basecamp Cook & kitchen assistant',
                'Porters: Porters up to & back from BC',
                'Insurance: All Staff\'s Medical & Emergency rescue Insurance',
                'Warm Farewell Dinner at a standard restaurant in Kathmandu with Nepalese Staff',
            ],
            'costs_exclude' => [
                'International airfare to and from Kathmandu.',
                'Nepalese Visa charges',
                'Extra night in Kathmandu: Extra night accommodation in Kathmandu. In case of early arrival or late departure, early return from the expedition (due to any reason) than the scheduled itinerary.',
                'Insurance: Travel and High Altitude Insurance / Accident / Medical / emergency evacuation',
                'Sherpa summit Bonus: Mandatory – Minimum USD 1,500',
                'Tips: Please calculate some tips for Basecamp staffs and porters',
                'The full set of Member\'s personal climbing equipment & clothing',
                'Rescue Evacuation: Emergency rescue evacuation cost, if needed, and all other expenses of personal nature',
                'Any other item not listed in the "Price Includes" section',
            ],
            'is_featured' => true,
        ]);
        $kanchenjunga_expedition_data->destinations()->sync(
            Destination::where('region_id', 5)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $kanchenjunga_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $kanchenjunga_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount2.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain5.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain1.jpg')
        );


        $lhotse_exped = Expedition::create([
            'title' => 'Lhotse Expedition',
            'description' => 'Lhotse, the fourth highest mountain in the world, stands tall at 8,516 meters (27,940 ft).  It is connected to Everest via the South Col and is often climbed in conjunction with an Everest expedition. Lhotse presents a significant challenge to mountaineers, requiring technical climbing skills, high-altitude experience, and exceptional physical fitness.  The climb involves navigating steep ice faces, crevasses, and challenging weather conditions.  Success on Lhotse rewards climbers with breathtaking views of Everest, Ama Dablam, and the surrounding Himalayan peaks. The expedition typically follows the same route as Everest Base Camp trek up to a certain point, then branches off towards Lhotse.  Climbers must be well-acclimatized before attempting the summit push.  The climbing season for Lhotse generally coincides with the Everest climbing season (spring and autumn).',
            'duration' => '52',
            'region_id' => Region::find(1)->id,
            'grade' => '9',
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => 'Spring (March-May) and Autumn (September-November)',
            'starting_altitude' => 1400,
            'highest_altitude' => 8516,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                'Arrival & Departure: Pick and drop facility-Airport/Hotel/Airport',
                'Accommodation: 4 nights stay at a deluxe hotel in Kathmandu on Bed & Breakfast Basis-Double Room',
                'Welcome dinner: One Welcome Dinner in tourist standard restaurant in Kathmandu with Office’s Staffs',
                'Domestic Transportation: Kathmandu-Bhadrapur-Kathmandu by flight inclusive of domestic Airport Tax', // Corrected: Bhadrapur -> Lukla
                'Transportation: Required Transportation from Kathmandu/Base Camp/Kathmandu for all Staffs and Members',
                'Permits & Fees: Kanchenjunga Expedition Permit +Summit Route Permit Ice Fall Route, National park & TIMS permit fees', // Corrected: Kanchenjunga -> Lhotse
                'Food & Lodging: 3 meals a day in Trekking & at Basecamp for Members & Staffs',
                'Base Camp Staffs: Basecamp Cook & kitchen assistant',
                'Porters: Porters up to & back from BC',
                'Insurance: All Staff\'s Medical & Emergency rescue Insurance',
                'Warm Farewell Dinner at a standard restaurant in Kathmandu with Nepalese Staff',
            ],
            'costs_exclude' => [
                'International airfare to and from Kathmandu.',
                'Nepalese Visa charges',
                'Extra night in Kathmandu: Extra night accommodation in Kathmandu. In case of early arrival or late departure, early return from the expedition (due to any reason) than the scheduled itinerary.',
                'Insurance: Travel and High Altitude Insurance / Accident / Medical / emergency evacuation',
                'Sherpa summit Bonus: Mandatory – Minimum USD 1,500',
                'Tips: Please calculate some tips for Basecamp staffs and porters',
                'The full set of Member\'s personal climbing equipment & clothing',
                'Rescue Evacuation: Emergency rescue evacuation cost, if needed, and all other expenses of personal nature',
                'Any other item not listed in the "Price Includes" section',
            ],
            'is_featured' => true,
        ]);

        $lhotse_exped->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $lhotse_exped,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $lhotse_exped,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain5.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain1.jpg')
        );
    }
}
