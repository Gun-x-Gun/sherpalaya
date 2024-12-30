<?php

namespace Database\Seeders;

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


    Destination::create([
        'name' => 'Lukla',
        'region_id' =>1,
        'description' => 'Lukla is a town in the Solukhumbu District, home to the Tenzing-Hillary Airport and a popular starting point for Everest trekkers.',
        'location' => ['lat' => 27.6869, 'lng' => 86.7278],
    ]);

    Destination::create([
        'name' => 'Kala Patthar',
        'region_id' =>1,
        'description' => 'Kala Patthar offers one of the best panoramic views of Mount Everest and surrounding peaks, at an altitude of 5,545 meters.',
        'location' => ['lat' => 27.9886, 'lng' => 86.8282],
    ]);

    Destination::create([
        'name' => 'TIA Tribhuwan International Airport',
        'region_id' =>2,
        'description' => 'The main international airport in Nepal, located in Kathmandu.',
        'location' => ['lat' => 27.7000, 'lng' => 85.3588],
    ]);

    Destination::create([
        'name' => 'Phakding',
        'region_id' =>1,
        'description' => 'A small village in the Khumbu region of Nepal, a common stop for trekkers heading to Everest Base Camp.',
        'location' => ['lat' => 27.7426, 'lng' => 86.7138],
    ]);

    Destination::create([
        'name' => 'Namche Bazaar',
        'region_id' =>1,
        'description' => 'The largest town in the Khumbu region, known for its vibrant markets and stunning views of the Himalayas.',
        'location' => ['lat' => 27.8048, 'lng' => 86.7134],
    ]);

    Destination::create([
        'name' => 'Dudh Koshi river',
        'region_id' =>1,
        'description' => 'A glacial river flowing through the Everest region, its name translates to "Milky River" in Nepali.',
        'location' => ['lat' => 27.7093, 'lng' => 86.7325],
    ]);

    Destination::create([
        'name' => 'Khumjung Village',
        'region_id' =>1,
        'description' => 'A picturesque village in the Khumbu region, known for its beautiful monastery and proximity to Mount Khumbila.',
        'location' => ['lat' => 27.8167, 'lng' => 86.7216],
    ]);

    Destination::create([
        'name' => 'Syangboche',
        'region_id' =>1,
        'description' => 'Home to the world’s highest airport, Syangboche offers breathtaking views of the Himalayas.',
        'location' => ['lat' => 27.8125, 'lng' => 86.7144],
    ]);

    Destination::create([
        'name' => 'Tengboche',
        'region_id' =>1,
        'description' => 'A hilltop village in the Khumbu region, known for the famous Tengboche Monastery.',
        'location' => ['lat' => 27.8361, 'lng' => 86.7640],
    ]);

    Destination::create([
        'name' => 'Tengboche Monastery',
        'region_id' =>1,
        'description' => 'The largest monastery in the Khumbu region, a spiritual hub for the Sherpa community.',
        'location' => ['lat' => 27.8361, 'lng' => 86.7640],
    ]);

    Destination::create([
        'name' => 'Dingboche',
        'region_id' =>1,
        'description' => 'A high-altitude village offering spectacular views of the surrounding peaks, at an altitude of 4,410 meters.',
        'location' => ['lat' => 27.8943, 'lng' => 86.8313],
    ]);

    Destination::create([
        'name' => 'Shomare and Orsho',
        'region_id' =>1,
        'description' => 'Small villages located on the way to Everest Base Camp, offering stunning views and a peaceful environment.',
        'location' => ['lat' => 27.8698, 'lng' => 86.8305],
    ]);

    Destination::create([
        'name' => 'Chukung Village',
        'region_id' =>1,
        'description' => 'A small settlement near Dingboche, known for its proximity to the Imja Valley and Island Peak.',
        'location' => ['lat' => 27.9053, 'lng' => 86.8871],
    ]);

    Destination::create([
        'name' => 'Lobuche',
        'region_id' =>1,
        'description' => 'A small village in the Khumbu region, a popular stopover for trekkers heading to Everest Base Camp.',
        'location' => ['lat' => 27.9617, 'lng' => 86.7940],
    ]);

    Destination::create([
        'name' => 'Taboche',
        'region_id' =>1,
        'description' => 'A majestic peak in the Khumbu region, standing at 6,542 meters, popular among climbers.',
        'location' => ['lat' => 27.9330, 'lng' => 86.7927],
    ]);

    Destination::create([
        'name' => 'Thukla',
        'region_id' =>1,
        'description' => 'A small hamlet known for its memorials to climbers who lost their lives on Everest.',
        'location' => ['lat' => 27.9287, 'lng' => 86.8017],
    ]);

    Destination::create([
        'name' => 'Gorak Shep',
        'region_id' =>1,
        'description' => 'The last settlement before reaching Everest Base Camp, at an altitude of 5,164 meters.',
        'location' => ['lat' => 28.0088, 'lng' => 86.8656],
    ]);

    Destination::create([
        'name' => 'Everest Base Camp',
        'region_id' =>1,
        'description' => 'The starting point for climbers aiming to summit Mount Everest, at an altitude of 5,364 meters.',
        'location' => ['lat' => 28.0015, 'lng' => 86.8650],
    ]);

    Destination::create([
        'name' => 'Khagan Chorten',
        'region_id' =>1,
        'description' => 'A traditional stupa in the Khumbu region, symbolizing Buddhist culture and beliefs.',
        'location' => ['lat' => 27.9215, 'lng' => 86.8145],
    ]);

    Destination::create([
        'name' => 'Amadablam',
        'region_id' =>1,
        'description' => 'A stunning peak in the Everest region, often called the "Matterhorn of the Himalayas."',
        'location' => ['lat' => 27.8614, 'lng' => 86.8603],
    ]);

    Destination::create([
        'name' => 'Lhotse',
        'region_id' =>1,
        'description' => 'The fourth-highest mountain in the world, standing at 8,516 meters.',
        'location' => ['lat' => 27.9616, 'lng' => 86.9334],
    ]);


    }
}
