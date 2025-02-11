<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorSeederHelper;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Expedition;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpeditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $everest_expedition = Expedition::create([
            'title' => [
                'en' => 'Everest Expedition',
                'fr' => 'Expédition à l\'Everest',
            ],
            'description' => [
                'en' => 'Climbing Mount Everest known as the ultimate mountaineering achievement in mountaineering society. The mountain is targeted to summit attempts every year. Everest can be climbed both from the southern side in Nepal and the northern side Tibet. After the Cultural Revolution in the 1950s, China closed Tibetan borders to outsiders, and Nepal began welcoming foreigners to the Everest region. Since then, the southern approach to the mountain via Khumbu Valley has become popular among climbers.
        Everest has fascinated mountaineers all over the world since European climbers discovered Everest when Tibet was opened to outsiders in the 1920s. Mount Everest was first summited in 1953 by Tenzing Norgay Sherpa and Sir Edmund Hillary via the South Col.
        While climbing Mt. Everest is the opportunity of a lifetime, expeditions encounter many obstacles including high altitude, harsh weather conditions, and sheer exhaustion. Snow Leopard Trek strives to conduct the best expedition by putting high importance and priority on the safety aspects of the climb. We believe that our planning, logistics, staffing and experience coupled with your enthusiasm, patience, and perseverance would help you achieve your lifetime dream.',
                'fr' => 'L\'ascension du mont Everest est reconnue comme l\'accomplissement ultime en alpinisme. La montagne est ciblée pour des tentatives de sommet chaque année. L\'Everest peut être gravi à la fois par le versant sud au Népal et par le versant nord au Tibet. Après la Révolution culturelle dans les années 1950, la Chine a fermé les frontières tibétaines aux étrangers et le Népal a commencé à accueillir des étrangers dans la région de l\'Everest. Depuis lors, l\'approche sud de la montagne via la vallée de Khumbu est devenue populaire auprès des grimpeurs.
        L\'Everest fascine les alpinistes du monde entier depuis que les grimpeurs européens ont découvert l\'Everest lorsque le Tibet s\'est ouvert aux étrangers dans les années 1920. Le mont Everest a été gravi pour la première fois en 1953 par Tenzing Norgay Sherpa et Sir Edmund Hillary via le Col Sud.
        Bien que l\'ascension du mont Everest soit l\'occasion d\'une vie, les expéditions rencontrent de nombreux obstacles, notamment la haute altitude, les conditions météorologiques difficiles et l\'épuisement. Snow Leopard Trek s\'efforce d\'organiser la meilleure expédition en accordant une grande importance et priorité aux aspects de sécurité de l\'ascension. Nous pensons que notre planification, notre logistique, notre personnel et notre expérience, associés à votre enthousiasme, votre patience et votre persévérance, vous aideront à réaliser le rêve de votre vie.',
            ],
            'duration' => '72',
            'region_id' => Region::first()->id,
            'category_id' => Category::find(1)->id,
            'grade' => '9',
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Autumn (Sep-Oct-Nov) and Spring (March-April-May)',
                'fr' => 'Automne (sept.-oct.-nov.) et printemps (mars-avril-mai)',
            ],
            'starting_altitude' => 2610,
            'highest_altitude' => 8848,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                [
                    'en' => 'Arrival & Departure: Airport pick-up and drop-off.',
                    'fr' => 'Arrivée et départ : Prise en charge et dépose à l\'aéroport.',
                ],
                [
                    'en' => 'Accommodation: 4 nights in a deluxe hotel in Kathmandu (double room, bed & breakfast).',
                    'fr' => 'Hébergement : 4 nuits dans un hôtel de luxe à Katmandou (chambre double, petit-déjeuner).',
                ],
                [
                    'en' => 'Welcome dinner: One welcome dinner in a tourist-standard restaurant in Kathmandu.',
                    'fr' => 'Dîner de bienvenue : Un dîner de bienvenue dans un restaurant de niveau touristique à Katmandou.',
                ],
                [
                    'en' => 'Domestic Transportation: Kathmandu-Lukla-Kathmandu flight (including domestic airport tax).',
                    'fr' => 'Transport domestique : Vol Katmandou-Lukla-Katmandou (taxes d\'aéroport nationales incluses).',
                ],
                [
                    'en' => 'Transportation: Ground transportation Kathmandu/Base Camp/Kathmandu.',
                    'fr' => 'Transport : Transport terrestre Katmandou/Camp de base/Katmandou.',
                ],
                [
                    'en' => 'Permits & Fees: Lhotse Expedition Permit, Summit Route Permit, National Park Entry Permit, TIMS Card.',
                    'fr' => 'Permis et frais : Permis d\'expédition du Lhotse, Permis de route du sommet, Permis d\'entrée du parc national, Carte TIMS.',
                ],
                [
                    'en' => 'Food & Lodging: 3 meals a day during the trek and at Base Camp.',
                    'fr' => 'Nourriture et hébergement : 3 repas par jour pendant le trek et au camp de base.',
                ],
                [
                    'en' => 'Base Camp Staff: Cook and kitchen assistant at Base Camp.',
                    'fr' => 'Personnel du camp de base : Cuisinier et assistant de cuisine au camp de base.',
                ],
                [
                    'en' => 'Porters: Porter service to/from Base Camp.',
                    'fr' => 'Porteurs : Service de porteurs vers/depuis le camp de base.',
                ],
                [
                    'en' => 'Insurance: Medical and emergency rescue insurance for all staff.',
                    'fr' => 'Assurance : Assurance médicale et de sauvetage d\'urgence pour tout le personnel.',
                ],
                [
                    'en' => 'Farewell dinner: Farewell dinner in a standard restaurant in Kathmandu.',
                    'fr' => 'Dîner d\'adieu : Dîner d\'adieu dans un restaurant standard à Katmandou.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'International airfare to/from Kathmandu.',
                    'fr' => 'Billet d\'avion international vers/depuis Katmandou.',
                ],
                [
                    'en' => 'Nepalese visa fees.',
                    'fr' => 'Frais de visa népalais.',
                ],
                [
                    'en' => 'Extra nights in Kathmandu (due to early arrival, late departure, or early return).',
                    'fr' => 'Nuits supplémentaires à Katmandou (en raison d\'une arrivée anticipée, d\'un départ tardif ou d\'un retour anticipé).',
                ],
                [
                    'en' => 'Insurance: Travel, high-altitude, accident, medical, and emergency evacuation insurance.',
                    'fr' => 'Assurance : Assurance voyage, haute altitude, accident, médicale et évacuation d\'urgence.',
                ],
                [
                    'en' => 'Sherpa summit bonus (mandatory - minimum USD 1,500).',
                    'fr' => 'Prime de sommet Sherpa (obligatoire - minimum 1 500 USD).',
                ],
                [
                    'en' => 'Tips for base camp staff and porters.',
                    'fr' => 'Pourboires pour le personnel du camp de base et les porteurs.',
                ],
                [
                    'en' => 'Personal climbing equipment and clothing.',
                    'fr' => 'Équipement et vêtements d\'escalade personnels.',
                ],
                [
                    'en' => 'Emergency rescue evacuation costs and other personal expenses.',
                    'fr' => 'Frais d\'évacuation d\'urgence et autres dépenses personnelles.',
                ],
                [
                    'en' => 'Any items not listed in the "Price Includes" section.',
                    'fr' => 'Tout article non mentionné dans la section "Le prix comprend".',
                ],
            ],
            'is_featured' => true,
        ]);

        $everest_expedition->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $everest_expedition,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $everest_expedition,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition,
            'images',
            public_path('photos/mountain5.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition,
            'images',
            public_path('photos/mountain1.jpg')
        );

        $kanchenjunga_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Kanchenjunga Expedition',
                'fr' => 'Expédition au Kanchenjunga',
            ],
            'description' => [
                'en' => 'Towering 8,568m above sea level, Kanchenjunga is more than just the world’s third-highest mountain. Its five peaks are shrouded in myth, considered so sacred that the first men to climb it, a British party from 1955, stopped short of the actual summit in deference to the deities of the mountain. Today, it represents one of the toughest of all the 8000ers and a must for any serious mountaineer’s bucket list. A challenge for those who have scaled Everest, Kanchenjunga, which translates as “The Five Treasures of Snow” boasts no fewer than five peaks, four of which sit above 8,450m. Lying on the border between Nepal and India’s Sikkim state, it is not only one of the tallest mountains in the world, but also one of the most dangerous. Very few tourists venture into this area of the Himalayas, and even fewer attempt the peak - there are usually only around 25 successful summits a season. This remoteness is one of Kanchenjunga’s great appeals for serious climbers, but it also adds an element of risk. With a high percentage of avalanche and weather hazards, deciding who you climb with perhaps matters more here than anywhere else. Elite Exped’s guiding team - handpicked by our leaders Nimsdai and Mingma David Sherpa - have clocked up multiple ascents of Kanchenjunga. Several of our team - including Nim and Mingma David - have also been involved in high-profile, successful rescues above 8,000m. Simply put, you could not be in better hands when attempting this most tricky of mountains. Our tailored 51-day expedition plan includes plenty of rest and acclimatization days, plus an extensive climbing window. Because we always look after all our logistics and expedition planning - rather than relying on third-party providers - we’re adept at all the setup processes and rope-rigging required to scale a more remote peak like Kanchenjunga. Not only that, our team’s Nepalese heritage - and ability to straddle the divide between Western and Himalayan climbing cultures, means we can be sure that every aspect of your expedition will run like clockwork, offering you the best possible opportunity to reach this majestic mountain. From the moment you sign up, to the summit, and safely back home again, Elite Exped’s expert team will be with you, every step of the way. At Elite Exped, we extensively vet our hotel, travel and accommodation partners, and operate using the very best mountaineering equipment available, to ensure the highest standards of safety possible.',
                'fr' => 'S’élevant à 8 568 m au-dessus du niveau de la mer, le Kanchenjunga est bien plus que la troisième plus haute montagne du monde. Ses cinq sommets sont enveloppés de mythes, considérés comme si sacrés que les premiers hommes à l’escalader, une expédition britannique de 1955, se sont arrêtés juste avant le sommet réel par respect pour les divinités de la montagne. Aujourd’hui, il représente l’un des plus grands défis parmi les 8000 mètres et un must pour tout alpiniste sérieux. Un défi pour ceux qui ont déjà escaladé l’Everest, le Kanchenjunga, qui se traduit par « Les Cinq Trésors de Neige », compte pas moins de cinq sommets, dont quatre dépassent les 8 450 m. Situé à la frontière entre le Népal et l’État du Sikkim en Inde, il est non seulement l’une des montagnes les plus hautes du monde, mais aussi l’une des plus dangereuses. Très peu de touristes s’aventurent dans cette région de l’Himalaya, et encore moins tentent l’ascension - on compte généralement seulement environ 25 sommets réussis par saison. Cet isolement est l’un des principaux attraits du Kanchenjunga pour les alpinistes expérimentés, mais il ajoute également un élément de risque. Avec un pourcentage élevé d’avalanches et de dangers météorologiques, le choix de votre équipe d’escalade est peut-être plus crucial ici que nulle part ailleurs. L’équipe de guides d’Elite Exped - soigneusement sélectionnée par nos leaders Nimsdai et Mingma David Sherpa - a accumulé de nombreuses ascensions du Kanchenjunga. Plusieurs de nos membres, y compris Nim et Mingma David, ont également participé à des opérations de sauvetage de grande envergure au-dessus de 8 000 m. En résumé, vous ne pourriez être entre de meilleures mains pour tenter cette montagne si redoutable.',
            ],
            'duration' => '51',
            'region_id' => Region::find(5)->id,
            'category_id' => Category::find(1)->id,
            'grade' => '9',
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Spring & Summer',
                'fr' => 'Printemps et été',
            ],
            'starting_altitude' => 1400,
            'highest_altitude' => 8586,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                [
                    'en' => 'Arrival & Departure: Airport pick-up and drop-off.',
                    'fr' => 'Arrivée et départ : Prise en charge et dépose à l\'aéroport.',
                ],
                [
                    'en' => 'Accommodation: 4 nights in a deluxe hotel in Kathmandu (double room, bed & breakfast).',
                    'fr' => 'Hébergement : 4 nuits dans un hôtel de luxe à Katmandou (chambre double, petit-déjeuner).',
                ],
                [
                    'en' => 'Welcome dinner: One welcome dinner in a tourist-standard restaurant in Kathmandu.',
                    'fr' => 'Dîner de bienvenue : Un dîner de bienvenue dans un restaurant de niveau touristique à Katmandou.',
                ],
                [
                    'en' => 'Domestic Transportation: Kathmandu-Bhadrapur-Kathmandu flight (including domestic airport tax).',
                    'fr' => 'Transport domestique : Vol Katmandou-Bhadrapur-Katmandou (taxes d\'aéroport nationales incluses).',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'International airfare to/from Kathmandu.',
                    'fr' => 'Billet d\'avion international vers/depuis Katmandou.',
                ],
                [
                    'en' => 'Nepalese visa fees.',
                    'fr' => 'Frais de visa népalais.',
                ],
                [
                    'en' => 'Extra nights in Kathmandu (due to early arrival, late departure, or early return).',
                    'fr' => 'Nuits supplémentaires à Katmandou (en raison d\'une arrivée anticipée, d\'un départ tardif ou d\'un retour anticipé).',
                ],
            ],
            'is_featured' => true,
        ]);

        $kanchenjunga_expedition_data->destinations()->sync(
            Destination::where('region_id', 5)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $kanchenjunga_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $kanchenjunga_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount2.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain5.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $kanchenjunga_expedition_data,
            'images',
            public_path('photos/mountain1.jpg')
        );


        $lhotse_exped = Expedition::create([
            'title' => [
                'en' => 'Lhotse Expedition',
                'fr' => 'Expédition au Lhotse',
            ],
            'description' => [
                'en' => 'Lhotse, the fourth highest mountain in the world, stands tall at 8,516 meters (27,940 ft). It is connected to Everest via the South Col and is often climbed in conjunction with an Everest expedition. Lhotse presents a significant challenge to mountaineers, requiring technical climbing skills, high-altitude experience, and exceptional physical fitness. The climb involves navigating steep ice faces, crevasses, and challenging weather conditions. Success on Lhotse rewards climbers with breathtaking views of Everest, Ama Dablam, and the surrounding Himalayan peaks. The expedition typically follows the same route as the Everest Base Camp trek up to a certain point, then branches off towards Lhotse. Climbers must be well-acclimatized before attempting the summit push. The climbing season for Lhotse generally coincides with the Everest climbing season (spring and autumn).',
                'fr' => 'Lhotse, la quatrième plus haute montagne du monde, s\'élève à 8 516 mètres (27 940 pieds). Il est relié à l\'Everest via le Col Sud et est souvent gravi en parallèle avec une expédition à l\'Everest. Lhotse représente un défi majeur pour les alpinistes, nécessitant des compétences techniques, une expérience de la haute altitude et une excellente condition physique. L\'ascension implique de naviguer sur des parois de glace abruptes, des crevasses et des conditions météorologiques difficiles. Réussir l\'ascension du Lhotse offre aux grimpeurs des vues spectaculaires sur l\'Everest, l\'Ama Dablam et les sommets environnants de l\'Himalaya. L\'expédition suit généralement le même itinéraire que le trek du camp de base de l\'Everest jusqu\'à un certain point, avant de bifurquer vers le Lhotse. Les grimpeurs doivent être bien acclimatés avant de tenter l\'ascension finale. La saison d\'escalade du Lhotse coïncide généralement avec celle de l\'Everest (printemps et automne).',
            ],
            'duration' => '52',
            'region_id' => Region::find(1)->id,
            'category_id' => Category::find(1)->id,
            'grade' => '9',
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Spring (March-May) and Autumn (September-November)',
                'fr' => 'Printemps (mars-mai) et automne (septembre-novembre)',
            ],
            'starting_altitude' => 1400,
            'highest_altitude' => 8516,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                [
                    'en' => 'Arrival & Departure: Airport pick-up and drop-off.',
                    'fr' => 'Arrivée et départ : Prise en charge et dépose à l\'aéroport.',
                ],
                [
                    'en' => 'Accommodation: 4 nights in a deluxe hotel in Kathmandu (double room, bed & breakfast).',
                    'fr' => 'Hébergement : 4 nuits dans un hôtel de luxe à Katmandou (chambre double, petit-déjeuner).',
                ],
                [
                    'en' => 'Welcome dinner: One welcome dinner in a tourist-standard restaurant in Kathmandu.',
                    'fr' => 'Dîner de bienvenue : Un dîner de bienvenue dans un restaurant de niveau touristique à Katmandou.',
                ],
                [
                    'en' => 'Domestic Transportation: Kathmandu-Lukla-Kathmandu flight (including domestic airport tax).',
                    'fr' => 'Transport domestique : Vol Katmandou-Lukla-Katmandou (taxes d\'aéroport nationales incluses).',
                ],
                [
                    'en' => 'Transportation: Ground transportation Kathmandu/Base Camp/Kathmandu.',
                    'fr' => 'Transport : Transport terrestre Katmandou/Camp de base/Katmandou.',
                ],
                [
                    'en' => 'Permits & Fees: Lhotse Expedition Permit, Summit Route Permit, National Park Entry Permit, TIMS Card.',
                    'fr' => 'Permis et frais : Permis d\'expédition du Lhotse, Permis de route du sommet, Permis d\'entrée du parc national, Carte TIMS.',
                ],
                [
                    'en' => 'Food & Lodging: 3 meals a day during the trek and at Base Camp.',
                    'fr' => 'Nourriture et hébergement : 3 repas par jour pendant le trek et au camp de base.',
                ],
                [
                    'en' => 'Base Camp Staff: Cook and kitchen assistant at Base Camp.',
                    'fr' => 'Personnel du camp de base : Cuisinier et assistant de cuisine au camp de base.',
                ],
                [
                    'en' => 'Porters: Porter service to/from Base Camp.',
                    'fr' => 'Porteurs : Service de porteurs vers/depuis le camp de base.',
                ],
                [
                    'en' => 'Insurance: Medical and emergency rescue insurance for all staff.',
                    'fr' => 'Assurance : Assurance médicale et de sauvetage d\'urgence pour tout le personnel.',
                ],
                [
                    'en' => 'Farewell dinner: Farewell dinner in a standard restaurant in Kathmandu.',
                    'fr' => 'Dîner d\'adieu : Dîner d\'adieu dans un restaurant standard à Katmandou.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'International airfare to/from Kathmandu.',
                    'fr' => 'Billet d\'avion international vers/depuis Katmandou.',
                ],
                [
                    'en' => 'Nepalese visa fees.',
                    'fr' => 'Frais de visa népalais.',
                ],
                [
                    'en' => 'Extra nights in Kathmandu (due to early arrival, late departure, or early return).',
                    'fr' => 'Nuits supplémentaires à Katmandou (en raison d\'une arrivée anticipée, d\'un départ tardif ou d\'un retour anticipé).',
                ],
                [
                    'en' => 'Insurance: Travel, high-altitude, accident, medical, and emergency evacuation insurance.',
                    'fr' => 'Assurance : Assurance voyage, haute altitude, accident, médicale et évacuation d\'urgence.',
                ],
                [
                    'en' => 'Sherpa summit bonus (mandatory - minimum USD 1,500).',
                    'fr' => 'Prime de sommet Sherpa (obligatoire - minimum 1 500 USD).',
                ],
                [
                    'en' => 'Tips for base camp staff and porters.',
                    'fr' => 'Pourboires pour le personnel du camp de base et les porteurs.',
                ],
                [
                    'en' => 'Personal climbing equipment and clothing.',
                    'fr' => 'Équipement et vêtements d\'escalade personnels.',
                ],
                [
                    'en' => 'Emergency rescue evacuation costs and other personal expenses.',
                    'fr' => 'Frais d\'évacuation d\'urgence et autres dépenses personnelles.',
                ],
                [
                    'en' => 'Any items not listed in the "Price Includes" section.',
                    'fr' => 'Tout article non mentionné dans la section "Le prix comprend".',
                ],
            ],
            'is_featured' => true,
        ]);


        $lhotse_exped->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $lhotse_exped,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $lhotse_exped,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain5.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $lhotse_exped,
            'images',
            public_path('photos/mountain1.jpg')
        );

        $vip_everest_expedition_data = Expedition::create([
            'title' => [
                'en' => 'VIP Everest Expedition',
                'fr' => 'Expédition VIP à l\'Everest', // French translation
            ],
            'description' => [
                'en' => 'Mt. Everest Expedition is a lifetime mountaineering experience that allows you to stand at the highest point in the world. The Seven Summit Treks VIP Mt. Everest Expedition Service is a comprehensive package designed for those seeking to summit Mt. Everest in the utmost comfort and convenience. Climbing Mt. Everest is indeed a lifetime experience and one of the most challenging and rewarding adventures that a person can undertake. Mt. Everest is the highest mountain in the world and is located in the Himalayas, on the border between Nepal and China. Mt. Everest, also known as The Sagarmatha in Nepali is the highest peak on the earth with an altitude of 8848.86m. The VIP Mt. Everest Expedition Service offered by Seven Summit Treks is an exclusive package that caters to those who wish to conquer the world\'s highest mountain with a blend of adventure and luxury. This service is designed for those who want to experience the thrill of climbing Mt. Everest while enjoying the highest levels of comfort, and support. The service provides customized support, ensuring that every aspect of the expedition is tailored to meet the specific needs and preferences of the client, keeping health and safety as a top priority. The VIP Mount Everest Expedition begins with a helicopter transfer from Kathmandu to Lukla and then on to Namche Bazaar and Dingboche, with rest and acclimatization stop along the way. After reaching the Everest Base Camp, the team will spend several days acclimatizing and preparing for the ascent.',
                'fr' => 'L\'expédition au mont Everest est une expérience d\'alpinisme unique qui vous permet de vous tenir au point le plus haut du monde. Le service d\'expédition VIP au mont Everest de Seven Summit Treks est un forfait complet conçu pour ceux qui cherchent à atteindre le sommet du mont Everest dans le plus grand confort et la plus grande commodité. L\'ascension du mont Everest est en effet une expérience unique et l\'une des aventures les plus difficiles et les plus enrichissantes qu\'une personne puisse entreprendre. Le mont Everest est la plus haute montagne du monde et est situé dans l\'Himalaya, à la frontière entre le Népal et la Chine. Le mont Everest, également connu sous le nom de Sagarmatha en népalais, est le plus haut sommet de la terre avec une altitude de 8848,86 m. Le service d\'expédition VIP au mont Everest offert par Seven Summit Treks est un forfait exclusif qui s\'adresse à ceux qui souhaitent conquérir la plus haute montagne du monde avec un mélange d\'aventure et de luxe. Ce service est conçu pour ceux qui veulent vivre le frisson de l\'ascension du mont Everest tout en profitant des plus hauts niveaux de confort et de soutien. Le service offre un soutien personnalisé, garantissant que chaque aspect de l\'expédition est adapté pour répondre aux besoins et préférences spécifiques du client, en accordant la priorité à la santé et à la sécurité. L\'expédition VIP au mont Everest commence par un transfert en hélicoptère de Katmandou à Lukla, puis à Namche Bazaar et Dingboche, avec des arrêts de repos et d\'acclimatation en cours de route. Après avoir atteint le camp de base de l\'Everest, l\'équipe passera plusieurs jours à s\'acclimater et à se préparer pour l\'ascension.', // French translation
            ],
            'duration' => '49',
            'region_id' => 1, // Khumbu Region
            'category_id' => Category::find(4)->id,
            'grade' => '10', // Based on "5 Excellent" rating -  you must define the mapping of this rating to your grade system.
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Spring',
                'fr' => 'Printemps', // French translation
            ],
            'starting_altitude' => 1400, // Kathmandu
            'highest_altitude' => 8848.86,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // This should be verified and potentially adjusted based on the company's rating and your system.
            'costs_include' => [
                [
                    'en' => 'Arrival & Departure: Airport transfers (pick-up and drop-off) by private vehicle.',
                    'fr' => 'Arrivée et départ : Transferts aéroport (prise en charge et dépose) en véhicule privé.',
                ],
                [
                    'en' => 'Hotel Accommodation in Kathmandu: 5-10 nights in a 5-star hotel (single room, full board).',
                    'fr' => 'Hébergement à l\'hôtel à Katmandou : 5 à 10 nuits dans un hôtel 5 étoiles (chambre individuelle, pension complète).',
                ],
                [
                    'en' => 'Welcome Dinner: One welcome dinner in a tourist-standard restaurant in Kathmandu.',
                    'fr' => 'Dîner de bienvenue : Un dîner de bienvenue dans un restaurant de niveau touristique à Katmandou.',
                ],
                [
                    'en' => 'Cargo Clearance: Assistance with cargo clearance in Nepal Customs.',
                    'fr' => 'Dédouanement du fret : Assistance pour le dédouanement du fret dans les douanes népalaises.',
                ],
                [
                    'en' => 'Climbing Permit: Single climbing permit for Mt. Everest (per member) from the Nepal Government.',
                    'fr' => 'Permis d\'escalade : Permis d\'escalade unique pour le mont Everest (par membre) du gouvernement népalais.',
                ],
                [
                    'en' => 'Other Permits & Fees: Lobuche Peak permit from NMA, Sagarmatha National Park permit, TIMS Card, Pasang Lhamu Rural Municipality Entry Permit and fee.',
                    'fr' => 'Autres permis et frais : Permis du Lobuche Peak de la NMA, permis du parc national de Sagarmatha, carte TIMS, permis et frais d\'entrée de la municipalité rurale de Pasang Lhamu.',
                ],
                [
                    'en' => 'Icefall Fee: Khumbu Icefall climbing charge (SPCC).',
                    'fr' => 'Frais de la cascade de glace : Frais d\'escalade de la cascade de glace de Khumbu (SPCC).',
                ],
                [
                    'en' => 'Liaison Officer: 1 Government Liaison Officer (with equipment, salary, and insurance).',
                    'fr' => 'Agent de liaison : 1 agent de liaison du gouvernement (avec équipement, salaire et assurance).',
                ],
                [
                    'en' => 'Garbage Management: Stool shipment transfer & garbage deposit fees.',
                    'fr' => 'Gestion des déchets : Frais de transfert d\'expédition des selles et de dépôt des ordures.',
                ],
                [
                    'en' => 'Member Insurance: Travel and high-altitude insurance (including accident, medical, and emergency evacuation).',
                    'fr' => 'Assurance membre : Assurance voyage et haute altitude (y compris accident, médicale et évacuation d\'urgence).',
                ],
                [
                    'en' => 'Staff Insurance: Medical & emergency rescue insurance for all Nepalese staff, Sherpas, and UIAGM Guides.',
                    'fr' => 'Assurance du personnel : Assurance médicale et de sauvetage d\'urgence pour tout le personnel népalais, les Sherpas et les guides UIAGM.',
                ],
                [
                    'en' => 'Duffle Bag: Two Seven Summit Treks duffle bags.',
                    'fr' => 'Sac de voyage : Deux sacs de voyage Seven Summit Treks.',
                ],
                [
                    'en' => 'Medical Checkup: Medical checkup in Kathmandu before the expedition.',
                    'fr' => 'Examen médical : Examen médical à Katmandou avant l\'expédition.',
                ],
                [
                    'en' => 'Member Transportation: Helicopter flights as per itinerary (Kathmandu-Lukla-Namche, Namche-Dingboche, Everest BC return to Kathmandu, and Everest BC-Kathmandu via Namche if required).',
                    'fr' => 'Transport des membres : Vols en hélicoptère selon l\'itinéraire (Katmandou-Lukla-Namche, Namche-Dingboche, retour au CBE depuis le CBE, et CBE-Katmandou via Namche si nécessaire).',
                ],
                [
                    'en' => 'Rest in Kathmandu: Full board accommodation at a 5-star hotel in Kathmandu (if required).',
                    'fr' => 'Repos à Katmandou : Hébergement en pension complète dans un hôtel 5 étoiles à Katmandou (si nécessaire).',
                ],
                [
                    'en' => 'Expedition Equipment Transportation: Transportation of equipment from Kathmandu to Base Camp and back (by air cargo and porters/yaks).',
                    'fr' => 'Transport du matériel d\'expédition : Transport du matériel de Katmandou au camp de base et retour (par fret aérien et porteurs/yaks).',
                ],
                [
                    'en' => 'Trekking Logistics: Logistic management during the trek with a UIAGM guide and private cook. Upgraded lodges (with restrooms) and porter service for personal belongings.',
                    'fr' => 'Logistique de trekking : Gestion logistique pendant le trek avec un guide UIAGM et un cuisinier privé. Lodges améliorés (avec toilettes) et service de porteurs pour les effets personnels.',
                ],
                [
                    'en' => 'Photographer/Videographer: One personal photographer/videographer (including filming permit).',
                    'fr' => 'Photographe/Vidéaste : Un photographe/vidéaste personnel (permis de tournage inclus).',
                ],
                [
                    'en' => 'Member Luggage: Up to 200kg of luggage during the trek (porters and helicopter).',
                    'fr' => 'Bagages des membres : Jusqu\'à 200 kg de bagages pendant le trek (porteurs et hélicoptère).',
                ],
                [
                    'en' => 'Personal Equipment: Clothing, packing items, bags, personal medical kits, and trekking/climbing gear.', // This is usually EXCLUDED, not included.  Verify.
                    'fr' => 'Équipement personnel : Vêtements, articles d\'emballage, sacs, trousses médicales personnelles et équipement de trekking/escalade.', // This is usually EXCLUDED, not included. Verify.
                ],
                [
                    'en' => 'Food and Lodging: 3 meals a day (unlimited) with accommodation (hotel/lodge/base camp).',
                    'fr' => 'Nourriture et hébergement : 3 repas par jour (illimités) avec hébergement (hôtel/lodge/camp de base).',
                ],
                [
                    'en' => 'Drinks: Hot water, tea, coffee, beer, wine, etc. (unlimited).',
                    'fr' => 'Boissons : Eau chaude, thé, café, bière, vin, etc. (illimité).',
                ],
                [
                    'en' => 'Porters: Porter service to/from Base Camp.',
                    'fr' => 'Porteurs : Service de porteurs vers/depuis le camp de base.',
                ],
                [
                    'en' => 'Base Camp Staff: Experienced cook and kitchen helpers.',
                    'fr' => 'Personnel du camp de base : Cuisinier expérimenté et aides de cuisine.',
                ],
                [
                    'en' => 'Private Cook: A private cook during the expedition.',
                    'fr' => 'Cuisinier privé : Un cuisinier privé pendant l\'expédition.',
                ],
                [
                    'en' => 'Staff Salary & Allowance: Wages, equipment, food, and clothing for all Nepalese staff and porters.',
                    'fr' => 'Salaire et allocation du personnel : Salaires, équipement, nourriture et vêtements pour tout le personnel népalais et les porteurs.',
                ],
                [
                    'en' => 'Base Camp Tent: Individual tent per member.',
                    'fr' => 'Tente de camp de base : Tente individuelle par membre.',
                ],
                [
                    'en' => 'Base Camp Equipment: Tents (dining, kitchen, communication, toilet, shower, staff, storage), mattresses, pillows, tables, chairs, cooking gear.',
                    'fr' => 'Équipement du camp de base : Tentes (salle à manger, cuisine, communication, toilettes, douche, personnel, stockage), matelas, oreillers, tables, chaises, matériel de cuisine.',
                ],
                [
                    'en' => 'White Dome Tent: One large white dome tent for dining, coffee, and relaxation.',
                    'fr' => 'Tente dôme blanche : Une grande tente dôme blanche pour la salle à manger, le café et la détente.',
                ],
                [
                    'en' => 'Beverages: All kinds of hot and cold beverages.',
                    'fr' => 'Boissons : Toutes sortes de boissons chaudes et froides.',
                ],
                [
                    'en' => 'Bakery & Bar: Bakery and bar at Base Camp.',
                    'fr' => 'Boulangerie et bar: Boulangerie et bar au camp de base.',
                ],
                [
                    'en' => 'Heater: Heater in each member\'s tent at Base Camp.',
                    'fr' => 'Chauffage: Chauffage dans la tente de chaque membre au camp de base.',
                ],
                [
                    'en' => 'Power: Solar panel and generator for lights, charging, etc.',
                    'fr' => 'Électricité: Panneau solaire et générateur pour l\'éclairage, la recharge, etc.',
                ],
                [
                    'en' => 'Entertainment: 42" television with satellite, DVD player, and projector.',
                    'fr' => 'Divertissement: Télévision 42" avec satellite, lecteur DVD et projecteur.',
                ],
                [
                    'en' => 'Training: Oxygen, mask regulator, ice wall, and ladder training at Base Camp by UIAGM Guide.',
                    'fr' => 'Formation: Formation à l\'oxygène, au régulateur de masque, au mur de glace et à l\'échelle au camp de base par un guide UIAGM.',
                ],
                [
                    'en' => 'Lobuche Peak Climb: All necessary arrangements for climbing Lobuche Peak.',
                    'fr' => 'Ascension du Lobuche Peak: Tous les arrangements nécessaires pour l\'ascension du Lobuche Peak.',
                ],
                [
                    'en' => 'Doctor: One medical doctor at Base Camp with a comprehensive medical kit.',
                    'fr' => 'Médecin: Un médecin au camp de base avec une trousse médicale complète.',
                ],
                [
                    'en' => 'UIAGM Guide: 1 UIAGM guide throughout the expedition.',
                    'fr' => 'Guide UIAGM: 1 guide UIAGM tout au long de l\'expédition.',
                ],
                [
                    'en' => 'Climbing Sherpas: 4 veteran climbing Sherpas per member.',
                    'fr' => 'Sherpas d\'escalade: 4 Sherpas d\'escalade expérimentés par membre.',
                ],
                [
                    'en' => 'Sherpa Support: Assistance carrying gear to high camps.',
                    'fr' => 'Soutien des Sherpas: Assistance pour le transport du matériel vers les camps d\'altitude.',
                ],
                [
                    'en' => 'Sherpa Salary & Allowance: Salary, equipment, food, and clothing for climbing Sherpas.',
                    'fr' => 'Salaire et allocation des Sherpas: Salaire, équipement, nourriture et vêtements pour les Sherpas d\'escalade.',
                ],
                [
                    'en' => 'Bonus: Carry bonus for Sherpas and route fixing charges.',
                    'fr' => 'Bonus: Bonus de transport pour les Sherpas et frais de fixation des itinéraires.',
                ],
                [
                    'en' => 'Oxygen: 15 bottles (4 liters) of oxygen for members, 5 bottles for each Sherpa and UIAGM guide.',
                    'fr' => 'Oxygène: 15 bouteilles (4 litres) d\'oxygène pour les membres, 5 bouteilles pour chaque Sherpa et guide UIAGM.',
                ],
                [
                    'en' => 'Masks & Regulators: 2 sets of masks and regulators for members, 1 set for each Sherpa and UIAGM guide.',
                    'fr' => 'Masques et régulateurs: 2 ensembles de masques et régulateurs pour les membres, 1 ensemble pour chaque Sherpa et guide UIAGM.',
                ],
                [
                    'en' => 'High Camp Service: Tents, cooking gas, food, ropes, and other equipment for high camps.',
                    'fr' => 'Service de camp d\'altitude: Tentes, gaz de cuisine, nourriture, cordes et autres équipements pour les camps d\'altitude.',
                ],
                [
                    'en' => 'High Camp Kitchen & Dining: Mountain Hardware Space Station kitchen and dining tent at Camp II.',
                    'fr' => 'Cuisine et salle à manger du camp d\'altitude: Cuisine et tente de salle à manger Mountain Hardware Space Station au camp II.',
                ],
                [
                    'en' => 'High Altitude Tents: Shared tents in high camps (2 members per tent).',
                    'fr' => 'Tentes d\'altitude: Tentes partagées dans les camps d\'altitude (2 membres par tente).',
                ],
                [
                    'en' => 'Rope Fixing Team: Experienced Sherpas to fix the route to the summit.',
                    'fr' => 'Équipe de fixation des cordes: Sherpas expérimentés pour fixer l\'itinéraire jusqu\'au sommet.',
                ],
                [
                    'en' => 'Expert Guidance: Guidance from experienced climbers like Mingma Sherpa, Chhang Dawa Sherpa, and Tashi Lakpa Sherpa.',
                    'fr' => 'Conseils d\'experts: Conseils d\'alpinistes expérimentés comme Mingma Sherpa, Chhang Dawa Sherpa et Tashi Lakpa Sherpa.',
                ],
                [
                    'en' => 'Gamow Bag: 1 rescue sled (Gamow bag) for emergencies.',
                    'fr' => 'Sac Gamow: 1 traîneau de sauvetage (sac Gamow) pour les urgences.',
                ],
                [
                    'en' => 'Rescue Team: Sherpa rescue team at Camp II and Camp IV.',
                    'fr' => 'Équipe de sauvetage: Équipe de sauvetage Sherpa aux camps II et IV.',
                ],
                [
                    'en' => 'Internet: Unlimited internet service (Thuraya IP+) at Base Camp and Camp II.',
                    'fr' => 'Internet: Service Internet illimité (Thuraya IP+) au camp de base et au camp II.',
                ],
                [
                    'en' => 'Satellite Phone: 1 hour per day of satellite phone use.',
                    'fr' => 'Téléphone satellite: 1 heure d\'utilisation du téléphone satellite par jour.',
                ],
                [
                    'en' => 'Communication: Walkie-talkies for communication.',
                    'fr' => 'Communication: Talkies-walkies pour la communication.',
                ],
                [
                    'en' => 'Permits: Permits for satellite phone and walkie-talkie use.',
                    'fr' => 'Permis: Permis d\'utilisation du téléphone satellite et du talkie-walkie.',
                ],
                [
                    'en' => 'Weather Forecasting: Weather reports from Meteotest and the Nepal Government.',
                    'fr' => 'Prévisions météorologiques: Bulletins météorologiques de Meteotest et du gouvernement népalais.',
                ],
                [
                    'en' => 'Helicopter Service: 12-hour helicopter service for emergencies.',
                    'fr' => 'Service d\'hélicoptère: Service d\'hélicoptère 12 heures pour les urgences.',
                ],
                [
                    'en' => 'Relaxation Tent: Personal relaxation tent at Base Camp for yoga, meditation, massage, etc.',
                    'fr' => 'Tente de relaxation: Tente de relaxation personnelle au camp de base pour le yoga, la méditation, les massages, etc.',
                ],
                [
                    'en' => 'Summit Bonus: Summit bonus for UIAGM Guide and climbing Sherpas, including tips for Base Camp and high camp staff.',
                    'fr' => 'Bonus de sommet: Bonus de sommet pour le guide UIAGM et les Sherpas d\'escalade, y compris les pourboires pour le personnel du camp de base et des camps d\'altitude.',
                ],
                [
                    'en' => 'Certificate: Everest and Lobuche Peak climbing certificates.',
                    'fr' => 'Certificat: Certificats d\'escalade de l\'Everest et du Lobuche Peak.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'International airfare to/from Kathmandu.',
                    'fr' => 'Billet d\'avion international vers/depuis Katmandou.',
                ],
            ],
            'is_featured' => true, // Set as needed
        ]);
        $vip_everest_expedition_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $vip_everest_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $vip_everest_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $vip_everest_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $vip_everest_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );


        $vvip_manaslu_expedition_data = Expedition::create([
            'title' => [
                'en' => 'VVIP Manaslu Expedition',
                'fr' => 'Expédition VVIP au Manaslu', // French translation
            ],
            'description' => [
                'en' => 'Mt. Manaslu, The 8th highest peak in the world which is elevated at the height of 8,163m (26,781 ft) above sea level is located in the ridges of Mansiri Himal in the Gorkha District of Nepal. Regarded as the “mountain of the spirit”, Mt. Manaslu is identified as Mt. Kutung in Tibet. This peak lies about 64km east of Mt. Annapurna. The first known attempt to climb Mount Manaslu was made by a Japanese expedition in 1952, but they were not successful. The mountain was eventually climbed for the first time on 9 May 1956, by a Japanese expedition led by Toshio Imanishi and Gyalzen Norbu. The team consisted of Imanishi, Norbu, and six Sherpa climbers. They climbed the mountain via the North West Face. An expedition to Manaslu requires a high level of physical fitness, technical climbing skills, and experience in high-altitude mountaineering. It is also important to properly acclimatize to the altitude, have the right gear, and be prepared for the risks of avalanches, landslides, and other hazards. The views from the summit are said to be breathtaking, with panoramic vistas of the surrounding mountains and valleys. The Seven Summit Treks, Manaslu expedition will begin in the first week of September starting from Kathmandu. You will have a couple of days for the preparation of goods, equipment and paperwork. Afterward, you will drive to Besi Sahar and further trek via Larke pass to base camp as per the program. We will set up four camps. We will do a frequent rotation to each camp for the best acclimatization. The basecamp is normally set at (4,700m/15,420ft), Camp I at (5,500m/18,045ft), Camp II (6,200m/20,341ft), Camp III (6,800m/22,310ft), Camp IV (7,400m/24,278ft) and Summit',
                'fr' => 'Le mont Manaslu, le 8e plus haut sommet du monde, qui culmine à 8 163 mètres (26 781 pi) au-dessus du niveau de la mer, est situé sur les crêtes de l\'Himalaya de Mansiri, dans le district de Gorkha au Népal. Considéré comme la « montagne de l\'esprit », le mont Manaslu est identifié comme le mont Kutung au Tibet. Ce sommet se trouve à environ 64 km à l\'est du mont Annapurna. La première tentative connue d\'ascension du mont Manaslu a été faite par une expédition japonaise en 1952, mais elle n\'a pas réussi. La montagne a finalement été gravie pour la première fois le 9 mai 1956, par une expédition japonaise menée par Toshio Imanishi et Gyalzen Norbu. L\'équipe était composée d\'Imanishi, de Norbu et de six grimpeurs Sherpa. Ils ont gravi la montagne par la face nord-ouest. Une expédition au Manaslu exige un niveau élevé de forme physique, des compétences techniques en escalade et une expérience en alpinisme de haute altitude. Il est également important de s\'acclimater correctement à l\'altitude, d\'avoir le bon équipement et d\'être préparé aux risques d\'avalanches, de glissements de terrain et d\'autres dangers. On dit que les vues depuis le sommet sont à couper le souffle, avec des panoramas sur les montagnes et les vallées environnantes. L\'expédition Manaslu de Seven Summit Treks commencera la première semaine de septembre au départ de Katmandou. Vous aurez quelques jours pour préparer les marchandises, l\'équipement et les documents. Ensuite, vous conduirez jusqu\'à Besi Sahar et continuerez le trek via le col de Larke jusqu\'au camp de base, conformément au programme. Nous installerons quatre camps. Nous ferons une rotation fréquente vers chaque camp pour une meilleure acclimatation. Le camp de base est normalement installé à (4 700 m/15 420 pi), le camp I à (5 500 m/18 045 pi), le camp II (6 200 m/20 341 pi), le camp III (6 800 m/22 310 pi), le camp IV (7 400 m/24 278 pi) et le sommet.', // French translation
            ],
            'duration' => '27',
            'region_id' => 3, // You need to find the correct region ID for Manaslu.
            'category_id' => Category::find(4)->id,
            'grade' => '5', // Based on "5 Excellent" rating - you must define the mapping of this rating to your grade system.
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Autumn',
                'fr' => 'Automne', // French translation
            ],
            'starting_altitude' => 1400, // Kathmandu
            'highest_altitude' => 8163,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Verify and adjust based on company rating and your system.
            'costs_include' => [
                [
                    'en' => 'Arrival & Departure: Airport transfers (pick-up and drop-off) by private vehicle.',
                    'fr' => 'Arrivée et départ : Transferts aéroport (prise en charge et dépose) en véhicule privé.',
                ],
                [
                    'en' => 'Hotel Accommodation in Kathmandu: Hotel in Kathmandu (5-star category, full board).',
                    'fr' => 'Hébergement à l\'hôtel à Katmandou : Hôtel à Katmandou (catégorie 5 étoiles, pension complète).',
                ],
                [
                    'en' => 'Welcome Dinner: Welcome dinner at a Nepalese or European restaurant in Kathmandu.',
                    'fr' => 'Dîner de bienvenue : Dîner de bienvenue dans un restaurant népalais ou européen à Katmandou.',
                ],
                [
                    'en' => 'Cargo Clearance: Assistance with cargo clearance in Nepal Customs (clearance cost subject to charge).',
                    'fr' => 'Dédouanement du fret : Assistance pour le dédouanement du fret dans les douanes népalaises (frais de dédouanement sujets à des frais).',
                ],
                [
                    'en' => 'Permits: Manaslu climbing permit, Manaslu Conservation Area entry permit, Restricted Area Permit.',
                    'fr' => 'Permis : Permis d\'escalade du Manaslu, permis d\'entrée de la zone de conservation du Manaslu, permis de zone restreinte.',
                ],
                [
                    'en' => 'Liaison Officer: 1 Government Liaison Officer (with equipment, salary, and accommodation).',
                    'fr' => 'Agent de liaison : 1 agent de liaison du gouvernement (avec équipement, salaire et hébergement).',
                ],
                [
                    'en' => 'Garbage Management: Stool shipment transfer and garbage deposit fees.',
                    'fr' => 'Gestion des déchets : Frais de transfert d\'expédition des selles et de dépôt des ordures.',
                ],
                [
                    'en' => 'Insurance: Medical and emergency rescue insurance for all Nepalese staff.',
                    'fr' => 'Assurance : Assurance médicale et de sauvetage d\'urgence pour tout le personnel népalais.',
                ],
                [
                    'en' => 'Map: Trekking and climbing map.',
                    'fr' => 'Carte : Carte de trekking et d\'escalade.',
                ],
                [
                    'en' => 'Duffle Bag: Two Seven Summit Treks duffle bags.',
                    'fr' => 'Sac de voyage : Deux sacs de voyage Seven Summit Treks.',
                ],
                [
                    'en' => 'Member Transportation: Helicopter flights as per itinerary (Kathmandu-Samagaun, Manaslu BC-Kathmandu).',
                    'fr' => 'Transport des membres : Vols en hélicoptère selon l\'itinéraire (Katmandou-Samagaun, CB du Manaslu-Katmandou).',
                ],
                [
                    'en' => 'Equipment Transportation: Transportation of equipment (Kathmandu-Arukhet-Samagaun-BC and return).',
                    'fr' => 'Transport du matériel : Transport du matériel (Katmandou-Arukhet-Samagaun-CB et retour).',
                ],
                [
                    'en' => 'Member Luggage: Up to 70kg of personal baggage during the trek.',
                    'fr' => 'Bagages des membres : Jusqu\'à 70 kg de bagages personnels pendant le trek.',
                ],
                [
                    'en' => 'Food & Lodging (Trek): 3 meals a day with accommodation (hotel/lodge/teahouse).',
                    'fr' => 'Nourriture et hébergement (Trek) : 3 repas par jour avec hébergement (hôtel/lodge/maison de thé).',
                ],
                [
                    'en' => 'Base Camp Logistics: Full board support at Base Camp (meals, tent, facilities).',
                    'fr' => 'Logistique du camp de base : Soutien complet au camp de base (repas, tente, installations).',
                ],
                [
                    'en' => 'Porters: Porter service to/from Base Camp.',
                    'fr' => 'Porteurs : Service de porteurs vers/depuis le camp de base.',
                ],
                [
                    'en' => 'Base Camp Staff: Cook, kitchen helper, and base camp manager.',
                    'fr' => 'Personnel du camp de base : Cuisinier, aide de cuisine et responsable du camp de base.',
                ],
                [
                    'en' => 'Staff Salary & Allowance: Wages, equipment, food, and clothing for staff and porters.',
                    'fr' => 'Salaire et allocation du personnel : Salaires, équipement, nourriture et vêtements pour le personnel et les porteurs.',
                ],
                [
                    'en' => 'Base Camp Tent: Upgraded personal tent for members.',
                    'fr' => 'Tente de camp de base : Tente personnelle améliorée pour les membres.',
                ],
                [
                    'en' => 'Base Camp Equipment: Tents (dining, kitchen, communication, toilet, shower, staff, storage), mattresses, pillows, cooking gear.',
                    'fr' => 'Équipement du camp de base : Tentes (salle à manger, cuisine, communication, toilettes, douche, personnel, stockage), matelas, oreillers, matériel de cuisine.',
                ],
                [
                    'en' => 'White Dome Tent: Large white dome tent for dining, coffee, and relaxation.',
                    'fr' => 'Tente dôme blanche : Grande tente dôme blanche pour la salle à manger, le café et la détente.',
                ],
                [
                    'en' => 'Beverages: Hot and cold beverages.',
                    'fr' => 'Boissons : Boissons chaudes et froides.',
                ],
                [
                    'en' => 'Heater: Heaters at Base Camp and other necessary camps.',
                    'fr' => 'Chauffage : Chauffages au camp de base et dans d\'autres camps nécessaires.',
                ],
                [
                    'en' => 'Power: Solar panel and generator.',
                    'fr' => 'Électricité : Panneau solaire et générateur.',
                ],
                [
                    'en' => 'Medical Checkup: Medical checkup at Base Camp.',
                    'fr' => 'Examen médical : Examen médical au camp de base.',
                ],
                [
                    'en' => 'Bakery & Bar: Bakery and bar at Base Camp.',
                    'fr' => 'Boulangerie et bar : Boulangerie et bar au camp de base.',
                ],
                [
                    'en' => 'Training: Oxygen, mask regulator, ice wall, and ladder training.',
                    'fr' => 'Formation : Formation à l\'oxygène, au régulateur de masque, au mur de glace et à l\'échelle.',
                ],
                [
                    'en' => 'UIAGM Guide: 1 UIAGM guide.',
                    'fr' => 'Guide UIAGM : 1 guide UIAGM.',
                ],
                [
                    'en' => 'Climbing Sherpas: 2 climbing Sherpas per member.',
                    'fr' => 'Sherpas d\'escalade : 2 Sherpas d\'escalade par membre.',
                ],
                [
                    'en' => 'Sherpa Assistance: Assistance carrying gear to high camps.',
                    'fr' => 'Assistance Sherpa : Assistance pour le transport du matériel vers les camps d\'altitude.',
                ],
                [
                    'en' => 'Sherpa Salary & Allowance: Salary, equipment, food, and clothing for Sherpas.',
                    'fr' => 'Salaire et allocation Sherpa : Salaire, équipement, nourriture et vêtements pour les Sherpas.',
                ],
                [
                    'en' => 'Special Care: Guidance from experienced climbers.',
                    'fr' => 'Soins particuliers : Conseils d\'alpinistes expérimentés.',
                ],
                [
                    'en' => 'Bonus: Sherpa carry bonus and route fixing charges.',
                    'fr' => 'Bonus : Bonus de transport Sherpa et frais de fixation des itinéraires.',
                ],
                [
                    'en' => 'Rescue Team: Sherpa rescue team at Camp II.',
                    'fr' => 'Équipe de sauvetage : Équipe de sauvetage Sherpa au camp II.',
                ],
                [
                    'en' => 'Oxygen: Unlimited summit oxygen for members, 5 bottles for each Sherpa.',
                    'fr' => 'Oxygène : Oxygène de sommet illimité pour les membres, 5 bouteilles pour chaque Sherpa.',
                ],
                [
                    'en' => 'Mask & Regulator: 1 set for each member and Sherpa.',
                    'fr' => 'Masque et régulateur : 1 ensemble pour chaque membre et Sherpa.',
                ],
                [
                    'en' => 'High Camp Service: Tents, cooking gas, food, and equipment for high camps.',
                    'fr' => 'Service de camp d\'altitude : Tentes, gaz de cuisine, nourriture et équipement pour les camps d\'altitude.',
                ],
                [
                    'en' => 'High Camp Kitchen & Dining: Kitchen and dining tents at Camp I and II.',
                    'fr' => 'Cuisine et salle à manger du camp d\'altitude : Tentes de cuisine et de salle à manger aux camps I et II.',
                ],
                [
                    'en' => 'High Altitude Tents: Upgraded personal tents in high camps.',
                    'fr' => 'Tentes d\'altitude : Tentes personnelles améliorées dans les camps d\'altitude.',
                ],
                [
                    'en' => 'Rope Fixing: Route fixing to the summit by experienced Sherpas.',
                    'fr' => 'Fixation des cordes : Fixation de l\'itinéraire jusqu\'au sommet par des Sherpas expérimentés.',
                ],
                [
                    'en' => 'Satellite Phone: 1 hour per day of satellite phone use.',
                    'fr' => 'Téléphone satellite : 1 heure d\'utilisation du téléphone satellite par jour.',
                ],
                [
                    'en' => 'Walkie-Talkie: Walkie-talkies for communication.',
                    'fr' => 'Talkie-walkie : Talkies-walkies pour la communication.',
                ],
                [
                    'en' => 'Permits: Permits for satellite phone and walkie-talkie use.',
                    'fr' => 'Permis : Permis pour l\'utilisation du téléphone satellite et du talkie-walkie.',
                ],
                [
                    'en' => 'Insurance: Insurance covering medical and evacuation costs.',
                    'fr' => 'Assurance : Assurance couvrant les frais médicaux et d\'évacuation.',
                ],
                [
                    'en' => 'Internet: Unlimited internet service at Base Camp and Camp II.',
                    'fr' => 'Internet : Service Internet illimité au camp de base et au camp II.',
                ],
                [
                    'en' => 'Weather Forecast: Regular weather forecast reports.',
                    'fr' => 'Prévisions météorologiques : Bulletins météorologiques réguliers.',
                ],
                [
                    'en' => 'Helicopter Service: 12-hour helicopter service for emergencies.',
                    'fr' => 'Service d\'hélicoptère : Service d\'hélicoptère 12 heures pour les urgences.',
                ],
                [
                    'en' => 'Doctor: Medical doctor at Base Camp.',
                    'fr' => 'Médecin : Médecin au camp de base.',
                ],
                [
                    'en' => 'Summit Bonus: Bonus for UIAGM guide and climbing Sherpas.',
                    'fr' => 'Bonus de sommet : Bonus pour le guide UIAGM et les Sherpas d\'escalade.',
                ],
                [
                    'en' => 'Tips: Tips for porters, base camp staff, and high camp staff.',
                    'fr' => 'Pourboires : Pourboires pour les porteurs, le personnel du camp de base et le personnel du camp d\'altitude.',
                ],
                [
                    'en' => 'Certificate: Manaslu climbing certificate.',
                    'fr' => 'Certificat : Certificat d\'escalade du Manaslu.',
                ],
            ], // You *must* get this information from the tour operator.
            'costs_exclude' => [
                [
                    'en' => 'International airfare to/from Kathmandu.',
                    'fr' => 'Billet d\'avion international vers/depuis Katmandou.',
                ],
                [
                    'en' => 'Personal climbing equipment (clothing, gear, medical kit).',
                    'fr' => 'Équipement d\'escalade personnel (vêtements, équipement, trousse médicale).',
                ],
                [
                    'en' => 'Any other services or activities not listed in the "Cost Includes" section.',
                    'fr' => 'Tous les autres services ou activités non mentionnés dans la section "Le prix comprend".',
                ],
            ], // You *must* get this information from the tour operator.
            'is_featured' => false, // Set as needed
        ]);




        $vvip_manaslu_expedition_data->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $vvip_manaslu_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $vvip_manaslu_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $vvip_manaslu_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $vvip_manaslu_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );

        $peak = Expedition::create([
            'title' => [
                'en' => 'Lobuche Peak',
                'fr' => 'Pic de Lobuche',
            ],
            'description' => [
                'en' => 'Lobuche Peak is one the best peak in Everest region as it’s best view is seen from the summit. Summit is sourounded by panoramic view including Mt. Everest.
        We approach Lobuche via completing Everest Base Camp and Kalapattar trip which helps you with proper acclimatization and return to Lukla along the famous Khumbu Valley, with its diverse wildlife and vegetation, as well as its rich culture, where villages and rustic dwellings have seemingly scrambled up to perch atop rocky outcrops and vertiginous ledges. A truly memorable experience closely following the footsteps of legendary mountaineers.',
                'fr' => 'Le pic de Lobuche est l\'un des meilleurs sommets de la région de l\'Everest, car sa meilleure vue est visible depuis le sommet. Le sommet est entouré d\'une vue panoramique comprenant le mont Everest.
        Nous approchons de Lobuche en réalisant le voyage au camp de base de l\'Everest et à Kalapattar, ce qui vous aide à une bonne acclimatation et revenons à Lukla le long de la célèbre vallée de Khumbu, avec sa faune et sa végétation diversifiées, ainsi que sa riche culture, où les villages et les habitations rustiques semblent s\'être précipités pour se percher au sommet d\'affleurements rocheux et de corniches vertigineuses. Une expérience vraiment mémorable suivant de près les traces d\'alpinistes légendaires.',
            ],
            'duration' => '17',
            'region_id' => Region::first()->id,
            'category_id' => Category::find(3)->id,
            'grade' => '5',
            'is_featured' => true,
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'March-May October-November',
                'fr' => 'Mars-Mai Octobre-Novembre',
            ],
            'starting_altitude' => 2640,
            'highest_altitude' => 6119,
            'expedition_difficulty' => TrekDifficulty::HARD,
            'costs_include' => [
                [
                    'en' => 'Travel Guides',
                    'fr' => 'Guides de voyage',
                ],
                [
                    'en' => 'Any Pass and Permits',
                    'fr' => 'Pass et permis',
                ],
                [
                    'en' => 'Accomodation',
                    'fr' => 'Hébergement',
                ],
                [
                    'en' => 'Porters',
                    'fr' => 'Porteurs',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'Alcohol/Drugs',
                    'fr' => 'Alcool/Drogues',
                ],
                [
                    'en' => 'Wifi/Charging/Hot Water',
                    'fr' => 'Wifi/Recharge/Eau chaude',
                ],
                [
                    'en' => 'Extra Curricular stuff',
                    'fr' => 'Activités extra-scolaires',
                ],
                [
                    'en' => 'Personal Expenses',
                    'fr' => 'Dépenses personnelles',
                ],
            ],
        ]);

        CuratorSeederHelper::seedBelongsTo(
            $peak,
            'cover_image_id',
            public_path('photos/lobuche.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $peak,
            'feature_image_id',
            public_path('photos/lobuche.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $peak,
            'images',
            public_path('photos/lobuche.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $peak,
            'images',
            public_path('photos/mountain7.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $peak,
            'images',
            public_path('photos/mountain1.jpg')
        );

        $peak->destinations()->sync(
            Destination::inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
    }
}
