<?php

namespace Database\Seeders;

use App\Enums\TourType;
use App\Models\Destination;
use App\Models\Region;
use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tours = [
            [
                'title' => 'Kathmandu Valley Sightseeing Tour',
                'description' => 'Explore the cultural and historical sites of Kathmandu, including UNESCO World Heritage Sites like Swayambhunath (Monkey Temple), Pashupatinath Temple, Boudhanath Stupa, and Patan Durbar Square.',
                'duration' => '2 hours',
                'type' => TourType::SIGHTSEEING,
                'is_featured' => true,
                'grade' => '6',
                'starting_ending_point' => 'Kathmandu',
                'best_time_for_tour' => 'All Year Round',
                'key_highlights' => [
                    'UNESCO World Heritage Sites',
                    'Rich Cultural Heritage',
                    'Historical Monuments',
                ],
                'costs_include' => [
                    'Tour Guide',
                    'Transportation',
                    'Entry Tickets',
                ],
                'costs_exclude' => [
                    'Personal Expenses',
                    'Lunch',
                ],
                'essential_tips' => [
                    'Carry a Water Bottle',
                    'Wear Comfortable Shoes',
                    'Bring a Camera',
                ],
            ],
            [
                'title' => 'Mountain Biking in Kathmandu Valley',
                'description' => 'A thrilling cycling adventure through the rugged trails and lush forests of the Kathmandu Valley, passing traditional villages and terraced farmlands.',
                'duration' => '3 hours',
                'type' => TourType::CYCLING,
                'is_featured' => false,
                'grade' => '7',
                'starting_ending_point' => 'Kathmandu',
                'best_time_for_tour' => 'Autumn and Spring',
                'key_highlights' => [
                    'Off-road Trails',
                    'Panoramic Views',
                    'Rural Villages',
                ],
                'costs_include' => [
                    'Mountain Bike',
                    'Guide',
                    'Safety Gear',
                ],
                'costs_exclude' => [
                    'Personal Insurance',
                    'Snacks',
                ],
                'essential_tips' => [
                    'Wear a Helmet',
                    'Stay Hydrated',
                    'Bring a Repair Kit',
                ],
            ],
            [
                'title' => 'Kathmandu City Running Tour',
                'description' => 'Experience the vibrant streets of Kathmandu while running through historic and cultural landmarks.',
                'duration' => '1 hour',
                'type' => TourType::RUNNING,
                'is_featured' => false,
                'grade' => '6',
                'starting_ending_point' => 'Kathmandu',
                'best_time_for_tour' => 'All Year Round',
                'key_highlights' => [
                    'Historic Sites',
                    'Local Markets',
                    'Traditional Neighborhoods',
                ],
                'costs_include' => [
                    'Running Guide',
                    'Snacks and Water',
                ],
                'costs_exclude' => [
                    'Personal Running Gear',
                    'Transportation to Start Point',
                ],
                'essential_tips' => [
                    'Wear Proper Running Shoes',
                    'Stretch Before Running',
                    'Carry a Small Water Bottle',
                ],
            ],
            [
                'title' => 'Photography Tour of Pokhara',
                'description' => 'A photography-focused tour to capture the stunning beauty of Pokhara, including Phewa Lake, Sarangkot, and the Annapurna Range.',
                'duration' => '4 hours',
                'type' => TourType::PHOTOGRAPHY,
                'is_featured' => true,
                'grade' => '8',
                'starting_ending_point' => 'Pokhara',
                'best_time_for_tour' => 'Autumn and Spring',
                'key_highlights' => [
                    'Phewa Lake Sunrise',
                    'Sarangkot Viewpoint',
                    'Local Villages',
                ],
                'costs_include' => [
                    'Photography Guide',
                    'Transportation',
                ],
                'costs_exclude' => [
                    'Camera Equipment',
                    'Meals',
                ],
                'essential_tips' => [
                    'Bring a Tripod',
                    'Use Filters for Landscapes',
                    'Carry Extra Batteries',
                ],
            ],
            [
                'title' => 'Cultural Tour of Bhaktapur',
                'description' => 'Immerse yourself in the rich culture of Bhaktapur, visiting ancient temples, Durbar Square, and experiencing traditional Newari art and cuisine.',
                'duration' => '2 hours',
                'type' => TourType::CULTURAL,
                'is_featured' => true,
                'grade' => '6',
                'starting_ending_point' => 'Bhaktapur',
                'best_time_for_tour' => 'All Year Round',
                'key_highlights' => [
                    'Ancient Temples',
                    'Durbar Square',
                    'Newari Culture',
                ],
                'costs_include' => [
                    'Guide',
                    'Entry Fees',
                ],
                'costs_exclude' => [
                    'Personal Expenses',
                    'Meals',
                ],
                'essential_tips' => [
                    'Wear Modest Clothing',
                    'Carry a Camera',
                    'Learn a Few Nepali Phrases',
                ],
            ],
            [
                'title' => 'Helicopter Tour to Everest Base Camp',
                'description' => 'A luxury helicopter tour that takes you to Everest Base Camp and Kala Patthar for stunning views of Mount Everest and the surrounding peaks.',
                'duration' => '5 hours',
                'type' => TourType::OTHERS,
                'is_featured' => true,
                'grade' => '9',
                'starting_ending_point' => 'Kathmandu',
                'best_time_for_tour' => 'Autumn and Spring',
                'key_highlights' => [
                    'Aerial Views of Everest',
                    'Landing at Kala Patthar',
                    'Panoramic Mountain Views',
                ],
                'costs_include' => [
                    'Helicopter Ride',
                    'Guide',
                    'Fuel Surcharge',
                ],
                'costs_exclude' => [
                    'Personal Insurance',
                    'Meals',
                ],
                'essential_tips' => [
                    'Carry Warm Clothing',
                    'Bring a Camera',
                    'Avoid Heavy Meals Before Flight',
                ],
            ],
        ];

        foreach ($tours as $tourData) {
            $tour = Tour::create($tourData);

            // Attach random destinations for the tour
            $tour->destinations()->sync(
                Destination::where('region_id',1)->inRandomOrder()
                    ->limit(5)
                    ->get()
                    ->pluck('id')
                    ->toArray()
            );
        }
    }
}
