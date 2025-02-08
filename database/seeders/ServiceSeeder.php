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
                'title' => [
                    'en' => 'Emergency Helicopter Rescue Service',
                    'fr' => 'Service de secours héliporté d\'urgence',
                ],
                'description' => [
                    'en' => 'Explore traditional and contemporary Nepali art at the Patan Museum. A must-visit event for art lovers.',
                    'fr' => 'Explorez l\'art népalais traditionnel et contemporain au musée de Patan. Un événement incontournable pour les amateurs d\'art.',
                ],
                'cover_image_id' => null,
                'location' => ['lat' => 27.6622, 'lng' => 85.3240],
            ],
            [
                'title' => [
                    'en' => 'Laundry Services',
                    'fr' => 'Services de blanchisserie',
                ],
                'description' => [
                    'en' => 'Quick and reliable laundry services for travelers in Kathmandu. Ideal for those who need fresh clothes after a long trek.',
                    'fr' => 'Services de blanchisserie rapides et fiables pour les voyageurs à Katmandou. Idéal pour ceux qui ont besoin de vêtements frais après un long trek.',
                ],
                'cover_image_id' => null,
                'location' => ['lat' => 27.7000, 'lng' => 85.3000],
            ],
            [
                'title' => [
                    'en' => 'Accommodation', // Corrected spelling
                    'fr' => 'Hébergement',
                ],
                'description' => [
                    'en' => 'Enjoy live music events featuring local Nepali bands at popular venues in Thamel. Perfect for relaxing evenings.',
                    'fr' => 'Profitez de concerts de musique live avec des groupes népalais locaux dans des lieux populaires de Thamel. Parfait pour des soirées de détente.',
                ],
                'cover_image_id' => null,
                'location' => ['lat' => 27.7109, 'lng' => 85.3000],
            ],
            [
                'title' => [
                    'en' => 'Recommended Trekking Gear Shops',
                    'fr' => 'Magasins de matériel de trekking recommandés',
                ],
                'description' => [
                    'en' => 'Get high-quality trekking gear at our recommended shop in Thamel. Trusted by seasoned trekkers.',
                    'fr' => 'Procurez-vous du matériel de trekking de haute qualité dans notre magasin recommandé à Thamel. Approuvé par des trekkeurs expérimentés.',
                ],
                'cover_image_id' => null,
                'location' => ['lat' => 27.7109, 'lng' => 85.3000],
            ],
            [
                'title' => [
                    'en' => 'Adventure Gear Rentals',
                    'fr' => 'Location de matériel d\'aventure',
                ],
                'description' => [
                    'en' => 'Rent adventure gear like paragliding equipment, bikes, and kayaks for your Pokhara adventures.',
                    'fr' => 'Louez du matériel d\'aventure comme de l\'équipement de parapente, des vélos et des kayaks pour vos aventures à Pokhara.',
                ],
                'cover_image_id' => null,
                'location' => ['lat' => 28.2090, 'lng' => 83.9856],
            ],
            [
                'title' => [
                    'en' => 'Photography Workshops',
                    'fr' => 'Ateliers de photographie',
                ],
                'description' => [
                    'en' => 'Join photography workshops that teach you how to capture the stunning landscapes and culture of the Annapurna region.',
                    'fr' => 'Participez à des ateliers de photographie qui vous apprendront à capturer les paysages et la culture époustouflants de la région de l\'Annapurna.',
                ],
                'cover_image_id' => null,
                'location' => ['lat' => 28.4581, 'lng' => 83.8389],
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
