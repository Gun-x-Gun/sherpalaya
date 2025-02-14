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


        // 8000ers in order
        $everest_expedition = Expedition::create([
            'title' => [
                'en' => 'Mt. Everest Expedition - South',
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

        $everest_expedition_north_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Everest Expedition - North',
                'fr' => 'Expédition au Mont Everest - Face Nord', // Example French translation
            ],
            'description' => [
                'en' => 'Mt. Everest Expedition is a lifetime mountaineering experience that allows you to stand at the highest point in the world. Ask an adventurer about their dream, and they will answer you with a word; EVEREST. Who would not want to reach the top of the world? Who would not want to touch the sky? It’s the trip of a lifetime, the Everest Expedition. Mt. Everest is the highest mountain in the world and is located in the Himalayas, on the border between Nepal and China. Mt. Everest, also known as The Sagarmatha in Nepali is the tallest peak on earth with an altitude of 8848.86m. The southern face lies in Nepal whereas the northern face is in Tibet. In 1715, China surveyed the mountain for the first time while they were mapping Chinese territory and depicted it as Mount Qomolangma. British Indian government 1856 again measured Mount Everest during their Great Trigonometry Survey. Back then, it was named Peak XV and said to be 8840m tall. Peak XV was renamed after Sir George Everest as Mount Everest, the name given in his honor, who was a lead surveyor in 1856. Sir George was a Welsh Surveyor; he was the surveyor-general of India for thirteen years from 1830. Everest has fascinated mountaineers all around the globe since the 1920s when Tibet opened climbing in the early 1920s. In 1922 British Expedition team led by Charles Bruce tried to scale the summit of Mount Everest for the first time. It was Edward Norton in his second attempt along with the British Expedition team that set the height of 8572m. The mountaineers George Mallory and Andrew Irvine disappeared on the third attempt. Mallory\'s body was found in 1999. There were several attempts made to Everest before the successful attempt made by Edmund Hillary and Tenzing Norgay on 29 May 1953 via the South route. It is now reported that around 1000 ascent attempts are made every year. Mount Everest Expedition is undoubtedly a lifetime opportunity. Nevertheless, these expeditions encounter many hindrances such as high altitude, severe weather conditions, and avalanches. One must be well-trained before actually trying it. You need to get your body ready for the 8848.86m-foot climb to Everest\'s summit. Depending on your current level of fitness, you need to train for several months before you start your ascent. A climber must build his/her cardiovascular strength along with muscular strength; oxygen level drops by 60-70 percent from sea level. Also, make sure you can carry big backpacks to the top as you will be carrying a cylinder of oxygen and large bag packs along with you. One must acclimatize to weather conditions and be prepared for rock falls, and avalanches. Learning rescue techniques would be an added advantage. The Base camp is situated just below the Rongbuk Monastery. It is about 20 km trek to reach the Advanced Base Camp (ABC). ABC is situated on rugged and fragmented ground with high-speed winds welcoming you. From ABC to East Rongbuk Glacier, it’s fairly easy, following the snowy slopes to the North col, you will reach Camp I. The camp I rests between Everest and Changtse. Following long snowy slope, you will reach the camp II. The course from camp II to camp III is very stormy. Topography here is made up of rocks, which look fairly simply, but a slip here means death. However, there are ropes in place, which gives some senses of safety. From camp III, climbers will feel the need of oxygen; the route from camp III to camp IV is mixture of rocky steps. On this way, you will find fixed ropes, which will lead you to right direction to the mountain. Camp IV is small camp; you will want to spend as little time here as possible. You will continue onto the North-East Ridge, where you will encounter the first obstacle known as the first step. First step is rock structure about 30 meters high. Some steep rock climbing will lead you to second steps; second step is the most challenging of the entire obstacle. This is about 40m in height. Another tough rock-climbing sessions, you will reach to third step. Third step is the easier of all and has height of 25m. After completing all three obstacles you will land on Summit Pyramid, from here you will see the shining crystals from top of the world.', // You'll likely want a more concise description
                'fr' => 'L\'expédition au Mont Everest est une expérience d\'alpinisme unique qui vous permet de vous tenir au point le plus haut du monde. ... (French translation of the description)', // Example French translation
            ],
            'duration' => '58',
            'region_id' => 7, // Tibet Region
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" translates to a grade of 5, adjust as needed
            'starting_point' => 'Lhasa/Kathmandu', // You'll need to specify the starting point more precisely
            'ending_point' => 'Lhasa/Kathmandu', // And the ending point
            'best_time_for_expedition' => [
                'en' => 'Spring',
                'fr' => 'Printemps', // Example French translation
            ],
            'starting_altitude' => 5200, // Approximate base camp altitude
            'highest_altitude' => 8848,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING,  // Or another appropriate difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Kathmandu Airport - Hotel transfers – Kathmandu Airport (Pick Up and Drop) by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport de Katmandou - Hôtel - Aéroport de Katmandou (prise en charge et retour) en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 6 nights hotel in Kathmandu (5-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 6 nuits d\'hôtel à Katmandou (catégorie 5 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant de niveau touristique à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'CARGO CLEARANCE: Assistance for cargo clearance in Nepal and China Customs (clearance cost is subject to a charge).',
                    'fr' => 'DÉDOUANEMENT DE LA CARGAISON : Assistance pour le dédouanement de la cargaison aux douanes du Népal et de la Chine (les frais de dédouanement sont soumis à des frais).',
                ],
                [
                    'en' => 'PERMITS: Expedition Royalty and a permit fee of the Chinese Government (CMA / TMA) to climb Mt. Everest, Restricted are permit and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement chinois (CMA / TMA) pour l\'ascension du Mont Everest, le permis et les frais restreints.',
                ],
                [
                    'en' => 'LIAISON OFFICER: 1 Government Liaison officer in Tibet with full equipment, salary, and accommodation.',
                    'fr' => 'AGENT DE LIAISON : 1 agent de liaison gouvernemental au Tibet avec équipement complet, salaire et hébergement.',
                ],
                [
                    'en' => 'GARBAGE MANAGEMENT: Garbage Deposit fees.',
                    'fr' => 'GESTION DES DÉCHETS : Frais de dépôt des ordures.',
                ],
                [
                    'en' => 'RUBBISH COLLECTION FEE: $1500 USD Per Climber standard rubbish collection fee.',
                    'fr' => 'FRAIS DE COLLECTE DES ORDURES : Frais de collecte des ordures standard de 1500 USD par grimpeur.',
                ],
                [
                    'en' => 'INSURANCE: Medical & Emergency rescue Insurance for all involved Nepalese staff during the trek and expedition.',
                    'fr' => 'ASSURANCE : Assurance médicale et de sauvetage d\'urgence pour tout le personnel népalais impliqué pendant le trek et l\'expédition.',
                ],
                [
                    'en' => 'MAP: Trekking and climbing map.',
                    'fr' => 'CARTE : Carte de trekking et d\'escalade.',
                ],
                [
                    'en' => 'DUFFEL BAG: One Seven Summit Treks’ Duffle Bag.',
                    'fr' => 'SAC DE VOYAGE : Un sac de voyage Seven Summit Treks.',
                ],
                [
                    'en' => 'TIBET VISA: All visa arrangements to enter China (Tibet), including visa fees, procedures, and rest.',
                    'fr' => 'VISA POUR LE TIBET : Toutes les dispositions de visa pour entrer en Chine (Tibet), y compris les frais de visa, les procédures et le reste.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: Land Transportation (Members/Staffs): On a group basis: drive by jeep from Kathmandu to the Chinese Basecamp via the Kerong Border. On the return, drive by jeep from the Chinese Basecamp to Kathmandu via the Kerong Border. (In case a member has to return earlier than the team due to personal reasons, the member will have to pay their own transportation cost to Kathmandu).',
                    'fr' => 'TRANSPORT DES MEMBRES : Transport terrestre (membres/personnel) : En groupe : trajet en jeep de Katmandou au camp de base chinois via la frontière de Kerong. Au retour, trajet en jeep du camp de base chinois à Katmandou via la frontière de Kerong. (Si un membre doit rentrer plus tôt que l\'équipe pour des raisons personnelles, il devra payer ses propres frais de transport jusqu\'à Katmandou).',
                ],
                [
                    'en' => 'EXPEDITION STUFFS TRANSPORTATION: All necessary expedition equipment transportation for all Members and Staff from Kathmandu to Chinese Basecamp (by Jeep/Truck) - Basecamp to Advance Basecamp (ABC) by Yak. – While returning: Advance Base camp (ABC) to Basecamp (by Yak), Chinese Basecamp to Kathmandu (by Jeep/Truck). Based on the condition, different transportation variants may be adopted.',
                    'fr' => 'TRANSPORT DU MATÉRIEL D\'EXPÉDITION : Transport de tout le matériel d\'expédition nécessaire pour tous les membres et le personnel de Katmandou au camp de base chinois (en jeep/camion) - Camp de base au camp de base avancé (ABC) en yak. - Au retour : Camp de base avancé (ABC) au camp de base (en yak), camp de base chinois à Katmandou (en jeep/camion). Selon les conditions, différentes variantes de transport peuvent être adoptées.',
                ],
                [
                    'en' => 'MEMBER LUGGAGE: Up to 60 Kg per member for personal as a personal baggage during the expedition period carried by Yaks. If luggage exceeds 60 KG then extra Yak will be required. ($500 USD Per Yak and carry 50 KG).',
                    'fr' => 'BAGAGES DES MEMBRES : Jusqu\'à 60 kg par membre pour les effets personnels pendant la période d\'expédition transportés par des yaks. Si les bagages dépassent 60 kg, un yak supplémentaire sera nécessaire (500 USD par yak et transport de 50 kg).',
                ],
                [
                    'en' => 'FOOD AND LODGING DURING THE TREK: Three (3) meals a day (breakfast, lunch, and dinner), including tea, coffee and hot water, will be provided, along with accessible accommodation at hotels, lodges, or tea houses (Sharing) during the trek. Hygienic foods will be served throughout the entire trek.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT PENDANT LE TREK : Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris le thé, le café et l\'eau chaude, seront fournis, ainsi qu\'un hébergement accessible dans des hôtels, des lodges ou des maisons de thé (partagés) pendant le trek. Des aliments hygiéniques seront servis tout au long du trek.',
                ],
                [
                    'en' => 'BASECAMP LOGISTICS (FULL BOARD SUPPORT): Three (3) meals a day (breakfast, lunch, and dinner), including tea, coffee, juice, soft drinks, etc., will be provided. Additionally, a comfortable box tent will be provided for accommodation at the base camp. Hygienic and green vegetables, fresh meat and soft drinks will be served throughout the entire expedition. A well-managed base camp & advanced base camp (ABC) setup, including a dining tent, kitchen tent, toilet, and shower tent, will be available for both members and staff.',
                    'fr' => 'LOGISTIQUE DU CAMP DE BASE (SUPPORT PENSION COMPLÈTE) : Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris le thé, le café, le jus, les boissons gazeuses, etc., seront fournis. De plus, une tente box confortable sera fournie pour l\'hébergement au camp de base. Des légumes verts hygiéniques, de la viande fraîche et des boissons gazeuses seront servis tout au long de l\'expédition. Un camp de base et un camp de base avancé (ABC) bien gérés, comprenant une tente-salle à manger, une tente-cuisine, des toilettes et une tente-douche, seront disponibles pour les membres et le personnel.',
                ],
                [
                    'en' => 'YAKS: Yaks for the transportation of member personal luggage (60 Kg maximum) and expeditions stuff up to the base camp and from the base camp (both ways). Overweight luggage costs extra.',
                    'fr' => 'YAKS : Yaks pour le transport des bagages personnels des membres (60 kg maximum) et du matériel d\'expédition jusqu\'au camp de base et depuis le camp de base (dans les deux sens). Les bagages en surpoids entraînent des frais supplémentaires.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIRFARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEES: Nepalese Visa Fee is $125 USD for 90 Days. (Apply for Multiple Entry Visa).',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Les frais de visa népalais sont de 125 USD pour 90 jours. (Demandez un visa à entrées multiples).',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU: Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'TRIP EXPANSION: Any types of trips or programs not included in the program for any reason.',
                    'fr' => 'EXTENSION DE VOYAGE : Tout type de voyage ou de programme non inclus dans le programme pour quelque raison que ce soit.',
                ],
                [
                    'en' => 'EARLY RETURN FROM THE TRIP: Withdraw early from the trip, it will take at least 1-2 days for the arrangements of the porters, and manage all the logistics. This will cost you an extra mandatory price for all the necessary arrangements on the way back from the base camp.',
                    'fr' => 'RETOUR ANTICIPÉ DU VOYAGE : Si vous vous retirez tôt du voyage, il faudra au moins 1 à 2 jours pour organiser les porteurs et gérer toute la logistique. Cela vous coûtera un prix supplémentaire obligatoire pour tous les arrangements nécessaires sur le chemin du retour depuis le camp de base.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory (Send us a copy of your insurance policy- before your arrival.)',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire (Envoyez-nous une copie de votre police d\'assurance avant votre arrivée).',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, bottled / mineral water, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, eau en bouteille/minérale, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'PERSONAL CLIMBING EQUIPMENT: Clothing, Packing Items, Bags, Personal Medical Kit, and all kinds of Personal Trekking / Climbing Gear.',
                    'fr' => 'ÉQUIPEMENT D\'ESCALADE PERSONNEL : Vêtements, articles d\'emballage, sacs, trousse médicale personnelle et toutes sortes d\'équipement personnel de trekking/escalade.',
                ],
                [
                    'en' => 'TOILETRIES: Soaps, shampoos, toilet and tissue papers, toothpaste, and other items used to keep yourself clean.',
                    'fr' => 'ARTICLES DE TOILETTE : Savons, shampoings, papier toilette et mouchoirs, dentifrice et autres articles utilisés pour vous garder propre.',
                ],
                [
                    'en' => 'FILMING: Special Filming, Camera, and Drone permit fee.',
                    'fr' => 'TOURNAGE : Frais de permis spécial pour le tournage, la caméra et le drone.',
                ],
                [
                    'en' => 'INTERNET SERVICE: Not included during the trek and expedition.',
                    'fr' => 'SERVICE INTERNET : Non inclus pendant le trek et l\'expédition.',
                ],
                [
                    'en' => 'SUMMIT BONUS: Summit bonus for each climbing Sherpa- Minimum $ 1800 USD. (Check the details below).',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour chaque Sherpa d\'escalade - Minimum 1800 USD. (Vérifiez les détails ci-dessous).',
                ],
                [
                    'en' => 'TIPS: Each member needs to contribute a minimum of $100 for Porter/Yak, $100 USD for Guide, and $400 USD for Basecamp, high camp, and other.',
                    'fr' => 'POURBOIRES : Chaque membre doit contribuer un minimum de 100 $ pour le porteur/yak, 100 $ USD pour le guide et 400 $ USD pour le camp de base, le camp d\'altitude et autres.',
                ],
                [
                    'en' => 'YAKS: Per yak, it\'s $ 500 USD additional if the required luggage limit exceeds, a, (1 Yak can carry up to 50 KG).',
                    'fr' => 'YAKS : Par yak, c\'est 500 USD supplémentaires si la limite de bagages requise est dépassée, a, (1 Yak peut transporter jusqu\'à 50 KG).',
                ],
                [
                    'en' => 'EXTRA: Any other services or activities, which are not mentioned in the itinerary and not listed in the “Cost Includes” section.',
                    'fr' => 'EXTRA : Tous les autres services ou activités qui ne sont pas mentionnés dans l\'itinéraire et ne figurent pas dans la section "Coût inclus".',
                ],
            ],
            'is_featured' => true, // Or false, as appropriate
        ]);

        $everest_expedition_north_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $everest_expedition_north_data,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $everest_expedition_north_data,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition_north_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition_north_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition_north_data,
            'images',
            public_path('photos/mountain4.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition_north_data,
            'images',
            public_path('photos/mountain5.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $everest_expedition_north_data,
            'images',
            public_path('photos/mountain1.jpg')
        );


        $k2_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. K2 Expedition',
                'fr' => 'Expédition au Mont K2', // Example French translation
            ],
            'description' => [
                'en' => 'K2, popularly known as "The Savage Mountain" at 8,611m (28,251ft) above sea level, is the second-highest mountain on Earth, after Mt. Everest at 8,848.86m (29,032ft). Mt. K2, also known as Chogori or Qogir, is the second-highest mountain in the world, at an elevation of 8,611 meters (28,251 feet) above sea level. It is located in the Karakoram Mountain range on the border between Pakistan and China. K2 has variously been described as an" Killer" and "Savage" and by climbing legend Reinhold Messner “Mountaineer’s Mountain”.. The terrain on K2 is a rocky up to 6000 m, beyond this it becomes an ocean of snow and is known for its steep and challenging climb and is considered one of the most difficult and dangerous mountains to ascend. K2 was first surveyed by the British in 1856, but it was not until 1902 that the mountain was attempted to climb and the first attempt to climb was made then. Afterwards another significant  expedition to K2 was undertaken in 1909 led by the Duke of the Abruzzi, a right royal mountaineer. The mountain was eventually successfully climbed on 31 July 1954 by an Italian party led by A. Desio putting Lino Lacedelli and Achille Compagnoni on the summit. The challenge of climbing such an insanely vertical and dangerous mountain is a major motivation that brings professional climbers to try K2. The mountain is known for its technical and physically demanding climb, and reaching the summit is famously counted as one of the major marks of mountaineering achievements in the world.. The sense of adventure and the opportunity to test one\'s limits can also be a major factor in deciding to climb K2. We proudly can say that we are the ones who hold a high success rate on K2. We are known to be among the best other organizers on K2. The expedition will be fully supported by a technically skilled veteran Nepali Sherpa team with previous climbing experience in K2 from Seven Summit Treks. The Sherpa team will have perfect knowledge of climbing, risk management, friendly behavior, and be highly motivated to make the K2 expedition a safe and successful one. The Seven Summit Treks’ K2 expedition will begin in the third week of June starting in Islamabad, and further flight to Skardu. The vertical height gain from the Base camp to the summit is over 3500m. on which we will aim to place four further camps to support your ascent and acclimatization. The route leads from base camp to Camp 1, Camp 2, House’s Chimney and climbs the Black Pyramid to Camp 3 and eventually to Camp 4 (7950m2 / 6083ft) below The Shoulder (8000m) of K2. Straight attempt through the Abruzzi route via Bottleneck (8210m) to the SUMMIT (8611m/28251ft) and down to Camp 4/Camp 3 (safe zone) will be the modality of the expedition.',
                'fr' => 'Le K2, populairement connu sous le nom de "Montagne Sauvage" à 8 611 m (28 251 pi) au-dessus du niveau de la mer, est la deuxième plus haute montagne de la Terre, après le Mont Everest à 8 848,86 m (29 032 pi). ... (French translation)', // Example French translation
            ],
            'duration' => '52',
            'region_id' => 6, // Other Region (K2 is not in the typical trekking regions of Nepal)
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Islamabad', // More specific starting point
            'ending_point' => 'Islamabad',  // And ending point
            'best_time_for_expedition' => [
                'en' => 'Summer',
                'fr' => 'Été', // Example French translation
            ],
            'starting_altitude' => 5000, // Approximate base camp altitude. Verify!
            'highest_altitude' => 8611,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.', // Example French translation
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN ISLAMABAD: 2 nights hotel in ISLAMABAD (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À ISLAMABAD : 2 nuits d\'hôtel à Islamabad (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.', // Example French translation
                ],
                [
                    'en' => 'PERMIT: Expedition Royalty and a permit fee of the PAKISTAN Government to climb Mt. K2, for members and Sherpa.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement pakistanais pour l\'ascension du Mont K2, pour les membres et les Sherpas.', // Example French translation
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (Domestic Flight) Fly from Islamabad to Skardu and while returning from Skardu to Islamabad, as per itinerary, along with one guide. LAND TRANSPORTATION (MEMBERS): Drive by jeep Skardu to Askole and on returning Askole to Skardu. LAND TRANSPORTATION (STAFF): Islamabad to Askole via Skardu (by bus/jeep) for all climbing Sherpas and expeditions staff. (Members and staff will meet each other in Skardu)',
                    'fr' => 'TRANSPORT DES MEMBRES : (Vol intérieur) Vol d\'Islamabad à Skardu et au retour de Skardu à Islamabad, selon l\'itinéraire, avec un guide. TRANSPORT TERRESTRE (MEMBRES) : Trajet en jeep de Skardu à Askole et au retour d\'Askole à Skardu. TRANSPORT TERRESTRE (PERSONNEL) : Islamabad à Askole via Skardu (en bus/jeep) pour tous les Sherpas d\'escalade et le personnel d\'expédition. (Les membres et le personnel se rencontreront à Skardu).', // Example French translation
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge/TENT during the trek and at the Basecamp. Hygienic and green vegetables, meat, fruits, soft drinks, and juice will be served during the entire expedition. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/tente pendant le trek et au camp de base. Des légumes verts hygiéniques, de la viande, des fruits, des boissons gazeuses et des jus seront servis pendant toute l\'expédition. Camp de base bien aménagé pour les membres et le personnel.', // Example French translation
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.', // Example French translation
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen cylinder: 5 oxygen bottles (4 liters) for each member and 3 oxygen bottles for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Bouteille d\'oxygène de sommet : 5 bouteilles d\'oxygène (4 litres) pour chaque membre et 3 bouteilles d\'oxygène pour chaque Sherpa de haute altitude.', // Example French translation
                ],
                // ... (Add other Cost Includes if needed)
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Islamabad).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Islamabad).', // Example French translation
                ],
                [
                    'en' => 'PAKISTAN ENTRY VISA FEE: PAKISTANI Visa fee for 90 DAYS.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU PAKISTAN : Frais de visa pakistanais pour 90 JOURS.', // Example French translation
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Islamabad and Skardu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Islamabad et Skardu (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).', // Example French translation
                ],
                [
                    'en' => 'EXTRA NIGHT IN ISLAMABAD & SKARDU: Extra nights’ accommodation in Islamabad & Skardu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUIT SUPPLÉMENTAIRE À ISLAMABAD ET SKARDU : Nuits d\'hébergement supplémentaires à Islamabad et Skardu. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.', // Example French translation
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire', // Example French translation
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Islamabad & Skardu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Islamabad et Skardu, mais nous aurons des boissons gazeuses pour les membres au camp de base).', // Example French translation
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 2000 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 2000 USD.', // Example French translation
                ],
                // ... (Add other Cost Excludes if needed)
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $k2_expedition_data->destinations()->sync(
            Destination::where('region_id', 6)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $k2_expedition_data,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $k2_expedition_data,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $k2_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $k2_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $k2_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );



        $kanchenjunga_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Kanchenjunga Expedition',
                'fr' => 'Expédition au Mont Kanchenjunga',
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
                'en' => 'Mt. Lhotse Expedition',
                'fr' => 'Expédition au Mont Lhotse',
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


        $makalu_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Makalu Expedition',
                'fr' => 'Expédition au Mont Makalu', // Example French translation
            ],
            'description' => [
                'en' => 'Makalu, an isolated peak whose shape is a four-sided pyramid, is the fifth highest mountain in the world at 8,485m (27,838ft). Mount Makalu is the fifth-highest mountain in the world, with an elevation of 8,485 meters (27,838 feet) above sea level. It is located in the Himalayas, on the border between Nepal and China. Mount Makalu is known for its isolated location and its distinctive pyramid-shaped peak, which makes it a visually striking mountain. At the base of Mt. Makalu, there lies a natural wonder: The Barun Valley. This valley facilitates stunning elevated waterfalls falling inside the deep gorges, diverse species of flora and fauna with rich cultures of ethnic communities like Sherpa and Kirat. Although this area is somewhat isolated, it is for sure that, every visitor whose every step here will take a memorable reminiscence with them for their lifetime. Mt. Makalu was first summited on 15 May 1955, by a French team including Lionel Terray and Jean Couzy led by Jean Franco. The team climbed the mountain via the Northeast Ridge, which is the most commonly used route to the summit. Since the first climb to the top, several successful attempts had been made to the top of the peak. South East and the North West Ridges are the most prominent compared to other. Among these two, the North Western ridge route is used by most mountaineers to reach the top of the peak. Mt. Makalu Expedition in Nepal is full of adventures as well as dangers too. The Russian team scaled the western route, which is considered the most dangerous route, in 1997. They reach the top on 21st May 1997 following the most challenging route. Climbing Makalu is a significant challenge, and it requires a high level of physical fitness, technical climbing skills, and mental fortitude. The mountain is known for its steep and challenging Northeast Ridge route, and the thin air and extreme altitude make it a demanding climb. However, for those who are able and willing to undertake the challenge, the experience of standing on the summit of Mt. Makalu can be extremely rewarding. The Seven Summit Treks, Makalu Expedition will begin in the second week of April starting in Kathmandu. You will have a couple of days for the preparation of goods and equipment and paper works. Afterward, you will take a flight to Tumlingtar and drive to Num. From here your treks begin to Makalu basecamp. This trip suits those who have previous experiences with a few 7000m peaks or even more. We will do a frequent rotation to each camp for the best acclimatization. The advance basecamp is normally set at (5,600m/18,372ft), Camp I at (6,100m/20,013ft), Camp II at (6,500m/21,325ft), Camp III at (7,400m/24,278ft), Camp IV (7,800m/25,590ft) and Summit (8,485m/27,838ft).',
                'fr' => 'Le Makalu, un sommet isolé dont la forme est une pyramide à quatre faces, est la cinquième plus haute montagne du monde à 8 485 m (27 838 pi). ... (French translation)', // Example French translation
            ],
            'duration' => '50',
            'region_id' => 1, // Other Region (Makalu is somewhat isolated)
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu', // More specific starting point
            'ending_point' => 'Kathmandu',  // And ending point
            'best_time_for_expedition' => [
                'en' => 'Spring/Autumn',
                'fr' => 'Printemps/Automne', // Example French translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu
            'highest_altitude' => 8485,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 4 nuits d\'hôtel à Katmandou (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'PERMIT: Expedition Royalty and permit fee of Nepal Government to climb Mt. MAKALU, MAKALU BARUN National Park entry permit and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement népalais pour l\'ascension du Mont MAKALU, permis et frais d\'entrée du parc national de MAKALU BARUN.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (Domestic Flight) Fly from Kathmandu – TUMLINGTAR and drive to Num: while returning drive from Num to Tumlingtar and fly from Tumlingtar - Kathmandu, as per itinerary, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : (Vol intérieur) Vol de Katmandou à TUMLINGTAR et trajet en voiture jusqu\'à Num : au retour, trajet en voiture de Num à Tumlingtar et vol de Tumlingtar à Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge/TENT during the trek and at the Basecamp. Hygienic and fresh green vegetables, fresh meat, fruits, soft drinks, and juice will be served during the entire expedition using helicopter flights. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/tente pendant le trek et au camp de base. Des légumes verts frais et hygiéniques, de la viande fraîche, des fruits, des boissons gazeuses et des jus seront servis pendant toute l\'expédition en utilisant des vols en hélicoptère. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen cylinder: 4 oxygen bottles (4 ltrs.) for each member and 2 oxygen bottles for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Bouteille d\'oxygène de sommet : 4 bouteilles d\'oxygène (4 litres) pour chaque membre et 2 bouteilles d\'oxygène pour chaque Sherpa de haute altitude.',
                ],
                // Add more Cost Includes if needed, up to 7 main points.
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa fee is $125 USD for 90 Days.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU: Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 1500 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 1500 USD.',
                ],
                // Add more Cost Excludes if needed, up to 7 main points.
            ],
            'is_featured' => true, // Or false, as appropriate
        ]);

        $makalu_expedition_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $makalu_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $makalu_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $makalu_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $makalu_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $makalu_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );

        $cho_oyu_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Cho-Oyu Expedition',
                'fr' => 'Expédition au Mont Cho-Oyu', // Example French translation
            ],
            'description' => [
                'en' => 'Cho-Oyu is the sixth-highest mountain in the world at 8,188m (26,864ft) above sea level. Cho-Oyu means "Turquoise Goddess" in Tibetan. Cho Oyu (8201m) is the sixth highest mountain in the world, located a short distance to the west of Everest in the Khumbu region of Eastern Nepal along the Tibetan border. There are no technical sections and the objective dangers are close to non-existent. Its relatively easy access makes it an attractive climb for someone with limited time, as it can be attempted in roughly 6 weeks round trip. Base Camp is accessible by jeep and it is possible to reach Kathmandu on a very long day from Base Camp. Because of its ease of access, ABC is often crowded with a large number of expeditions. Just west of Cho Oyu is the Nangpa La, the old trade route between the Khumbu Sherpas and Tibet. It was the third such peak climbed, and the first climbed by light expedition and in autumn. Herbert Tichy, Joseph Jöchler, and Sherpa Pasang Dawa Lama of an Austrian expedition first climbed the mountain on October 19, 1954, via the northwest ridge.',
                'fr' => 'Le Cho-Oyu est la sixième plus haute montagne du monde, culminant à 8 188 m (26 864 pi) au-dessus du niveau de la mer. Cho-Oyu signifie « Déesse Turquoise » en tibétain. ... (French Translation)', // Example French translation
            ],
            'duration' => '32',
            'region_id' => 1, // Other Region (Cho Oyu is on the border)
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu', // More specific starting point
            'ending_point' => 'Kathmandu',  // And ending point
            'best_time_for_expedition' => [
                'en' => 'Autumn',
                'fr' => 'Automne', // Example French translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu
            'highest_altitude' => 8188,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Kathmandu Airport - Hotel transfers – Kathmandu Airport (Pick Up and Drop) by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Aéroport de Katmandou - Transferts hôtel - Aéroport de Katmandou (prise en charge et retour) en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 6 nights hotel in Kathmandu (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 6 nuits d\'hôtel à Katmandou (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'PERMIT: Expedition Royalty and a permit fee of the Chinese Government (CMA / TMA) to climb Mt. Cho Oyu, Restricted area permit and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement chinois (CMA / TMA) pour l\'ascension du Mont Cho Oyu, permis et frais de zone restreinte.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: Land Transportation (Members/Staffs): In a group basis: drive by Jeep from Kathmandu to Chinese Basecamp via Kerong Border. While returning Drive by Jeep from the Chinese Basecamp to Kathmandu via Kerong Border. (In case, if members have to return earlier than the team due to personal reasons, members have to pay their own transportation cost up to Kathmandu).',
                    'fr' => 'TRANSPORT DES MEMBRES : Transport terrestre (membres/personnel) : En groupe : trajet en jeep de Katmandou au camp de base chinois via la frontière de Kerong. Au retour, trajet en jeep du camp de base chinois à Katmandou via la frontière de Kerong. (Si des membres doivent revenir plus tôt que l\'équipe pour des raisons personnelles, ils doivent payer leurs propres frais de transport jusqu\'à Katmandou).',
                ],
                [
                    'en' => 'FOOD AND LODGING DURING THE TREK: Three (3) meals a day (breakfast, lunch, and dinner), including tea, coffee, and hot water, will be provided, along with accessible accommodation at hotels, lodges, or tea houses (sharing) during the trek. Hygienic foods will be served throughout the entire trek. (To upgrade to a room with an attached washroom, inform us earlier. Extra cost applies).',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT PENDANT LE TREK : Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris thé, café et eau chaude, seront fournis, ainsi qu\'un hébergement accessible dans des hôtels, lodges ou maisons de thé (partagés) pendant le trek. Des aliments hygiéniques seront servis tout au long du trek. (Pour passer à une chambre avec salle de bain attenante, informez-nous plus tôt. Des frais supplémentaires s\'appliquent).',
                ],
                [
                    'en' => 'BASECAMP LOGISTICS (FULL BOARD SUPPORT): Three (3) meals a day (breakfast, lunch, and dinner), including tea, coffee, juice, soft drinks, etc., will be provided. Additionally, a comfortable box tent will be provided for accommodation at the base camp. Hygienic and green vegetables, fresh meat, soft drinks, and juice will be served regularly throughout the entire expedition, facilitated by helicopter flights. A well-managed base camp & advanced base camp (ABC) setup, including a dining tent, kitchen tent, toilet, and shower tent, will be available for both members and staff.',
                    'fr' => 'LOGISTIQUE DU CAMP DE BASE (SOUTIEN COMPLET) : Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris thé, café, jus, boissons gazeuses, etc., seront fournis. De plus, une tente individuelle confortable sera fournie pour l\'hébergement au camp de base. Des légumes verts hygiéniques, de la viande fraîche, des boissons gazeuses et des jus seront servis régulièrement tout au long de l\'expédition, facilitée par des vols en hélicoptère. Un camp de base et un camp de base avancé (ABC) bien aménagés, comprenant une tente-salle à manger, une tente-cuisine, des toilettes et une douche, seront disponibles pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIRFARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa Fee is $125 USD for 90 Days. (Apply for Multiple Entry Visa).',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours. (Demandez un visa à entrées multiples).',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU: Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue, air evacuation, medical treatment, repatriation, etc.) *Mandatory (Send us a copy of your insurance policy before your arrival.)',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude, l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire (Envoyez-nous une copie de votre police d\'assurance avant votre arrivée.)',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Clothing, Packing Items, Bags, Personal Medical Kit, and all kinds of Personal Trekking / Climbing Gear.',
                    'fr' => 'DÉPENSES PERSONNELLES : Vêtements, articles d\'emballage, sacs, trousse médicale personnelle et toutes sortes d\'équipement personnel de trekking/escalade.',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for each climbing Sherpa- Minimum $1800 USD. (Check the details below).',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour chaque Sherpa d\'escalade - Minimum 1800 USD. (Vérifiez les détails ci-dessous).',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);
        $cho_oyu_expedition_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $cho_oyu_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $cho_oyu_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $cho_oyu_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $cho_oyu_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $cho_oyu_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );

        $dhaulagiri_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Dhaulagiri Expedition',
                'fr' => 'Expédition au Mont Dhaulagiri', // Example French translation
            ],
            'description' => [
                'en' => 'Dhaulagiri, the shining white mountain, in the central-north Nepal is one of the most dramatically rising and equally fascinating climbing challenge in Nepal Himalaya. Dhaulagiri is the seventh-highest mountain in the world, with an elevation of 8,167 meters (26,795 feet) above sea level. It is located in the Dhaulagiri Himal mountain range of north-central Nepal and is part of the Himalayan mountain range. Dhaulagiri means "white mountain" in Sanskrit, and it is known for its snowy peaks and glaciers. This mountain lies in the northwestern corridor of Nepal in the Myagdi District. Mt. Dhaulagiri extends about 120km from the Kaligandaki River to the Bheri river in the west. Mt. Dhaulagiri is also the highest point of the Gandaki River Basin. The Annapurna I, which is 34 Km east of Dhaulagiri I, in between these two giants a gorge is formed, known as Kaligandaki Gorge, this gorge is the deepest gorge in the world and Kaligandaki River flows in this gorge. The first attempt to climb Dhaulagiri was made in 1954 by a Swiss team led by Albert Eggler. The team was forced to turn back just below the summit due to adverse weather conditions. Several other unsuccessful attempts were made in the following years, including one in 1958 by a Swiss-Austrian expedition led by Fritz Luchsinger and Ernst Forrer. Finally, in 1960, a Swiss-Austrian expedition led by Max Eiselin succeeded in reaching the summit of Dhaulagiri. The team climbed the southeast ridge, which is now the standard route to the summit. The first ascent was made by Kurt Diemberger, Peter Diener, Ernst Forrer, Albin Schelbert, and Nawang Dorje Sherpa. As all of Dhaulagiri\'s routes are challenging, only veterans seem to have an interest in this mountain. climbers are attracted to the mountain for its technical challenges and the sense of accomplishment that comes with successfully reaching the summit. For many climbers, the process of training, preparing, and attempting to climb a mountain like Dhaulagiri can be a rewarding and meaningful experience in and of itself. The challenge of the climb, the camaraderie of the team, and the opportunity to test one\'s physical and mental limits can all be part of the appeal. The Seven Summit Treks, Dhaulagiri Expedition will begin in the first week of April starting in Kathmandu. You will have a couple of days for the preparation of goods and equipment and paper works. Afterward, you will take a flight to Pokhara and drive to Takam. From here you will be flying to the Italian Base camp and then trek to Dhaulagiri Basecamp. This trip suits those who have previous experiences with a few 7000m peaks or even more. We will do a frequent rotation to each camp for the best acclimatization. The basecamp is normally set at (4,750m/15,584ft), Camp I at (5,850m/19,193ft), Camp II (6,400m/20,997ft), and Camp III (7,400m/24,278ft), and Summit (8,167m/26,795ft).',
                'fr' => 'Le Dhaulagiri, la montagne blanche brillante, dans le centre-nord du Népal, est l\'un des défis d\'escalade les plus spectaculaires et tout aussi fascinants de l\'Himalaya népalais. ... (French translation)', // Example French translation
            ],
            'duration' => '46',
            'region_id' => 3, // Or a more specific region ID if you have one
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu', // More specific starting point
            'ending_point' => 'Kathmandu',  // And ending point
            'best_time_for_expedition' => [
                'en' => 'Spring/Autumn',
                'fr' => 'Printemps/Automne', // Example French translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu
            'highest_altitude' => 8167,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by a private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (4-star category) - single room supplementary on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 4 nuits d\'hôtel à Katmandou (catégorie 4 étoiles) - chambre individuelle en supplément en formule petit-déjeuner.',
                ],
                [
                    'en' => 'HOTEL IN POKHARA: 2 nights Hotel in Pokhara City (3-star category) – Sharing room on Bed and breakfast plan. (Lunch and Dinner excluded).',
                    'fr' => 'HÔTEL À POKHARA : 2 nuits d\'hôtel à Pokhara (catégorie 3 étoiles) – Chambre partagée en formule petit-déjeuner. (Déjeuner et dîner exclus).',
                ],
                [
                    'en' => 'PERMITS: Expedition Royalty and permit of Nepal Government to climb Mt. Dhaulagiri, Conservation area entry permits and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Mont Dhaulagiri, permis et frais d\'entrée de la zone de conservation.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (Domestic Flight): Fly from Kathmandu – Pokhara and drive from Pokhara to Marpha. (by jeep) While returning; Drive from Marpha to Pokhara (by jeep) and fly from Pokhara to Kathmandu, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : (Vol intérieur) : Vol de Katmandou à Pokhara et trajet en voiture de Pokhara à Marpha (en jeep). Au retour ; Trajet en voiture de Marpha à Pokhara (en jeep) et vol de Pokhara à Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOOD AND LODGING DURING THE TREK: Three (3) meals a day (breakfast, lunch, and dinner), including tea and coffee, will be provided, along with accessible accommodation at hotels, lodges, or tea houses (sharing) during the trek. Hygienic foods will be served throughout the entire trek. (To upgrade to a room with an attached washroom, inform us earlier. Extra cost applies).',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT PENDANT LE TREK : Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris thé et café, seront fournis, ainsi qu\'un hébergement accessible dans des hôtels, lodges ou maisons de thé (partagés) pendant le trek. Des aliments hygiéniques seront servis tout au long du trek. (Pour passer à une chambre avec salle de bain attenante, informez-nous plus tôt. Des frais supplémentaires s\'appliquent).',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa fee is $125 USD for 90 Days.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu & Pokhara (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou et Pokhara (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU & POKHARA: Extra nights’ accommodation in Kathmandu & Pokhara. In case of early arrival or late departure, early return from Trekking / Expedition, domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU ET POKHARA : Nuits d\'hébergement supplémentaires à Katmandou et Pokhara. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition, d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue, air evacuation, medical treatment, repatriation, etc.) *Mandatory (Send us a copy of your insurance policy- before your arrival.)',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude, l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire (Envoyez-nous une copie de votre police d\'assurance avant votre arrivée.)',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for each climbing Sherpa- Minimum $ 1500 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour chaque Sherpa d\'escalade - Minimum 1500 USD.',
                ],
            ],
            'is_featured' => true, // Or false, as appropriate
        ]);

        $dhaulagiri_expedition_data->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $dhaulagiri_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $dhaulagiri_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $dhaulagiri_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $dhaulagiri_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );

        $manaslu_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Manaslu Expedition',
                'fr' => 'Expédition au Mont Manaslu', // Example French translation
            ],
            'description' => [
                'en' => 'Mt. Manaslu, The 8th highest peak in the world which is elevated at the height of 8,163m (26,781 ft) above sea level is located in the ridges of Mansiri Himal in the Gorkha District of Nepal. Regarded as the “mountain of the spirit”, Mt. Manaslu is identified as Mt. Kutung in Tibet. This peak lies about 64km east of Mount Annapurna. Two mountaineers Toshio Imanishi and Gyalzen Norbu ascended to the top on 9th May 1956. Although there were several expeditions to Manaslu earlier expedition to Manaslu was legally unlocked only in 1991. Since, the inaugural expedition by H.W Tilman, Mt Manaslu has been popular among tough trekkers, and this region is still constrained to limited clusters and only well-structured trekkers in the group can trek here. Manaslu region is very isolated resulting in challenging rescuing. The ascending is more technical than that of other peaks like Cho Oyu and Shisha Pangma. The base camp of Manaslu lies at a height of 4700m. Long crests of the mountain offer the possibility to be scaled from every direction to conclude to the top that is sharply above its neighboring scenes. Among six routes, the route starting from the south is hard-hitting while the northeast face route is the most common. Every year Seven Summit Treks organize a large number of successive expeditions of Mt. Manaslu.',
                'fr' => 'Le Mont Manaslu, le 8ème plus haut sommet du monde, culmine à 8 163 m (26 781 pi) au-dessus du niveau de la mer et est situé sur les crêtes du Mansiri Himal dans le district de Gorkha au Népal. ... (French translation)', // Example French translation
            ],
            'duration' => '36',
            'region_id' => 3, // Or a more specific region ID if you have one
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu', // More specific starting point
            'ending_point' => 'Kathmandu',  // And ending point
            'best_time_for_expedition' => [
                'en' => 'Autumn/Spring',
                'fr' => 'Automne/Printemps', // Example French translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu
            'highest_altitude' => 8163,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by a private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 4 nuits d\'hôtel à Katmandou (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'PERMITS: Expedition Royalty and permit of Nepal Government to climb Mt. Manaslu Conservation area entry permits and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Mont Manaslu, permis et frais d\'entrée de la zone de conservation.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: Land Transportation: Drive from Kathmandu to Dharapani via Besishashar, and while returning Machha Khola to Kathmandu, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : Transport terrestre : Trajet en voiture de Katmandou à Dharapani via Besishashar, et au retour, de Machha Khola à Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge during the trek and at the Basecamp. Hygienic and fresh green vegetables, fresh meat, fruits, soft drinks, and juice will be served regularly during the entire expedition using helicopter flights. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge pendant le trek et au camp de base. Des légumes verts frais et hygiéniques, de la viande fraîche, des fruits, des boissons gazeuses et des jus seront servis régulièrement pendant toute l\'expédition en utilisant des vols en hélicoptère. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen: 3 oxygen bottles (4 ltrs.) for each member and 1 oxygen bottle for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Oxygène de sommet : 3 bouteilles d\'oxygène (4 litres) pour chaque membre et 1 bouteille d\'oxygène pour chaque Sherpa de haute altitude.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa fee is $125 USD for 90 Days.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU: Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition, d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 1500 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 1500 USD.',
                ],
            ],
            'is_featured' => true, // Or false, as appropriate
        ]);

        $manaslu_expedition_data->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $manaslu_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $manaslu_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $manaslu_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $manaslu_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );

        $nanga_parbat_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Nanga Parbat Expedition',
                'fr' => 'Expédition au Mont Nanga Parbat', // Example French translation
            ],
            'description' => [
                'en' => 'Nanga Parbat, the ninth 8000er in the world is famous in climbing world as being a tough, technical and highly rewarding mountain. Nanga Parbat is the ninth-highest mountain in the world at elevation of 8,125 meters (26,657 feet) above sea level. It is located in the western Himalaya in Pakistan and is known as the "Killer Mountain" due to its difficult climbing routes and high fatality rate among climbers. Geographically, Nanga Parbat is considered as the western anchor of the Himalayan Range. The name Nanga Parbat means "Naked Mountain" in Hindi/Urdu and is with reference to the south face\'s exposed rock buttresses. The north face is equally intimidating. In contrast to the south face’s steep rock and ice a broad barrier of seracs that extend the width of the mountain guards the snowy north face. Most attempts nowadays are via the Westerly Diamir face, which is generally considered to be the easiest and safest with the Kinshofer Route, the normal route. In 1953, German climber Hermann Buhl made the first successful ascent of Nanga Parbat, climbing alone and without supplementary oxygen. His climb that included being 41 hours lost and back was considered a major achievement in the climbing world and solidified Nanga Parbat\'s reputation as a challenging and dangerous mountain to climb. Climbers before the Second World War were convinced that the only way to climb the mountain was from the north via a long arc extending over Rakhiot Peak (7010m), between the two summits of Silberzacken (Silver Saddle) and finally to the summit of Nanga Parbat thereby avoiding a more direct ascent of the north face. The route was dangerously prone to avalanches and exposed to bad weather. 31 people died attempting to climb the mountain before the first ascent leading to it acquiring the infamous name “Killer Mountain". Nanga Parbat is considered one of the most challenging and dangerous mountains to climb, with a high fatality rate. Many climbing routes are steep, exposed, and prone to avalanches and rockfalls. The mountain is also known for unpredictable and severe weather, which can make climbing even more difficult.',
                'fr' => 'Le Nanga Parbat, le neuvième sommet de 8000 m au monde, est célèbre dans le monde de l\'escalade pour être une montagne difficile, technique et très enrichissante. ... (French translation)', // Example French translation
            ],
            'duration' => '50',
            'region_id' => 6, // Or a more specific region ID if you have one
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu', // Or Islamabad, depending on the itinerary
            'ending_point' => 'Kathmandu', // Or Islamabad, depending on the itinerary
            'best_time_for_expedition' => [
                'en' => 'Summer',
                'fr' => 'Été', // Example French translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu, or adjust as needed.
            'highest_altitude' => 8125,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'ACCOMMODATION IN ISLAMABAD: 3 nights hotel in ISLAMABAD (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT À ISLAMABAD : 3 nuits d\'hôtel à Islamabad (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'PERMIT: Expedition Royalty and a permit fee of the PAKISTAN Government to climb Nanga Parbat, for members and Sherpa.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement pakistanais pour l\'ascension du Nanga Parbat, pour les membres et les Sherpas.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: LAND TRANSPORTATION (MEMBERS): Drive from Islamabad to Halale via Chilas and while returning from Halale to Islamabad via Chilas, as per itinerary, along with one guide.',
                    'fr' => 'TRANSPORT DES MEMBRES : TRANSPORT TERRESTRE (MEMBRES) : Trajet en voiture d\'Islamabad à Halale via Chilas et au retour de Halale à Islamabad via Chilas, selon l\'itinéraire, avec un guide.',
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge/TENT during the trek and at the Basecamp. Hygienic and green vegetables, meat, fruits, soft drinks, and juice will be served during the entire expedition. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/tente pendant le trek et au camp de base. Des légumes verts hygiéniques, de la viande, des fruits, des boissons gazeuses et des jus seront servis pendant toute l\'expédition. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen cylinder: 3 oxygen bottles (4 liters) for each member and 2 oxygen bottles for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Bouteille d\'oxygène de sommet : 3 bouteilles d\'oxygène (4 litres) pour chaque membre et 2 bouteilles d\'oxygène pour chaque Sherpa de haute altitude.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Islamabad).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Islamabad).',
                ],
                [
                    'en' => 'PAKISTAN ENTRY VISA FEE: PAKISTANI Visa fee for 90 DAYS.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU PAKISTAN : Frais de visa pakistanais pour 90 JOURS.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Islamabad (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Islamabad (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN ISLAMABAD & CHILAS: Extra nights’ accommodation in Islamabad & Chilas. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À ISLAMABAD ET CHILAS : Nuits d\'hébergement supplémentaires à Islamabad et Chilas. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Islamabad & Skardu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Islamabad et Skardu, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 2000 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 2000 USD.',
                ],
            ],
            'is_featured' => true, // Or false, as appropriate
        ]);

        $nanga_parbat_expedition_data->destinations()->sync(
            Destination::where('region_id', 6)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $nanga_parbat_expedition_data,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $nanga_parbat_expedition_data,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $nanga_parbat_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $nanga_parbat_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $nanga_parbat_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );

        $annapurna_i_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Annapurna I Expedition',
                'fr' => 'Expédition au Mont Annapurna I', // Example French translation
            ],
            'description' => [
                'en' => 'Annapurna I, generally referred as Annapurna, is the tenth-highest mountain in the world at an elevation of 8,091m (26,545ft) above sea level. It is located in the north-central Nepal Himalaya and is part of the Annapurna Massif, a range that includes Annapurna I as the sole 8000er and several peaks over 7,000m (22,966ft). Annapurna I is considered one of the most challenging and dangerous mountains to climb due to its steep slopes, exposed routes and frequent avalanches and landslides that occur on the climbing route. It rises east of the Kali Gandaki Gorge separating it from the Dhaulagiri massif which is 34 km to the west and the gorge between is considered as the Earth\'s deepest. In Sanskrit, Annapurna means “full of food” and is normally regarded as the Goddess of the Harvests and Goddess of Fertility. Annapurna I was first climbed by a French expedition in 1950. The expedition originally intended to climb Dhaulagiri but was forced to turn back due to the difficult conditions and lack of resources. They switch to Annapurna. After weeks of struggle, the mountain was successfully summited on 03 June 1950 Maurice Herzog (also the expedition leader) and Louis Lachenal. It was the first 8,000-meter peak to be successfully climbed, and its summit was the highest successful ascent on Earth for three years until Everest was climbed. An expedition to Annapurna I requires a high level of physical fitness, technical climbing skills, and experience in high-altitude mountaineering. It is also important to properly acclimatize to the altitude, have the right gear, and be prepared for the risks of avalanches, landslides, and other hazards. Climbing a mountain like Annapurna I can also be a way to experience the beauty and majesty of western Nepal in a very intense and profound way. The views from the summit are said to be breathtaking, with panoramic vistas of the surrounding Annapurna, Dhaulagiri, and Mansiri ranges. The Seven Summit Treks’ Annapurna I expedition will begin in mid-March starting from Kathmandu. You will have a couple of days for the preparation of gears, equipment and paperwork. Afterward, you will take a flight or drive to Pokhara and further trek or take a Heli flight from Dana to base camp as per the program. We will set up four camps. We will do a frequent rotation to each camp for the best acclimatization. The basecamp is normally set at (4,190m/13,747ft), Camp I at (5,150m/16,896ft), Camp II (5,700m/18,700ft), and Camp III (6,500m/21,325ft), Camp IV (7,400m/24,278ft) and Summit (8,091m/26,545ft). Annapurna is one of two (with K2) of the world\'s most dangerous mountains to climb, with a frightening fatality-to-summit ratio.',
                'fr' => 'L\'Annapurna I, généralement appelée Annapurna, est la dixième plus haute montagne du monde, avec une altitude de 8 091 m (26 545 pi) au-dessus du niveau de la mer. ... (French translation)', // Example French translation
            ],
            'duration' => '41',
            'region_id' => 3, // Or a more specific region ID if you have one
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Spring',
                'fr' => 'Printemps', // Example French translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu
            'highest_altitude' => 8091,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 4 nuits d\'hôtel à Katmandou (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'HOTEL IN POKHARA: 2 nights Hotel in Pokhara City (3-star category) – Sharing room on Bed and breakfast plan.',
                    'fr' => 'HÔTEL À POKHARA : 2 nuits d\'hôtel à Pokhara (catégorie 3 étoiles) – Chambre partagée en formule petit-déjeuner.',
                ],
                [
                    'en' => 'PERMITS: Expedition Royalty and permit of Nepal Government to climb Mt. Annapurna I, Conservation area entry permits, and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Mont Annapurna I, permis et frais d\'entrée de la zone de conservation.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (Domestic Flight): Fly from Kathmandu – Pokhara and drive from Pokhara to Dana (by jeep) While returning; Drive from Dana to Pokhara (by jeep) and fly from Pokhara to Kathmandu, as per itinerary. (Helicopter Flight): Both-way Helicopter flights from Dana - Annapurna Basecamp – Dana (on a schedule and a group basis).',
                    'fr' => 'TRANSPORT DES MEMBRES : (Vol intérieur) : Vol de Katmandou à Pokhara et trajet en voiture de Pokhara à Dana (en jeep). Au retour ; Trajet en voiture de Dana à Pokhara (en jeep) et vol de Pokhara à Katmandou, selon l\'itinéraire. (Vol en hélicoptère) : Vols aller-retour en hélicoptère de Dana - Camp de base de l\'Annapurna - Dana (selon un horaire et en groupe).',
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge during the trek and at the Basecamp. Hygienic and fresh green vegetables, fresh meat, fruits, soft drinks, and juice will be served regularly during the entire expedition using helicopter flights. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge pendant le trek et au camp de base. Des légumes verts frais et hygiéniques, de la viande fraîche, des fruits, des boissons gazeuses et des jus seront servis régulièrement pendant toute l\'expédition en utilisant des vols en hélicoptère. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen: 3 oxygen bottles (4 ltrs.) for each member and 1 oxygen bottle for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Oxygène de sommet : 3 bouteilles d\'oxygène (4 litres) pour chaque membre et 1 bouteille d\'oxygène pour chaque Sherpa de haute altitude.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa fee is $125 USD for 90 Days.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU & POKHARA: Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU ET POKHARA : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 1500 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 1500 USD.',
                ],
            ],
            'is_featured' => true, // Or false, as appropriate
        ]);

        $annapurna_i_expedition_data->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $annapurna_i_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $annapurna_i_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $annapurna_i_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $annapurna_i_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );


        $gasherbrum_i_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Gasherbrum I Expedition',
                'fr' => 'Expédition au Mont Gasherbrum I', // Example French translation
            ],
            'description' => [
                'en' => 'Gasherbrum I, surveyed as K5 and also known as Hidden Peak, is the 11th-highest mountain in the world at 8,080m above sea level. Gasherbrum I, also known as K5 or the Hidden Peak, is the 11th highest mountain in the world. It is located in the Karakoram range of Pakistan and is part of the Gasherbrum massif, a group of peaks that includes Gasherbrum I, II, III, IV, and V. Gasherbrum I at an elevation of 8,080 meters (26,510 feet) and is considered a challenging climb due to its steep and icy terrain. The group forms a semi-circle around its own South Gasherbrum Glacier. A French Expedition led by H. De Segogne made the first attempt in 1936, but they could not climb beyond Camp V at a height of 6797 meters. Gasherbrum I was first climbed on 5 July 1958, by Pete Schoening and Andy Kauffman of an eight-man American expedition led by Nicholas B. Clinch. Richard K. Irvin, Tom Nevison, Tom McCormack, Bob Swift, and Gil Roberts were also members of the team. Gasherbrum I, is the "least popular" of the 8000-meter peaks. It is also one of the peaks with the least deaths, but this probably has to do with the fact that only experienced mountaineers try a mountain as remote and hidden as Gasherbrum I. The peak was also the venue of the world’s first 8,000-meter climb in pure Alpine Style. This means that the start of the climb is done from the bottom of the mountain and all gears are carried on the way, if any bivouacs, they will be found on the way. The most common way to climb the peak is to attempt via the western side and all routes here lead to "The Japanese Couloir", which is located on top of the north-west face.',
                'fr' => 'Le Gasherbrum I, également connu sous le nom de K5 et de Hidden Peak, est la 11ème plus haute montagne du monde, culminant à 8 080 m au-dessus du niveau de la mer. ... (French translation)', // Example French translation
            ],
            'duration' => '50',
            'region_id' => 6, // Or a more specific region ID if you have one
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Islamabad', // Corrected starting point
            'ending_point' => 'Islamabad',  // Corrected ending point
            'best_time_for_expedition' => [
                'en' => 'Summer',
                'fr' => 'Été', // Example French translation
            ],
            'starting_altitude' => 500, // Approximate altitude in Islamabad
            'highest_altitude' => 8080,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'ACCOMMODATION IN ISLAMABAD: 3 nights hotel at 4-star Hotel in Islamabad on bed & breakfast Basis- Sharing Twin Bed Room.',
                    'fr' => 'HÉBERGEMENT À ISLAMABAD : 3 nuits d\'hôtel dans un hôtel 4 étoiles à Islamabad en formule petit-déjeuner - Chambre double partagée.',
                ],
                [
                    'en' => 'WELCOME DINNER: 5 nights hotel in Skardu on Bed and Breakfast plan.',
                    'fr' => 'DÎNER DE BIENVENUE : 5 nuits d\'hôtel à Skardu en formule petit-déjeuner.',
                ],
                [
                    'en' => 'PERMIT: Expedition Royalty and a permit fee of the PAKISTAN Government to climb Mt. G-1, for members and Sherpa.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement pakistanais pour l\'ascension du Mt. G-1, pour les membres et les Sherpas.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (Domestic Flight) Fly from Islamabad to Skardu and while returning from Skardu to Islamabad, as per itinerary, along with one guide. - LAND TRANSPORTATION (MEMBERS): Drive by jeep Skardu to Askole and on returning Askole to Skardu. - LAND TRANSPORTATION (STAFF): Islamabad to Askole via Skardu (by bus/jeep) for all climbing Sherpas and expeditions staff. (Members and staff will meet each other in Skardu).',
                    'fr' => 'TRANSPORT DES MEMBRES : (Vol intérieur) : Vol d\'Islamabad à Skardu et au retour de Skardu à Islamabad, selon l\'itinéraire, avec un guide. - TRANSPORT TERRESTRE (MEMBRES) : Trajet en jeep de Skardu à Askole et au retour d\'Askole à Skardu. - TRANSPORT TERRESTRE (PERSONNEL) : Islamabad à Askole via Skardu (en bus/jeep) pour tous les Sherpas d\'escalade et le personnel d\'expédition. (Les membres et le personnel se rencontreront à Skardu).',
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge/TENT during the trek and at the Basecamp. Hygienic vegetables, meat, fruits, soft drinks, and juice will be served during the entire expedition. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/tente pendant le trek et au camp de base. Des légumes hygiéniques, de la viande, des fruits, des boissons gazeuses et des jus seront servis pendant toute l\'expédition. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen cylinder: 3 oxygen bottles (4 liters) for each member and 2 oxygen bottles for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Bouteille d\'oxygène de sommet : 3 bouteilles d\'oxygène (4 litres) pour chaque membre et 2 bouteilles d\'oxygène pour chaque Sherpa de haute altitude.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Islamabad).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Islamabad).',
                ],
                [
                    'en' => 'PAKISTAN ENTRY VISA FEE: PAKISTANI Visa fee for 90 DAYS.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU PAKISTAN : Frais de visa pakistanais pour 90 JOURS.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Islamabad and Skardu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Islamabad et Skardu (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN ISLAMABAD & SKARDU: Extra nights’ accommodation in Islamabad & Skardu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À ISLAMABAD ET SKARDU : Nuits d\'hébergement supplémentaires à Islamabad et Skardu. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Islamabad & Skardu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Islamabad et Skardu, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 1500 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 1500 USD.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $gasherbrum_i_expedition_data->destinations()->sync(
            Destination::where('region_id', 6)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $gasherbrum_i_expedition_data,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $gasherbrum_i_expedition_data,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $gasherbrum_i_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $gasherbrum_i_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $gasherbrum_i_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );

        $broad_peak_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Broad Peak Expedition',
                'fr' => 'Expédition au Mont Broad Peak', // Example French translation
            ],
            'description' => [
                'en' => 'Broad Peak, considered as easiest 8000m peak to climb at 8,048 m (26,404 ft), is located in the Karakoram Range in Northeastern Pakistan. Broad Peak is the 12th highest mountain in the world, at an elevation of 8,051 meters (26,414 feet) above sea level. It is located in the Karakoram range in Gilgit Baltistan, Pakistan. The mountain gets its name by famous explorer Sir Martin Conway, from the fact that it has a broad, relatively flat summit, which makes it difficult to determine its exact height from a distance. It is considered a relatively easy mountain to climb, compared to some of the other peaks in the Karakoram range, but it is still a challenging climb, requiring technical skills and a high level of physical fitness. Geographically Broad Peak stands to the southeast of K2 in the Gasherbrum group of mountains. The first ascent of Broad Peak was achieved by a small Austrian expedition in 1957. All four of the team members - Marcus Schmuck, Fritz Wintersteller, Kurt Diemberger, and Hermann Buhl - reached the summit. We proudly can say that we are the ones who hold a very high success rate on Broad Peak. We are counted as the best among the other organizers on the mountain. The expedition will be fully supported by Seven Summit Treks’ veteran Nepali Sherpa team with previous experience on Broad Peak and are technically skilled. The Sherpa team will have perfect knowledge of climbing, risk management, friendly behavior, and be highly motivated. The Seven Summit Treks’ Broad Peak expedition will begin in the third week of June starting in Islamabad, and further flight to Skardu. The Vertical height gain from the Base camp to the summit is over 3000m. on which we will aim to place three camps to support your ascent and acclimatization. We will do a frequent rotation to each camp for the best acclimatization. The basecamp is normally set at (5,300m/17,388ft), Camp I at (6,000m/19,685ft), Camp II at (6,500m/21,325ft), and Camp III (7,100m/23,294ft), and Summit (8,048m/26,404ft).',
                'fr' => 'Le Broad Peak, considéré comme le sommet de 8000 m le plus facile à gravir à 8 048 m (26 404 pi), est situé dans la chaîne du Karakoram, dans le nord-est du Pakistan. ... (French translation)', // Example French translation
            ],
            'duration' => '52',
            'region_id' => 6, // Or a more specific region ID if you have one
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Islamabad',
            'ending_point' => 'Islamabad',
            'best_time_for_expedition' => [
                'en' => 'Summer',
                'fr' => 'Été', // Example French translation
            ],
            'starting_altitude' => 500, // Approximate altitude in Islamabad. Verify.
            'highest_altitude' => 8051,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'ACCOMMODATION IN ISLAMABAD: 2 nights hotel in ISLAMABAD (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT À ISLAMABAD : 2 nuits d\'hôtel à Islamabad (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in ISLAMABAD with Office Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Islamabad avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMITS: Expedition Royalty and a permit fee of the PAKISTAN Government to climb Mt. Broad Peak, for members and Sherpa.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement pakistanais pour l\'ascension du Mt. Broad Peak, pour les membres et les Sherpas.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (Domestic Flight) Fly from Islamabad to Skardu and while returning from Skardu to Islamabad, as per itinerary, along with one guide. - LAND TRANSPORTATION (MEMBERS): Drive by jeep Skardu to Askole and on returning Askole to Skardu. - LAND TRANSPORTATION (STAFF): Islamabad to Askole via Skardu (by bus/jeep) for all climbing Sherpas and expeditions staff. (Members and staff will meet each other in Skardu).',
                    'fr' => 'TRANSPORT DES MEMBRES : (Vol intérieur) : Vol d\'Islamabad à Skardu et au retour de Skardu à Islamabad, selon l\'itinéraire, avec un guide. - TRANSPORT TERRESTRE (MEMBRES) : Trajet en jeep de Skardu à Askole et au retour d\'Askole à Skardu. - TRANSPORT TERRESTRE (PERSONNEL) : Islamabad à Askole via Skardu (en bus/jeep) pour tous les Sherpas d\'escalade et le personnel d\'expédition. (Les membres et le personnel se rencontreront à Skardu).',
                ],
                [
                    'en' => 'FOOD & LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge/TENT during the trek and at the Basecamp. Hygienic and green vegetables, meat, fruits, soft drinks, and juice will be served during the entire expedition. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/tente pendant le trek et au camp de base. Des légumes verts hygiéniques, de la viande, des fruits, des boissons gazeuses et des jus seront servis pendant toute l\'expédition. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen cylinder: 3 oxygen bottles (4 liters) for each member and 2 oxygen bottles for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Bouteille d\'oxygène de sommet : 3 bouteilles d\'oxygène (4 litres) pour chaque membre et 2 bouteilles d\'oxygène pour chaque Sherpa de haute altitude.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Islamabad).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Islamabad).',
                ],
                [
                    'en' => 'PAKISTAN ENTRY VISA FEE: PAKISTANI Visa fee for 90 DAYS.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU PAKISTAN : Frais de visa pakistanais pour 90 JOURS.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Islamabad and Skardu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Islamabad et Skardu (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN ISLAMABAD & SKARDU: Extra nights’ accommodation in Islamabad & Skardu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À ISLAMABAD ET SKARDU : Nuits d\'hébergement supplémentaires à Islamabad et Skardu. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Islamabad & Skardu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Islamabad et Skardu, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 1500 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 1500 USD.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $broad_peak_expedition_data->destinations()->sync(
            Destination::where('region_id', 6)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $broad_peak_expedition_data,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $broad_peak_expedition_data,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $broad_peak_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $broad_peak_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $broad_peak_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );

        $gasherbrum_ii_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Gasherbrum II Expedition',
                'fr' => 'Expédition au Mont Gasherbrum II', // Example French translation
            ],
            'description' => [
                'en' => 'Gasherbrum II, surveyed as K4, is the 13th-highest mountain in the world at 8,035 m. above sea level. Gasherbrum II (also known as K4) is the 13th-highest mountain in the world, with an elevation of 8,035 meters (26,362 feet) above sea level. It is located in the Karakoram range of the Himalayas, on the border between Pakistan and China. The name "Gasherbrum" comes from the Balti words, Rgasha meaning "Beautiful" and Brum meaning "Mountain. The first exploration of the mountain was made in 1909 by an Italian expedition under the leadership of the Duke of Abruzzi, after whom the standard climbing route of K2 is named. One of the members of the expedition was Vittorio Sella, the quality of whose photos has not been surpassed to the present day. The first ascent of G II was made on 7 July 1956, by three members of an Austrian expedition under the leadership of Fritz Moravec, via the Southwest Ridge. The expedition consisted of Fritz Moravec, Josef Larch, and Hans Willenpart. Their chosen route - the Southwest Ridge, is the standard climbing route of GII but is considered one of the more difficult routes among the 8,000-meter peaks. There are no steep slopes or technical climbing challenges, which makes this a relatively safest and attainable peaks to climb than other 8000ers. This can be taken as the starting 8000m peak for those who are willing to summit all 14 8000m peaks of the world. The southwest ridge is the preferred route to the summit of G II, which involves less amount of risk while climbing.',
                'fr' => 'Le Gasherbrum II (également connu sous le nom de K4) est la 13ème plus haute montagne du monde, avec une altitude de 8 035 mètres (26 362 pieds) au-dessus du niveau de la mer. ... (French translation)', // Example French translation
            ],
            'duration' => '50',
            'region_id' => 6, // Or a more specific region ID if you have one
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Islamabad',
            'ending_point' => 'Islamabad',
            'best_time_for_expedition' => [
                'en' => 'Summer',
                'fr' => 'Été', // Example French translation
            ],
            'starting_altitude' => 500, // Approximate altitude in Islamabad. Verify.
            'highest_altitude' => 8034,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'ACCOMMODATION IN ISLAMABAD: 2 nights hotel in ISLAMABAD (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT À ISLAMABAD : 2 nuits d\'hôtel à Islamabad (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in ISLAMABAD with Office Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Islamabad avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMIT: Expedition Royalty and a permit fee of the PAKISTAN Government to climb Mt. G 2, for members and Sherpa.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement pakistanais pour l\'ascension du Mt. G 2, pour les membres et les Sherpas.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (Domestic Flight) Fly from Islamabad to Skardu and while returning from Skardu to Islamabad, as per itinerary, along with one guide. - LAND TRANSPORTATION (MEMBERS): Drive by jeep Skardu to Askole and on returning Askole to Skardu. - LAND TRANSPORTATION (STAFF): Islamabad to Askole via Skardu (by bus/jeep) for all climbing Sherpas and expeditions staff. (Members and staff will meet each other in Skardu)',
                    'fr' => 'TRANSPORT DES MEMBRES : (Vol intérieur) : Vol d\'Islamabad à Skardu et au retour de Skardu à Islamabad, selon l\'itinéraire, avec un guide. - TRANSPORT TERRESTRE (MEMBRES) : Trajet en jeep de Skardu à Askole et au retour d\'Askole à Skardu. - TRANSPORT TERRESTRE (PERSONNEL) : Islamabad à Askole via Skardu (en bus/jeep) pour tous les Sherpas d\'escalade et le personnel d\'expédition. (Les membres et le personnel se rencontreront à Skardu).',
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge/TENT during the trek and at the Basecamp. Hygienic vegetables, meat, fruits, soft drinks, and juice will be served during the entire expedition. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/tente pendant le trek et au camp de base. Des légumes hygiéniques, de la viande, des fruits, des boissons gazeuses et des jus seront servis pendant toute l\'expédition. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen cylinder: 3 oxygen bottles (4 liters) for each member and 2 oxygen bottles for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Bouteille d\'oxygène de sommet : 3 bouteilles d\'oxygène (4 litres) pour chaque membre et 2 bouteilles d\'oxygène pour chaque Sherpa de haute altitude.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Islamabad).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Islamabad).',
                ],
                [
                    'en' => 'PAKISTAN ENTRY VISA FEE: PAKISTANI Visa fee for 90 DAYS.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU PAKISTAN : Frais de visa pakistanais pour 90 JOURS.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Islamabad and Skardu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Islamabad et Skardu (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN ISLAMABAD & SKARDU: Extra nights’ accommodation in Islamabad & Skardu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À ISLAMABAD ET SKARDU : Nuits d\'hébergement supplémentaires à Islamabad et Skardu. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Islamabad & Skardu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Islamabad et Skardu, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 1500 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 1500 USD.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $gasherbrum_ii_expedition_data->destinations()->sync(
            Destination::where('region_id', 6)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $gasherbrum_ii_expedition_data,
            'cover_image_id',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $gasherbrum_ii_expedition_data,
            'feature_image_id',
            public_path('photos/mountain4.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $gasherbrum_ii_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $gasherbrum_ii_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $gasherbrum_ii_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );


        $shisha_pangma_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Shisha Pangma Expedition',
                'fr' => 'Expédition au Mont Shisha Pangma', // Example French translation
            ],
            'description' => [
                'en' => 'Shisha Pangma at 8,027m (26,335ft) above sea level, known in Tibet as "the God of the Grasslands", is the lowest in elevation among fourteen 8,000m. peaks. Shisha Pangma, the 14th highest peak in the world, is located almost due north of Kathmandu entirely on the Tibetan side of the Himalaya. The peak is characterized by its long, steep, craggy southern face rising over 2000m, making it an imposing sight to all would-be climbers. The Indian-Nepali name for the peak is Gosaitan, which denotes “The Holy Place". The Tibetan name for the mountain is Xixapangma. Its name translates to "The mountain overlooking the grassy plains". Shisha Pangma was the last of the 8000m peaks to be climbed. The first ascent is credited to Hsu Ching and his ten-man Chinese climbing team in 1964. The team was composed of Chang Chun-yen, Wang Fu-zhou, Chen San, Cheng Tien-Liang, Wu Tsung-Yue, Sodnam Doji, Migmar Trashi, Doji, and Yonten. Shisha Pangma was finally opened to foreign teams in 1980. The first climb after Shishapangma opened was achieved by a German expedition via the northern route. The Seven Summit Treks’ Shisha Pangma expedition will begin in the first week of April starting in Kathmandu, and further driving to Timure after acquiring a visa for China. The vertical height gain from the Base camp to the summit is almost 3000m. on which we will aim to place three camps to support your ascent and acclimatization. We will do a frequent rotation to each camp for the best acclimatization. The basecamp is normally set at (5,220m/ 17,126ft), Camp I at (6,400m/20,997ft), Camp II at (6,800m/22,310ft), and Camp III (7,450m/24,442ft), and Summit (8,027 m/26,335 ft).',
                'fr' => 'Le Shisha Pangma, à 8 027 m (26 335 pi) au-dessus du niveau de la mer, connu au Tibet sous le nom de « Dieu des prairies », est le plus bas en altitude parmi les quatorze sommets de 8 000 m. ... (French translation)', // Example French translation
            ],
            'duration' => '33',
            'region_id' => 7, // Or a more specific region ID if you have one
            'category_id' => 1, // Expedition Category
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Spring/Autumn',
                'fr' => 'Printemps/Automne', // Example French translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu. Verify.
            'highest_altitude' => 8027,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Kathmandu Airport - Hotel transfers – Kathmandu Airport (Pick Up and Drop).',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport de Katmandou - hôtel - aéroport de Katmandou (prise en charge et retour).',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 6 nights hotel in Kathmandu (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 6 nuits d\'hôtel à Katmandou (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMIT: Expedition Royalty and a permit fee of the Chinese Government (CMA / TMA) to climb Mt. Shisha Pangma, Restricted are permit and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement chinois (CMA / TMA) pour l\'ascension du Mont Shisha Pangma, permis et frais de zone restreinte.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: Land Transportation (Members/Staffs): In a group basis: drive by Jeep from Kathmandu to Chinese Basecamp via Kerong Border. While returning Drive by Jeep from the Chinese Basecamp to Kathmandu via Kerong Border. (In case, if members have to return earlier than the team due to personal reasons, members have to pay their own transportation cost up to Kathmandu).',
                    'fr' => 'TRANSPORT DES MEMBRES : Transport terrestre (Membres/Personnel) : En groupe : trajet en jeep de Katmandou au camp de base chinois via la frontière de Kerong. Au retour, trajet en jeep du camp de base chinois à Katmandou via la frontière de Kerong. (Si des membres doivent revenir plus tôt que l\'équipe pour des raisons personnelles, les membres doivent payer leurs propres frais de transport jusqu\'à Katmandou).',
                ],
                [
                    'en' => 'FOOD AND LODGING DURING THE TREK: Three (3) meals a day (breakfast, lunch, and dinner), including tea, coffee, and hot water, will be provided, along with accessible accommodation at hotels, lodges, or tea houses (sharing) during the trek. Hygienic foods will be served throughout the entire trek. (To upgrade to a room with an attached washroom, inform us earlier. Extra cost applies).',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT PENDANT LE TREK : Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris thé, café et eau chaude, seront fournis, ainsi qu\'un hébergement accessible dans des hôtels, des lodges ou des maisons de thé (partagés) pendant le trek. Des aliments hygiéniques seront servis tout au long du trek. (Pour passer à une chambre avec salle de bain attenante, informez-nous plus tôt. Des frais supplémentaires s\'appliquent).',
                ],
                [
                    'en' => 'BASECAMP LOGISTICS (FULL BOARD SUPPORT): 1. Three (3) meals a day (breakfast, lunch, and dinner), including tea, coffee, juice, soft drinks, etc., will be provided. Additionally, a comfortable tent will be provided for accommodation at the base camp. Hygienic and green vegetables, fresh meat, soft drinks, and juice will be served regularly throughout the entire expedition, facilitated by helicopter flights. A well-managed base camp & Advance base camp (ABC) setup, including a dining tent, kitchen tent, toilet, and shower tent, will be available for both members and staff.',
                    'fr' => 'LOGISTIQUE DU CAMP DE BASE (SUPPORT PENSION COMPLÈTE) : 1. Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris thé, café, jus, boissons gazeuses, etc., seront fournis. De plus, une tente confortable sera fournie pour l\'hébergement au camp de base. Des légumes verts hygiéniques, de la viande fraîche, des boissons gazeuses et des jus seront servis régulièrement tout au long de l\'expédition, facilitée par des vols en hélicoptère. Un camp de base et un camp de base avancé (ABC) bien aménagés, comprenant une tente-salle à manger, une tente-cuisine, des toilettes et une tente-douche, seront disponibles pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'OXYGEN BOTTLE (O2): Summit Oxygen cylinder: 2 oxygen bottles (4 ltrs.) for each member and 1 oxygen bottle for each high-altitude Sherpa.',
                    'fr' => 'BOUTEILLE D\'OXYGÈNE (O2) : Bouteille d\'oxygène de sommet : 2 bouteilles d\'oxygène (4 litres) pour chaque membre et 1 bouteille d\'oxygène pour chaque Sherpa de haute altitude.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIRFARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa Fee is $125 USD for 90 Days. (Apply for Multiple Entry Visa).',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours. (Demandez un visa à entrées multiples).',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU : Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY : Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high-altitude rescue, air evacuation, medical treatment, repatriation, etc.) *Mandatory (Send us a copy of your insurance policy before your arrival).',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude, l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire (Envoyez-nous une copie de votre police d\'assurance avant votre arrivée).',
                ],
                [
                    'en' => 'PERSONAL EXPENSES : Telephone Calls, Internet, Toiletries, battery recharge, hot shower, bottled/mineral water, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, eau en bouteille/minérale, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);
        $shisha_pangma_expedition_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $shisha_pangma_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $shisha_pangma_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $shisha_pangma_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $shisha_pangma_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $shisha_pangma_expedition_data,
            'images',
            public_path('photos/mountain4.jpg')
        );


        $gyachung_kang_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Gyachung Kang Expedition',
                'fr' => 'Expédition au Gyachung Kang', // Example French Translation
            ],
            'description' => [
                'en' => 'Gyachung Kang is a high mountain in the Khumbu region. It is the highest peak between Mount Everest and Cho Oyu. Its twin snow and rock peaks tower above the immediate surroundings, separated by a narrow saddle. The approach is easy by Gokyo Lake, then by crossing from the Ngozumpa glacier. This peak was first climbed by Y. Kato and Pasang Phutar on a Japanese expedition in 1964. The route presents some small technical difficulties and care should be taken for possible avalanches.',
                'fr' => 'Le Gyachung Kang est une haute montagne de la région du Khumbu. C\'est le plus haut sommet entre le mont Everest et le Cho Oyu. Ses pics jumeaux de neige et de roche dominent les environs immédiats, séparés par une selle étroite.',
            ],
            'duration' => '49',
            'region_id' => 1, // Or a more specific region ID if you have one
            'category_id' => 2, // Updated to 2
            'grade' => '4', // Assuming "Best" maps to 4, adjust as needed.
            'starting_point' => 'Kathmandu', // Or a more specific starting point if known
            'ending_point' => 'Kathmandu', // Or a more specific ending point if known
            'best_time_for_expedition' => [
                'en' => 'Spring',
                'fr' => 'Printemps', // Example French Translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu. Verify.
            'highest_altitude' => 7952,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'AIRPORT PICK-UP & DROP: Airport - Hotel transfer – Airport (Pick Up and Drop).',
                    'fr' => 'PRISE EN CHARGE ET DÉPOSE À L\'AÉROPORT : Transfert aéroport - hôtel - aéroport (prise en charge et retour).',
                ],
                [
                    'en' => 'ACCOMMODATION IN KATHMANDU: 4 nights hotel (3star category) in Kathmandu on a bed & breakfast Basis- Sharing Twin Bed Room.',
                    'fr' => 'HÉBERGEMENT À KATMANDOU : 4 nuits d\'hôtel (catégorie 3 étoiles) à Katmandou en formule lit et petit-déjeuner - Chambre à deux lits partagée.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office’s Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMITS : Expedition Royalty and permit of Nepal Government to climb Mt. Gyachung Khang, Sagarmatha National Park entry permit, Pasang Lhamu Rural Municipal entry permit, and fees.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Mt. Gyachung Khang, permis d\'entrée du parc national de Sagarmatha, permis d\'entrée de la municipalité rurale de Pasang Lhamu et frais.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION : Air Transportation: Fly from Kathmandu – to Lukla and while returning Lukla – to Kathmandu, domestic flight as per itinerary',
                    'fr' => 'TRANSPORT DES MEMBRES : Transport aérien : Vol de Katmandou à Lukla et au retour Lukla à Katmandou, vol intérieur selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOODS & LODGING : 3 meals a day (BLD; including tea and coffee) along with accessible accommodation at Hotel/Lodge/Tea house/Camp during the trek and BC. Well-managed base camp set up for members & Staffs. Kailas or the north face tents will be set up while camping on sharing basis.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (PDJ, déjeuner, dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/maison de thé/camp pendant le trek et le camp de base. Camp de base bien aménagé pour les membres et le personnel. Les tentes Kailas ou face nord seront installées en camping sur une base de partage.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA : 1 veteran and Government Licensed Climbing Sherpa per member. (1 Member: 1 Sherpa).',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre. (1 membre : 1 Sherpa).',
                ],
                [
                    'en' => 'HIGH CAMP SERVICE : High Altitude Tent, Necessary cooking EPI gas, cooking pot for a member, High food for a member, Sherpa, all climbing and cooking crew at (C1) (C2) (C3) and (C4). Group climbing gears, and fixed and dynamic rope during the climbing period as required.',
                    'fr' => 'SERVICE DE HAUT CAMP : Tente de haute altitude, gaz EPI de cuisson nécessaire, marmite pour un membre, nourriture de haute altitude pour un membre, Sherpa, toute l\'équipe d\'escalade et de cuisine à (C1) (C2) (C3) et (C4). Équipement d\'escalade de groupe et corde fixe et dynamique pendant la période d\'escalade, selon les besoins.',
                ],
                [
                    'en' => 'ROPE FIXING : The team of experienced Sherpas will fix the route In Gyachung Khang (no extra charge will be applied to members).',
                    'fr' => 'FIXATION DE CORDE : L\'équipe de Sherpas expérimentés fixera la route au Gyachung Khang (aucun frais supplémentaire ne sera appliqué aux membres).',
                ],
                [
                    'en' => 'SATELLITE PHONE : Satellite Phone for emergency communication carried by Sherpa, also available for members with appropriate charge.',
                    'fr' => 'TÉLÉPHONE SATELLITE : Téléphone satellite pour les communications d\'urgence transporté par Sherpa, également disponible pour les membres moyennant des frais appropriés.',
                ],
                [
                    'en' => 'WALKIE-TALKIE : Walkie–Talkie for communicating from Base Camp to Mountain and Mountain to Base Camp.',
                    'fr' => 'TALKIE-WALKIE : Talkie-walkie pour communiquer du camp de base à la montagne et de la montagne au camp de base.',
                ],
                [
                    'en' => 'WEATHER FORECAST : Weather forecast report from Meteotest, Bern (Switzerland) during the entire expedition.',
                    'fr' => 'PRÉVISIONS MÉTÉOROLOGIQUES : Rapport de prévisions météorologiques de Meteotest, Berne (Suisse) pendant toute l\'expédition.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'INTERNATIONAL AIRFARE : International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION INTERNATIONAL : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL VISA FEES : Nepali Visa fee is US$ 40 per person for 30 days (to be applied for 60 days (USD$ 100).',
                    'fr' => 'FRAIS DE VISA NÉPAL : Les frais de visa népalais sont de 40 $ US par personne pour 30 jours (pour une demande de 60 jours (100 $ US)).',
                ],
                [
                    'en' => 'LUNCH & DINNER : Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU : Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition (due to any reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition (pour toute raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE : Travel and high altitude insurance, accident, medical & emergency evacuation.',
                    'fr' => 'ASSURANCE : Assurance voyage et haute altitude, accident, médicale et évacuation d\'urgence.',
                ],
                [
                    'en' => 'RESCUE EVACUATION : Medical Insurance and emergency rescue evacuation cost if required. (Rescue, Repatriation, Medication, Medical Tests, and Hospitalization costs.)',
                    'fr' => 'ÉVACUATION DE SAUVETAGE : Frais d\'assurance médicale et d\'évacuation d\'urgence si nécessaire. (Frais de sauvetage, de rapatriement, de médicaments, de tests médicaux et d\'hospitalisation).',
                ],
                [
                    'en' => 'PERSONAL EXPENSES : Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will serve soft drinks for members at the base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous servirons des boissons gazeuses aux membres au camp de base).',
                ],
                [
                    'en' => 'PERSONAL EQUIPMENT : Clothing, Packing Items or Bags, Personal Medical Kit, Personal Trekking /Climbing Gears.',
                    'fr' => 'ÉQUIPEMENT PERSONNEL : Vêtements, articles ou sacs d\'emballage, trousse médicale personnelle, équipement personnel de trekking/d\'escalade.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $gyachung_kang_expedition_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $gyachung_kang_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $gyachung_kang_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $gyachung_kang_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $gyachung_kang_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );

        $nuptse_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Nuptse Expedition',
                'fr' => 'Expédition au Mont Nuptse', // Example French Translation
            ],
            'description' => [
                'en' => 'Nuptse shares in the glory of the Everest Massif and is the southern border of the Western Cwm. Viewed from the Kalapatthar it appears as a massive wall guarding the approach to Everest. The iconic Nuptse, at 7864 meters (25,801 ft), emerges as the western satellite peak of Everest and Lhotse. The name Nuptse in the Sherpa language comes from its position where Nup means West and Tse means peak. It shares in the glory of the Everest Massif and is the southern border of the Western Cwm. Lhotse joins Nuptse via Tenzing Peak to the east and 2 of its dominant spurs end at the basecamp and Khumbu icefall respectively. Viewed from the Kalapatthar it appears as a massive wall guarding the approach to Everest. The summit ridge of Nuptse comprises 7 major sub-summits, all of which are above 7500 meters. Nuptse is one of the highest mountains among 7,000 meters peaks at 7,864 meters. The climb is regarded as one of the toughest technical mountains to climb to its summit top. The climbing route which runs along the near vertical north face above western cwm is one of the toughest climbing challenges in a 7000er. Nuptse was first ascended by British national Dennis Davis and Nepali national Sherpa Tashi via the North Ridge (Scott-Route) on May 16, 1961. The summit push of Nuptse is extremely dangerous due to the ferocious winds and the wind cornice that forms. Its near-vertical daunting climbing face with knife-edge summit ridge. The Seven Summit Treks’ Nuptse expedition will begin in the second week of April starting in Kathmandu. You will have a couple of days for the preparation of gear, equipment, and paperwork. Afterward, you will take a flight to Lukla from where the real treks start to base camp which takes you around 7 days on foot as per the program. This trip suits those who have previous experiences with a few 6000m peaks or even more. The route progresses through Khumbu Icefall. Moving further, we will reach Camp 1 which exists at the top of Khumbu Icefall and is surrounded by crevasses. From Camp 1, we will pass through the lateral moraine to Camp 2 which is a common camp for all 3 Everest peaks. Leaving Camp 2, we will head to the north face of Nuptse and will push via the central spur to the summit.',
                'fr' => 'Le Nuptse partage la gloire du massif de l\'Everest et constitue la limite sud du Western Cwm. Vu du Kalapatthar, il apparaît comme un mur massif gardant l\'approche de l\'Everest.',
            ],
            'duration' => '46',
            'region_id' => 1, // Or a more specific region ID if you have one
            'category_id' => 2, // Updated to 2
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu', // Or Lukla, depending on the trek start
            'ending_point' => 'Kathmandu', // Or Lukla, depending on the trek end
            'best_time_for_expedition' => [
                'en' => 'Spring',
                'fr' => 'Printemps', // Example French Translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu. Verify.
            'highest_altitude' => 7864,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (5-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 4 nuits d\'hôtel à Katmandou (catégorie 5 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMITS: Expedition Royalty and permit of Nepal Government to climb Mt. Nuptse, Sagarmatha National Park permits, and Pasang Lhamu Rural Municipality Entry Permit and its fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Mont Nuptse, permis du parc national de Sagarmatha et permis d\'entrée de la municipalité rurale de Pasang Lhamu et ses frais.',
                ],
                [
                    'en' => 'ICEFALL FEE: Khumbu Icefall climbing charge to (SPCC) Sagarmatha Pollution Control Committee.',
                    'fr' => 'FRAIS DE CASCADE DE GLACE : Frais d\'escalade de la cascade de glace de Khumbu au (SPCC) Comité de contrôle de la pollution de Sagarmatha.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (Domestic Flight) Fly from Kathmandu – Lukla and while returning Lukla - Kathmandu, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : (Vol intérieur) Vol de Katmandou à Lukla et au retour Lukla - Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOOD AND LODGING DURING THE TREK: Three (3) meals a day (breakfast, lunch, and dinner), including tea, coffee, and hot water, will be provided, along with accessible accommodation at hotels, lodges, or tea houses (sharing) during the trek. Hygienic foods will be served throughout the entire trek.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT PENDANT LE TREK : Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris le thé, le café et l\'eau chaude, seront fournis, ainsi qu\'un hébergement accessible dans des hôtels, des lodges ou des maisons de thé (partagés) pendant le trek. Des aliments hygiéniques seront servis tout au long du trek.',
                ],
                [
                    'en' => 'BASECAMP LOGISTICS (FULL BOARD SUPPORT): Three (3) meals a day (breakfast, lunch, and dinner), including tea, coffee, juice, soft drinks, etc., will be provided. Additionally, a comfortable box tent will be provided for accommodation at the base camp. Hygienic and fresh green vegetables, fresh meat, fruits, soft drinks, and juice will be served regularly throughout the entire expedition, facilitated by helicopter flights. A well-managed base camp setup, including a dining tent, kitchen tent, toilet, and shower tent, will be available for both members and staff.',
                    'fr' => 'LOGISTIQUE DU CAMP DE BASE (SUPPORT PENSION COMPLÈTE) : Trois (3) repas par jour (petit-déjeuner, déjeuner et dîner), y compris le thé, le café, le jus, les boissons gazeuses, etc., seront fournis. De plus, une tente-box confortable sera fournie pour l\'hébergement au camp de base. Des légumes verts frais et hygiéniques, de la viande fraîche, des fruits, des boissons gazeuses et des jus seront servis régulièrement tout au long de l\'expédition, facilitée par des vols en hélicoptère. Un camp de base bien aménagé, comprenant une tente-salle à manger, une tente-cuisine, des toilettes et une tente-douche, sera disponible pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA: 1 veteran and government-licensed climbing Sherpa per member (1 Member: 1 Sherpa), during the entire climb from Basecamp to the summit and back, and on each rotation.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa d\'escalade vétéran et licencié par le gouvernement par membre (1 membre : 1 Sherpa), pendant toute l\'ascension du camp de base au sommet et retour, et à chaque rotation.',
                ],
                [
                    'en' => 'HIGH CAMP SERVICE (INFRASTRUCTURE AND LOGISTICS): High Altitude Tent, Necessary cooking EPI gas, cooking pot, High food for a member, Sherpa, and other crews at (C1) (C2) (C3) and (C4). Group climbing gears, fixed and dynamic rope during the climbing period as required.',
                    'fr' => 'SERVICE DE HAUT CAMP (INFRASTRUCTURE ET LOGISTIQUE) : Tente de haute altitude, gaz EPI de cuisson nécessaire, marmite, nourriture de haute altitude pour un membre, Sherpa et les autres équipes à (C1) (C2) (C3) et (C4). Équipement d\'escalade de groupe, corde fixe et dynamique pendant la période d\'escalade, selon les besoins.',
                ],
                [
                    'en' => 'HIGH CAMP KITCHEN AND DINING : SST will have one cook, kitchen, and dining tents in Camp I and Camp II.',
                    'fr' => 'CUISINE ET SALLE À MANGER EN HAUT CAMP : SST aura une tente de cuisine et une tente-salle à manger au camp I et au camp II.',
                ],
                [
                    'en' => 'ROPE FIXING TEAM : The team of experienced Sherpas (including personal Sherpa) will fix the route in Nuptse (no extra charge will be applied to members). However, Rope and route fixing on Nuptse is not guaranteed due to the small number of team members. All involved climbers are required to collaborate and contribute to the route-fixing efforts.',
                    'fr' => 'ÉQUIPE DE FIXATION DE CORDE : L\'équipe de Sherpas expérimentés (y compris le Sherpa personnel) fixera la route au Nuptse (aucun frais supplémentaire ne sera appliqué aux membres). Cependant, la fixation de la corde et de la route sur le Nuptse n\'est pas garantie en raison du petit nombre de membres de l\'équipe. Tous les grimpeurs impliqués sont tenus de collaborer et de contribuer aux efforts de fixation de la route.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIRFARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa fee is $125 USD for 90 Days.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU: Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, or domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition ou d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
            ],
            'is_featured' => false,
        ]);
        $nuptse_expedition_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $nuptse_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $nuptse_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $nuptse_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $nuptse_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );

        $gangapurna_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Gangapurna Expedition',
                'fr' => 'Expédition au Mont Gangapurna', // Example French Translation
            ],
            'description' => [
                'en' => 'Mt. Gangapurna stands high at 7,455 meters, perched on the high Manang valley above the windswept Manang valley and towards the extreme North of Annapurna mountain range, one of the least climbed mountains of Annapurna Himalayan range at Gandaki Zone its location at 28 36 18 Latitude & 83 57 00 Longitude. Gangapurna Peak climbs with some technical difficulties in a few sections of the climbing route to the summit top, much care, and precaution should be taken especially in snow conditions and new crevices. Gangapurna Expedition is one of the most famous and beautiful and excellent mountains in Nepal. Mount Gangapurna Expedition (7,454m) is located in the Annapurna region between Annapurna III and Tilicho peak. Mt. Gangapurna was first climbed in 1965 by a German expedition led by Günther Hauser, via the East Ridge. Mount Gangapurna expedition offers superb Himalayan views of Mt. Manaslu 8163m, Annapurna I 8091m, Mt. Annapurna II 7937m, Annapurna III 7555m, Annapurna IV 7525m, Tilicho peak 7134m, Pisang peak 6091m, Chulu west peak 6419m, Chulu east peak, Thorung peak, etc, beautiful landscape, lush valleys, mixed culture. Since the Mt. Gangapurna expedition has been open numerous mountaineers summited this peak.',
                'fr' => 'Le mont Gangapurna culmine à 7 455 mètres, perché sur la haute vallée de Manang au-dessus de la vallée de Manang balayée par les vents et vers l\'extrême nord de la chaîne de l\'Annapurna, l\'une des montagnes les moins escaladées de la chaîne himalayenne de l\'Annapurna dans la zone de Gandaki, son emplacement à 28 36 18 de latitude et 83 57 00 de longitude',
            ],
            'duration' => '35',
            'region_id' => 3, // Or a more specific region ID if you have one
            'category_id' => 2, // Updated to 2
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu', // Or a more specific starting point if known
            'ending_point' => 'Kathmandu', // Or a more specific ending point if known
            'best_time_for_expedition' => [
                'en' => 'Spring/Autumn',
                'fr' => 'Printemps/Automne', // Example French Translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu. Verify.
            'highest_altitude' => 7455,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'AIRPORT PICK-UP & DROP: Airport - Hotel transfers – Airport (Pick Up and Drop).',
                    'fr' => 'PRISE EN CHARGE ET DÉPOSE À L\'AÉROPORT : Transferts aéroport - hôtel - aéroport (prise en charge et retour).',
                ],
                [
                    'en' => 'ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (3 stars) on bed & breakfast Basis-Twin Bed Room (Sharing).',
                    'fr' => 'HÉBERGEMENT À KATMANDOU : 4 nuits d\'hôtel à Katmandou (3 étoiles) en formule lit et petit-déjeuner - Chambre à deux lits (partagée).',
                ],
                [
                    'en' => 'ACCOMMODATION IN POKHARA: 1-night hotel in Pokhara (3 stars) on bed & breakfast Basis-Twin Bed Room (Sharing).',
                    'fr' => 'HÉBERGEMENT À POKHARA : 1 nuit d\'hôtel à Pokhara (3 étoiles) en formule lit et petit-déjeuner - Chambre à deux lits (partagée).',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office’s Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMITS : Expedition Royalty and permit of Nepal Government to climb Ganagapurna, TIMS Card, Annapurna conservation area entry permit & fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Ganagapurna, carte TIMS, permis et frais d\'entrée de la zone de conservation de l\'Annapurna.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: Drive from Kathmandu – to Chame, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : Trajet de Katmandou à Chame, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOODS & LODGING : Food 3 meals a day (BDL; including tea and coffee) along with accessible accommodation at Hotel/Lodge/Tea house/Camp during the trek and BC. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (PDJ, déjeuner, dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/maison de thé/camp pendant le trek et le camp de base. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA : Veteran and Government Licensed Climbing Guide.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : Guide d\'escalade vétéran et licencié par le gouvernement.',
                ],
                [
                    'en' => 'HIGH CAMP SERVICE : High Altitude Tent, Necessary cooking EPI gas, cooking pot for a member, High food for a member, Sherpa, all climbing and cooking crew at (C1) (C2) and (C3). Group climbing gears, and fixed and dynamic rope during the climbing period as required.',
                    'fr' => 'SERVICE DE HAUT CAMP : Tente de haute altitude, gaz EPI de cuisson nécessaire, marmite pour un membre, nourriture de haute altitude pour un membre, Sherpa, toute l\'équipe d\'escalade et de cuisine à (C1) (C2) et (C3). Équipement d\'escalade de groupe et corde fixe et dynamique pendant la période d\'escalade, selon les besoins.',
                ],
                [
                    'en' => 'WALKIE-TALKIE : Walkie –Talkie for communicating from Base Camp to Mountain and Mountain to Base Camp.',
                    'fr' => 'TALKIE-WALKIE : Talkie-walkie pour communiquer du camp de base à la montagne et de la montagne au camp de base.',
                ],
                [
                    'en' => 'WEATHER FORECAST : Weather forecast report during the entire expedition.',
                    'fr' => 'PRÉVISIONS MÉTÉOROLOGIQUES : Rapport de prévisions météorologiques pendant toute l\'expédition.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'INTERNATIONAL AIRFARE : International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION INTERNATIONAL : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL VISA FEES : Nepali Visa fee is US$ 40 per person for 30 days (to be applied for 60 days (USD$ 100).',
                    'fr' => 'FRAIS DE VISA NÉPAL : Les frais de visa népalais sont de 40 $ US par personne pour 30 jours (pour une demande de 60 jours (100 $ US)).',
                ],
                [
                    'en' => 'LUNCH & DINNER : Lunch & dinner during the stay in Kathmandu & Pokhara (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou et Pokhara (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU & POKHARA : Extra night’s accommodation in Kathmandu & Pokhara. In case of early arrival or late departure, early return from Trekking / Expedition (due to any reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU ET POKHARA : Nuits d\'hébergement supplémentaires à Katmandou et Pokhara. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition (pour toute raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE : Travel and high altitude insurance, accident, medical & emergency evacuation.',
                    'fr' => 'ASSURANCE : Assurance voyage et haute altitude, accident, médicale et évacuation d\'urgence.',
                ],
                [
                    'en' => 'RESCUE EVACUATION : Medical Insurance and emergency rescue evacuation cost if required. (Rescue, Repatriation, Medication, Medical Tests, and Hospitalization costs.)',
                    'fr' => 'ÉVACUATION DE SAUVETAGE : Frais d\'assurance médicale et d\'évacuation d\'urgence si nécessaire. (Frais de sauvetage, de rapatriement, de médicaments, de tests médicaux et d\'hospitalisation).',
                ],
                [
                    'en' => 'PERSONAL EXPENSES : Telephone, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, and any Alcoholic beverages.',
                    'fr' => 'DÉPENSES PERSONNELLES : Téléphone, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses et toutes boissons alcoolisées.',
                ],
                [
                    'en' => 'PERSONAL EQUIPMENT : Clothing, Packing Items or Bags, Personal Medical Kit, Personal Trekking /Climbing Gears.',
                    'fr' => 'ÉQUIPEMENT PERSONNEL : Vêtements, articles ou sacs d\'emballage, trousse médicale personnelle, équipement personnel de trekking/d\'escalade.',
                ],
                [
                    'en' => 'TOILETRIES : Soaps, shampoos, toilet and tissue papers, toothpaste, and other items used to keep yourself clean.',
                    'fr' => 'ARTICLES DE TOILETTE : Savons, shampoings, papier toilette et mouchoirs, dentifrice et autres articles utilisés pour vous garder propre.',
                ],
                [
                    'en' => 'FILMING : Special Filming, Camera, and Drone permit fee.',
                    'fr' => 'TOURNAGE : Frais de permis spéciaux pour le tournage, la caméra et le drone.',
                ],
                [
                    'en' => 'INTERNET SERVICE : Internet facility is not included.',
                    'fr' => 'SERVICE INTERNET : Le service Internet n\'est pas inclus.',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade.',
                ],
                [
                    'en' => 'TIPS : Calculate some tips for Basecamp staff.',
                    'fr' => 'POURBOIRES : Calculez quelques pourboires pour le personnel du camp de base.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $gangapurna_expedition_data->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $gangapurna_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $gangapurna_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $gangapurna_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $gangapurna_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );

        $putha_hiunchuli_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Putha Hiunchuli Expedition - Dhaulagiri VII',
                'fr' => 'Expédition au Putha Hiunchuli - Dhaulagiri VII', // Example French Translation
            ],
            'description' => [
                'en' => 'Mt. Putha Hiunchuli is one of the most beautiful mountains compared to the other 7000m. high peaks of Nepal lie at the westernmost peak of the Dhaulagiri range and are sometimes referred to as Dhaulagiri VII. It was first climbed in 1954 by Jimmy Roberts, a legendary explorer, and climber. The Mt. Dhaulagiri range is made up of some of the world\'s most impressive peaks. In this range, to the west of Annapurna South of Ganesh Himal, lies a long ridge at the end of which stands the serene Putha Hiunchuli. This mountain is the last 7000m. marking the end of the snow-capped range. Our trek begins from Juphal -Dunai, which is about a week\'s walk away from the German Base Camp situated at an altitude of 4,525m. The landscape during the approach walk is as enchanting as it is unique a mineral world made of high cliffs and deep canyons. According to the book ‘High Asia’, Jimmy Roberts did a reconnaissance of the Dhaulagiri massif in 1954. During the trip, he and Ang Nyima climbed Putha Hinchuli 7246m. (alias Dhaulagiri VII) via its northeast face. It appeared from the map that this face is most accessible from the Kaya Khola, a side-stream of the Barbung Khola which is direct across the valley from Kakkot. This mountain offers those climbers who like to climb 7000m. Mountain in Nepal to have experience technically and physically to get over 8000m. Mountains summit in the day to come.',
                'fr' => 'Le mont Putha Hiunchuli est l\'une des plus belles montagnes comparée aux autres hauts sommets de 7000 m du Népal, située au sommet le plus à l\'ouest de la chaîne du Dhaulagiri et parfois appelée Dhaulagiri VII.',
            ],
            'duration' => '38',
            'region_id' => 3, // Or a more specific region ID if you have one
            'category_id' => 2, // Updated to 2
            'grade' => '4', // Assuming "Best" maps to 4, adjust as needed.
            'starting_point' => 'Juphal', // Corrected starting point
            'ending_point' => 'Juphal', // Corrected ending point
            'best_time_for_expedition' => [
                'en' => 'Spring/Autumn',
                'fr' => 'Printemps/Automne', // Example French Translation
            ],
            'starting_altitude' => 2500, // Approximate altitude in Juphal. Verify.
            'highest_altitude' => 7246,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'AIRPORT PICK-UP & DROP: Airport - Hotel transfer – Airport (Pick Up and Drop).',
                    'fr' => 'PRISE EN CHARGE ET DÉPOSE À L\'AÉROPORT : Transfert aéroport - hôtel - aéroport (prise en charge et retour).',
                ],
                [
                    'en' => 'ACCOMMODATION IN KATHMANDU: 4 nights hotel (3-star category) in Kathmandu on a BB plan sharing basis (Twin Bed Room).',
                    'fr' => 'HÉBERGEMENT À KATMANDOU : 4 nuits d\'hôtel (catégorie 3 étoiles) à Katmandou en formule BB en chambre partagée (chambre à deux lits).',
                ],
                [
                    'en' => 'ACCOMMODATION IN NEPALGUNJ: 2 nights hotel (3 – star category) in Nepalgunj on full board plan.',
                    'fr' => 'HÉBERGEMENT À NEPALGUNJ : 2 nuits d\'hôtel (catégorie 3 étoiles) à Nepalgunj en formule pension complète.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMIT: Expedition Royalty and permit of Nepal Government to climb Mt. Putha Hiunchuli, Restriction area permit, conservation area entry permits & fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Mont Putha Hiunchuli, permis de zone restreinte, permis et frais d\'entrée de la zone de conservation.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: Air Transportation: Domestic flight from Kathmandu to Nepaljung and another flight from Nepaljung to Juphal Airport. While returning: Flight from Juphal - Nepaljung - to Kathmandu, as per Itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : Transport aérien : Vol intérieur de Katmandou à Nepaljung et autre vol de Nepaljung à l\'aéroport de Juphal. Au retour : Vol de Juphal - Nepaljung - à Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOODS & LODGING: 3 meals a day (BLD; including tea and coffee) along with accessible accommodation at Hotel/Lodge/Tea house/Camp during the trek and Basecamp. Well-managed base camp set up for members & Staffs.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (PDJ, déjeuner, dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/maison de thé/camp pendant le trek et le camp de base. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA : 1 veteran and Government Licensed Sherpa per member. (1 Member:1 Sherpa).',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa vétéran et licencié par le gouvernement par membre. (1 membre : 1 Sherpa).',
                ],
                [
                    'en' => 'HIGH CAMP SERVICE : High Altitude Tent, Necessary cooking EPI gas, cooking pot for a member, High food for a member, Sherpa, all climbing staff in (C1) (C2) and (C3). Group climbing gears, and fixed and dynamic rope during the climbing period as required.',
                    'fr' => 'SERVICE DE HAUT CAMP : Tente de haute altitude, gaz EPI de cuisson nécessaire, marmite pour un membre, nourriture de haute altitude pour un membre, Sherpa, tout le personnel d\'escalade à (C1) (C2) et (C3). Équipement d\'escalade de groupe et corde fixe et dynamique pendant la période d\'escalade, selon les besoins.',
                ],
                [
                    'en' => 'ROPE FIXING : Experienced team of Sherpa will fix the rope to the summit. (No extra cost for members).',
                    'fr' => 'FIXATION DE CORDE : Une équipe expérimentée de Sherpas fixera la corde jusqu\'au sommet. (Pas de frais supplémentaires pour les membres).',
                ],
                [
                    'en' => 'SATELLITE PHONE : Satellite Phone for emergency communication carried by Sherpa, also available for members with appropriate charge.',
                    'fr' => 'TÉLÉPHONE SATELLITE : Téléphone satellite pour les communications d\'urgence transporté par Sherpa, également disponible pour les membres moyennant des frais appropriés.',
                ],
                [
                    'en' => 'WALKIE-TALKIE : Walkie–Talkie for communicating from Base Camp to Mountain and Mountain to Base Camp.',
                    'fr' => 'TALKIE-WALKIE : Talkie-walkie pour communiquer du camp de base à la montagne et de la montagne au camp de base.',
                ],
                [
                    'en' => 'WEATHER FORECAST : Weather forecast report during the entire expedition.',
                    'fr' => 'PRÉVISIONS MÉTÉOROLOGIQUES : Rapport de prévisions météorologiques pendant toute l\'expédition.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'INTERNATIONAL AIRFARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION INTERNATIONAL : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL VISA FEES : Nepali Visa fee is $60 USD per person for 30 days (to be applied for 60 days is $120 USD).',
                    'fr' => 'FRAIS DE VISA NÉPAL : Les frais de visa népalais sont de 60 USD par personne pour 30 jours (pour une demande de 60 jours, le prix est de 120 USD).',
                ],
                [
                    'en' => 'LUNCH & DINNER : Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU : Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition (due to any reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition (pour toute raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE : Travel and high altitude insurance, accident, Helicopter medical & emergency evacuation. *Mandatory',
                    'fr' => 'ASSURANCE : Assurance voyage et haute altitude, accident, évacuation médicale et d\'urgence par hélicoptère. *Obligatoire',
                ],
                [
                    'en' => 'RESCUECUE EVACUATION : Medical and emergency rescue evacuation costs if required. (Rescue, Repatriation, Helicopter, Medication, Medical Tests, and Hospitalization costs).',
                    'fr' => 'ÉVACUATION DE SAUVETAGE : Frais d\'évacuation médicale et d\'urgence si nécessaire. (Frais de sauvetage, de rapatriement, d\'hélicoptère, de médicaments, de tests médicaux et d\'hospitalisation).',
                ],
                [
                    'en' => 'PERSONAL EXPENSES : Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'PERSONAL EQUIPMENT : Clothing, Packing Items or Bags, Personal Medical Kit, Personal Trekking /Climbing Gears.',
                    'fr' => 'ÉQUIPEMENT PERSONNEL : Vêtements, articles ou sacs d\'emballage, trousse médicale personnelle, équipement personnel de trekking/d\'escalade.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $putha_hiunchuli_expedition_data->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $putha_hiunchuli_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $putha_hiunchuli_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $putha_hiunchuli_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $putha_hiunchuli_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );


       

        
        $pumori_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Pumori Expedition',
                'fr' => 'Expédition au Mont Pumori', // Example French Translation
            ],
            'description' => [
                'en' => 'Pumori is a beautiful pyramid-shaped peak spreading in Nepal and Tibet and has a height of 23,495 ft. It dominates the skyline behind Kala Pathar (19,000 ft). This is a very easy peak to identify because of its unique shape.” Pumori” means “Unmarried Daughter” in the language of Sherpas. Pumori expedition is a lifetime experience as the summit offers a mesmerizing view of the surrounding peaks in the Everest region. Climbing routes go via the southeast ridge, this is a technically challenging mountain offering sections of wild exposure requiring climbers to have previous mountaineering experience and excellent physical fitness level. Mt. Pumori Expedition is rewarded with stunning photographic views of snowy mountains including Mt. Lhotse and Mt. Everest.',
                'fr' => 'Le Pumori est un magnifique sommet en forme de pyramide situé au Népal et au Tibet, d\'une hauteur de 23 495 pieds',
            ],
            'duration' => '34',
            'region_id' => 1, // Or a more specific region ID if you have one
            'category_id' => 2, // Updated to 2
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu', // Or Lukla, depending on the trek start
            'ending_point' => 'Kathmandu', // Or Lukla, depending on the trek end
            'best_time_for_expedition' => [
                'en' => 'Spring/Autumn',
                'fr' => 'Printemps/Automne', // Example French Translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu. Verify.
            'highest_altitude' => 7145,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'AIRPORT PICK-UP & DROP: Airport - Hotel transfer – Airport (Pick Up and Drop).',
                    'fr' => 'PRISE EN CHARGE ET DÉPOSE À L\'AÉROPORT : Transfert aéroport - hôtel - aéroport (prise en charge et retour).',
                ],
                [
                    'en' => 'ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (3-star category) on a bed & breakfast Sharing Basis (Twin Bed Room).',
                    'fr' => 'HÉBERGEMENT À KATMANDOU : 4 nuits d\'hôtel (catégorie 3 étoiles) à Katmandou en formule lit et petit-déjeuner en chambre partagée (chambre à deux lits).',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office’s Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMITS : Expedition Royalty and permit of Nepal Government to climb Mt. Pumori, Sagarmatha National Park permit, TIMS CARD & Pasang Lhamu Rural Municipality Entry Permit and its fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Mont Pumori, permis du parc national de Sagarmatha, carte TIMS et permis d\'entrée de la municipalité rurale de Pasang Lhamu et ses frais.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: (*Standard Route Itinerary): (Domestic Flight) Fly from Kathmandu – to Lukla and while returning Lukla – to Kathmandu, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : (*Itinéraire de la route standard) : (Vol intérieur) Vol de Katmandou à Lukla et au retour Lukla à Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOODS & LODGING : 3 meals a day (BLD; including tea and coffee) along with accessible accommodation at Hotel/Lodge during the trek and at the Basecamp. Well-managed base camp set up for members & Staffs.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (PDJ, déjeuner, dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge pendant le trek et au camp de base. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA : 1 veteran and Government Licensed per member. (1 Member: 1 Sherpa).',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : 1 Sherpa vétéran et licencié par le gouvernement par membre. (1 membre : 1 Sherpa).',
                ],
                [
                    'en' => 'HIGH CAMP SERVICE : High Altitude Tent, Necessary cooking EPI gas, cooking pot, High food for a member, Sherpa, and other crews at (C1) (C2), and (C3). Group climbing gears, and fixed and dynamic rope during the climbing period as required.',
                    'fr' => 'SERVICE DE HAUT CAMP : Tente de haute altitude, gaz EPI de cuisson nécessaire, marmite, nourriture de haute altitude pour un membre, Sherpa et les autres équipes à (C1) (C2) et (C3). Équipement d\'escalade de groupe et corde fixe et dynamique pendant la période d\'escalade, selon les besoins.',
                ],
                [
                    'en' => 'ROPE FIXING : The team of experienced Sherpas will fix the route (no extra charge will be applied to members).',
                    'fr' => 'FIXATION DE CORDE : L\'équipe de Sherpas expérimentés fixera la route (aucun frais supplémentaire ne sera appliqué aux membres).',
                ],
                [
                    'en' => 'SATELLITE PHONE : Satellite Phone for emergency communication carried by Sherpa, also available for members with appropriate charge.',
                    'fr' => 'TÉLÉPHONE SATELLITE : Téléphone satellite pour les communications d\'urgence transporté par Sherpa, également disponible pour les membres moyennant des frais appropriés.',
                ],
                [
                    'en' => 'WALKIE-TALKIE : Walkie-Talkie for communicating from Base Camp to Mountain and Mountain to Base Camp.',
                    'fr' => 'TALKIE-WALKIE : Talkie-walkie pour communiquer du camp de base à la montagne et de la montagne au camp de base.',
                ],
                [
                    'en' => 'WEATHER FORECAST : Weather forecast report from the authority of Nepal.',
                    'fr' => 'PRÉVISIONS MÉTÉOROLOGIQUES : Rapport de prévisions météorologiques des autorités népalaises.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'INTERNATIONAL AIRFARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION INTERNATIONAL : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL VISA FEES : Nepali Visa fee is $60 USD per person for 30 days (to be applied for 60 days is $120 USD).',
                    'fr' => 'FRAIS DE VISA NÉPAL : Les frais de visa népalais sont de 60 USD par personne pour 30 jours (pour une demande de 60 jours, le prix est de 120 USD).',
                ],
                [
                    'en' => 'LUNCH & DINNER : Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU : Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition (due to any reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition (pour toute raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE : Travel and high altitude insurance, accident, Helicopter medical & emergency evacuation. *Mandatory',
                    'fr' => 'ASSURANCE : Assurance voyage et haute altitude, accident, évacuation médicale et d\'urgence par hélicoptère. *Obligatoire',
                ],
                [
                    'en' => 'RESCUE EVACUATION : Medical and emergency rescue evacuation costs if required. (Rescue, Repatriation, Helicopter, Medication, Medical Tests, and Hospitalization costs).',
                    'fr' => 'ÉVACUATION DE SAUVETAGE : Frais d\'évacuation médicale et d\'urgence si nécessaire. (Frais de sauvetage, de rapatriement, d\'hélicoptère, de médicaments, de tests médicaux et d\'hospitalisation).',
                ],
                [
                    'en' => 'PERSONAL EXPENSES : Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'PERSONAL EQUIPMENT : Clothing, Packing Items or Bags, Personal Medical Kit, Personal Trekking /Climbing Gears.',
                    'fr' => 'ÉQUIPEMENT PERSONNEL : Vêtements, articles ou sacs d\'emballage, trousse médicale personnelle, équipement personnel de trekking/d\'escalade.',
                ],
                [
                    'en' => 'TOILETRIES : Soaps, shampoos, toilet and tissue papers, toothpaste, and other items used to keep yourself clean.',
                    'fr' => 'ARTICLES DE TOILETTE : Savons, shampoings, papier toilette et mouchoirs, dentifrice et autres articles utilisés pour vous garder propre.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $pumori_expedition_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $pumori_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $pumori_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $pumori_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $pumori_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );
        
        $tilicho_peak_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Tilicho Peak Expedition',
                'fr' => 'Expédition au Tilicho Peak', // Example French Translation
            ],
            'description' => [
                'en' => 'Tilicho Peak is a tower at a height of 7,134m. Mountaineers rate this as a technical climb, and not so easy. There are two ways to reach up to Base Camp. Tilicho Peak expedition starts up with a drive to Khudi followed by several days trekking to the Tilicho Base Camp via Manang and Khangsar Village as well as another way is a short mountain flight from Pokhara bringing us to the dry and dusty hill town of Jomsom as well as start from Beni Bazaar to Jomsom. From here we proceed east and north to cross the high and very difficult Mesokanto Pass at an altitude of 5300m. At the top of the pass, we managed to locate some marine fossils (shells) which testify to the fact that the Himalayas was once beneath the sea. We choose the first idea as this allows enough time for acclimatization and fewer difficulties for taking all the logistics. The views on the routes are breathtaking; anything that can surpass your imagination. What you see is Tilicho Peak and the azure and peaceful Tilicho Lake below. It is a glacial lake and unfriendly to marine life. People say they often find marine fossils (shells) that probably support the fact that the Himalayas were once beneath the sea.',
                'fr' => 'Le Tilicho Peak est une tour d\'une hauteur de 7 134 m. Les alpinistes considèrent cette ascension comme technique et pas si facile. Il existe deux façons d\'atteindre le camp de base.',
            ],
            'duration' => '35',
            'region_id' => 3, // Or a more specific region ID if you have one
            'category_id' => 2, // Updated to 2
            'grade' => '4', // Assuming "Best" maps to 4, adjust as needed.
            'starting_point' => 'Khudi', // Or a more specific starting point if known
            'ending_point' => 'Pokhara/Beni/Jomsom', // Or a more specific ending point if known. This needs verification.
            'best_time_for_expedition' => [
                'en' => 'Spring/Autumn',
                'fr' => 'Printemps/Automne', // Example French Translation
            ],
            'starting_altitude' => 800, // Approximate altitude in Khudi. Verify.
            'highest_altitude' => 7134,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'AIRPORT PICK-UP & DROP: Airport - Hotel transfer – Airport (Pick Up and Drop).',
                    'fr' => 'PRISE EN CHARGE ET DÉPOSE À L\'AÉROPORT : Transfert aéroport - hôtel - aéroport (prise en charge et retour).',
                ],
                [
                    'en' => 'ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (3 stars) on bed & breakfast Basis-Twin Bed Room (Sharing).',
                    'fr' => 'HÉBERGEMENT À KATMANDOU : 4 nuits d\'hôtel à Katmandou (3 étoiles) en formule lit et petit-déjeuner - Chambre à deux lits (partagée).',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office’s Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMITS : Expedition Royalty and permit of Nepal Government to climb Tilicho, TIMS Card, Annapurna conservation area entry permit & fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et permis du gouvernement népalais pour l\'ascension du Tilicho, carte TIMS, permis et frais d\'entrée de la zone de conservation de l\'Annapurna.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION : Drive from Kathmandu – Chame, and while returning Tal – Kathmandu, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : Trajet en voiture de Katmandou à Chame, et au retour de Tal à Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOODS & LODGING : Food 3 meals a day (BDL; including tea and coffee) along with accessible accommodation at Hotel/Lodge/Tea house/Camp during the trek and BC. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (PDJ, déjeuner, dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge/maison de thé/camp pendant le trek et le camp de base. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'HIGH ALTITUDE CLIMBING SHERPA : Veteran and Government Licensed Climbing Guide.',
                    'fr' => 'SHERPA D\'ESCALADE EN HAUTE ALTITUDE : Guide d\'escalade vétéran et licencié par le gouvernement.',
                ],
                [
                    'en' => 'HIGH CAMP SERVICE : High Altitude Tent, Necessary cooking EPI gas, cooking pot for a member, High food for a member, Sherpa, all climbing and cooking crew at (C1) (C2) and (C3). Group climbing gears, and fixed and dynamic rope during the climbing period as required.',
                    'fr' => 'SERVICE DE HAUT CAMP : Tente de haute altitude, gaz EPI de cuisson nécessaire, marmite pour un membre, nourriture de haute altitude pour un membre, Sherpa, toute l\'équipe d\'escalade et de cuisine à (C1) (C2) et (C3). Équipement d\'escalade de groupe et corde fixe et dynamique pendant la période d\'escalade, selon les besoins.',
                ],
                [
                    'en' => 'WALKIE-TALKIE : Walkie–Talkie for communicating from Base Camp to Mountain and Mountain to Base Camp.',
                    'fr' => 'TALKIE-WALKIE : Talkie-walkie pour communiquer du camp de base à la montagne et de la montagne au camp de base.',
                ],
                [
                    'en' => 'WEATHER FORECAST : Weather forecast report during the entire expedition.',
                    'fr' => 'PRÉVISIONS MÉTÉOROLOGIQUES : Rapport de prévisions météorologiques pendant toute l\'expédition.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'INTERNATIONAL AIRFARE : International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION INTERNATIONAL : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL VISA FEES : Nepali Visa fee is US$ 40 per person for 30 days (to be applied for 60 days (USD$ 100).',
                    'fr' => 'FRAIS DE VISA NÉPAL : Les frais de visa népalais sont de 40 $ US par personne pour 30 jours (pour une demande de 60 jours (100 $ US)).',
                ],
                [
                    'en' => 'LUNCH & DINNER : Lunch & dinner during the stay in Kathmandu & Pokhara (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou et Pokhara (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU : Extra nights’ accommodation in Kathmandu & Pokhara. In case of early arrival or late departure, early return from Trekking / Expedition (due to any reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou et Pokhara. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition (pour toute raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'STAFF INSURANCE : Travel and high-altitude insurance, accident, medical & emergency evacuation.',
                    'fr' => 'ASSURANCE DU PERSONNEL : Assurance voyage et haute altitude, accident, médicale et évacuation d\'urgence.',
                ],
                [
                    'en' => 'RESCUE EVACUATION : Medical Insurance and emergency rescue evacuation cost if required. (Rescue, Repatriation, Medication, Medical Tests, and Hospitalization costs.)',
                    'fr' => 'ÉVACUATION DE SAUVETAGE : Frais d\'assurance médicale et d\'évacuation d\'urgence si nécessaire. (Frais de sauvetage, de rapatriement, de médicaments, de tests médicaux et d\'hospitalisation).',
                ],
                [
                    'en' => 'PERSONAL EXPENSES : Telephone, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, and any Alcoholic beverages.',
                    'fr' => 'DÉPENSES PERSONNELLES : Téléphone, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses et toutes boissons alcoolisées.',
                ],
                [
                    'en' => 'PERSONAL EQUIPMENT : Clothing, Packing Items or Bags, Personal Medical Kit, Personal Trekking /Climbing Gears.',
                    'fr' => 'ÉQUIPEMENT PERSONNEL : Vêtements, articles ou sacs d\'emballage, trousse médicale personnelle, équipement personnel de trekking/d\'escalade.',
                ],
                [
                    'en' => 'TOILETRIES : Soaps, shampoos, toilet and tissue papers, toothpaste, and other items used to keep yourself clean.',
                    'fr' => 'ARTICLES DE TOILETTE : Savons, shampoings, papier toilette et mouchoirs, dentifrice et autres articles utilisés pour vous garder propre.',
                ],
                [
                    'en' => 'FILMING : Special Filming, Camera, and Drone permit fee.',
                    'fr' => 'TOURNAGE : Frais de permis spéciaux pour le tournage, la caméra et le drone.',
                ],
                [
                    'en' => 'INTERNET SERVICE : Internet facility is not included.',
                    'fr' => 'SERVICE INTERNET : Le service Internet n\'est pas inclus.',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade.',
                ],
                [
                    'en' => 'TIPS : Calculate some tips for Basecamp staff.',
                    'fr' => 'POURBOIRES : Calculez quelques pourboires pour le personnel du camp de base.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);

        $tilicho_peak_expedition_data->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $tilicho_peak_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $tilicho_peak_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $tilicho_peak_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $tilicho_peak_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );


    
        $baruntse_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Baruntse Expedition',
                'fr' => 'Expédition au Mont Baruntse', // Example French Translation
            ],
            'description' => [
                'en' => 'Standing at the head of Barun valley, Baruntse is a hidden jewel of a 7000er that overlooks two giants to east and west – Everest and Makalu! Baruntse is one of the beautiful peaks in eastern Nepal, a considerable and symmetrical snow peak, that has four dominant ridges and four summits. It is bounded on the south by Hunku Glacier, on the east by the Barun Glacier, on the north by Num Ri and Cho Polu, and the northwest by the Kali Himal and Imja Tse Glacier and on the west by Amphu I peak. At 7,152 meters (23,465 feet), Baruntse lies in the heart of the Himalayan Giants of Nepal and has a higher summit success rate than other comparable peaks. Baruntse was summited for the first time in 1954 by a Kiwi party led by Sir Ed Hillary putting Bill Beaven, George Lowe, Colin Todd and Geoff Harrow on the summit on May 29. The route pioneered by the expedition the SE Ridge is the standard route to the peak to this day. The Southeast Ridge of Baruntse is a bit difficult because of its straightforward direct approach to climb but is attainable. There are hard sections of 50-degree slopes with prominent ice cliffs that pose a technical challenge with risks of avalanche. But because of the fixed ropes and with guidance of our veteran climbing guides, the mountain could be negotiated safely. It is mostly climbed in spring season. However, some climbers have reached the top of this mountain in the autumn season too. Our expedition guides and climbing Sherpas are well-experienced and have a lot of practical experience in Himalayan 7000 and 8000 meter mountains. They have been in this field for the last two decades. So, they could give all the necessary guidance to take all precautions and expected dangers and how to tackle them. This enhances our expeditors to full confidence and courage.',
                'fr' => 'Situé à la tête de la vallée du Barun, le Baruntse est un joyau caché de 7000 m qui surplombe deux géants à l\'est et à l\'ouest : l\'Everest et le Makalu !',
            ],
            'duration' => '35',
            'region_id' => 1, // Or a more specific region ID if you have one
            'category_id' => 2, // Updated to 2
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Spring/Autumn',
                'fr' => 'Printemps/Automne', // Example French Translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu. Verify.
            'highest_altitude' => 7129,
            'expedition_difficulty' => TrekDifficulty::CHALLENGING, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 4 nuits d\'hôtel à Katmandou (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office’s Staff',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMITS: Expedition Royalty and a permit fee of Nepal Government to climb Mt. Baruntse, Sagarmatha / Makalu National Park, and Pasang Lhamu Rural Municipality entry permit and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement népalais pour l\'ascension du Mont Baruntse, du parc national de Sagarmatha/Makalu et du permis et des frais d\'entrée de la municipalité rurale de Pasang Lhamu.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: - (Domestic Flight) Fly from Kathmandu – Lukla and while returning Lukla - Kathmandu, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : - (Vol intérieur) Vol de Katmandou à Lukla et au retour Lukla - Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge during the trek and at the Basecamp. Hygienic and fresh green vegetables, fresh meat, fruits, and soft drinks will be served during the entire expedition using helicopter flights. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge pendant le trek et au camp de base. Des légumes verts frais et hygiéniques, de la viande fraîche, des fruits et des boissons gazeuses seront servis pendant toute l\'expédition en utilisant des vols en hélicoptère. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'BONUS: Carry Bonus of Sherpas and Route Fixing Charges.',
                    'fr' => 'PRIME : Prime de portage des Sherpas et frais de fixation de la route.',
                ],
                [
                    'en' => 'HIGH CAMP SERVICE (INFRASTRUCTURE AND LOGISTICS): High Altitude Tent, Necessary cooking EPI gas, cooking pot, High food for a member, Sherpa, and other crews at (C1) (C2) and (C3). Group climbing gears, fixed, and dynamic rope during the climbing period as required.',
                    'fr' => 'SERVICE DE HAUT CAMP (INFRASTRUCTURE ET LOGISTIQUE) : Tente de haute altitude, gaz EPI de cuisson nécessaire, marmite, nourriture de haute altitude pour un membre, un Sherpa et les autres équipes à (C1) (C2) et (C3). Équipement d\'escalade de groupe, corde fixe et dynamique pendant la période d\'escalade, selon les besoins.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa fee is $ 125 USD for 90 Days.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU: Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition, d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 1200 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 1200 USD.',
                ],
                [
                    'en' => 'TIPS : Calculate some tips for Basecamp and high camp staff – Minimum 350 USD.',
                    'fr' => 'POURBOIRES : Calculez quelques pourboires pour le personnel du camp de base et du haut camp - Minimum 350 USD.',
                ],
            ],
            'is_featured' => false, // Or false, as appropriate
        ]);
        $baruntse_expedition_data->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $baruntse_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $baruntse_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $baruntse_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $baruntse_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
        );


        $himlung_himal_expedition_data = Expedition::create([
            'title' => [
                'en' => 'Mt. Himlung Himal Expedition',
                'fr' => 'Expédition au Mont Himlung Himal', // Example French Translation
            ],
            'description' => [
                'en' => 'Himlung Himal holds the distinction of being the world’s most sought after 7000er because of its high success rate and as a training peak for 8000-meter giants. The Nar-Phu valley, known for its secluded location and centuries old heritage offers another surprise to climbers: Himlung Himal. Himlung lies northeast of the Annapurna Range with an aspiring height of 7,126m. This mountain is located to the eastern end of the Phu valley which eventually shares border with Tibet via Himlung’s subsidiary peak – Himlung East. A specific feature of Himlung is that it is relatively easy considering technicalities and safer from avalanches and rockfalls. The journey to Himlung follows the Annapurna route to Koto and from Koto into Nr-Phu Gaun. The road network to Koto has been upgraded recently that offers a scenic and adventurous journey greeted by a diverse landscape, gullies, springs, and remote villages nearby exhibit tremendous culture with breathtaking views of Ratna Chuli, Gyaji Khang, Nemjung, and many more as you trek further.',
                'fr' => 'Le Himlung Himal a la distinction d\'être le 7000er le plus recherché au monde en raison de son taux de réussite élevé et en tant que sommet d\'entraînement pour les géants de 8000 mètres. ... (Example French Translation)',
            ],
            'duration' => '33',
            'region_id' => 3, // Or a more specific region ID if you have one
            'category_id' => 2, // Updated to 2
            'grade' => '5', // Assuming "Excellent" maps to 5, adjust as needed.
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_expedition' => [
                'en' => 'Autumn',
                'fr' => 'Automne', // Example French Translation
            ],
            'starting_altitude' => 1400, // Approximate altitude in Kathmandu. Verify.
            'highest_altitude' => 7126,
            'expedition_difficulty' => TrekDifficulty::MODERATE, // Or a more specific difficulty level
            'costs_include' => [
                [
                    'en' => 'ARRIVAL AND DEPARTURE: Airport - Hotel transfers – Airport (Pick Up and Drop), by private vehicle.',
                    'fr' => 'ARRIVÉE ET DÉPART : Transferts aéroport - hôtel - aéroport (prise en charge et retour), en véhicule privé.',
                ],
                [
                    'en' => 'HOTEL ACCOMMODATION IN KATHMANDU: 4 nights hotel in Kathmandu (4-star category) - single room on bed and breakfast plan.',
                    'fr' => 'HÉBERGEMENT HÔTELIER À KATMANDOU : 4 nuits d\'hôtel à Katmandou (catégorie 4 étoiles) - chambre individuelle en formule petit-déjeuner.',
                ],
                [
                    'en' => 'WELCOME DINNER: One Welcome Dinner in a tourist standard restaurant in Kathmandu with Office’s Staff.',
                    'fr' => 'DÎNER DE BIENVENUE : Un dîner de bienvenue dans un restaurant touristique standard à Katmandou avec le personnel de bureau.',
                ],
                [
                    'en' => 'PERMITS: Expedition Royalty and a permit fee of Nepal Government to climb Himlung Himal, Conservation area entry permit and fee.',
                    'fr' => 'PERMIS : Redevance d\'expédition et frais de permis du gouvernement népalais pour l\'ascension du Himlung Himal, permis et frais d\'entrée de la zone de conservation.',
                ],
                [
                    'en' => 'RESTRICTED AREA PERMIT: Restricted area permit fee.',
                    'fr' => 'PERMIS DE ZONE RESTREINTE : Frais de permis de zone restreinte.',
                ],
                [
                    'en' => 'MEMBER TRANSPORTATION: - Drive from Kathmandu – Besi Shashar Koto and while returning, Koto – Besi Shahar – Kathmandu by a tourist jeep, as per itinerary.',
                    'fr' => 'TRANSPORT DES MEMBRES : - Trajet en jeep touristique de Katmandou à Besi Shashar Koto et au retour, de Koto à Besi Shahar - Katmandou, selon l\'itinéraire.',
                ],
                [
                    'en' => 'FOOD AND LODGING: 3 meals a day (breakfast, lunch, and dinner; including tea and coffee) along with accessible accommodation at Hotel/Lodge during the trek and at the Basecamp. Hygienic and fresh green vegetables, fresh meat, fruits, and soft drinks will be served during the entire expedition using helicopter flights. Well-managed base camp set up for members & Staff.',
                    'fr' => 'NOURRITURE ET HÉBERGEMENT : 3 repas par jour (petit-déjeuner, déjeuner et dîner ; y compris thé et café) ainsi qu\'un hébergement accessible à l\'hôtel/lodge pendant le trek et au camp de base. Des légumes verts frais et hygiéniques, de la viande fraîche, des fruits et des boissons gazeuses seront servis pendant toute l\'expédition en utilisant des vols en hélicoptère. Camp de base bien aménagé pour les membres et le personnel.',
                ],
                [
                    'en' => 'BONUS: Carry Bonus of Sherpas and Route Fixing Charges.',
                    'fr' => 'PRIME : Prime de portage des Sherpas et frais de fixation de la route.',
                ],
                [
                    'en' => 'HIGH CAMP SERVICE (INFRASTRUCTURE AND LOGISTICS): High Altitude Tent, Necessary cooking EPI gas, cooking pot, High food for a member, Sherpa, and other crews at (C1) (C2) and (C3). Group climbing gears, and fixed and dynamic rope during the climbing period as required.',
                    'fr' => 'SERVICE DE HAUT CAMP (INFRASTRUCTURE ET LOGISTIQUE) : Tente de haute altitude, gaz EPI de cuisson nécessaire, marmite, nourriture de haute altitude pour un membre, un Sherpa et les autres équipes à (C1) (C2) et (C3). Équipement d\'escalade de groupe et corde fixe et dynamique pendant la période d\'escalade, selon les besoins.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'AIR FARE: International flight airfare (from and to Kathmandu).',
                    'fr' => 'BILLET D\'AVION : Billet d\'avion international (de et vers Katmandou).',
                ],
                [
                    'en' => 'NEPAL ENTRY VISA FEE: Nepalese Visa fee is $ 125 USD for 90 Days.',
                    'fr' => 'FRAIS DE VISA D\'ENTRÉE AU NÉPAL : Frais de visa népalais de 125 USD pour 90 jours.',
                ],
                [
                    'en' => 'LUNCH & DINNER: Lunch & dinner during the stay in Kathmandu (also in case of early return from Trekking / Expedition than the scheduled itinerary).',
                    'fr' => 'DÉJEUNER ET DÎNER : Déjeuner et dîner pendant le séjour à Katmandou (également en cas de retour anticipé du trekking/expédition que l\'itinéraire prévu).',
                ],
                [
                    'en' => 'EXTRA NIGHTS IN KATHMANDU: Extra nights’ accommodation in Kathmandu. In case of early arrival or late departure, early return from Trekking / Expedition, domestic flight cancellation (due to any other reason) than the scheduled itinerary.',
                    'fr' => 'NUITS SUPPLÉMENTAIRES À KATMANDOU : Nuits d\'hébergement supplémentaires à Katmandou. En cas d\'arrivée anticipée ou de départ tardif, de retour anticipé du trekking/expédition, d\'annulation de vol intérieur (pour toute autre raison) que l\'itinéraire prévu.',
                ],
                [
                    'en' => 'INSURANCE POLICY: Insurance covering both medical and high-altitude evacuation costs (for the trip cancellation, interruption, high altitude rescue & air evacuation, medical treatment, repatriation, etc.) *Mandatory',
                    'fr' => 'POLICE D\'ASSURANCE : Assurance couvrant à la fois les frais médicaux et d\'évacuation en haute altitude (pour l\'annulation du voyage, l\'interruption, le sauvetage en haute altitude et l\'évacuation aérienne, le traitement médical, le rapatriement, etc.) *Obligatoire',
                ],
                [
                    'en' => 'PERSONAL EXPENSES: Telephone Calls, Internet, Toiletries, battery recharge, hot shower, laundry, soft drinks, beers, and any Alcoholic beverages (during the trek and in Kathmandu but we will have soft drinks for members at base camp).',
                    'fr' => 'DÉPENSES PERSONNELLES : Appels téléphoniques, Internet, articles de toilette, recharge de batterie, douche chaude, blanchisserie, boissons gazeuses, bières et toutes boissons alcoolisées (pendant le trek et à Katmandou, mais nous aurons des boissons gazeuses pour les membres au camp de base).',
                ],
                [
                    'en' => 'SUMMIT BONUS : Summit bonus for climbing Sherpa- Minimum 1200 USD.',
                    'fr' => 'PRIME DE SOMMET : Prime de sommet pour le Sherpa d\'escalade - Minimum 1200 USD.',
                ],
                [
                    'en' => 'TIPS : Calculate some tips for Basecamp and high camp staff – Minimum 350 USD.',
                    'fr' => 'POURBOIRES : Calculez quelques pourboires pour le personnel du camp de base et du haut camp - Minimum 350 USD.',
                ],
            ],
            'is_featured' => true, // Or false, as appropriate
        ]);

        $himlung_himal_expedition_data->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $himlung_himal_expedition_data,
            'cover_image_id',
            public_path('photos/qualitymount2.png')
        );
        CuratorSeederHelper::seedBelongsTo(
            $himlung_himal_expedition_data,
            'feature_image_id',
            public_path('photos/qualitymount.png')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $himlung_himal_expedition_data,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $himlung_himal_expedition_data,
            'images',
            public_path('photos/mountain3.jpg')
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
