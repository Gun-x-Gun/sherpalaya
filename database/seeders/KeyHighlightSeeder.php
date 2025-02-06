<?php

namespace Database\Seeders;

use App\Models\Expedition;
use App\Models\Peak;
use App\Models\Tour;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class KeyHighlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $everest_base_camp_trek = [
            [
                'title' => 'First Glimpse of Everest from Namche Bazaar',
                'description' => 'The excitement of spotting Everest for the first time while sipping tea at a Namche Bazaar viewpoint is surreal.',
            ],
            [
                'title' => 'Acclimatization Hike to Everest View Hotel',
                'description' => 'A rewarding short hike offering one of the best panoramic views of Everest, Lhotse, and Ama Dablam.',
            ],
            [
                'title' => 'Crossing High Suspension Bridges',
                'description' => 'Adrenaline rushes as you walk across swaying suspension bridges over deep gorges, prayer flags fluttering in the wind.',
            ],
            [
                'title' => 'Reaching the Everest Base Camp',
                'description' => 'The thrill of standing at the foot of Everest, surrounded by climbers, colorful tents, and the mighty Khumbu Icefall.',
            ],
            [
                'title' => 'Sunrise at Kala Patthar',
                'description' => 'The awesomeness will drive you next level'
            ],
        ];
        $annapurna_base_camp_trek = [
            [
                'title' => 'Waking Up to the Sound of Roosters in Ghandruk',
                'description' => 'Experiencing village life firsthand, waking up to mountain views and the smell of fresh Gurung bread.',
            ],
            [
                'title' => 'The Magical Sunrise from Poon Hill',
                'description' => 'Watching the sun slowly illuminate the Annapurna and Dhaulagiri ranges, a moment of pure awe and silence.',
            ],
            [
                'title' => 'Feeling the Heat of Natural Hot Springs at Jhinu Danda',
                'description' => 'Soaking in warm natural hot springs after long trekking days, feeling muscles relax while listening to the river flow.',
            ],
            [
                'title' => 'Walking Through a Rhododendron Forest',
                'description' => 'A fairytale-like experience, with red, pink, and white rhododendrons blooming along the trail in spring.',
            ],
            [
                'title' => 'Standing in the Middle of the Annapurna Sanctuary',
                'description' => 'Surrounded by towering snow-covered peaks at Annapurna Base Camp, feeling small yet deeply connected to nature.',
            ]
        ];

        $lobuche_peak_climbing = [
            [
                'title' => 'The Rush of Ice Climbing Practice',
                'description' => 'Strapping on crampons and learning how to navigate icy slopes, feeling like a true mountaineer.',
            ],
            [
                'title' => 'Sleeping Under the Stars at High Camp',
                'description' => 'A night spent at high altitude, where the sky is ablaze with stars and the silence is absolute.',
            ],
            [
                'title' => 'The Final Push to the Summit',
                'description' => 'Exhausted yet determined, each step towards the Lobuche summit feels like a victory over yourself.',
            ],
            [
                'title' => 'The First Rays of Sun from the Top',
                'description' => 'Watching the sun rise over Everest, Lhotse, and Nuptse from the summit is an emotional, unforgettable sight.',
            ],
            [
                'title' => 'The Sense of Achievement Descending',
                'description' => 'Looking back at the towering peak you just climbed, realizing you’ve conquered both nature and personal limits.',
            ]
        ];

        $everest_expedition = [
            [
                'title' => 'The Thrill of Stepping into the Khumbu Icefall',
                'description' => 'Navigating the ever-shifting seracs and deep crevasses of the Khumbu Icefall is an experience like no other.',
            ],
            [
                'title' => 'The Bond with Fellow Climbers',
                'description' => 'Sharing stories, meals, and hardships with climbers from around the world creates lifelong friendships.',
            ],
            [
                'title' => 'The Eerie Beauty of the Death Zone',
                'description' => 'At 8,000m, everything slows down—the air is thin, and each step is a battle between body and willpower.',
            ],
            [
                'title' => 'The Moment You Step onto the Everest Summit',
                'description' => 'Standing on top of the world, with a view that only a few have seen—it’s the ultimate dream turned reality.',
            ],
            [
                'title' => 'The Emotional Descent',
                'description' => 'Every step down feels surreal as the realization sinks in: you have climbed the highest mountain on Earth.',
            ]
        ];

        $kathmandu_cultural_tour = [
            [
                'title' => 'Watching Sunrise at Swayambhunath Stupa',
                'description' => 'The golden light hitting the ancient stupa while prayer flags flutter and monks chant in the background.',
            ],
            [
                'title' => 'Exploring the Hidden Courtyards of Patan Durbar Square',
                'description' => 'Walking through centuries-old courtyards, admiring intricate Newari architecture and stone carvings.',
            ],
            [
                'title' => 'Tasting Local Street Food in Ason Bazaar',
                'description' => 'The spicy aroma of chatpate, freshly fried sel roti, and the bustle of Kathmandu’s oldest marketplace.',
            ],
            [
                'title' => 'Witnessing the Evening Aarti at Pashupatinath',
                'description' => 'A mesmerizing sight of priests performing fire rituals by the sacred Bagmati River as chants fill the air.',
            ],
            [
                'title' => 'Getting Lost in the Alleyways of Thamel',
                'description' => 'Discovering hidden bookshops, vibrant handicraft stores, and cozy cafés in Kathmandu’s famous backpacker hub.',
            ]
        ];

        $manaslu_circuit_trek = [
            [
                'title' => 'Walking Through Remote Himalayan Villages',
                'description' => 'Experience the untouched beauty of Nubri and Tsum Valley, home to Tibetan-influenced cultures and monasteries.',
            ],
            [
                'title' => 'Crossing the Thrilling Larkya La Pass (5,160m)',
                'description' => 'The highest point of the trek offers breathtaking views of Himlung, Cheo, and Annapurna II, making the challenge worth it.',
            ],
            [
                'title' => 'Exploring the Ancient Monasteries',
                'description' => 'Visit centuries-old monasteries like Mu Gompa and Rachen Gompa, where monks chant amidst peaceful Himalayan surroundings.',
            ],
            [
                'title' => 'Trekking Along the Budhi Gandaki River Gorge',
                'description' => 'Follow the roaring Budhi Gandaki River through deep gorges, suspension bridges, and cascading waterfalls.',
            ],
            [
                'title' => 'Spectacular Views of Manaslu (8,163m), the 8th Highest Peak',
                'description' => 'Enjoy panoramic views of Manaslu and its surrounding peaks, standing majestically above the rugged terrain.',
            ],
            [
                'title' => 'Walking Through Dense Rhododendron & Bamboo Forests',
                'description' => 'The lower sections of the trek are filled with lush forests, turning vibrant red and pink in spring.',
            ],
            [
                'title' => 'Staying in Traditional Tea Houses',
                'description' => 'Enjoy warm hospitality in local teahouses, where simple yet hearty meals provide comfort after long trekking days.',
            ],
            [
                'title' => 'A Less Crowded Alternative to the Annapurna Circuit',
                'description' => 'Experience a more peaceful trekking route with pristine landscapes and fewer trekkers compared to the more commercialized Annapurna Circuit.',
            ],
            [
                'title' => 'Encountering Unique Wildlife',
                'description' => 'The Manaslu region is home to snow leopards, blue sheep, and Himalayan Thars, adding an adventurous touch to your journey.',
            ],
            [
                'title' => 'Reaching the Isolated Tsum Valley (Optional Side Trip)',
                'description' => 'A hidden gem with breathtaking landscapes, ancient monasteries, and a strong Tibetan Buddhist culture.',
            ]
        ];


        $langtang_highlights = [
            [
                'title' => 'A Challenging and Rewarding Trek',
                'description' => 'Experience an adventurous and challenging trek near Kathmandu, offering stunning landscapes and cultural immersion.'
            ],
            [
                'title' => 'Explore Valleys and Peaks',
                'description' => 'Trek through the "Valley of Glaciers" (Langtang Valley), hike to viewpoints like Kyanjin Ri and Cherukuri Ri, and witness breathtaking mountain vistas, including Langtang Lirung, Naya Kanga, and Dorje Lakpa.'
            ],
            [
                'title' => 'Sacred Lakes and High Passes',
                'description' => 'Visit the sacred Gosainkunda Lake, a pilgrimage site for Hindus, and cross the challenging Lauribina La pass (4,610m).'
            ],
            [
                'title' => 'Cultural Immersion',
                'description' => 'Interact with the Tamang and Sherpa communities, experience their warm hospitality, and learn about their unique culture and traditions. Visit ancient monasteries and explore local markets and yak cheese factories.'
            ],
            [
                'title' => 'Diverse Landscapes',
                'description' => 'Traverse remote settlements, lush meadows, dense forests (including rhododendron forests), and rugged terrain, experiencing a variety of landscapes.'
            ],
            [
                'title' => 'Wildlife Encounters',
                'description' => 'Keep an eye out for potential wildlife sightings, including langur monkeys, especially in the lower sections of the trek near Shivapuri National Park.'
            ],
            [
                'title' => 'Getaway from Kathmandu',
                'description' => 'Explore the Chisapani region and the area around Sundarijal, popular destinations for those seeking a quick escape from the city.'
            ],
        ];

        $kanchanjunga_highlights = [
            [
                'title' => 'Summiting the Third Highest Peak',
                'description' => 'Experience the ultimate thrill of standing atop the world\'s third highest mountain.',
            ],
            [
                'title' => 'Remote and Pristine Wilderness',
                'description' => 'Trek through untouched landscapes and experience the raw beauty of the Kanchenjunga region.',
            ],
            [
                'title' => 'Cultural Immersion',
                'description' => 'Interact with local communities and experience the unique culture of the region.',
            ],
            [
                'title' => 'Challenging Climb',
                'description' => 'Test your mountaineering skills with a technically challenging climb.',
            ],
            [
                'title' => 'Expert Guidance',
                'description' => 'Climb with experienced guides and Sherpas who prioritize safety and success.',
            ],
        ];


        $this->createKeyHighlights(
            Trek::first(),
            $everest_base_camp_trek
        );
        $this->createKeyHighlights(
            Trek::find(5),
            $everest_base_camp_trek
        );
        $this->createKeyHighlights(
            Trek::find(2),
            $annapurna_base_camp_trek
        );
        $this->createKeyHighlights(
            Trek::find(3),
            $manaslu_circuit_trek
        );
        $this->createKeyHighlights(
            Trek::find(4),
            $langtang_highlights
        );
        $this->createKeyHighlights(
            Peak::first(),
            $lobuche_peak_climbing
        );
        $this->createKeyHighlights(
            Expedition::first(),
            $everest_expedition
        );
        $this->createKeyHighlights(
            Expedition::find(2),
            $kanchanjunga_highlights
        );
        $this->createKeyHighlights(
            Expedition::find(3),
            $everest_expedition
        );
        $this->createKeyHighlights(
            Tour::first(),
            $kathmandu_cultural_tour
        );
        $this->createKeyHighlights(
            Tour::find(2),
            $kathmandu_cultural_tour
        );
        $this->createKeyHighlights(
            Tour::find(3),
            $kathmandu_cultural_tour
        );
    }
    protected function createKeyHighlights(Model $model, array $points): void
    {

        foreach ($points as $point) {
            if (isset($point) && is_array($point)) {
                $model->keyHighlights()->create($point);
            }
        }
    }
}
