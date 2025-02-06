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
            ['name' => 'Soti Khola', 'region_id' => 4, 'description' => 'The starting point of the Manaslu Circuit Trek, located at the banks of the Budhi Gandaki River.', 'location' => ['lat' => 28.1382, 'lng' => 84.8565]],
            ['name' => 'Machha Khola', 'region_id' => 4, 'description' => 'A small Gurung village on the way to Manaslu Circuit, known for its riverside trails and tea houses.', 'location' => ['lat' => 28.2125, 'lng' => 84.8816]],
            ['name' => 'Jagat', 'region_id' => 4, 'description' => 'A picturesque village marking the entrance to the Manaslu Conservation Area, requiring permits for further trekking.', 'location' => ['lat' => 28.3090, 'lng' => 84.8819]],
            ['name' => 'Deng', 'region_id' => 4, 'description' => 'A small settlement with views of Shringi Himal, offering a cultural experience of Tibetan-influenced lifestyles.', 'location' => ['lat' => 28.4245, 'lng' => 84.8537]],
            ['name' => 'Namrung', 'region_id' => 4, 'description' => 'A traditional Tibetan village in the Manaslu region, offering panoramic views of Mt. Manaslu and surrounding peaks.', 'location' => ['lat' => 28.5097, 'lng' => 84.7829]],
            ['name' => 'Lho', 'region_id' => 4, 'description' => 'A beautiful village with a large monastery and breathtaking views of Mt. Manaslu.', 'location' => ['lat' => 28.5533, 'lng' => 84.7267]],
            ['name' => 'Samagaon', 'region_id' => 4, 'description' => 'A high-altitude village offering spectacular views of Mt. Manaslu and a gateway to Manaslu Base Camp.', 'location' => ['lat' => 28.6076, 'lng' => 84.6733]],
            ['name' => 'Manaslu Base Camp', 'region_id' => 4, 'description' => 'The base camp for climbers attempting Mt. Manaslu, located at 4,800 meters.', 'location' => ['lat' => 28.6334, 'lng' => 84.6721]],
            ['name' => 'Samdo', 'region_id' => 4, 'description' => 'A remote village near the Tibetan border, offering spectacular mountain views and acclimatization opportunities.', 'location' => ['lat' => 28.6556, 'lng' => 84.6262]],
            ['name' => 'Dharamsala (Larkya Phedi)', 'region_id' => 4, 'description' => 'A resting point before crossing the Larkya La Pass, featuring basic lodges and campsites.', 'location' => ['lat' => 28.6689, 'lng' => 84.5934]],
            ['name' => 'Larkya La Pass', 'region_id' => 4, 'description' => 'The highest point of the Manaslu Circuit Trek at 5,160 meters, offering stunning views of Himlung Himal, Cheo Himal, and Annapurna II.', 'location' => ['lat' => 28.6753, 'lng' => 84.5692]],
            ['name' => 'Bhimthang', 'region_id' => 4, 'description' => 'A beautiful valley after descending from Larkya La Pass, surrounded by mountains and glaciers.', 'location' => ['lat' => 28.6334, 'lng' => 84.4947]],
            ['name' => 'Tilije', 'region_id' => 4, 'description' => 'A Gurung village marking the transition from the Manaslu region to the Annapurna region.', 'location' => ['lat' => 28.5823, 'lng' => 84.4678]],
            ['name' => 'Dharapani', 'region_id' => 4, 'description' => 'The meeting point of the Manaslu Circuit and Annapurna Circuit Treks, from where trekkers exit towards Besisahar.', 'location' => ['lat' => 28.5402, 'lng' => 84.3714]],
            ['name' => 'Besisahar', 'region_id' => 4, 'description' => 'The endpoint of the trek, a town that serves as the gateway to both the Manaslu and Annapurna trekking regions.', 'location' => ['lat' => 28.2346, 'lng' => 84.3760]],
            ['name' => 'Syabrubesi', 'region_id' => 5, 'description' => 'The starting point of the Langtang Gosainkunda trek, a bustling town with lodges, shops, and access to the Langtang National Park.', 'location' => ['lat' => 28.0333, 'lng' => 85.4167]],
            ['name' => 'Lama Hotel', 'region_id' => 5, 'description' => 'A basic lodge nestled in the forest, offering a first taste of the Langtang Valley\'s natural beauty.', 'location' => ['lat' => 28.0806, 'lng' => 85.4583]],
            ['name' => 'Langtang Village', 'region_id' => 5, 'description' => 'A traditional Tamang village with stunning views of Langtang Lirung, offering cultural immersion and acclimatization.', 'location' => ['lat' => 28.1667, 'lng' => 85.5500]],
            ['name' => 'Kyanjin Gompa', 'region_id' => 5, 'description' => 'The last permanent settlement in the Langtang Valley, featuring a monastery, cheese factory, and breathtaking mountain vistas.', 'location' => ['lat' => 28.2500, 'lng' => 85.5833]],
            ['name' => 'Tserko Ri', 'region_id' => 5, 'description' => 'A popular viewpoint near Kyanjin Gompa, offering panoramic views of the Langtang range, including Langtang Lirung and Gang Chhenpo.', 'location' => ['lat' => 28.2667, 'lng' => 85.6000]],
            ['name' => 'Yala Peak Base Camp', 'region_id' => 5, 'description' => 'Base camp for climbing Yala Peak, a trekking peak offering stunning views of the Langtang range.', 'location' => ['lat' => 28.2833, 'lng' => 85.6167]],
            ['name' => 'Gosainkunda Lake', 'region_id' => 5, 'description' => 'The main lake in the Gosainkunda basin, a sacred pilgrimage site for Hindus and Buddhists, known for its stunning turquoise waters.', 'location' => ['lat' => 28.0833, 'lng' => 85.4167]],
            ['name' => 'Saraswati Kunda', 'region_id' => 5, 'description' => 'One of the smaller lakes in the Gosainkunda basin, known for its clear waters and scenic beauty.', 'location' => ['lat' => 28.0750, 'lng' => 85.4250]],
            ['name' => 'Bhairav Kunda', 'region_id' => 5, 'description' => 'Another lake in the Gosainkunda basin, offering panoramic views of the surrounding mountains.', 'location' => ['lat' => 28.0917, 'lng' => 85.4083]],
            ['name' => 'Lauribinayak La Pass', 'region_id' => 5, 'description' => 'A high pass on the Langtang Gosainkunda trek, offering stunning views of the Langtang and Ganesh Himal ranges.', 'location' => ['lat' => 28.1167, 'lng' => 85.3833]],
            ['name' => 'Sing Gompa', 'region_id' => 5, 'description' => 'A small village with a cheese factory and a monastery, offering a peaceful retreat with beautiful views.', 'location' => ['lat' => 28.1333, 'lng' => 85.3667]],
            ['name' => 'Chandanbari', 'region_id' => 5, 'description' => 'A village on the Helambu trek, known for its apple orchards and traditional Tamang culture.', 'location' => ['lat' => 27.9833, 'lng' => 85.3167]],
            ['name' => 'Melamchi Gaon', 'region_id' => 5, 'description' => 'A village in the Helambu region, offering a glimpse into rural life and beautiful mountain scenery.', 'location' => ['lat' => 27.9167, 'lng' => 85.2833]],
            ['name' => 'Tarke Ghyang', 'region_id' => 5, 'description' => 'A picturesque village with a large Buddhist monastery, known for its peaceful atmosphere and stunning views.', 'location' => ['lat' => 27.8500, 'lng' => 85.2500]],
            ['name' => 'Sundarijal', 'region_id' => 5, 'description' => 'The end point of the trek, a small town near Kathmandu with a beautiful waterfall and access to the Shivapuri Nagarjun National Park.', 'location' => ['lat' => 27.7500, 'lng' => 85.3333]],

            ['name' => 'Kanchenjunga Base Camp', 'region_id' => 6, 'description' => 'The base camp for Kanchenjunga expeditions, offering stunning views of the mountain and surrounding peaks.', 'location' => ['lat' => 27.7025, 'lng' => 88.1469]],
            ['name' => 'Khewang', 'region_id' => 6, 'description' => 'A small village on the Kanchenjunga Base Camp trek, known for its traditional Limbu culture and beautiful scenery.', 'location' => ['lat' => 27.6167, 'lng' => 88.0833]],
            ['name' => 'Yamphudin', 'region_id' => 6, 'description' => 'A picturesque village with a monastery, offering a peaceful rest stop on the trek.', 'location' => ['lat' => 27.6500, 'lng' => 88.0500]],
            ['name' => 'Tortong', 'region_id' => 6, 'description' => 'A high-altitude campsite with panoramic views of the Himalayas.', 'location' => ['lat' => 27.6833, 'lng' => 88.0167]],
            ['name' => 'Tseram', 'region_id' => 6, 'description' => 'A village with a unique cultural heritage and stunning views of Kanchenjunga.', 'location' => ['lat' => 27.7167, 'lng' => 87.9833]],
            ['name' => 'Ramche', 'region_id' => 6, 'description' => 'A high-altitude grazing area with breathtaking views of the surrounding mountains.', 'location' => ['lat' => 27.7500, 'lng' => 87.9500]],
            ['name' => 'Glacier Camp', 'region_id' => 6, 'description' => 'A campsite near the Kanchenjunga Glacier, offering a close-up view of the icy landscape.', 'location' => ['lat' => 27.7833, 'lng' => 87.9167]],
            ['name' => 'Simbuwa', 'region_id' => 6, 'description' => 'A small village with a rich cultural heritage and stunning views of the Himalayas.', 'location' => ['lat' => 27.7667, 'lng' => 87.9333]],
            ['name' => 'Labrang', 'region_id' => 6, 'description' => 'A small village with a monastery, offering a peaceful retreat and panoramic views.', 'location' => ['lat' => 27.7333, 'lng' => 87.9667]],
            ['name' => 'Thukla', 'region_id' => 6, 'description' => 'The last village before the base camp, offering stunning views of the surrounding peaks.', 'location' => ['lat' => 27.7833, 'lng' => 88.0167]],
            ['name' => 'Lhonak', 'region_id' => 6, 'description' => 'A small village near the base camp, known for its friendly locals and unique culture.', 'location' => ['lat' => 27.8000, 'lng' => 88.0333]],
            ['name' => 'Oktang', 'region_id' => 6, 'description' => 'A small village with a beautiful monastery and stunning views of the Himalayas.', 'location' => ['lat' => 27.8167, 'lng' => 88.0500]],
            ['name' => 'Thangpe', 'region_id' => 6, 'description' => 'A small village with a view of the Kangchenjunga massif and the surrounding peaks.', 'location' => ['lat' => 27.8333, 'lng' => 88.0667]],
            ['name' => 'Sherpa Land', 'region_id' => 6, 'description' => 'A small region inhabited by the Sherpa people, known for their hospitality and mountaineering skills.', 'location' => ['lat' => 27.8500, 'lng' => 88.0833]],
            ['name' => 'Pangpema', 'region_id' => 6, 'description' => 'A high-altitude pass with stunning views of the Himalayas, often used as an acclimatization hike.', 'location' => ['lat' => 27.8667, 'lng' => 88.1000]],
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
