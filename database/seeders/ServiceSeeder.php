<?php

namespace Database\Seeders;

use App\Helpers\CuratorSeederHelper;
use App\Models\Destination;
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
                'location' => ['lat' => 27.7000, 'lng' => 85.3000], // Kathmandu coordinates
            ],
            [
                'title' => 'Art Exhibition at Patan Museum',
                'description' => 'Explore traditional and contemporary Nepali art at the Patan Museum. A must-visit event for art lovers.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.6622, 'lng' => 85.3240], // Patan coordinates
            ],
            [
                'title' => 'Live Music at Thamel',
                'description' => 'Enjoy live music events featuring local Nepali bands at popular venues in Thamel. Perfect for relaxing evenings.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.7109, 'lng' => 85.3000], // Thamel coordinates
            ],
            [
                'title' => 'Recommended Trekking Gear Shop in Thamel',
                'description' => 'Get high-quality trekking gear at our recommended shop in Thamel. Trusted by seasoned trekkers.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.7109, 'lng' => 85.3000], // Thamel coordinates
            ],
            [
                'title' => 'Local Handicraft Stores in Bhaktapur',
                'description' => 'Support local artisans by visiting handicraft stores in Bhaktapur. Find unique souvenirs like pottery, wood carvings, and paintings.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.6665, 'lng' => 85.4277], // Bhaktapur coordinates
            ],
            [
                'title' => 'Yoga and Wellness Center in Pokhara',
                'description' => 'Rejuvenate your body and mind with yoga sessions and wellness therapies at a serene center in Pokhara.',
                'cover_image_id' => null,
                'location' => ['lat' => 28.2090, 'lng' => 83.9856], // Pokhara coordinates
            ],
            [
                'title' => 'Nepali Cooking Classes in Kathmandu',
                'description' => 'Learn how to cook authentic Nepali dishes like momo, dal bhat, and gundruk in this hands-on cooking class.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.7000, 'lng' => 85.3000], // Kathmandu coordinates
            ],
            [
                'title' => 'Adventure Gear Rentals in Pokhara',
                'description' => 'Rent adventure gear like paragliding equipment, bikes, and kayaks for your Pokhara adventures.',
                'cover_image_id' => null,
                'location' => ['lat' => 28.2090, 'lng' => 83.9856], // Pokhara coordinates
            ],
            [
                'title' => 'Cultural Dance Performances in Bhaktapur',
                'description' => 'Enjoy traditional Nepali dance performances in Bhaktapur. A perfect way to learn about Nepal’s cultural heritage.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.6665, 'lng' => 85.4277], // Bhaktapur coordinates
            ],
            [
                'title' => 'Photography Workshops in Annapurna Region',
                'description' => 'Join photography workshops that teach you how to capture the stunning landscapes and culture of the Annapurna region.',
                'cover_image_id' => null,
                'location' => ['lat' => 28.4581, 'lng' => 83.8389], // Annapurna coordinates
            ],
        ];

        foreach ($services as $serviceData) {
           $serv = Service::create($serviceData);
           $serv->destinations()->sync(
            Destination::inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $serv,
            'cover_image_id',
            public_path('photos/Chor.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $serv,
            'images',
            public_path('photos/mountain1.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $serv,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $serv,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $serv,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $serv,
            'images',
            public_path('photos/mountain5.jpg')
        );
        }
    }
    }
