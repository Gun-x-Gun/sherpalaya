<?php

namespace Database\Seeders;

use App\Enums\ItineraryTypes;
use App\Models\Destination;
use App\Models\Expedition;
use App\Models\Itinerary;
use App\Models\Peak;
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
                'title' => 'Day 01: Lukla and trek to Phakding',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "You’ll take an early flight from the domestic terminal of International Airport, Kathmandu to Lukla. The entire flying time will keep you engaged with awesome views of breathtaking mountains.",
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "After landing in Lukla and taking a short rest, you’ll head towards Phakding by following the Dudh Koshi river and crossing a suspension bridge. On the trail, you’ll see chorten, mani stones, and prayer flags.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "You’ll spend the night in Phakding.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,610 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "3 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 02: Phakding to Namche Bazaar',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "After a hot breakfast, head toward Namche Bazaar, one of the largest rest areas. The trail involves high climbs, steep steps, stunning forests, and crossing rivers via swaying suspension bridges.",
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA,
                        'description' => "After reaching Namche Bazaar, enjoy the breathtaking sight of golden mountains at sunset.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "You’ll spend the night in Namche Bazaar.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,445 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 03: Acclimatization Day in Namche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Take a short trip to Khumjung Village and Syangboche (world’s highest airport) and return to Namche Bazaar.",
                    ],
                ],
            ],
            [
                'title' => 'Day 04: Namche Bazaar to Tengboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Start the day early at 7 am. The trail takes you through narrow paths with amazing views of Mt. Everest, Mt. Amadablam, Mt. Tabuchi, and Mt. Thamserku.",
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA,
                        'description' => "Visit the hilltop village of Tengboche, home to the largest monastery in the Khumbu region, Tengboche Monastery.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,860 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 05: Trek to Dingboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Begin with a descent through rhododendron forests followed by gradual steep climbs. Pass mani stones, Pangboche, Shomare, and Orsho to reach Dingboche.",
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA,
                        'description' => "Dingboche is a summer settlement for yak grazing with amazing views of Lhotse, Amadablam, and Taboche.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,360 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 06: Acclimatization Day in Dingboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Take a short trip to Chukung Village, a stop on the way to the famous Island Peak.",
                    ],
                ],
            ],
            [
                'title' => 'Day 07: Trek to Lobuche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "The trail leads through grasslands, crosses a suspension bridge at Thukla, and ascends to Lobuche Pass.",
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA,
                        'description' => "Lobuche offers breathtaking views and has a high-altitude research center.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,930 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 08: Trek to Gorak Shep and Everest Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Reach Gorak Shep with stunning views of the Khumbu Glacier and surrounding mountains. After some rest, head to Everest Base Camp.",
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA,
                        'description' => "Enjoy spectacular views of Everest, Nuptse, Pumori, and other peaks.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "5,346 m (EBC) and 5,160 m (Gorak Shep)",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 09: Trek to Kala Patthar and back to Pheriche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Hike to Kala Patthar early in the morning for 360-degree panoramic mountain views, then descend to Pheriche.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "5,545 m (Kala Patthar) and 4,280 m (Pheriche)",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Trek to Namche Bazaar',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend to Namche Bazaar, passing through rhododendron and pine forests, suspension bridges, mani stones, chortens, and stupas.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,445 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 11: Trek back to Lukla',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek back to the small airstrip at Lukla, passing Dudh Koshi River and celebrating your achievement.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,860 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "8 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 12: Fly to Kathmandu from Lukla',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Take a beautiful flight back to Kathmandu, saying goodbye to the majestic mountains.",
                    ],
                ],
            ],
        ];
        $annapurnaItineraries = [
            [
                'title' => 'Day 1: Arrival in Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Arrive at Tribhuvan International Airport, transfer to your hotel. Rest and acclimatize to the altitude, prepare gears, and obtain necessary permits.",
                    ],
                ],
            ],
            [
                'title' => 'Day 2: Fly to Pokhara and Drive to Nayapul',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Take an early morning flight from Kathmandu to Pokhara, offering breathtaking views of the Annapurna and Dhaulagiri ranges.",
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Drive to Nayapul and begin trekking to Tikhedhunga (1540m), passing terraced fields and rhododendron forests.",
                    ],
                ],
            ],
            [
                'title' => 'Day 3: Trek to Ghorepani',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek to Ghorepani (2850m) via Ulleri and Banthanti. Enjoy panoramic views of Machhapuchhre (Fishtail Peak) and Annapurna South.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,850 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 4: Hike to Poon Hill and Trek to Tadapani',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Hike early morning to Poon Hill (3210m) to witness breathtaking sunrise views over the Annapurna and Dhaulagiri ranges. Then descend to Ghorepani and trek to Tadapani (2630m).",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,210 m (Poon Hill) and 2,630 m (Tadapani)",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 5: Trek to Chhomrong',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek to Chhomrong (2170m), passing through rhododendron forests and Gurung villages. Immerse yourself in the local culture and enjoy stunning mountain views.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,170 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 6: Trek to Himalaya',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend through rhododendron forests, cross suspension bridges, and ascend gradually to Himalaya (2600m).",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,600 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 7: Trek to Annapurna Base Camp via Machhapuchhre Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Ascend to Machhapuchhre Base Camp (3700m), offering panoramic views of the Annapurna range, and then to Annapurna Base Camp (4130m), the highlight of the trek.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,130 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 8: Trek to Bamboo',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend to Bamboo (2310m), retracing your route through rhododendron forests and terraced fields.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,310 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 9: Trek to Jhinu Danda and Drive to Pokhara',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek to Jhinu Danda (1940m), known for its hot springs. Relax and rejuvenate before driving back to Pokhara.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,940 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Drive or Fly Back to Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Fly back to Kathmandu, bidding farewell to the mountains. Alternatively, take a scenic drive back to the capital.",
                    ],
                ],
            ],
            [
                'title' => 'Day 11: Departure',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Transfer to Tribhuvan International Airport for your departure flight.",
                    ],
                ],
            ],
        ];

        $peakItineraries = [
            [
                'title' => 'Day 01: Arrival in Kathmandu Airport and Hotel transfer',
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "You will land at Kathmandu airport, and a team from Exciting Nepal will pick you up for a quick and hassle-free hotel transfer. You’ll rest at the hotel after a long flight.",
                    ],
                ],
            ],
            [
                'title' => 'Day 02: Arrangement Day',
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "This day is dedicated to preparation for the expedition. You'll meet your guide, attend a briefing, and shop for necessary climbing gear.",
                    ],
                ],
            ],
            [
                'title' => 'Day 03: Fly to Lukla and trek to Phakding',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "40 minutes to Lukla with breathtaking mountain views.",
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "The trek to Phakding follows the Dudh Koshi River, passing settlements, mani walls, and rhododendron forests.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,640 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "3 to 4 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 04: Trek from Phakding to Namche Bazaar',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "The trail to Namche Bazaar passes through suspension bridges, Sherpa settlements, and the entrance to Sagarmatha National Park.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,446 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 05: Acclimatization in Namche Bazaar',
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Hike to Everest View Hotel (3,880 m) with stunning views of Mt. Everest, then return to Namche Bazaar.",
                    ],
                ],
            ],
            [
                'title' => 'Day 06: Trek from Namche Bazaar to Tengboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend from Namche to Phunki Tenga, then ascend to Tengboche Monastery with views of Everest and Ama Dablam.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,800 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 07: Trek from Tengboche to Dingboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Pass through rhododendron forests, cross Imja Khola, and ascend to Dingboche through the Imja Valley.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,347 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 08: Trek from Dingboche to Lobuche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Climb past Duglha and Chuki Lahara, then walk over Khumbu Glacier moraines to reach Lobuche.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,900 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 09: Trek to Kala Patthar via Gorakshep and trace back to Gorakshep',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Hike to Kala Patthar (5,545 m) via Gorakshep for a panoramic view of Everest and nearby peaks, then return to Gorakshep.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "5,545 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 to 7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Trek to Lobuche Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Climb a steep and rough trail from Gorakshep to Lobuche Base Camp. Enjoy glacier views en route.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,900 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 11: Trek to Lobuche High Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Ascend steep and rough trails to reach Lobuche High Camp, where your guide will provide climbing tips.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "5,300 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "3 to 4 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 12: Summit Day',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Climb the southern ridge of Lobuche Peak using technical climbing gear. Enjoy panoramic views of the Everest region from the summit.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "6,119 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "8 to 10 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 13: Trek to Pheriche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend from Lobuche High Camp through rugged trails to Pheriche, a Sherpa settlement surrounded by rocky hills.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,200 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 14: Trek back to Tengboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend along Imja Khola through Pangboche village and rhododendron forests to reach Tengboche.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,800 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4 to 5 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 15: Trek back to Namche Bazaar',

                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Retrace your steps through familiar trails with views of Everest, Nuptse, and Lhotse.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,446 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 16: Trek back to Lukla',

                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek through suspension bridges and picturesque scenery to reach Lukla, marking the end of your trek.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,800 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 to 7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 17: Fly back to Kathmandu and to the Hotel via Hotel transfer',

                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "40-minute scenic flight back to Kathmandu.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
        ];
        $expeditionItineraries = [
            [
                'title' => 'Day 01: Arrival in Kathmandu & transfer to hotel',
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Arrive at Kathmandu airport and meet the expedition team. Transfer to the hotel for check-in and rest. Spend the evening meeting the guides and going over the itinerary for the expedition.",
                    ],
                ],
            ],
            [
                'title' => 'Day 02-03: At leisure in Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Spend the day exploring the vibrant streets of Kathmandu, visiting historical and cultural landmarks such as Swayambhunath (Monkey Temple) and Durbar Square. Use this time to prepare and shop for essential gear for the climb.",
                    ],
                ],
            ],
            [
                'title' => 'Day 04: Fly to Lukla & Trek to Phakding',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Take an early morning 40-minute flight from Kathmandu to Lukla, enjoying scenic views of the Himalayas.",
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek from Lukla to Phakding along the Dudh Koshi River, passing suspension bridges and small villages.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,640 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "3 to 4 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 05: Trek to Namche Bazaar',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "The trail to Namche Bazaar passes through Sagarmatha National Park, suspension bridges, and pine forests. Along the way, enjoy your first glimpses of Mt. Everest and other peaks.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,445 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 06: At leisure in Namche Bazaar',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Explore the vibrant Sherpa town of Namche Bazaar. Visit the Everest View Hotel for stunning views of Mt. Everest, and acclimatize to the high altitude.",
                    ],
                ],
            ],
            [
                'title' => 'Day 07: Trek to Thyangboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend to Phunki Tenga before climbing up to Thyangboche Monastery, one of the most significant spiritual centers in the region. Enjoy panoramic views of Everest, Ama Dablam, and other peaks.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,860 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 08: Trek to Dingboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Follow the trail through rhododendron forests and cross the Imja Khola to reach the Imja Valley and Dingboche. This village offers incredible views of the Lhotse and Nuptse peaks.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,410 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 09-13: Acclimatization',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Spend several days acclimatizing to the high altitude. Take short hikes to nearby ridges, enjoy the view of the Khumbu Glacier, and prepare for the next stage of the expedition.",
                    ],
                ],
            ],
            [
                'title' => 'Day 14: Trek to Lobuje',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek past Duglha and ascend to the memorial site for climbers before reaching Lobuje, with views of the Khumbu Glacier.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,940 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 to 6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 15: Trek to Everest Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek from Lobuje to Gorakshep, then follow the trail to Everest Base Camp with views of towering icefalls and the Khumbu Glacier.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "5,364 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "7 to 8 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 16-18: Rest and preparation',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Rest and prepare for the climb. Review climbing routes and ensure gear is in order.",
                    ],
                ],
            ],
            [
                'title' => 'Day 19-64: Ascent of Mt Everest',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Climb Mt Everest through established camps, with periodic acclimatization and rest. The summit attempt will depend on weather conditions and team readiness.",
                    ],
                ],
            ],
            [
                'title' => 'Day 65: Withdraw to Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend from higher camps back to Base Camp for recovery and reflection on the summit success.",
                    ],
                ],
            ],
            [
                'title' => 'Day 66-68: Return trek to Namche Bazaar via Dingboche and Thyangboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Retrace your steps back to Namche Bazaar via the same route, enjoying the sights and stopping at familiar landmarks.",
                    ],
                ],
            ],
            [
                'title' => 'Day 69: Trek to Lukla',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Complete the final day of trekking in the Khumbu region, reaching Lukla for an overnight stay.",
                    ],
                ],
            ],
            [
                'title' => 'Day 70: Fly Lukla to Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Fly back to Kathmandu on a scenic 40-minute flight.",
                    ],
                ],
            ],
            [
                'title' => 'Day 71: Shopping and sightseeing in Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Explore Kathmandu's vibrant markets, temples, and cultural landmarks. Buy souvenirs and enjoy a farewell dinner with the expedition team.",
                    ],
                ],
            ],
        ];

        $annapurnaItineraries = [
            [
                'title' => 'Day 1: Arrival in Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Arrive at Tribhuvan International Airport, transfer to your hotel. Rest and acclimatize to the altitude, prepare gears, and obtain necessary permits.",
                    ],
                ],
            ],
            [
                'title' => 'Day 2: Fly to Pokhara and Drive to Nayapul',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Take an early morning flight from Kathmandu to Pokhara, offering breathtaking views of the Annapurna and Dhaulagiri ranges.",
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Drive to Nayapul and begin trekking to Tikhedhunga (1540m), passing terraced fields and rhododendron forests.",
                    ],
                ],
            ],
            [
                'title' => 'Day 3: Trek to Ghorepani',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek to Ghorepani (2850m) via Ulleri and Banthanti. Enjoy panoramic views of Machhapuchhre (Fishtail Peak) and Annapurna South.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,850 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 4: Hike to Poon Hill and Trek to Tadapani',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Hike early morning to Poon Hill (3210m) to witness breathtaking sunrise views over the Annapurna and Dhaulagiri ranges. Then descend to Ghorepani and trek to Tadapani (2630m).",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,210 m (Poon Hill) and 2,630 m (Tadapani)",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 5: Trek to Chhomrong',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek to Chhomrong (2170m), passing through rhododendron forests and Gurung villages. Immerse yourself in the local culture and enjoy stunning mountain views.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,170 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 6: Trek to Himalaya',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend through rhododendron forests, cross suspension bridges, and ascend gradually to Himalaya (2600m).",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,600 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 7: Trek to Annapurna Base Camp via Machhapuchhre Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Ascend to Machhapuchhre Base Camp (3700m), offering panoramic views of the Annapurna range, and then to Annapurna Base Camp (4130m), the highlight of the trek.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,130 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 8: Trek to Bamboo',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend to Bamboo (2310m), retracing your route through rhododendron forests and terraced fields.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,310 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 9: Trek to Jhinu Danda and Drive to Pokhara',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek to Jhinu Danda (1940m), known for its hot springs. Relax and rejuvenate before driving back to Pokhara.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,940 m",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Drive or Fly Back to Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Fly back to Kathmandu, bidding farewell to the mountains. Alternatively, take a scenic drive back to the capital.",
                    ],
                ],
            ],
            [
                'title' => 'Day 11: Departure',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Transfer to Tribhuvan International Airport for your departure flight.",
                    ],
                ],
            ],
        ];

        $manasluItineraries = [
            [
                'title' => 'Day 1: Welcome to Kathmandu and transfer to the hotel',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "We will welcome you at the Kathmandu airport upon landing. We will provide a seamless transfer to the hotel and help with your luggage. Take your time to rest and explore your surroundings. We have not planned anything on this day apart from a welcome dinner in the late evening with our company's core team.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
            [
                'title' => 'Day 2: Full-day sightseeing tour of Swayambhunath Temple, Pashupatinath Temple, Bouddhanath Stupa, and Kathmandu Durbar Square',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "We have divided this day into two parts—some sightseeing and then trek preparation. You will be accompanied by a professional guide who can communicate well in English for sightseeing. You will visit tourist sites like Swayambhunath Temple, Pashupatinath Temple, Bouddhanath Stupa, and Kathmandu Durbar Square.",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "After exploring these monuments, the guide will drop you at your hotel. We will then obtain the restricted area permit. You can spend some time resting and later join the trek briefing. Do any last-minute shopping and pack your duffle bags.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
            [
                'title' => 'Day 3: Drive from Kathmandu to Machha Khola',
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => "The ride from Kathmandu to Machha Khola is long and scenic. For the first few hours, you will follow a pitched highway, which gets bumpy from Arughat onwards. On the way, you will enjoy beautiful views of lush hills, terraces, waterfalls, rivers, and snow-capped mountains.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "890 m/2,965 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Duration: 8-9 hours, Distance: 170 km/105 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 4: Trek from Machha Khola to Jagat',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Leaving Machha Khola, walk following the Budhi Gandaki river within forests. You may get to see butterflies, birds, and langur monkeys on the way. The trekking route is covered with lush vegetation. Passing by Khorla Besi and Tatopani, you will ascend to Doban. Cross a suspension bridge and trek past a landslide area to Yaruphant. From here, the trail climbs to Jagat.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,410 m/4,625 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Distance: 22.2 km/13.7 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 5: Trek from Jagat to Deng',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Jagat onward, you will walk on a flat track and cross a suspension bridge over the Budhi Gandaki River. The trail then leads you to Philim and continues through dense rhododendrons and pine forests to Deng.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,804 m/5,917 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "7 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Distance: 19.9 km/12.3 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 6: Trek from Deng to Namrung',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "From Deng, you will trek to Namrung village. Crossing a suspension bridge, ascend uphill to a settlement called Rana. From here, the trail goes west to the Budhi Gandaki Valley. Pass by dense forests and mani stones. On the way, you will come across Ghap and Prok villages. Further, ascend to Namrung, enjoying stunning views of Shringi Himal.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,630 m/8,626 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Distance: 19.5 km/12.1 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 7: Trek from Namrung to Sama Gaon',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "As you trek from Namrung, the trail gets steep and rocky. Walk up to Lihi village and cross a stream. The trail then takes you to Sho village and continues to Lho village. The view of Simnang Himal along the way is fantastic. From here onwards, pass by bushes and rhododendron groves to Shyala village. Further, trek past terraced fields and landslide debris to Sama Gaun.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,530 m/11,581 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "7-8 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Distance: 24.7 km/15.3 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 8: Acclimatization day - hike to Manaslu Base Camp or Pun Gyen Gompa',
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => "You will spend a rest day in Sama Gaon. You have multiple hiking options, like Pun Gyen Gompa and Manaslu Base Camp. Both hikes are fantastic and offer a jaw-dropping mountain panorama. On the way to Manaslu Base Camp, you will also explore the hidden Birendra Lake. Likewise, on the way to Pun Gyen Gompa, you will come across PunGyen Glacier.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Duration: 4-5 hours",
                    ],
                ],
            ],
            [
                'title' => 'Day 9: Trek from Sama Gaon to Samdo',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "The trail ascends from Sama Gaon to a Tibetan refugee village called Samdo. You will walk up to pastures. The trail is steep. Witness towering Himalayan mountains around you as you go above the treeline. Further, cross a small wooden bridge and trek past Kani, a small settlement. From here, you will walk to Samdo, which offers a beautiful view of Mt. Manaslu, Ngadi Chuli, and Simnang Himal.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,875 m/12,713 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "3-4 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Distance: 8.2 km/5 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Trek from Samdo to Larke Phedi (Dharamsala)',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "From Samdo, you will hike to Larke Phedi. The trail goes along barren hills, offering mesmerizing snow-capped mountain views. You will trek following the Larke River and ascend to Larke Glacier. The final stretch of the way goes around the Salkha Khola Valley and uphill to Larke Phedi.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,480 m/14,698 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4-5 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Distance: 11.7 km/7.2 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 11: Trek from Dharamsala to Bimthang by crossing Larkya La Pass',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Wake up early and gradually ascend to the top of Larkya La pass. First, you will descend and walk via a moraine. The trail then goes downhill to a small alley and follows an unclear route. Further, cross the steep grass slope south and descend to four frozen lakes. From here, uphill climbing starts. You may have to walk in the snow. The view from the top of the pass is unreal. Now, you descend from the pass to Bimthang.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,720 m/12,205 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "8-9 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Distance: 24.7 km/15.3 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 12: Trek from Bimthang to Dharapani',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trekking from Bimthang, you will ascend and descend along the Budhi Gandaki River. The trail goes through lush rhododendron forests. Karche onwards, the trail gets out of the forest. You will then follow a river bank to Gho. Further, descend through forests and small villages to Dharapani.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,910 m/6,266 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Teahouse",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Distance: 16 km/10 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 13: Trek to Chamje and drive to Besisahar',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Following lush hillsides and small settlements, you trek to Chamje village. The walking part ends here.",
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => "Further, you will use a local jeep and drive to Besisahar.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "760 m/2,493 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Duration: 3-4 hours trek & 4-5 hours drive, Distance: 15.5 km/9.6 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 14: Drive from Besisahar to Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => "Leaving Besisahar early in the morning and driving to Kathmandu. The road is bumpy in the first 2 hours of the ride. From Dumre onwards, you will enjoy a comfortable ride along a winding road across lush hills. Enjoy your remaining day relaxing in Kathmandu.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,400 m/4,593 ft",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Duration: 6-7 hours, Distance: 176 km/109 miles",
                    ],
                ],
            ],
            [
                'title' => 'Day 15: Free day in Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => "You have a free day in Kathmandu. Spend as you visit. Rest, explore tourist sites, and do window shopping in Thamel. In the late evening, we will meet and hand over the trek completion certificate.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
            [
                'title' => 'Day 16: Trip ends! Fly back home with memories to cherish forever',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Our team will drop you off at the international airport for your flight. Get ready on time and double-check your room before leaving.",
                    ],
                ],
            ],
        ];


        $langtang_itinerary = [
            [
                'title' => 'Day 01: Arrival at Kathmandu and transfer to hotel',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "We will provide a seamless transfer to the hotel upon your arrival at the Kathmandu airport and help with your luggage. Take your time to rest and explore your surroundings. Later in the day, join the trek briefing and pack your duffle bags. Buy any missing trek gear or essentials.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
            [
                'title' => 'Day 02: Drive from Kathmandu to Syabrubesi',
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => "You will leave Kathmandu early in the morning and drive to Syabrubesi with your guide. The ride will be comfortable and scenic. The highway goes northwest of Kathmandu, offering beautiful views of lush hills, mountains, rivers, and terraced fields.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,503 m/4,655 ft",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "8-9 hours drive, 122 km/75.8 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 03: Trek from Syabrubesi to Sherpagaon',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "After a delicious breakfast, start trekking from Syabrubesi. The trail gradually ascends and takes you across a suspension bridge. Follow a steep route across the bridge to Khanjim. From here, hike to Sherpagaon, savoring jaw-dropping views of Ganesh Himal on the way.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,563 m/8,408 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4-5 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "9.8 km/6 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 04: Trek from Sherpagaon to Ghoda Tabela/Thangshyap',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Descend following a narrow trail to Rimche. From here, you will join the main Langtang Valley trail. Expect to see other fellow trekkers on the way. From Rimche, ascend to Thangshyap following a steep trail.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,190 m/10,466 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4-5 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "11.4 km/7 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 05: Trek from Thangshyap to Langtang Village',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "After breakfast, you will leave Thangshyap and start trekking to Langtang village. You will see a significant change in scenery as the trail ascends to Langtang village. Mountains are much more prominent. You will pass a few small settlements and cross a landslide area.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,430 m/11,255 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4-5 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "4 km/2.4 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 06: Trek to Kyanjin Gompa & Side Hike to Kyanjin Ri',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "From Langtang village, walk along hillsides and gradually ascend via meadows to Kyanjin Gompa. The views of Langtang Lirung and Ganesh Himal are stunning. The final ascend is steep. Kyanjin Gompa is the highest settlement in the Langtang Valley.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,865 m/12,675 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "3-4 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "6.8 km/4.2 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 07: Acclimatization Day: Hike to Cherukuri Ri',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Today, you will spend an acclimatization day in Kyanjin Gompa. In the morning, hike to Cherukuri Ri. It will be an adventurous hike. From here, you will see an incredible sunrise and breathtaking mountain views. Later in the day, visit the local cheese factory and explore the surrounding area.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,984 m/16,352 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "7-8 hours",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 08: Trek from Kyanjin Gompa to Lama Hotel',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "After exploring the Langtang Valley, it is time to trek back to the Lama Hotel. From Kyanjin Gompa, you will follow the same trail and descend to Langtang Village. Cross a bridge and trek through forests to the Lama Hotel.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,470 m/8,103 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "21 km/13 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 09: Trek from Lama Hotel to Thulo Syabru',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "From Lama Hotel, descend along the Langtang Khola and pass by a small waterfall. The trail then goes through rhododendrons and bamboo forests to Thulo Sybrubesi. On the way, you will cross a suspension bridge and see superb views of Ganesh Himal.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,210 m/8,500 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "13 km/8 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Trek from Thulo Syabru to Shin Gompa',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "The trail ascends to Dimsa village. From here, you will gradually walk to Foprang Danda. The views are fantastic from here. Further, you will trek via lush forests to Shi Gompa. Visit a cheese factory and an old monastery.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,330 m/10,925 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5 hours",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 11: Trek from Shin Gumba to Gosainkunda',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "After breakfast, you will continue trekking to Gosaikunda Lake. This part of the trail is mostly steep and rocky. You will trek through forests and slowly ascend to the holy Gosaikunda Lake.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,380 m/14,620 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6-7 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "11 km/6.8 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 12: Trek from Gosainkunda to Ghopte via Lauribina Pass',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "On this day, you will cross a mountain pass called Lauribina La. Descend along the lake's northern shore and soon follow an uphill route leading to the top of the pass. The view from the pass will be stunning. Crossing the pass, you will descend on a steep, rugged trail to Ghopte village.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "4,610 m/15,115 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "7-8 hours",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 13: Trek from Ghopte to Tharepati',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "While trekking from Ghopte to Tharepati, you will enjoy a tranquil route. The trail descends to a beautiful stream and continues along a flat trail. Soon, the trail ascends along a barren hill, presenting stunning views of Dorje Lakpa, Gauri Shankar, Jugal Himal, and other mountains.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,640 m/11,942 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "8.5 km/5.2 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 14: Trek from Tharepati to Kutumsang',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "The trail from Tharepati continues through small villages of the Hyolmo community. Trek through a dense forest to Magengoth and continue to Panghu. You may take a lunch break here. The trail then descends via fir and rhododendron forests to Kutumsang.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,450 m/8,038 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "11 km/6.8 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 15: Trek from Kutumsang to Chisapani',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Leaving Kutumsang, you will ascend for a bit, then follow a downhill route to Gul Bhanjyang. From here, trek on a dusty road that soon gets steep and rocky and gradually descends to Chisapni.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,295 m/7,655 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4 hours",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Guesthouse",
                    ],
                ],
            ],
            [
                'title' => 'Day 16: Trek from Chisapani to Sundarijal and Drive to Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "From Chisapani, you will walk downhill to Sundarijal. The trail is within the Shivapuri National Park. You will trek through lush forests. At Sundarijal, you will take a car and drive to Kathmandu. The remaining day is free in the city. Rest and shop.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,350 m/4,450 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4 hours trek",
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => "1-hour drive",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "9.8 km/6 miles trek",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
            [
                'title' => 'Day 17: Final Departure',
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],

                ],
            ],
        ];

        $everest_panorama_itinerary = [
            [
                'title' => 'Day 01: Welcome to Kathmandu and transfer to the hotel',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "You will arrive in Kathmandu on this day. Our team will take care of your airport-to-hotel commute. They will pick you up in a private four-wheeler and help you with luggage.",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
            [
                'title' => 'Day 02: Full-day sightseeing tour of Bhaktapur, Pashupatinath, and Boudhanath',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Start the day with a guided sightseeing of some of the tourist sites in Kathmandu. Visit Bouddhanath Stupa, Pashupatinath Temple, and Bhaktapur Durbar Square with our friendly guide. These monuments present a glimpse of Nepali art, architecture, and culture. After the tour, the guide will drop you back at the hotel. On the remaining day, you will prepare for the trek. Meet with your mountain guide and learn about the trek plan. Purchase any last-minute trekking gear and pack your duffle bags.",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Meals: Breakfast only",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
            [
                'title' => 'Day 03: Fly to Lukla and trek to Phakding',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "You will fly from Kathmandu/Ramechhap to Lukla. The flight is about 35 minutes.  The specific airport depends on the season.",
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "From Lukla, trek downhill to Phakding village via rhododendron forests, crossing suspension bridges. The trail follows the Dudh Koshi River. Enjoy views of Mt. Khumbila and Kongde Ri.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "Lukla: 2,846 m/9,337 ft, Phakding: 2,610 m/8,563 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "3 hours trek",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "6.2 km/3.8 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                ],
            ],
            [
                'title' => 'Day 04: Trek from Phakding to Namche Bazaar',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek from Phakding to Namche Bazaar through rhododendron and magnolia forests.  Cross suspension bridges, including the Hillary Suspension Bridge. Register permits at Monjo. The trail ascends steeply to Namche Bazaar.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,440 m/11,290 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "7.4 km/4.6 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                ],
            ],
            [
                'title' => 'Day 05: Acclimatization day - hike to the Hotel Everest View',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Hike to the Everest View Hotel for views of Everest, Lhotse, Nuptse, and Ama Dablam. Return to Namche Bazaar.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,962 m/13,000 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "9.6 km/5.9 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                ],
            ],
            [
                'title' => 'Day 06: Trek from Namche Bazaar to Tengboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek from Namche Bazaar to Tengboche via Kyangjuma and Phungi Thanga. Visit Tengboche monastery and enjoy views of Everest and Ama Dablam.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,860 m/12,660 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "9.6 km/5.9 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                ],
            ],
            [
                'title' => 'Day 07: Trek from Tengboche to Khumjung village',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek to Khumjung village. Visit the Khumjung monastery and the Tenzing Hillary School. Interact with locals.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "3,790 m/12,434 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "4-5 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "8 km/5 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                ],
            ],
            [
                'title' => 'Day 08: Trek from Khumjung village to Phakding',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "Trek back to Phakding via Namche Bazaar. Descend through forests.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,610 m/8,563 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "5-6 hours",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "15 km/9.3 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                ],
            ],
            [
                'title' => 'Day 09: Trek from Phakding to Lukla',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => "From Phakding, the trail ascends along the Dudh Koshi River to Lukla. You will cross many suspension bridges on the way and also trek via small settlements. The entire route goes through lush rhododendrons and magnolia forests.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "2,846 m/9,337 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "Variable, typically 4-6 hours", // Add realistic duration
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "6.2 km/3.8 miles",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Lodge",
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Morning flight back to Kathmandu & Farewell Dinner',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => "Morning flight back to Kathmandu from Lukla. Upon landing, transfer to your hotel. Leisure time in the afternoon.",
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => "1,400 m/4,593 ft",
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => "35 minutes flight",
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => "Farewell dinner in the evening",
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => "Hotel",
                    ],
                ],
            ],
            [
                    'title' => 'Day 11: Free day in Kathmandu',
                    'details' => [
                        [
                            'type' => ItineraryTypes::OTHERS,
                            'description' => "Full day free in Kathmandu for sightseeing, shopping, and exploring the city.",
                        ],
                        [
                            'type' => ItineraryTypes::OTHERS,
                            'description' => "Meals: Breakfast only",
                        ],
                        [
                            'type' => ItineraryTypes::ACCOMODATION,
                            'description' => "Hotel",
                        ],
                    ],
            ],
            [
                    'title' => 'Day 12: Trip ends! Fly back home',
                    'details' => [
                        [
                            'type' => ItineraryTypes::OTHERS,
                            'description' => "Departure from Kathmandu. Transfer to the airport for your flight home.",
                        ],
                        [
                            'type' => ItineraryTypes::OTHERS,
                            'description' => "Meals: Breakfast only",
                        ],
                    ],
            ],
        ];


        $kanchanjunga_exped_itinerary = [
            [
                'title' => 'Day 01: Arrival in Kathmandu and Transfer to Hotel',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Arrive in Kathmandu. Transfer to hotel.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel',
                    ],
                ],
            ],
            [
                'title' => 'Day 02: Full-day sightseeing tour of Bhaktapur, Pashupatinath, and Boudhanath',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Start the day with a guided sightseeing of some of the tourist sites in Kathmandu. Visit Bouddhanath Stupa, Pashupatinath Temple, and Bhaktapur Durbar Square with our friendly guide. These monuments present a glimpse of Nepali art, architecture, and culture. After the tour, the guide will drop you back at the hotel. On the remaining day, you will prepare for the trek. Meet with your mountain guide and learn about the trek plan. Purchase any last-minute trekking gear and pack your duffle bags.',
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Meals: Breakfast only',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel',
                    ],
                ],
            ],
            [
                'title' => 'Day 03: Fly to Bhadrapur and drive to Taplejung',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => 'Fly from Kathmandu to Bhadrapur. The flight is about 35 minutes.  The specific airport depends on the season.',
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => 'Drive from Bhadrapur to Taplejung. The drive is about 8 hours.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 04: Trek from Taplejung to Sekathum',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Taplejung to Sekathum. The trail passes through lush green forests and small villages.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Sekathum: 1,576m/5,170ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 05: Trek from Sekathum to Amjilossa',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Sekathum to Amjilossa. The trail continues uphill through forests and small villages before descending to the Ghunsa Khola River.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Amjilosa: 2,308m/7,542ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '6-7 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 06: Trek from Amjilossa to Yamphudin',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Amjilossa to Yamphudin. The trail follows the Ghunsa Khola River, passing through lush forests and waterfalls.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Yamphudin: 3,300m/10,826ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '6-7 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 07: Trek from Yamphudin to Tortong',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Yamphudin to Tortong. The trail ascends gradually through rhododendron forests, offering stunning views of the surrounding peaks.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Tortong: 4,250m/13,943ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 08: Trek from Tortong to Tseram',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Tortong to Tseram. The trail climbs steeply through rocky terrain, offering breathtaking views of the Kanchenjunga massif.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Tseram: 4,870m/15,977ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 09: Acclimatization Day in Tseram',
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,  # Or perhaps a short acclimatization hike could be TREK
                        'description' => 'Rest and acclimatization day in Tseram.  Perhaps a short hike to a viewpoint.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Tseram: 4,870m/15,977ft',
                    ],
                     [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Trek from Tseram to Ramche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Tseram to Ramche. The trail continues through high-altitude terrain, with stunning views of glaciers and snow-capped peaks.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Ramche: 5,013m/16,447ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '4-5 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 11: Trek from Ramche to Glacier Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Ramche to Glacier Camp. The trail gets closer to the Kanchenjunga Glacier, offering spectacular views of the icefall and surrounding peaks.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Glacier Camp: 5,140m/16,863ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '4-5 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 12: Trek from Glacier Camp to Kanchenjunga Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Glacier Camp to Kanchenjunga Base Camp. The final stretch to base camp, offering an immersive experience in the heart of the Himalayas.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Kanchenjunga Base Camp: 5,500m/18,044ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '3-4 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 13: Rest Day at Kanchenjunga Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => 'Rest and acclimatization day at Kanchenjunga Base Camp.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Kanchenjunga Base Camp: 5,500m/18,044ft',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel/Tea House',
                    ],
                ],
            ],
                [
                'title' => 'Day 14-41: Climbing Period (Base Camp - Kanchenjunga Summit - Base Camp)',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, # Or a more specific type if you have it.
                        'description' => 'Climbing period. Ascend to high camps, attempt summit, and return to Base Camp.  This period is highly variable due to weather and climbing conditions.',
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA, # If you want to emphasize the mountain views during the climb.
                        'description' => 'Spectacular views throughout the climbing period.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'High Camps / Base Camp',
                    ],
                ],
            ],
            [
                'title' => 'Day 42: Cleaning Up Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Cleaning up base camp and preparing for the descent.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Base Camp',
                    ],
                ],
            ],
            [
                'title' => 'Day 43: Trek from Base Camp to Ramche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Base Camp to Ramche.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Ramche: 5,013m/16,447ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '4-5 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House/Lodge',
                    ],
                ],
            ],
            [
                'title' => 'Day 44: Trek from Ramche to Tortong',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Ramche to Tortong.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Tortong: 4,250m/13,943ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House/Lodge',
                    ],
                ],
            ],
            [
                'title' => 'Day 45: Trek from Tortong to Yamphudin',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Tortong to Yamphudin.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Yamphudin: 3,300m/10,826ft',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '6-7 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House/Lodge',
                    ],
                ],
            ],
            [
                'title' => 'Day 46: Trek from Yamphudin to Khewang',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Yamphudin to Khewang.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Khewang:  (Check altitude)', // Add Altitude if known
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '6-7 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House/Lodge',
                    ],
                ],
            ],
            [
                'title' => 'Day 47: Trek from Khewang to Khandenba',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek from Khewang to Khandenba.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Khandenba: (Check altitude)', // Add Altitude if known
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House/Lodge',
                    ],
                ],
            ],
            [
                'title' => 'Day 48: Drive from Khandenba to Bhadrapur',
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => 'Drive from Khandenba to Bhadrapur.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel in Bhadrapur', // Or appropriate ACCOMODATION
                    ],
                ],
            ],
            [
                'title' => 'Day 49: Fly from Bhadrapur to Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => 'Fly from Bhadrapur to Kathmandu.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel in Kathmandu',
                    ],
                ],
            ],
            [
                'title' => 'Day 50: Leisure Day in Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or OTHERS if they are doing sightseeing
                        'description' => 'Leisure day in Kathmandu.  Optional sightseeing.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel in Kathmandu',
                    ],
                ],
            ],
            [
                'title' => 'Day 51: Final Departure',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Transfer to the airport for final departure.',
                    ],
                ],
            ],
        ];

        $lhotse_exped_itinerary = [
            [
                'title' => 'Day 01: Arrival in Kathmandu & transfer to the hotel',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Arrive in Kathmandu. Transfer to hotel.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel',
                    ],
                ],
            ],
            [
                'title' => 'Day 02: Welcome brief, Gear check and Official formalities in Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Expedition briefing, gear check, permit formalities.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel',
                    ],
                ],
            ],
            [
                'title' => 'Day 03: Fly to Lukla & trek to Phakding',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => 'Fly to Lukla.',
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek to Phakding.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Lukla: 2,860m, Phakding: 2,610m',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '3-4 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 04: Trek to Namche Bazaar',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek to Namche Bazaar.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Namche Bazaar: 3,440m',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 05: Rest in Namche Bazaar (Acclimatization hike)',
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Could be TREK for the hike
                        'description' => 'Rest and acclimatization. Hike to Everest viewpoint (or similar).',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 06: Trek to Debuche via Tengboche Monastery',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek to Debuche via Tengboche.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Debuche: (Add Altitude)', // Find and add altitude
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 07: Trek to Dingboche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek to Dingboche.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Dingboche: (Add Altitude)', // Find and add altitude
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 08: Acclimatize day in Dingboche (Nagarjun Hill hike)',
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or TREK for the hike
                        'description' => 'Acclimatization. Hike to Nagarjun Hill.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 09: Trek to Lobuche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek to Lobuche.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Lobuche: (Add Altitude)', // Find and add altitude
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 10: Trek to Everest Base Camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek to Everest Base Camp.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Everest Base Camp: 5,364m', // Corrected Altitude
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House/Tents',
                    ],
                ],
            ],
            [
                'title' => 'Day 11-45: Lhotse Climbing Period',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or more specific types if you have them
                        'description' => 'Climbing period on Lhotse. This includes acclimatization climbs, establishing high camps, summit attempt(s), and descent.',
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA,
                        'description' => 'Stunning views during the climb.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tents at High Camps / Base Camp',
                    ],
                ],
            ],
            [
                'title' => 'Day 46: Clearing up base camp',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Clearing up base camp and preparing for the descent.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Base Camp',
                    ],
                ],
            ],
            [
                'title' => 'Day 47: Trek back to Pheriche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek back to Pheriche.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Pheriche: (Add Altitude)', // Find and add altitude
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 48: Trek back to Namche',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek back to Namche Bazaar.',
                    ],
                     [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Namche Bazaar: 3,440m',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 49: Trek back to Lukla',
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => 'Trek back to Lukla.',
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => 'Lukla: 2,860m',
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => '5-6 hours',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Tea House',
                    ],
                ],
            ],
            [
                'title' => 'Day 50: Back to Kathmandu & transfer to hotel/dinner',
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => 'Fly from Lukla to Kathmandu.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel',
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Farewell Dinner', // Or mention transfer to hotel if separate
                    ],
                ],
            ],
            [
                'title' => 'Day 51: Free day in Kathmandu',
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or OTHERS for sightseeing
                        'description' => 'Free day in Kathmandu. Optional sightseeing.',
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => 'Hotel',
                    ],
                ],
            ],
            [
                'title' => 'Day 52: Depart to the home country',
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => 'Transfer to the airport for departure.',
                    ],
                ],
            ],

        ];


        $this->createItinerariesWithDetails(
            Trek::first(),
            $trekItineraries
        );
        $this->createItinerariesWithDetails(
            Trek::find(5),
            $everest_panorama_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(2),
            $annapurnaItineraries
        );
        $this->createItinerariesWithDetails(
            Trek::find(3),
            $manasluItineraries
        );
        $this->createItinerariesWithDetails(
            Trek::find(4),
            $langtang_itinerary
        );
        $this->createItinerariesWithDetails(
            Peak::first(),
            $peakItineraries
        );
        $this->createItinerariesWithDetails(
            Expedition::first(),
            $expeditionItineraries
        );
        $this->createItinerariesWithDetails(
            Expedition::find(2),
            $kanchanjunga_exped_itinerary
        );
        $this->createItinerariesWithDetails(
            Expedition::find(3),
            $lhotse_exped_itinerary
        );
    }

    protected function createItinerariesWithDetails(Model $model, array $itineraries): void
    {

        foreach ($itineraries as $itineraryData) {
            // Create the Itinerary
            $itinerary = $model->itineraries()->create([
                'title' => $itineraryData['title'],
            ]);
            // Create destinations
            $destinationIds = Destination::inRandomOrder()->limit(2)->pluck('id');
            $itinerary->destinations()->attach($destinationIds);


            // Create the Itinerary Details
            if (isset($itineraryData['details']) && is_array($itineraryData['details'])) {
                $itinerary->itineraryDetails()->createMany($itineraryData['details']);
            }
        }
    }
}
