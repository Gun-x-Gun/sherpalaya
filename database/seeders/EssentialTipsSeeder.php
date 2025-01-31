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

        $this->createEssentialTips(
            Trek::first(),
            $everest_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(2),
            $annapurna_base_camp_trek_tips
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
