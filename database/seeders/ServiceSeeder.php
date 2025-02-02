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
                'title' => 'Emergency Helicopter Rescue Service',
                'description' => 'Explore traditional and contemporary Nepali art at the Patan Museum. A must-visit event for art lovers.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.6622, 'lng' => 85.3240], // Patan coordinates
            ],
            [
                'title' => 'Laundry Services',
                'description' => 'Quick and reliable laundry services for travelers in Kathmandu. Ideal for those who need fresh clothes after a long trek.',
                'cover_image_id' => null, // Replace with an actual image ID if available
                'location' => ['lat' => 27.7000, 'lng' => 85.3000], // Kathmandu coordinates
            ],
            [
                'title' => 'Accomodation',
                'description' => 'Enjoy live music events featuring local Nepali bands at popular venues in Thamel. Perfect for relaxing evenings.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.7109, 'lng' => 85.3000], // Thamel coordinates
            ],
            [
                'title' => 'Recommended Trekking Gear Shops',
                'description' => 'Get high-quality trekking gear at our recommended shop in Thamel. Trusted by seasoned trekkers.',
                'cover_image_id' => null,
                'location' => ['lat' => 27.7109, 'lng' => 85.3000], // Thamel coordinates
            ],
            [
                'title' => 'Adventure Gear Rentals',
                'description' => 'Rent adventure gear like paragliding equipment, bikes, and kayaks for your Pokhara adventures.',
                'cover_image_id' => null,
                'location' => ['lat' => 28.2090, 'lng' => 83.9856], // Pokhara coordinates
            ],
            [
                'title' => 'Photography Workshops',
                'description' => 'Join photography workshops that teach you how to capture the stunning landscapes and culture of the Annapurna region.',
                'cover_image_id' => null,
                'location' => ['lat' => 28.4581, 'lng' => 83.8389], // Annapurna coordinates
            ],
        ];

        $createdMedia = [];

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
