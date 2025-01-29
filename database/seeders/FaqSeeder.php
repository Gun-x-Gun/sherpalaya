<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'What is the problem?',
            'answer' => 'Question is the solution , Answer is the key',
        ]);
        Faq::create([
            'question' => 'What is the difference between trekking and peak climbing?',
            'answer' => 'Trekking involves long-distance walking, often on trails, through varied terrains, while peak climbing is the act of ascending to the summit of a mountain, which may require technical climbing skills and equipment.',
        ]);

        Faq::create([
            'question' => 'What equipment do I need for a high-altitude trek?',
            'answer' => 'For high-altitude treks, you will need sturdy hiking boots, layered clothing for varying temperatures, a sleeping bag, a backpack, trekking poles, a headlamp, and other essentials like a first-aid kit, water purification tablets, and high-energy snacks.',
        ]);

        Faq::create([
            'question' => 'How do I prepare for an expedition?',
            'answer' => 'Preparation for an expedition involves physical training, acclimatization to high altitudes, researching the route, packing the right gear, and ensuring you have the necessary permits and travel insurance.',
        ]);

        Faq::create([
            'question' => 'What are the risks of high-altitude trekking?',
            'answer' => 'Risks include altitude sickness, hypothermia, dehydration, and injuries from falls or avalanches. Proper preparation, acclimatization, and following safety guidelines can mitigate these risks.',
        ]);

        Faq::create([
            'question' => 'Do I need a guide for trekking or peak climbing?',
            'answer' => 'While some treks can be done independently, having a guide is highly recommended for peak climbing and challenging treks. Guides provide valuable local knowledge, ensure safety, and help with navigation and logistics.',
        ]);
    }
}
