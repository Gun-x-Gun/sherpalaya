<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Laundry Services in Kathmandu',
                'description' => 'Quick and reliable laundry services for travelers in Kathmandu. Ideal for those who need fresh clothes after a long trek.',
                'cover_image_id' => null, // Replace with an actual image ID if available
            ],
            [
                'title' => 'Art Exhibition at Patan Museum',
                'description' => 'Explore traditional and contemporary Nepali art at the Patan Museum. A must-visit event for art lovers.',
                'cover_image_id' => null,
            ],
            [
                'title' => 'Live Music at Thamel',
                'description' => 'Enjoy live music events featuring local Nepali bands at popular venues in Thamel. Perfect for relaxing evenings.',
                'cover_image_id' => null,
            ],
            [
                'title' => 'Recommended Trekking Gear Shop in Thamel',
                'description' => 'Get high-quality trekking gear at our recommended shop in Thamel. Trusted by seasoned trekkers.',
                'cover_image_id' => null,
            ],
            [
                'title' => 'Local Handicraft Stores in Bhaktapur',
                'description' => 'Support local artisans by visiting handicraft stores in Bhaktapur. Find unique souvenirs like pottery, wood carvings, and paintings.',
                'cover_image_id' => null,
            ],
            [
                'title' => 'Yoga and Wellness Center in Pokhara',
                'description' => 'Rejuvenate your body and mind with yoga sessions and wellness therapies at a serene center in Pokhara.',
                'cover_image_id' => null,
            ],
            [
                'title' => 'Nepali Cooking Classes in Kathmandu',
                'description' => 'Learn how to cook authentic Nepali dishes like momo, dal bhat, and gundruk in this hands-on cooking class.',
                'cover_image_id' => null,
            ],
            [
                'title' => 'Adventure Gear Rentals in Pokhara',
                'description' => 'Rent adventure gear like paragliding equipment, bikes, and kayaks for your Pokhara adventures.',
                'cover_image_id' => null,
            ],
            [
                'title' => 'Cultural Dance Performances in Bhaktapur',
                'description' => 'Enjoy traditional Nepali dance performances in Bhaktapur. A perfect way to learn about Nepal’s cultural heritage.',
                'cover_image_id' => null,
            ],
            [
                'title' => 'Photography Workshops in Annapurna Region',
                'description' => 'Join photography workshops that teach you how to capture the stunning landscapes and culture of the Annapurna region.',
                'cover_image_id' => null,
            ],
        ];

        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }
    }
    }
