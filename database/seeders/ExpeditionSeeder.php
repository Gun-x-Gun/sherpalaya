<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorSeederHelper;
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
        $expedition = Expedition::create([
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
                'en' => [
                    'Travel Guides',
                    'Any Pass and Permits',
                    'Accomodation',
                    'Porters',
                ],
                'fr' => [
                    'Guides de voyage',
                    'Tous les laissez-passer et permis',
                    'Hébergement',
                    'Porteurs',
                ],
            ],
            'costs_exclude' => [
                'en' => [
                    'Alcohol/Drugs',
                    'Wifi/Charging/Hot Water',
                    'Extra Curricular stuff',
                    'Personal Expenses',
                ],
                'fr' => [
                    'Alcool/Drogues',
                    'Wifi/Recharge/Eau chaude',
                    'Activités extra-scolaires',
                    'Dépenses personnelles',
                ],
            ],
            'is_featured' => true,
        ]);

        $expedition->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $expedition,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $expedition,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
            'images',
            public_path('photos/mountain5.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $expedition,
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
                'en' => [
                    'Arrival & Departure: Pick and drop facility-Airport/Hotel/Airport',
                    'Accommodation: 4 nights stay at a deluxe hotel in Kathmandu on Bed & Breakfast Basis-Double Room',
                    'Welcome dinner: One Welcome Dinner in tourist standard restaurant in Kathmandu with Office’s Staffs',
                    'Domestic Transportation: Kathmandu-Bhadrapur-Kathmandu by flight inclusive of domestic Airport Tax',
                ],
                'fr' => [
                    'Arrivée et départ : Service de prise en charge et de dépose - Aéroport/Hôtel/Aéroport',
                    'Hébergement : 4 nuits dans un hôtel de luxe à Katmandou en formule Bed & Breakfast - Chambre double',
                    'Dîner de bienvenue : Un dîner de bienvenue dans un restaurant touristique à Katmandou avec le personnel du bureau',
                    'Transport domestique : Vol Katmandou-Bhadrapur-Katmandou, y compris la taxe aéroportuaire nationale',
                ],
            ],
            'costs_exclude' => [
                'en' => [
                    'International airfare to and from Kathmandu.',
                    'Nepalese Visa charges',
                    'Extra night in Kathmandu: Extra night accommodation in Kathmandu. In case of early arrival or late departure, early return from the expedition (due to any reason) than the scheduled itinerary.',
                ],
                'fr' => [
                    'Billet d\'avion international vers et depuis Katmandou.',
                    'Frais de visa népalais',
                    'Nuit supplémentaire à Katmandou : Hébergement supplémentaire à Katmandou en cas d’arrivée anticipée ou de départ tardif, retour anticipé de l’expédition (pour quelque raison que ce soit) avant l’itinéraire prévu.',
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
                'en' => [
                    'Arrival & Departure: Pick and drop facility - Airport/Hotel/Airport',
                    'Accommodation: 4 nights stay at a deluxe hotel in Kathmandu on Bed & Breakfast Basis - Double Room',
                    'Welcome dinner: One welcome dinner in a tourist standard restaurant in Kathmandu with Office’s Staffs',
                    'Domestic Transportation: Kathmandu-Lukla-Kathmandu by flight inclusive of domestic airport tax',
                    'Transportation: Required transportation from Kathmandu/Base Camp/Kathmandu for all staff and members',
                    'Permits & Fees: Lhotse Expedition Permit + Summit Route Permit, National Park & TIMS permit fees',
                    'Food & Lodging: 3 meals a day during trekking & at Base Camp for members & staff',
                    'Base Camp Staff: Base Camp cook & kitchen assistant',
                    'Porters: Porters up to & back from Base Camp',
                    'Insurance: All staff medical & emergency rescue insurance',
                    'Warm farewell dinner at a standard restaurant in Kathmandu with Nepalese staff',
                ],
                'fr' => [
                    'Arrivée et départ : Service de prise en charge et de dépose - Aéroport/Hôtel/Aéroport',
                    'Hébergement : 4 nuits dans un hôtel de luxe à Katmandou en formule Bed & Breakfast - Chambre double',
                    'Dîner de bienvenue : Un dîner de bienvenue dans un restaurant touristique à Katmandou avec le personnel du bureau',
                    'Transport domestique : Vol Katmandou-Lukla-Katmandou, y compris la taxe aéroportuaire nationale',
                    'Transport : Transport nécessaire entre Katmandou et le camp de base pour tout le personnel et les membres',
                    'Permis et frais : Permis d\'expédition du Lhotse + permis de route du sommet, permis de parc national et TIMS',
                    'Nourriture et hébergement : 3 repas par jour pendant le trek et au camp de base pour les membres et le personnel',
                    'Personnel du camp de base : Cuisinier du camp de base et assistant de cuisine',
                    'Porteurs : Porteurs jusqu\'au camp de base et retour',
                    'Assurance : Assurance médicale et de sauvetage d\'urgence pour tout le personnel',
                    'Dîner d\'adieu chaleureux dans un restaurant standard à Katmandou avec le personnel népalais',
                ],
            ],
            'costs_exclude' => [
                'en' => [
                    'International airfare to and from Kathmandu.',
                    'Nepalese visa charges',
                    'Extra night in Kathmandu: Extra night accommodation in Kathmandu. In case of early arrival or late departure, early return from the expedition (due to any reason) than the scheduled itinerary.',
                    'Insurance: Travel and high-altitude insurance / accident / medical / emergency evacuation',
                    'Sherpa summit bonus: Mandatory – Minimum USD 1,500',
                    'Tips: Please calculate some tips for Base Camp staff and porters',
                    'The full set of member’s personal climbing equipment & clothing',
                    'Rescue evacuation: Emergency rescue evacuation cost, if needed, and all other expenses of personal nature',
                    'Any other item not listed in the "Price Includes" section',
                ],
                'fr' => [
                    'Billet d\'avion international vers et depuis Katmandou.',
                    'Frais de visa népalais',
                    'Nuit supplémentaire à Katmandou : Hébergement supplémentaire à Katmandou en cas d’arrivée anticipée ou de départ tardif, retour anticipé de l’expédition (pour quelque raison que ce soit) avant l’itinéraire prévu.',
                    'Assurance : Assurance voyage et haute altitude / accident / médicale / évacuation d’urgence',
                    'Bonus Sherpa pour l\'ascension : Obligatoire - Minimum 1 500 USD',
                    'Pourboires : Veuillez prévoir des pourboires pour le personnel du camp de base et les porteurs',
                    'Équipement personnel : Ensemble complet d\'équipement et de vêtements d\'escalade du membre',
                    'Évacuation de secours : Coût de l’évacuation d’urgence, si nécessaire, et toutes les autres dépenses personnelles',
                    'Tout autre article non mentionné dans la section "Le prix comprend"',
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
    }
}
