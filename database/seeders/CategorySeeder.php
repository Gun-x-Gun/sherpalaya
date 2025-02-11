<?php

namespace Database\Seeders;

use App\Enums\CategoryTypes;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //expedition categories id 1-6
        Category::create([
            'name' => [
                'en' => '8000+',
                'fr' => '8000+ (fr)',
            ],
            'type' => CategoryTypes::EXPEDITION
        ]);
        Category::create([
            'name' => [
                'en' => '7000+',
                'fr' => '7000+ (fr)',
            ],
            'type' => CategoryTypes::EXPEDITION
        ]);
        Category::create([
            'name' => [
                'en' => '6000+',
                'fr' => '6000+ (fr)',
            ],
            'type' => CategoryTypes::EXPEDITION
        ]);
        Category::create([
            'name' => [
                'en' => 'Luxury',
                'fr' => 'Luxury (fr)',
            ],
            'type' => CategoryTypes::EXPEDITION
        ]);
        Category::create([
            'name' => [
                'en' => 'Seven Summits',
                'fr' => 'Seven Summits (fr)',
            ],
            'type' => CategoryTypes::EXPEDITION
        ]);
        Category::create([
            'name' => [
                'en' => 'Others',
                'fr' => 'Others (fr)',
            ],
            'type' => CategoryTypes::EXPEDITION
        ]);

        //trek categories id 7=11

        Category::create([
            'name' => [
                'en' => 'Everest',
                'fr' => 'Everest (fr)',
            ],
            'type' => CategoryTypes::TREK
        ]);
        Category::create([
            'name' => [
                'en' => 'Annapurna',
                'fr' => 'Annapurna (fr)',
            ],
            'type' => CategoryTypes::TREK
        ]);
        Category::create([
            'name' => [
                'en' => 'Langtang',
                'fr' => 'Langtang (fr)',
            ],
            'type' => CategoryTypes::TREK
        ]);
        Category::create([
            'name' => [
                'en' => 'Kangchanjunga',
                'fr' => 'Kangchanjunga (fr)',
            ],
            'type' => CategoryTypes::TREK
        ]);
        Category::create([
            'name' => [
                'en' => 'Other',
                'fr' => 'Other (fr)',
            ],
            'type' => CategoryTypes::TREK
        ]);

        //tour categories id 12 - 17

        Category::create([
            'name' => [
                'en' => 'Sightseeing',
                'fr' => 'Sightseeing (fr)',
            ],
            'type' => CategoryTypes::TOUR
        ]);
        Category::create([
            'name' => [
                'en' => 'Cycling',
                'fr' => 'Cycling (fr)',
            ],
            'type' => CategoryTypes::TOUR
        ]);
        Category::create([
            'name' => [
                'en' => 'Running',
                'fr' => 'Running (fr)',
            ],
            'type' => CategoryTypes::TOUR
        ]);
        Category::create([
            'name' => [
                'en' => 'Photography',
                'fr' => 'Photography (fr)',
            ],
            'type' => CategoryTypes::TOUR
        ]);
        Category::create([
            'name' => [
                'en' => 'Cultural/Meditation',
                'fr' => 'Cultural/Meditation (fr)',
            ],
            'type' => CategoryTypes::TOUR
        ]);
        Category::create([
            'name' => [
                'en' => 'Others',
                'fr' => 'Others (fr)',
            ],
            'type' => CategoryTypes::TOUR
        ]);
    }
}
