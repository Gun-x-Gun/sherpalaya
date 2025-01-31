<?php

namespace Database\Seeders;

use App\Enums\TourType;
use App\Helpers\CuratorSeederHelper;
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
                'starting_point' => 'Kathmandu',
                'ending_point' => 'Kathmandu',
                'best_time_for_tour' => 'All Year Round',
                'costs_include' => [
                    'Tour Guide',
                    'Transportation',
                    'Entry Tickets',
                ],
                'costs_exclude' => [
                    'Personal Expenses',
                    'Lunch',
                ],
            ],
            [
                'title' => 'Mountain Biking in Kathmandu Valley',
                'description' => 'A thrilling cycling adventure through the rugged trails and lush forests of the Kathmandu Valley, passing traditional villages and terraced farmlands.',
                'duration' => '3 hours',
                'type' => TourType::CYCLING,
                'is_featured' => true,
                'grade' => '7',
                'starting_point' => 'Kathmandu',
                'ending_point' => 'Kathmandu',
                'best_time_for_tour' => 'Autumn and Spring',
                'costs_include' => [
                    'Mountain Bike',
                    'Guide',
                    'Safety Gear',
                ],
                'costs_exclude' => [
                    'Personal Insurance',
                    'Snacks',
                ],
            ],
            [
                'title' => 'Kathmandu City Running Tour',
                'description' => 'Experience the vibrant streets of Kathmandu while running through historic and cultural landmarks.',
                'duration' => '1 hour',
                'type' => TourType::RUNNING,
                'is_featured' => true,
                'grade' => '6',
                'starting_point' => 'Kathmandu',
                'ending_point' => 'Kathmandu',
                'best_time_for_tour' => 'All Year Round',
                'costs_include' => [
                    'Running Guide',
                    'Snacks and Water',
                ],
                'costs_exclude' => [
                    'Personal Running Gear',
                    'Transportation to Start Point',
                ],
            ],
            [
                'title' => 'Photography Tour of Pokhara',
                'description' => 'A photography-focused tour to capture the stunning beauty of Pokhara, including Phewa Lake, Sarangkot, and the Annapurna Range.',
                'duration' => '4 hours',
                'type' => TourType::PHOTOGRAPHY,
                'is_featured' => true,
                'grade' => '8',
                'starting_point' => 'Pokhara',
                'ending_point' => 'Pokhara',
                'best_time_for_tour' => 'Autumn and Spring',
                'costs_include' => [
                    'Photography Guide',
                    'Transportation',
                ],
                'costs_exclude' => [
                    'Camera Equipment',
                    'Meals',
                ],
            ],
            [
                'title' => 'Cultural Tour of Bhaktapur',
                'description' => 'Immerse yourself in the rich culture of Bhaktapur, visiting ancient temples, Durbar Square, and experiencing traditional Newari art and cuisine.',
                'duration' => '2 hours',
                'type' => TourType::CULTURAL,
                'is_featured' => true,
                'grade' => '6',
                'starting_point' => 'Bhaktapur',
                'ending_point' => 'Bhaktapur',
                'best_time_for_tour' => 'All Year Round',
                'costs_include' => [
                    'Guide',
                    'Entry Fees',
                ],
                'costs_exclude' => [
                    'Personal Expenses',
                    'Meals',
                ],
            ],
            [
                'title' => 'Helicopter Tour to Everest Base Camp',
                'description' => 'A luxury helicopter tour that takes you to Everest Base Camp and Kala Patthar for stunning views of Mount Everest and the surrounding peaks.',
                'duration' => '5 hours',
                'type' => TourType::OTHERS,
                'is_featured' => true,
                'grade' => '9',
                'starting_point' => 'Kathmandu',
                'ending_point' => 'Kathmandu',
                'best_time_for_tour' => 'Autumn and Spring',
                'costs_include' => [
                    'Helicopter Ride',
                    'Guide',
                    'Fuel Surcharge',
                ],
                'costs_exclude' => [
                    'Personal Insurance',
                    'Meals',
                ],
            ],
        ];
        $images = [
            'photos/culture.jpg',
            'photos/culture2.jpg',
            'photos/culture3.jpg',
            'photos/temple.jpg',
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
            shuffle($images); // Randomize the images
            
            foreach (array_slice($images, 0, rand(2, 3)) as $image) {
                CuratorSeederHelper::seedBelongsTo(
                    $tour,
                    'cover_image_id',
                    public_path($image)
                );
                CuratorSeederHelper::seedBelongsTo(
                    $tour,
                    'feature_image_id',
                    public_path($image)
                );
            }
            
        }
    }
}
