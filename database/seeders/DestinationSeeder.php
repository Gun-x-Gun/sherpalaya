<?php

namespace Database\Seeders;

use App\Helpers\CuratorSeederHelper;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $destinations = [
            ['name' => 'Lukla', 'region_id' => 1, 'description' => 'Lukla is a town in the Solukhumbu District, home to the Tenzing-Hillary Airport and a popular starting point for Everest trekkers.', 'location' => ['lat' => 27.6869, 'lng' => 86.7278]],
            ['name' => 'Kala Patthar', 'region_id' => 1, 'description' => 'Kala Patthar offers one of the best panoramic views of Mount Everest and surrounding peaks, at an altitude of 5,545 meters.', 'location' => ['lat' => 27.9886, 'lng' => 86.8282]],
            ['name' => 'TIA Tribhuwan International Airport', 'region_id' => 2, 'description' => 'The main international airport in Nepal, located in Kathmandu.', 'location' => ['lat' => 27.7000, 'lng' => 85.3588]],
            ['name' => 'Phakding', 'region_id' => 1, 'description' => 'A small village in the Khumbu region of Nepal, a common stop for trekkers heading to Everest Base Camp.', 'location' => ['lat' => 27.7426, 'lng' => 86.7138]],
            ['name' => 'Namche Bazaar', 'region_id' => 1, 'description' => 'The largest town in the Khumbu region, known for its vibrant markets and stunning views of the Himalayas.', 'location' => ['lat' => 27.8048, 'lng' => 86.7134]],
            ['name' => 'Dudh Koshi River', 'region_id' => 1, 'description' => 'A glacial river flowing through the Everest region, its name translates to "Milky River" in Nepali.', 'location' => ['lat' => 27.7093, 'lng' => 86.7325]],
            ['name' => 'Khumjung Village', 'region_id' => 1, 'description' => 'A picturesque village in the Khumbu region, known for its beautiful monastery and proximity to Mount Khumbila.', 'location' => ['lat' => 27.8167, 'lng' => 86.7216]],
            ['name' => 'Syangboche', 'region_id' => 1, 'description' => 'Home to the world’s highest airport, Syangboche offers breathtaking views of the Himalayas.', 'location' => ['lat' => 27.8125, 'lng' => 86.7144]],
            ['name' => 'Tengboche', 'region_id' => 1, 'description' => 'A hilltop village in the Khumbu region, known for the famous Tengboche Monastery.', 'location' => ['lat' => 27.8361, 'lng' => 86.7640]],
            ['name' => 'Tengboche Monastery', 'region_id' => 1, 'description' => 'The largest monastery in the Khumbu region, a spiritual hub for the Sherpa community.', 'location' => ['lat' => 27.8361, 'lng' => 86.7640]],
            ['name' => 'Dingboche', 'region_id' => 1, 'description' => 'A high-altitude village offering spectacular views of the surrounding peaks, at an altitude of 4,410 meters.', 'location' => ['lat' => 27.8943, 'lng' => 86.8313]],
            ['name' => 'Everest Base Camp', 'region_id' => 1, 'description' => 'The starting point for climbers aiming to summit Mount Everest, at an altitude of 5,364 meters.', 'location' => ['lat' => 28.0015, 'lng' => 86.8650]],
            ['name' => 'Pokhara', 'region_id' => 3, 'description' => 'A picturesque city known as the gateway to the Annapurna region, offering stunning lake and mountain views.', 'location' => ['lat' => 28.2096, 'lng' => 83.9856]],
            ['name' => 'Nayapul', 'region_id' => 3, 'description' => 'The starting point of the Annapurna Base Camp trek, a small village located near Pokhara.', 'location' => ['lat' => 28.3646, 'lng' => 83.7785]],
            ['name' => 'Ghorepani', 'region_id' => 3, 'description' => 'A popular stop on the trek known for its stunning sunrise views from Poon Hill.', 'location' => ['lat' => 28.4007, 'lng' => 83.6985]],
            ['name' => 'Annapurna Base Camp', 'region_id' => 3, 'description' => 'The highlight of the trek, situated at 4130m with breathtaking views of the Annapurna massif.', 'location' => ['lat' => 28.5382, 'lng' => 83.8844]],
        ];
        

        $images = [
            'photos/mountain1.jpg',
            'photos/mountain2.jpg',
            'photos/mountain3.jpg',
            'photos/mountain4.jpg',
            'photos/mountain5.jpg',
            'photos/mountain6.jpg',
            'photos/mountain7.jpg',
        ];

        foreach ($destinations as $destinationData) {
            $destination = Destination::create($destinationData);
            
            shuffle($images); // Randomize the images
            
            foreach (array_slice($images, 0, rand(2, 3)) as $image) {
                CuratorSeederHelper::seedBelongsToMany(
                    $destination,
                    'destinationImages',
                    public_path($image)
                );
            }
        }
    }
}
