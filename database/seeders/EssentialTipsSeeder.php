<?php

namespace Database\Seeders;

use App\Models\Expedition;
use App\Models\Peak;
use App\Models\Tour;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class EssentialTipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $everest_base_camp_trek_tips = [
            [
                'title' => 'Train Before You Trek',
                'description' => 'Prepare with cardio, strength training, and endurance hikes to handle the demanding terrain and altitude.',
            ],
            [
                'title' => 'Acclimatize Properly',
                'description' => 'Take rest days in Namche Bazaar and Dingboche to let your body adjust to the high altitude and prevent AMS.',
            ],
            [
                'title' => 'Pack Smart, Pack Light',
                'description' => 'Carry only the essentials—layered clothing, a warm sleeping bag, a water purification system, and high-energy snacks.',
            ],
            [
                'title' => 'Stay Hydrated',
                'description' => 'Drink at least 3-4 liters of water per day to combat dehydration and altitude sickness.',
            ],
            [
                'title' => 'Embrace the Trekking Culture',
                'description' => 'Respect local customs, greet with "Namaste," and take time to connect with Sherpa guides and fellow trekkers.',
            ]
        ];

        $annapurna_base_camp_trek_tips = [
            [
                'title' => 'Choose the Right Season',
                'description' => 'Trek in spring (March-May) or autumn (September-November) for clear skies, moderate temperatures, and beautiful landscapes.',
            ],
            [
                'title' => 'Pace Yourself on the Steep Trails',
                'description' => 'Some sections, like the climb to Ulleri, are steep—take it slow and steady to conserve energy.',
            ],
            [
                'title' => 'Pack for Varied Weather',
                'description' => 'The weather changes quickly—bring a rain jacket, sun hat, and warm layers for the high-altitude nights.',
            ],
            [
                'title' => 'Bring Enough Cash',
                'description' => 'ATMs are scarce—carry enough cash for food, accommodation, and personal expenses along the trail.',
            ],
            [
                'title' => 'Respect the Local Culture',
                'description' => 'Annapurna is home to Gurung and Magar communities—learn a few Nepali phrases and enjoy their hospitality.',
            ]
        ];

        $lobuche_peak_climbing_tips = [
            [
                'title' => 'Gain Prior Trekking Experience',
                'description' => 'Before attempting Lobuche Peak, complete treks like Everest Base Camp to build endurance and altitude tolerance.',
            ],
            [
                'title' => 'Learn Basic Mountaineering Skills',
                'description' => 'Practice using crampons, ice axes, and ropes before the climb to increase safety and confidence.',
            ],
            [
                'title' => 'Dress in High-Quality Gear',
                'description' => 'Invest in proper mountaineering boots, down jackets, and gloves to withstand freezing summit conditions.',
            ],
            [
                'title' => 'Listen to Your Guide',
                'description' => 'Guides have valuable experience—follow their instructions, especially in technical sections and summit pushes.',
            ],
            [
                'title' => 'Prepare for Mental and Physical Challenges',
                'description' => 'The high-altitude climb is exhausting—stay positive, take one step at a time, and trust your preparation.',
            ]
        ];

        $everest_expedition_tips = [
            [
                'title' => 'Build Years of Climbing Experience',
                'description' => 'Everest is not for beginners—gain experience on peaks like Lobuche, Mera, or Aconcagua before attempting it.',
            ],
            [
                'title' => 'Choose a Reputable Expedition Company',
                'description' => 'Pick a team with experienced guides, strong Sherpa support, and a solid safety record for the best chances of success.',
            ],
            [
                'title' => 'Train for Extreme Endurance',
                'description' => 'Your body must be in peak condition—train with heavy packs, high-altitude hikes, and breathing exercises.',
            ],
            [
                'title' => 'Understand the Risks',
                'description' => 'Everest is deadly—know about altitude sickness, frostbite, and weather hazards before committing to the climb.',
            ],
            [
                'title' => 'Prepare for the Long Haul',
                'description' => 'An Everest expedition takes 6-8 weeks—mentally prepare for waiting, weather delays, and harsh conditions.',
            ]
        ];

        $kathmandu_cultural_tour_tips = [
            [
                'title' => 'Dress Modestly for Temples',
                'description' => 'Cover shoulders and legs when visiting religious sites like Pashupatinath and Swayambhunath to show respect.',
            ],
            [
                'title' => 'Learn Basic Nepali Phrases',
                'description' => 'A simple "Namaste" or "Dhanyabad" (thank you) goes a long way in connecting with locals.',
            ],
            [
                'title' => 'Be Mindful of Street Scams',
                'description' => 'Avoid overly pushy vendors and fake tour guides—stick to well-reviewed experiences and licensed guides.',
            ],
            [
                'title' => 'Try Local Cuisine',
                'description' => 'Don’t miss out on momos, dal bhat, and Newari dishes like yomari and samay baji for an authentic taste of Nepal.',
            ],
            [
                'title' => 'Respect the Local Pace of Life',
                'description' => 'Kathmandu is chaotic yet spiritual—embrace the honking, street cows, and bustling markets as part of the experience.',
            ]
        ];
        $manaslu_circuit_trek_tips = [
            [
                'title' => 'Obtain the Right Permits',
                'description' => 'You need the Manaslu Restricted Area Permit (RAP), Manaslu Conservation Area Permit (MCAP), and Annapurna Conservation Area Permit (ACAP).',
            ],
            [
                'title' => 'Trek with a Licensed Guide & in a Group',
                'description' => 'Independent trekking is not allowed; you must hire a licensed guide and trek with at least one other person.',
            ],
            [
                'title' => 'Train for High-Altitude Trekking',
                'description' => 'The trek involves long ascents, steep descents, and high altitudes—prepare with endurance training and regular hikes.',
            ],
            [
                'title' => 'Acclimatize Properly to Avoid Altitude Sickness',
                'description' => 'Take rest days in Samagaon or Samdo before crossing Larkya La Pass to prevent Acute Mountain Sickness (AMS).',
            ],
            [
                'title' => 'Pack Smart & Dress in Layers',
                'description' => 'Weather varies greatly; carry thermal layers, a down jacket, rain gear, and comfortable trekking shoes.',
            ],
            [
                'title' => 'Start Early for Larkya La Pass',
                'description' => 'The pass is long and challenging; start before dawn to avoid strong afternoon winds.',
            ],
            [
                'title' => 'Carry Enough Cash',
                'description' => 'ATMs are not available beyond Soti Khola—bring enough cash for accommodation, food, and any extra expenses.',
            ],
            [
                'title' => 'Be Ready for Basic Accommodation & Limited Facilities',
                'description' => 'The trek is remote, and teahouses offer simple food and accommodation—bring a sleeping bag for extra warmth.',
            ],
            [
                'title' => 'Respect Local Culture & Traditions',
                'description' => 'Manaslu is home to Tibetan-influenced communities; be respectful, ask before taking photos, and follow local customs.',
            ],
            [
                'title' => 'Bring a Good Pair of Trekking Poles',
                'description' => 'The rugged terrain, river crossings, and steep descents make trekking poles a valuable tool for stability and endurance.',
            ]
        ];
        $langtang_tips = [
            [
                'title' => 'Permits',
                'description' => 'Obtain the necessary permits: Langtang National Park Permit (USD 30) and TIMS Card (USD 20). Booking a package often simplifies this process.'
            ],
            [
                'title' => 'Trek Difficulty',
                'description' => 'This is a challenging trek due to high altitude (reaching 4,610m at Lauribina La pass), rugged terrain, and daily ascents and descents of around 6 hours. Prepare physically with regular exercise and hiking.'
            ],
            [
                'title' => 'Altitude Sickness',
                'description' => 'Acclimatization is crucial. Trek slowly, stay hydrated, avoid alcohol and smoking, and be aware of altitude sickness symptoms (headache, vomiting, difficulty breathing, etc.). Inform your guide immediately if you experience any symptoms.'
            ],
            [
                'title' => 'Best Time to Trek',
                'description' => 'Spring (March-May) and Autumn (late September-November) offer the most stable weather and moderate climate.'
            ],
            [
                'title' => 'Travel Insurance',
                'description' => 'Essential for emergency helicopter evacuation and medical expenses due to the remote location. Ensure your policy covers high-altitude trekking.'
            ],
            [
                'title' => 'Accommodation and Food',
                'description' => 'Expect basic guesthouse accommodations (twin sharing, shared toilets). Three meals a day are provided (Dal Bhat, Thukpa, Momo, Noodles are common), but pack extra snacks. Consider a single room for an additional cost if desired.'
            ],
            [
                'title' => 'Packing',
                'description' => 'Pack light but in layers. Essentials include comfortable underwear, trekking clothes, base/thermal layers, windproof/waterproof jacket/pants, fleece/down jacket, gloves, socks, scarf, beanie, sun hat, trekking boots, casual shoes, duffel bag, daypack, trekking pole, map, water bottle, sleeping bag, toiletries, first aid kit, snacks, camera, charger, journal, cash, and documents.'
            ],
            [
                'title' => 'Physical Preparation',
                'description' => 'Improve stamina, strength, and endurance through regular exercise, including strength training, aerobic exercises (swimming, cycling, running), and hiking. Practice breathing techniques.'
            ],
            [
                'title' => 'Respect Local Culture',
                'description' => 'Be mindful of local customs and traditions. Ask before taking photos and show respect for the Tamang and Sherpa communities.'
            ],
        ];


        $this->createEssentialTips(
            Trek::first(),
            $everest_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(2),
            $annapurna_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(3),
            $manaslu_circuit_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(4),
            $langtang_tips
        );
        $this->createEssentialTips(
            Peak::first(),
            $lobuche_peak_climbing_tips
        );
        $this->createEssentialTips(
            Expedition::first(),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Tour::first(),
            $kathmandu_cultural_tour_tips
        );
        $this->createEssentialTips(
            Tour::find(2),
            $kathmandu_cultural_tour_tips
        );
        $this->createEssentialTips(
            Tour::find(3),
            $kathmandu_cultural_tour_tips
        );

    }
    protected function createEssentialTips(Model $model, array $tips): void
    {
        foreach ($tips as $tip) {
            if (isset($tip) && is_array($tip)) {
                $model->essentialTips()->create($tip);
            }
        }
    }
}
