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
        // Destination::factory()
        // ->count(20)
        // ->create();

    //     Destination::create([
    //         'name' => 'Lukla',
    //         'description' => 'Lukla is a town in the Solukhumbu District, home to the Tenzing-Hillary Airport and a popular starting point for Everest trekkers.',
    //         'location' => [86.7278, 27.6869],
    //     ]);

    //     Destination::create([
    //         'name' => 'Kala Patthar',
    //         'description' => 'Kala Patthar offers one of the best panoramic views of Mount Everest and surrounding peaks, at an altitude of 5,545 meters.',
    //         'location' => [86.8282, 27.9886],
    //     ]);

    //     Destination::create([
    //         'name' => 'TIA Tribhuwan International Airport',
    //         'description' => 'The main international airport in Nepal, located in Kathmandu.',
    //         'location' => [85.3588, 27.7000],
    //     ]);

    //     Destination::create([
    //         'name' => 'Phakding',
    //         'description' => 'A small village in the Khumbu region of Nepal, a common stop for trekkers heading to Everest Base Camp.',
    //         'location' => [86.7138, 27.7426],
    //     ]);

    //     Destination::create([
    //         'name' => 'Namche Bazaar',
    //         'description' => 'The largest town in the Khumbu region, known for its vibrant markets and stunning views of the Himalayas.',
    //         'location' => [86.7134, 27.8048],
    //     ]);

    //     Destination::create([
    //         'name' => 'Dudh Koshi river',
    //         'description' => 'A glacial river flowing through the Everest region, its name translates to "Milky River" in Nepali.',
    //         'location' => [86.7325, 27.7093],
    //     ]);

    //     Destination::create([
    //         'name' => 'Khumjung Village',
    //         'description' => 'A picturesque village in the Khumbu region, known for its beautiful monastery and proximity to Mount Khumbila.',
    //         'location' => [86.7216, 27.8167],
    //     ]);

    //     Destination::create([
    //         'name' => 'Syangboche',
    //         'description' => 'Home to the world’s highest airport, Syangboche offers breathtaking views of the Himalayas.',
    //         'location' => [86.7144, 27.8125],
    //     ]);

    //     Destination::create([
    //         'name' => 'Tengboche',
    //         'description' => 'A hilltop village in the Khumbu region, known for the famous Tengboche Monastery.',
    //         'location' => [86.7640, 27.8361],
    //     ]);

    //     Destination::create([
    //         'name' => 'Tengboche Monastery',
    //         'description' => 'The largest monastery in the Khumbu region, a spiritual hub for the Sherpa community.',
    //         'location' => [86.7640, 27.8361],
    //     ]);

    //     Destination::create([
    //         'name' => 'Dingboche',
    //         'description' => 'A high-altitude village offering spectacular views of the surrounding peaks, at an altitude of 4,410 meters.',
    //         'location' => [86.8313, 27.8943],
    //     ]);

    //     Destination::create([
    //         'name' => 'Shomare and Orsho',
    //         'description' => 'Small villages located on the way to Everest Base Camp, offering stunning views and a peaceful environment.',
    //         'location' => [86.8305, 27.8698],
    //     ]);

    //     Destination::create([
    //         'name' => 'Chukung Village',
    //         'description' => 'A small settlement near Dingboche, known for its proximity to the Imja Valley and Island Peak.',
    //         'location' => [86.8871, 27.9053],
    //     ]);

    //     Destination::create([
    //         'name' => 'Lobuche',
    //         'description' => 'A small village in the Khumbu region, a popular stopover for trekkers heading to Everest Base Camp.',
    //         'location' => [86.7940, 27.9617],
    //     ]);

    //     Destination::create([
    //         'name' => 'Taboche',
    //         'description' => 'A majestic peak in the Khumbu region, standing at 6,542 meters, popular among climbers.',
    //         'location' => [86.7927, 27.9330],
    //     ]);

    //     Destination::create([
    //         'name' => 'Thukla',
    //         'description' => 'A small hamlet known for its memorials to climbers who lost their lives on Everest.',
    //         'location' => [86.8017, 27.9287],
    //     ]);

    //     Destination::create([
    //         'name' => 'Gorak Shep',
    //         'description' => 'The last settlement before reaching Everest Base Camp, at an altitude of 5,164 meters.',
    //         'location' => [86.8656, 28.0088],
    //     ]);

    //     Destination::create([
    //         'name' => 'Everest Base Camp',
    //         'description' => 'The starting point for climbers aiming to summit Mount Everest, at an altitude of 5,364 meters.',
    //         'location' => [86.8650, 28.0015],
    //     ]);

    //     Destination::create([
    //         'name' => 'Khagan Chorten',
    //         'description' => 'A traditional stupa in the Khumbu region, symbolizing Buddhist culture and beliefs.',
    //         'location' => [86.8145, 27.9215],
    //     ]);

    //     Destination::create([
    //         'name' => 'Amadablam',
    //         'description' => 'A stunning peak in the Everest region, often called the "Matterhorn of the Himalayas."',
    //         'location' => [86.8603, 27.8614],
    //     ]);

    //     Destination::create([
    //         'name' => 'Lhotse',
    //         'description' => 'The fourth-highest mountain in the world, standing at 8,516 meters.',
    //         'location' => [86.9334, 27.9616],
    //     ]);
    // }

    Destination::create([
        'name' => 'Lukla',
        'description' => 'Lukla is a town in the Solukhumbu District, home to the Tenzing-Hillary Airport and a popular starting point for Everest trekkers.',
        'location' => ['lat' => 27.6869, 'lng' => 86.7278],
    ]);

    Destination::create([
        'name' => 'Kala Patthar',
        'description' => 'Kala Patthar offers one of the best panoramic views of Mount Everest and surrounding peaks, at an altitude of 5,545 meters.',
        'location' => ['lat' => 27.9886, 'lng' => 86.8282],
    ]);

    Destination::create([
        'name' => 'TIA Tribhuwan International Airport',
        'description' => 'The main international airport in Nepal, located in Kathmandu.',
        'location' => ['lat' => 27.7000, 'lng' => 85.3588],
    ]);

    Destination::create([
        'name' => 'Phakding',
        'description' => 'A small village in the Khumbu region of Nepal, a common stop for trekkers heading to Everest Base Camp.',
        'location' => ['lat' => 27.7426, 'lng' => 86.7138],
    ]);

    Destination::create([
        'name' => 'Namche Bazaar',
        'description' => 'The largest town in the Khumbu region, known for its vibrant markets and stunning views of the Himalayas.',
        'location' => ['lat' => 27.8048, 'lng' => 86.7134],
    ]);

    Destination::create([
        'name' => 'Dudh Koshi river',
        'description' => 'A glacial river flowing through the Everest region, its name translates to "Milky River" in Nepali.',
        'location' => ['lat' => 27.7093, 'lng' => 86.7325],
    ]);

    Destination::create([
        'name' => 'Khumjung Village',
        'description' => 'A picturesque village in the Khumbu region, known for its beautiful monastery and proximity to Mount Khumbila.',
        'location' => ['lat' => 27.8167, 'lng' => 86.7216],
    ]);

    Destination::create([
        'name' => 'Syangboche',
        'description' => 'Home to the world’s highest airport, Syangboche offers breathtaking views of the Himalayas.',
        'location' => ['lat' => 27.8125, 'lng' => 86.7144],
    ]);

    Destination::create([
        'name' => 'Tengboche',
        'description' => 'A hilltop village in the Khumbu region, known for the famous Tengboche Monastery.',
        'location' => ['lat' => 27.8361, 'lng' => 86.7640],
    ]);

    Destination::create([
        'name' => 'Tengboche Monastery',
        'description' => 'The largest monastery in the Khumbu region, a spiritual hub for the Sherpa community.',
        'location' => ['lat' => 27.8361, 'lng' => 86.7640],
    ]);

    Destination::create([
        'name' => 'Dingboche',
        'description' => 'A high-altitude village offering spectacular views of the surrounding peaks, at an altitude of 4,410 meters.',
        'location' => ['lat' => 27.8943, 'lng' => 86.8313],
    ]);

    Destination::create([
        'name' => 'Shomare and Orsho',
        'description' => 'Small villages located on the way to Everest Base Camp, offering stunning views and a peaceful environment.',
        'location' => ['lat' => 27.8698, 'lng' => 86.8305],
    ]);

    Destination::create([
        'name' => 'Chukung Village',
        'description' => 'A small settlement near Dingboche, known for its proximity to the Imja Valley and Island Peak.',
        'location' => ['lat' => 27.9053, 'lng' => 86.8871],
    ]);

    Destination::create([
        'name' => 'Lobuche',
        'description' => 'A small village in the Khumbu region, a popular stopover for trekkers heading to Everest Base Camp.',
        'location' => ['lat' => 27.9617, 'lng' => 86.7940],
    ]);

    Destination::create([
        'name' => 'Taboche',
        'description' => 'A majestic peak in the Khumbu region, standing at 6,542 meters, popular among climbers.',
        'location' => ['lat' => 27.9330, 'lng' => 86.7927],
    ]);

    Destination::create([
        'name' => 'Thukla',
        'description' => 'A small hamlet known for its memorials to climbers who lost their lives on Everest.',
        'location' => ['lat' => 27.9287, 'lng' => 86.8017],
    ]);

    Destination::create([
        'name' => 'Gorak Shep',
        'description' => 'The last settlement before reaching Everest Base Camp, at an altitude of 5,164 meters.',
        'location' => ['lat' => 28.0088, 'lng' => 86.8656],
    ]);

    Destination::create([
        'name' => 'Everest Base Camp',
        'description' => 'The starting point for climbers aiming to summit Mount Everest, at an altitude of 5,364 meters.',
        'location' => ['lat' => 28.0015, 'lng' => 86.8650],
    ]);

    Destination::create([
        'name' => 'Khagan Chorten',
        'description' => 'A traditional stupa in the Khumbu region, symbolizing Buddhist culture and beliefs.',
        'location' => ['lat' => 27.9215, 'lng' => 86.8145],
    ]);

    Destination::create([
        'name' => 'Amadablam',
        'description' => 'A stunning peak in the Everest region, often called the "Matterhorn of the Himalayas."',
        'location' => ['lat' => 27.8614, 'lng' => 86.8603],
    ]);

    Destination::create([
        'name' => 'Lhotse',
        'description' => 'The fourth-highest mountain in the world, standing at 8,516 meters.',
        'location' => ['lat' => 27.9616, 'lng' => 86.9334],
    ]);


    }
}
