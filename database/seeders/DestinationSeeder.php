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
            [
                'name' => 'Lukla',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Lukla est une ville du district de Solukhumbu, abritant l\'aéroport Tenzing-Hillary et un point de départ populaire pour les randonneurs à l\'Everest.',
                    'en' => 'Lukla is a town in the Solukhumbu District, home to the Tenzing-Hillary Airport and a popular starting point for Everest trekkers.'
                ],
                'location' => [
                    'lat' => 27.6869,
                    'lng' => 86.7278
                ]
            ],
            [
                'name' => 'Kala Patthar',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Kala Patthar offre l\'une des meilleures vues panoramiques du mont Everest et des pics environnants, à une altitude de 5 545 mètres.',
                    'en' => 'Kala Patthar offers one of the best panoramic views of Mount Everest and surrounding peaks, at an altitude of 5,545 meters.'
                ],
                'location' => [
                    'lat' => 27.9886,
                    'lng' => 86.8282
                ]
            ],
            [
                'name' => 'TIA Tribhuwan International Airport',
                'region_id' => 2,
                'description' => [
                    'fr' => 'Le principal aéroport international du Népal, situé à Katmandou.',
                    'en' => 'The main international airport in Nepal, located in Kathmandu.'
                ],
                'location' => [
                    'lat' => 27.7000,
                    'lng' => 85.3588
                ]
            ],
            [
                'name' => 'Phakding',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Un petit village de la région du Khumbu au Népal, une étape courante pour les randonneurs se dirigeant vers le camp de base de l\'Everest.',
                    'en' => 'A small village in the Khumbu region of Nepal, a common stop for trekkers heading to Everest Base Camp.'
                ],
                'location' => [
                    'lat' => 27.7426,
                    'lng' => 86.7138
                ]
            ],
            [
                'name' => 'Namche Bazaar',
                'region_id' => 1,
                'description' => [
                    'fr' => 'La plus grande ville de la région du Khumbu, connue pour ses marchés animés et ses vues imprenables sur l\'Himalaya.',
                    'en' => 'The largest town in the Khumbu region, known for its vibrant markets and stunning views of the Himalayas.'
                ],
                'location' => [
                    'lat' => 27.8048,
                    'lng' => 86.7134
                ]
            ],
            [
                'name' => 'Dudh Koshi River',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Une rivière glaciaire traversant la région de l\'Everest, son nom se traduit par "rivière de lait" en népalais.',
                    'en' => 'A glacial river flowing through the Everest region, its name translates to "Milky River" in Nepali.'
                ],
                'location' => [
                    'lat' => 27.7093,
                    'lng' => 86.7325
                ]
            ],
            [
                'name' => 'Khumjung Village',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Un village pittoresque de la région du Khumbu, connu pour son beau monastère et sa proximité avec le mont Khumbila.',
                    'en' => 'A picturesque village in the Khumbu region, known for its beautiful monastery and proximity to Mount Khumbila.'
                ],
                'location' => [
                    'lat' => 27.8167,
                    'lng' => 86.7216
                ]
            ],
            [
                'name' => 'Syangboche',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Abritant l\'aéroport le plus haut du monde, Syangboche offre des vues imprenables sur l\'Himalaya.',
                    'en' => 'Home to the world’s highest airport, Syangboche offers breathtaking views of the Himalayas.'
                ],
                'location' => [
                    'lat' => 27.8125,
                    'lng' => 86.7144
                ]
            ],
            [
                'name' => 'Tengboche',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Un village perché dans la région du Khumbu, connu pour le célèbre monastère de Tengboche.',
                    'en' => 'A hilltop village in the Khumbu region, known for the famous Tengboche Monastery.'
                ],
                'location' => [
                    'lat' => 27.8361,
                    'lng' => 86.7640
                ]
            ],
            [
                'name' => 'Tengboche Monastery',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Le plus grand monastère de la région du Khumbu, un centre spirituel pour la communauté sherpa.',
                    'en' => 'The largest monastery in the Khumbu region, a spiritual hub for the Sherpa community.'
                ],
                'location' => [
                    'lat' => 27.8361,
                    'lng' => 86.7640
                ]
            ],
            [
                'name' => 'Dingboche',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Un village de haute altitude offrant des vues spectaculaires sur les pics environnants, à une altitude de 4 410 mètres.',
                    'en' => 'A high-altitude village offering spectacular views of the surrounding peaks, at an altitude of 4,410 meters.'
                ],
                'location' => [
                    'lat' => 27.8943,
                    'lng' => 86.8313
                ]
            ],
            [
                'name' => 'Everest Base Camp',
                'region_id' => 1,
                'description' => [
                    'fr' => 'Le point de départ pour les alpinistes visant le sommet du mont Everest, à une altitude de 5 364 mètres.',
                    'en' => 'The starting point for climbers aiming to summit Mount Everest, at an altitude of 5,364 meters.'
                ],
                'location' => [
                    'lat' => 28.0015,
                    'lng' => 86.8650
                ]
            ],
            [
                'name' => 'Pokhara',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Une ville pittoresque connue comme la porte d\'entrée de la région de l\'Annapurna, offrant des vues magnifiques sur les lacs et les montagnes.',
                    'en' => 'A picturesque city known as the gateway to the Annapurna region, offering stunning lake and mountain views.'
                ],
                'location' => [
                    'lat' => 28.2096,
                    'lng' => 83.9856
                ]
            ],
            [
                'name' => 'Nayapul',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Le point de départ du trek du camp de base de l\'Annapurna, un petit village situé près de Pokhara.',
                    'en' => 'The starting point of the Annapurna Base Camp trek, a small village located near Pokhara.'
                ],
                'location' => [
                    'lat' => 28.3646,
                    'lng' => 83.7785
                ]
            ],
            [
                'name' => 'Ghorepani',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un arrêt populaire sur le trek, connu pour ses magnifiques levers de soleil depuis Poon Hill.',
                    'en' => 'A popular stop on the trek known for its stunning sunrise views from Poon Hill.'
                ],
                'location' => [
                    'lat' => 28.4007,
                    'lng' => 83.6985
                ]
            ],
            [
                'name' => 'Annapurna Base Camp',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Le point culminant du trek, situé à 4 130 mètres avec des vues imprenables sur le massif de l\'Annapurna.',
                    'en' => 'The highlight of the trek, situated at 4130m with breathtaking views of the Annapurna massif.'
                ],
                'location' => [
                    'lat' => 28.5382,
                    'lng' => 83.8844
                ]
            ],
            [
                'name' => 'Soti Khola',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Le point de départ du trek du circuit du Manaslu, situé sur les rives de la rivière Budhi Gandaki.',
                    'en' => 'The starting point of the Manaslu Circuit Trek, located at the banks of the Budhi Gandaki River.'
                ],
                'location' => [
                    'lat' => 28.1382,
                    'lng' => 84.8565
                ]
            ],
            [
                'name' => 'Machha Khola',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un petit village Gurung sur le chemin du circuit du Manaslu, connu pour ses sentiers en bord de rivière et ses maisons de thé.',
                    'en' => 'A small Gurung village on the way to Manaslu Circuit, known for its riverside trails and tea houses.'
                ],
                'location' => [
                    'lat' => 28.2125,
                    'lng' => 84.8816
                ]
            ],
            [
                'name' => 'Jagat',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un village pittoresque marquant l\'entrée de la zone de conservation du Manaslu, nécessitant des permis pour poursuivre le trek.',
                    'en' => 'A picturesque village marking the entrance to the Manaslu Conservation Area, requiring permits for further trekking.'
                ],
                'location' => [
                    'lat' => 28.3090,
                    'lng' => 84.8819
                ]
            ],
            [
                'name' => 'Deng',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un petit village avec des vues sur le Shringi Himal, offrant une expérience culturelle des modes de vie influencés par le Tibet.',
                    'en' => 'A small settlement with views of Shringi Himal, offering a cultural experience of Tibetan-influenced lifestyles.'
                ],
                'location' => [
                    'lat' => 28.4245,
                    'lng' => 84.8537
                ]
            ],
            [
                'name' => 'Namrung',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un village traditionnel tibétain dans la région du Manaslu, offrant des vues panoramiques sur le mont Manaslu et les pics environnants.',
                    'en' => 'A traditional Tibetan village in the Manaslu region, offering panoramic views of Mt. Manaslu and surrounding peaks.'
                ],
                'location' => [
                    'lat' => 28.5097,
                    'lng' => 84.7829
                ]
            ],
            [
                'name' => 'Lho',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un beau village avec un grand monastère et des vues imprenables sur le mont Manaslu.',
                    'en' => 'A beautiful village with a large monastery and breathtaking views of Mt. Manaslu.'
                ],
                'location' => [
                    'lat' => 28.5533,
                    'lng' => 84.7267
                ]
            ],
            [
                'name' => 'Samagaon',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un village de haute altitude offrant des vues spectaculaires sur le mont Manaslu et une porte d\'entrée vers le camp de base du Manaslu.',
                    'en' => 'A high-altitude village offering spectacular views of Mt. Manaslu and a gateway to Manaslu Base Camp.'
                ],
                'location' => [
                    'lat' => 28.6076,
                    'lng' => 84.6733
                ]
            ],
            [
                'name' => 'Manaslu Base Camp',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Le camp de base pour les alpinistes tentant le mont Manaslu, situé à 4 800 mètres.',
                    'en' => 'The base camp for climbers attempting Mt. Manaslu, located at 4,800 meters.'
                ],
                'location' => [
                    'lat' => 28.6334,
                    'lng' => 84.6721
                ]
            ],
            [
                'name' => 'Samdo',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un village isolé près de la frontière tibétaine, offrant des vues spectaculaires sur les montagnes et des opportunités d\'acclimatation.',
                    'en' => 'A remote village near the Tibetan border, offering spectacular mountain views and acclimatization opportunities.'
                ],
                'location' => [
                    'lat' => 28.6556,
                    'lng' => 84.6262
                ]
            ],
            [
                'name' => 'Dharamsala (Larkya Phedi)',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un point de repos avant de traverser le col de Larkya La, proposant des lodges et des campements basiques.',
                    'en' => 'A resting point before crossing the Larkya La Pass, featuring basic lodges and campsites.'
                ],
                'location' => [
                    'lat' => 28.6689,
                    'lng' => 84.5934
                ]
            ],
            [
                'name' => 'Larkya La Pass',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Le point culminant du trek du circuit du Manaslu à 5 160 mètres, offrant des vues imprenables sur l\'Himlung Himal, le Cheo Himal et l\'Annapurna II.',
                    'en' => 'The highest point of the Manaslu Circuit Trek at 5,160 meters, offering stunning views of Himlung Himal, Cheo Himal, and Annapurna II.'
                ],
                'location' => [
                    'lat' => 28.6753,
                    'lng' => 84.5692
                ]
            ],
            [
                'name' => 'Bhimthang',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Une belle vallée après la descente du col de Larkya La, entourée de montagnes et de glaciers.',
                    'en' => 'A beautiful valley after descending from Larkya La Pass, surrounded by mountains and glaciers.'
                ],
                'location' => [
                    'lat' => 28.6334,
                    'lng' => 84.4947
                ]
            ],
            [
                'name' => 'Tilije',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Un village Gurung marquant la transition entre la région du Manaslu et celle de l\'Annapurna.',
                    'en' => 'A Gurung village marking the transition from the Manaslu region to the Annapurna region.'
                ],
                'location' => [
                    'lat' => 28.5823,
                    'lng' => 84.4678
                ]
            ],
            [
                'name' => 'Dharapani',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Le point de rencontre des treks du circuit du Manaslu et du circuit de l\'Annapurna, d\'où les randonneurs sortent vers Besisahar.',
                    'en' => 'The meeting point of the Manaslu Circuit and Annapurna Circuit Treks, from where trekkers exit towards Besisahar.'
                ],
                'location' => [
                    'lat' => 28.5402,
                    'lng' => 84.3714
                ]
            ],
            [
                'name' => 'Besisahar',
                'region_id' => 3,
                'description' => [
                    'fr' => 'Le point final du trek, une ville qui sert de porte d\'entrée aux régions de trekking du Manaslu et de l\'Annapurna.',
                    'en' => 'The endpoint of the trek, a town that serves as the gateway to both the Manaslu and Annapurna trekking regions.'
                ],
                'location' => [
                    'lat' => 28.2346,
                    'lng' => 84.3760
                ]
            ],
            [
                'name' => 'Syabrubesi',
                'region_id' => 4,
                'description' => [
                    'en' => 'The starting point of the Langtang Gosainkunda trek, a bustling town with lodges, shops, and access to the Langtang National Park.',
                    'fr' => 'Le point de départ du trek Langtang Gosainkunda, une ville animée avec des lodges, des boutiques et un accès au parc national de Langtang.'
                ],
                'location' => [
                    'lat' => 28.0333,
                    'lng' => 85.4167
                ]
            ],
            [
                'name' => 'Lama Hotel',
                'region_id' => 4,
                'description' => [
                    'en' => 'A basic lodge nestled in the forest, offering a first taste of the Langtang Valley\'s natural beauty.',
                    'fr' => 'Un lodge basique niché dans la forêt, offrant un premier aperçu de la beauté naturelle de la vallée de Langtang.'
                ],
                'location' => [
                    'lat' => 28.0806,
                    'lng' => 85.4583
                ]
            ],
            [
                'name' => 'Langtang Village',
                'region_id' => 4,
                'description' => [
                    'en' => 'A traditional Tamang village with stunning views of Langtang Lirung, offering cultural immersion and acclimatization.',
                    'fr' => 'Un village Tamang traditionnel avec une vue imprenable sur Langtang Lirung, offrant une immersion culturelle et une acclimatation.'
                ],
                'location' => [
                    'lat' => 28.1667,
                    'lng' => 85.5500
                ]
            ],
            [
                'name' => 'Kyanjin Gompa',
                'region_id' => 4,
                'description' => [
                    'en' => 'The last permanent settlement in the Langtang Valley, featuring a monastery, cheese factory, and breathtaking mountain vistas.',
                    'fr' => 'La dernière colonie permanente de la vallée de Langtang, avec un monastère, une fromagerie et des vues imprenables sur les montagnes.'
                ],
                'location' => [
                    'lat' => 28.2500,
                    'lng' => 85.5833
                ]
            ],
            [
                'name' => 'Tserko Ri',
                'region_id' => 4,
                'description' => [
                    'en' => 'A popular viewpoint near Kyanjin Gompa, offering panoramic views of the Langtang range, including Langtang Lirung and Gang Chhenpo.',
                    'fr' => 'Un point de vue populaire près de Kyanjin Gompa, offrant une vue panoramique sur la chaîne de Langtang, y compris Langtang Lirung et Gang Chhenpo.'
                ],
                'location' => [
                    'lat' => 28.2667,
                    'lng' => 85.6000
                ]
            ],
            [
                'name' => 'Yala Peak Base Camp',
                'region_id' => 4,
                'description' => [
                    'en' => 'Base camp for climbing Yala Peak, a trekking peak offering stunning views of the Langtang range.',
                    'fr' => 'Camp de base pour l\'escalade du Yala Peak, un sommet de trekking offrant une vue imprenable sur la chaîne de Langtang.'
                ],
                'location' => [
                    'lat' => 28.2833,
                    'lng' => 85.6167
                ]
            ],
            [
                'name' => 'Gosainkunda Lake',
                'region_id' => 4,
                'description' => [
                    'en' => 'The main lake in the Gosainkunda basin, a sacred pilgrimage site for Hindus and Buddhists, known for its stunning turquoise waters.',
                    'fr' => 'Le lac principal du bassin de Gosainkunda, un lieu de pèlerinage sacré pour les hindous et les bouddhistes, connu pour ses superbes eaux turquoises.'
                ],
                'location' => [
                    'lat' => 28.0833,
                    'lng' => 85.4167
                ]
            ],
            [
                'name' => 'Saraswati Kunda',
                'region_id' => 4,
                'description' => [
                    'en' => 'One of the smaller lakes in the Gosainkunda basin, known for its clear waters and scenic beauty.',
                    'fr' => 'L\'un des plus petits lacs du bassin de Gosainkunda, connu pour ses eaux claires et sa beauté pittoresque.'
                ],
                'location' => [
                    'lat' => 28.0750,
                    'lng' => 85.4250
                ]
            ],
            [
                'name' => 'Bhairav Kunda',
                'region_id' => 4,
                'description' => [
                    'en' => 'Another lake in the Gosainkunda basin, offering panoramic views of the surrounding mountains.',
                    'fr' => 'Un autre lac du bassin de Gosainkunda, offrant une vue panoramique sur les montagnes environnantes.'
                ],
                'location' => [
                    'lat' => 28.0917,
                    'lng' => 85.4083
                ]
            ],
            [
                'name' => 'Lauribinayak La Pass',
                'region_id' => 4,
                'description' => [
                    'en' => 'A high pass on the Langtang Gosainkunda trek, offering stunning views of the Langtang and Ganesh Himal ranges.',
                    'fr' => 'Un col élevé sur le trek Langtang Gosainkunda, offrant une vue imprenable sur les chaînes de Langtang et Ganesh Himal.'
                ],
                'location' => [
                    'lat' => 28.1167,
                    'lng' => 85.3833
                ]
            ],
            [
                'name' => 'Sing Gompa',
                'region_id' => 4,
                'description' => [
                    'en' => 'A small village with a cheese factory and a monastery, offering a peaceful retreat with beautiful views.',
                    'fr' => 'Un petit village avec une fromagerie et un monastère, offrant une retraite paisible avec de belles vues.'
                ],
                'location' => [
                    'lat' => 28.1333,
                    'lng' => 85.3667
                ]
            ],
            [
                'name' => 'Chandanbari',
                'region_id' => 4,
                'description' => [
                    'en' => 'A village on the Helambu trek, known for its apple orchards and traditional Tamang culture.',
                    'fr' => 'Un village sur le trek du Helambu, connu pour ses vergers de pommiers et sa culture Tamang traditionnelle.'
                ],
                'location' => [
                    'lat' => 27.9833,
                    'lng' => 85.3167
                ]
            ],
            [
                'name' => 'Melamchi Gaon',
                'region_id' => 4,
                'description' => [
                    'en' => 'A village in the Helambu region, offering a glimpse into rural life and beautiful mountain scenery.',
                    'fr' => 'Un village de la région du Helambu, offrant un aperçu de la vie rurale et de beaux paysages de montagne.'
                ],
                'location' => [
                    'lat' => 27.9167,
                    'lng' => 85.2833
                ]
            ],
            [
                'name' => 'Tarke Ghyang',
                'region_id' => 4,
                'description' => [
                    'en' => 'A picturesque village with a large Buddhist monastery, known for its peaceful atmosphere and stunning views.',
                    'fr' => 'Un village pittoresque avec un grand monastère bouddhiste, connu pour son atmosphère paisible et ses vues imprenables.'
                ],
                'location' => [
                    'lat' => 27.8500,
                    'lng' => 85.2500
                ]
            ],
            [
                'name' => 'Sundarijal',
                'region_id' => 4,
                'description' => [
                    'en' => 'The end point of the trek, a small town near Kathmandu with a beautiful waterfall and access to the Shivapuri Nagarjun National Park.',
                    'fr' => 'Le point final du trek, une petite ville près de Katmandou avec une belle cascade et un accès au parc national de Shivapuri Nagarjun.'
                ],
                'location' => [
                    'lat' => 27.7500,
                    'lng' => 85.3333
                ]
            ],
            [
                'name' => 'Kanchenjunga Base Camp',
                'region_id' => 7,
                'description' => [
                    'en' => 'The base camp for Kanchenjunga expeditions, offering stunning views of the mountain and surrounding peaks.',
                    'fr' => 'Le camp de base pour les expéditions du Kanchenjunga, offrant une vue imprenable sur la montagne et les sommets environnants.'
                ],
                'location' => [
                    'lat' => 27.7025,
                    'lng' => 88.1469
                ]
            ],
            [
                'name' => 'Khewang',
                'region_id' => 7,
                'description' => [
                    'en' => 'A small village on the Kanchenjunga Base Camp trek, known for its traditional Limbu culture and beautiful scenery.',
                    'fr' => 'Un petit village sur le trek du camp de base du Kanchenjunga, connu pour sa culture Limbu traditionnelle et ses beaux paysages.'
                ],
                'location' => [
                    'lat' => 27.6167,
                    'lng' => 88.0833
                ]
            ],
            [
                'name' => 'Yamphudin',
                'region_id' => 7,
                'description' => [
                    'en' => 'A picturesque village with a monastery, offering a peaceful rest stop on the trek.',
                    'fr' => 'Un village pittoresque avec un monastère, offrant une halte paisible sur le trek.'
                ],
                'location' => [
                    'lat' => 27.6500,
                    'lng' => 88.0500
                ]
            ],
            [
                'name' => 'Tortong',
                'region_id' => 7,
                'description' => [
                    'en' => 'A high-altitude campsite with panoramic views of the Himalayas.',
                    'fr' => 'Un camping en haute altitude avec une vue panoramique sur l\'Himalaya.'
                ],
                'location' => [
                    'lat' => 27.6833,
                    'lng' => 88.0167
                ]
            ],
            [
                'name' => 'Tseram',
                'region_id' => 7,
                'description' => [
                    'en' => 'A village with a unique cultural heritage and stunning views of Kanchenjunga.',
                    'fr' => 'Un village avec un patrimoine culturel unique et une vue imprenable sur le Kanchenjunga.'
                ],
                'location' => [
                    'lat' => 27.7167,
                    'lng' => 87.9833
                ]
            ],
            [
                'name' => 'Ramche',
                'region_id' => 7,
                'description' => [
                    'en' => 'A high-altitude grazing area with breathtaking views of the surrounding mountains.',
                    'fr' => 'Une zone de pâturage en haute altitude avec une vue imprenable sur les montagnes environnantes.'
                ],
                'location' => [
                    'lat' => 27.7500,
                    'lng' => 87.9500
                ]
            ],
            [
                'name' => 'Glacier Camp',
                'region_id' => 7,
                'description' => [
                    'en' => 'A campsite near the Kanchenjunga Glacier, offering a close-up view of the icy landscape.',
                    'fr' => 'Un camping près du glacier du Kanchenjunga, offrant une vue rapprochée du paysage glaciaire.'
                ],
                'location' => [
                    'lat' => 27.7833,
                    'lng' => 87.9167
                ]
            ],
            [
                'name' => 'Simbuwa',
                'region_id' => 7,
                'description' => [
                    'en' => 'A small village with a rich cultural heritage and stunning views of the Himalayas.',
                    'fr' => 'Un petit village avec un riche patrimoine culturel et une vue imprenable sur l\'Himalaya.'
                ],
                'location' => [
                    'lat' => 27.7667,
                    'lng' => 87.9333
                ]
            ],
            [
                'name' => 'Labrang',
                'region_id' => 7,
                'description' => [
                    'en' => 'A small village with a monastery, offering a peaceful retreat and panoramic views.',
                    'fr' => 'Un petit village avec un monastère, offrant une retraite paisible et une vue panoramique.'
                ],
                'location' => [
                    'lat' => 27.7333,
                    'lng' => 87.9667
                ]
            ],
            [
                'name' => 'Thukla',
                'region_id' => 7,
                'description' => [
                    'en' => 'The last village before the base camp, offering stunning views of the surrounding peaks.',
                    'fr' => 'Le dernier village avant le camp de base, offrant une vue imprenable sur les sommets environnants.'
                ],
                'location' => [
                    'lat' => 27.7833,
                    'lng' => 88.0167
                ]
            ],
            [
                'name' => 'Lhonak',
                'region_id' => 7,
                'description' => [
                    'en' => 'A small village near the base camp, known for its friendly locals and unique culture.',
                    'fr' => 'Un petit village près du camp de base, connu pour ses habitants sympathiques et sa culture unique.'
                ],
                'location' => [
                    'lat' => 27.8000,
                    'lng' => 88.0333
                ]
            ],
            [
                'name' => 'Oktang',
                'region_id' => 7,
                'description' => [
                    'en' => 'A small village with a beautiful monastery and stunning views of the Himalayas.',
                    'fr' => 'Un petit village avec un beau monastère et une vue imprenable sur l\'Himalaya.'
                ],
                'location' => [
                    'lat' => 27.8167,
                    'lng' => 88.0500
                ]
            ],
            [
                'name' => 'Thangpe',
                'region_id' => 7,
                'description' => [
                    'en' => 'A small village with a view of the Kangchenjunga massif and the surrounding peaks.',
                    'fr' => 'Un petit village avec vue sur le massif du Kangchenjunga et les sommets environnants.'
                ],
                'location' => [
                    'lat' => 27.8333,
                    'lng' => 88.0667
                ]
            ],
            [
                'name' => 'Sherpa Land',
                'region_id' => 7,
                'description' => [
                    'en' => 'A small region inhabited by the Sherpa people, known for their hospitality and mountaineering skills.',
                    'fr' => 'Une petite région habitée par le peuple Sherpa, connue pour son hospitalité et ses compétences en alpinisme.'
                ],
                'location' => [
                    'lat' => 27.8500,
                    'lng' => 88.0833
                ]
            ],
            [
                'name' => 'Pangpema',
                'region_id' => 7,
                'description' => [
                    'en' => 'A high-altitude pass with stunning views of the Himalayas, often used as an acclimatization hike.',
                    'fr' => 'Un col de haute altitude avec une vue imprenable sur l\'Himalaya, souvent utilisé comme randonnée d\'acclimatation.'
                ],
                'location' => [
                    'lat' => 27.8667,
                    'lng' => 88.1000
                ],
            ],
            [
                'name' => 'Skardu',
                'region_id' => 5,
                'description' => [
                    'en' => 'A major town and gateway to the K2 region, known for its bustling bazaar and stunning views of the surrounding mountains.',
                    'fr' => 'Une ville importante et porte d\'entrée de la région du K2, connue pour son bazar animé et ses vues imprenables sur les montagnes environnantes.',
                ],
                'location' => [
                    'lat' => 35.3000, // Approximate latitude
                    'lng' => 75.6500  // Approximate longitude
                ]
            ],
            [
                'name' => 'Askole',
                'region_id' => 5,
                'description' => [
                    'en' => 'The last village before entering the K2 trek, offering a glimpse into local Balti culture and serving as the starting point for many expeditions.',
                    'fr' => 'Le dernier village avant d\'entrer dans le trek du K2, offrant un aperçu de la culture Balti locale et servant de point de départ à de nombreuses expéditions.',
                ],
                'location' => [
                    'lat' => 35.5500, // Approximate latitude
                    'lng' => 75.8000  // Approximate longitude
                ]
            ],
            [
                'name' => 'Concordia',
                'region_id' => 5,
                'description' => [
                    'en' => 'A stunning confluence of glaciers, offering breathtaking panoramic views of K2 and several other high peaks.',
                    'fr' => 'Une confluence de glaciers époustouflante, offrant des vues panoramiques à couper le souffle sur le K2 et plusieurs autres hauts sommets.',
                ],
                'location' => [
                    'lat' => 35.8833, // Approximate latitude
                    'lng' => 76.3833  // Approximate longitude
                ]
            ],
            [
                'name' => 'K2 Base Camp',
                'region_id' => 5,
                'description' => [
                    'en' => 'The challenging and iconic base camp for K2 expeditions, a place of anticipation, preparation, and shared experiences among climbers.',
                    'fr' => 'Le camp de base difficile et emblématique des expéditions du K2, un lieu d\'anticipation, de préparation et d\'expériences partagées entre les grimpeurs.',
                ],
                'location' => [
                    'lat' => 35.8833, // Approximate latitude
                    'lng' => 76.4833  // Approximate longitude
                ]
            ],
            [
                'name' => 'Bottleneck',
                'region_id' => 5,
                'description' => [
                    'en' => 'A technically challenging and dangerous section of the K2 climb, a narrow couloir just below the summit.',
                    'fr' => 'Une section techniquement difficile et dangereuse de l\'ascension du K2, un couloir étroit juste en dessous du sommet.',
                ],
                'location' => [
                    'lat' => 35.8667, // Approximate latitude
                    'lng' => 76.5000  // Approximate longitude
                ]
            ],
            [
                'name' => 'The Shoulder',
                'region_id' => 5,
                'description' => [
                    'en' => 'A high-altitude plateau on K2, often used as a staging point for summit attempts.',
                    'fr' => 'Un plateau de haute altitude sur le K2, souvent utilisé comme point de départ pour les tentatives de sommet.',
                ],
                'location' => [
                    'lat' => 35.8500, // Approximate latitude
                    'lng' => 76.5167  // Approximate longitude
                ]
            ],
            [
                'name' => 'Summit of K2',
                'region_id' => 5,
                'description' => [
                    'en' => 'The ultimate goal, the summit of K2, offering unparalleled views and a profound sense of accomplishment.',
                    'fr' => 'Le but ultime, le sommet du K2, offrant des vues inégalées et un profond sentiment d\'accomplissement.',
                ],
                'location' => [
                    'lat' => 35.8617, // Approximate latitude
                    'lng' => 76.4900  // Approximate longitude
                ]
            ],
            [
                'name' => 'Mount Everest Base Camp (North Side)',
                'region_id' => 6,
                'description' => [
                    'en' => 'The northern base camp for Mount Everest expeditions, offering a unique perspective of the world\'s highest peak.',
                    'fr' => 'Le camp de base nord pour les expéditions du mont Everest, offrant une perspective unique du plus haut sommet du monde.'
                ],
                'location' => [
                    'lat' => 28.1400,
                    'lng' => 86.8500
                ]
            ],
            [
                'name' => 'Rongbuk Monastery',
                'region_id' => 6,
                'description' => [
                    'en' => 'The highest monastery in the world, serving as a spiritual and logistical hub for Everest expeditions.',
                    'fr' => 'Le plus haut monastère du monde, servant de centre spirituel et logistique pour les expéditions de l\'Everest.'
                ],
                'location' => [
                    'lat' => 28.2000,
                    'lng' => 86.8000
                ]
            ],
            [
                'name' => 'Advanced Base Camp (ABC) - Everest',
                'region_id' => 6,
                'description' => [
                    'en' => 'The staging point for summit attempts on Everest, located at an altitude of 6,500 meters.',
                    'fr' => 'Le point de départ pour les tentatives de sommet sur l\'Everest, situé à une altitude de 6 500 mètres.'
                ],
                'location' => [
                    'lat' => 28.1000,
                    'lng' => 86.9000
                ]
            ],
            [
                'name' => 'Lhakpa La Pass',
                'region_id' => 6,
                'description' => [
                    'en' => 'A high-altitude pass on the north side of Everest, offering stunning views of the surrounding peaks.',
                    'fr' => 'Un col de haute altitude sur le côté nord de l\'Everest, offrant des vues imprenables sur les sommets environnants.'
                ],
                'location' => [
                    'lat' => 28.0500,
                    'lng' => 86.9500
                ]
            ],
            [
                'name' => 'Changtse',
                'region_id' => 6,
                'description' => [
                    'en' => 'A subsidiary peak of Everest, often used for acclimatization before summit attempts.',
                    'fr' => 'Un sommet subsidiaire de l\'Everest, souvent utilisé pour l\'acclimatation avant les tentatives de sommet.'
                ],
                'location' => [
                    'lat' => 28.0833,
                    'lng' => 86.9167
                ]
            ],
            [
                'name' => 'Tingri',
                'region_id' => 6,
                'description' => [
                    'en' => 'A small town serving as the gateway to Everest expeditions, with stunning views of the Himalayas.',
                    'fr' => 'Une petite ville servant de porte d\'entrée aux expéditions de l\'Everest, avec des vues imprenables sur l\'Himalaya.'
                ],
                'location' => [
                    'lat' => 28.6500,
                    'lng' => 86.2000
                ]
            ],
            [
                'name' => 'Shishapangma Base Camp',
                'region_id' => 6,
                'description' => [
                    'en' => 'The base camp for Shishapangma, the 14th highest peak in the world, located entirely within Tibet.',
                    'fr' => 'Le camp de base du Shishapangma, le 14e plus haut sommet du monde, situé entièrement au Tibet.'
                ],
                'location' => [
                    'lat' => 28.3500,
                    'lng' => 85.7833
                ]
            ],
            [
                'name' => 'Cho Oyu Base Camp',
                'region_id' => 6,
                'description' => [
                    'en' => 'The base camp for Cho Oyu, the sixth highest mountain in the world, known for its relatively accessible climbing routes.',
                    'fr' => 'Le camp de base du Cho Oyu, le sixième plus haut sommet du monde, connu pour ses voies d\'escalade relativement accessibles.'
                ],
                'location' => [
                    'lat' => 28.1000,
                    'lng' => 86.6500
                ]
            ],
            [
                'name' => 'Nangpa La Pass',
                'region_id' => 6,
                'description' => [
                    'en' => 'A historic trade route and high-altitude pass used by Sherpas and climbers to access the Everest region.',
                    'fr' => 'Une ancienne route commerciale et un col de haute altitude utilisé par les Sherpas et les alpinistes pour accéder à la région de l\'Everest.'
                ],
                'location' => [
                    'lat' => 27.9833,
                    'lng' => 86.6000
                ]
            ],
            [
                'name' => 'Gyirong Valley',
                'region_id' => 6,
                'description' => [
                    'en' => 'A lush valley near the Nepal-Tibet border, known for its stunning landscapes and biodiversity.',
                    'fr' => 'Une vallée luxuriante près de la frontière Népal-Tibet, connue pour ses paysages magnifiques et sa biodiversité.'
                ],
                'location' => [
                    'lat' => 28.4000,
                    'lng' => 85.3667
                ]
            ],
            [
                'name' => 'Mount Kailash',
                'region_id' => 6,
                'description' => [
                    'en' => 'A sacred mountain in Tibetan Buddhism, revered as the center of the universe and a destination for spiritual pilgrimages.',
                    'fr' => 'Une montagne sacrée du bouddhisme tibétain, vénérée comme le centre de l\'univers et une destination pour les pèlerinages spirituels.'
                ],
                'location' => [
                    'lat' => 31.0667,
                    'lng' => 81.3000
                ]
            ],
            [
                'name' => 'Lake Manasarovar',
                'region_id' => 6,
                'description' => [
                    'en' => 'A sacred freshwater lake near Mount Kailash, revered in Hinduism, Buddhism, and Jainism.',
                    'fr' => 'Un lac d\'eau douce sacré près du mont Kailash, vénéré dans l\'hindouisme, le bouddhisme et le jaïnisme.'
                ],
                'location' => [
                    'lat' => 30.6500,
                    'lng' => 81.4500
                ]
            ],
            [
                'name' => 'Gurla Mandhata',
                'region_id' => 6,
                'description' => [
                    'en' => 'A massive peak near Mount Kailash, offering challenging climbing routes and stunning views.',
                    'fr' => 'Un sommet massif près du mont Kailash, offrant des voies d\'escalade difficiles et des vues magnifiques.'
                ],
                'location' => [
                    'lat' => 30.4333,
                    'lng' => 81.3000
                ]
            ],
            [
                'name' => 'Sakya Monastery',
                'region_id' => 6,
                'description' => [
                    'en' => 'A historic monastery in Tibet, known for its unique architecture and significance in Tibetan Buddhism.',
                    'fr' => 'Un monastère historique au Tibet, connu pour son architecture unique et son importance dans le bouddhisme tibétain.'
                ],
                'location' => [
                    'lat' => 28.9167,
                    'lng' => 88.0500
                ]
            ],
            [
                'name' => 'Yamdrok Lake',
                'region_id' => 6,
                'description' => [
                    'en' => 'A stunning turquoise lake in Tibet, considered one of the most sacred lakes in the region.',
                    'fr' => 'Un magnifique lac turquoise au Tibet, considéré comme l\'un des lacs les plus sacrés de la région.'
                ],
                'location' => [
                    'lat' => 28.9333,
                    'lng' => 90.4167
                ]
            ]
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