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
        Category::create([
            'name' => [
                'en' => 'Expedition Category (en)',
                'fr' => 'Expedition Category (fr)',
            ],
            'type' => CategoryTypes::EXPEDITION
        ]);

        Category::create([
            'name' => [
                'en' => 'Peak Category (en)',
                'fr' => 'Peak Category (fr)',
            ],
            'type' => CategoryTypes::PEAK
        ]);

        Category::create([
            'name' => [
                'en' => 'Trek Category (en)',
                'fr' => 'Trek Category (fr)',
            ],
            'type' => CategoryTypes::TREK
        ]);
    }
}
