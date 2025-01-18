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



        $this->createItinerariesWithDetails(
            Trek::first(),
            $trekItineraries
        );
        $this->createItinerariesWithDetails(
            Peak::first(),
            $peakItineraries
        );
        $this->createItinerariesWithDetails(
            Expedition::first(),
            $expeditionItineraries
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
