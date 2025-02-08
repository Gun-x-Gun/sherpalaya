<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorSeederHelper;
use App\Models\Destination;
use App\Models\Region;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trek = Trek::create([
            'title' => [
                'en' => 'Everest Base Camp Trek',
                'fr' => 'Trek au camp de base de l\'Everest',
            ],
            'description' => [
                'en' => 'Followed by Real Sherpa’s village everybody wants to see a glimpse of the world’s highest mountain and that’s the reason why the Everest Base Camp Trek is very popular. The trek has a number of stunning attractions, not least of these is being able to say you’ve visited the highest mountain in the world. The trek gets you right into the high-altitude heart of the high Himalaya, more so than any other teahouse trek. There are some lovely villages and gompas (monasteries), and the friendly Sherpa people of the Solukhumbu region make trekking through the area a joy.

        Everest Base Camp Trekking is known as the one of the most popular trekking in the world with the most thrilling and unforgettable experience of them all. If you are in search of quality service, Nepal Everest base camp trekking company provides you with quality services, guide and other necessary things which are needed for the trekking. We ensure that you won’t regret your decision for choosing us

        The best season for this trip starts from beginning of March to May and  September to October is also favorable for the trek. During the trek, you can easily find food(local and continental), comfortable lodges. Hot shower is also available for some extra charge. Supplies are shipped to the Base Camp by guides or porters, and with the help of animals, usually yaks, mules and Jyopkyos.',
                'fr' => 'Après le village de Real Sherpa, tout le monde veut apercevoir la plus haute montagne du monde et c\'est la raison pour laquelle le trek au camp de base de l\'Everest est très populaire. Le trek possède un certain nombre d\'attractions étonnantes, dont la moindre n\'est pas de pouvoir dire que vous avez visité la plus haute montagne du monde. Le trek vous emmène directement au cœur de la haute altitude du haut Himalaya, plus que tout autre trek en maison de thé. Il y a de jolis villages et des gompas (monastères), et les sympathiques Sherpas de la région de Solukhumbu rendent le trekking dans la région agréable.

        Le trekking au camp de base de l\'Everest est connu comme l\'un des treks les plus populaires au monde, avec l\'expérience la plus passionnante et inoubliable de tous. Si vous êtes à la recherche d\'un service de qualité, la société de trekking Nepal Everest Base Camp vous fournit des services de qualité, un guide et d\'autres éléments nécessaires au trekking. Nous vous assurons que vous ne regretterez pas votre décision de nous choisir.

        La meilleure saison pour ce voyage commence du début mars à mai et de septembre à octobre est également favorable pour le trek. Pendant le trek, vous pouvez facilement trouver de la nourriture (locale et continentale), des lodges confortables. Une douche chaude est également disponible moyennant un supplément. Les fournitures sont expédiées au camp de base par des guides ou des porteurs, et avec l\'aide d\'animaux, généralement des yaks, des mules et des Jyopkyos.',
            ],
            'duration' => '10',
            'grade' => '7',
            'starting_point' => 'Lukla',
            'ending_point' => 'Kathmandu',
            'best_time_for_trek' => [
                'en' => 'Autumn (Sep-Oct-Nov) and Spring (March-April-May)',
                'fr' => 'Automne (sept.-oct.-nov.) et printemps (mars-avril-mai)',
            ],
            'starting_altitude' => 2610,
            'highest_altitude' => 5545,
            'region_id' => Region::first()->id,
            'trek_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                [
                    'en' => 'Transfer from airport to your hotel during both arrival and departure.',
                    'fr' => 'Transfert de l\'aéroport à votre hôtel à l\'arrivée et au départ.',
                ],
                [
                    'en' => 'Stay three nights in Kathmandu with a BB plan.',
                    'fr' => 'Séjour de trois nuits à Katmandou avec un plan BB.',
                ],
                [
                    'en' => 'Go sightseeing around Kathmandu on a private vehicle.',
                    'fr' => 'Visite de Katmandou en véhicule privé.',
                ],
                [
                    'en' => 'All entrance fees during Kathmandu Day Tour.',
                    'fr' => 'Tous les frais d\'entrée pendant la visite d\'une journée à Katmandou.',
                ],
                [
                    'en' => 'Ground 4x4 luxury transportation through the private vehicle as referred to in the itinerary.',
                    'fr' => 'Transport terrestre de luxe 4x4 en véhicule privé comme indiqué dans l\'itinéraire.',
                ],
                [
                    'en' => 'All mandatory permit fees, including entry permit, national park permit, and restricted area permit.',
                    'fr' => 'Tous les frais de permis obligatoires, y compris le permis d\'entrée, le permis de parc national et le permis de zone restreinte.',
                ],
                [
                    'en' => 'Accommodation in tea houses or lodges during the trekking.',
                    'fr' => 'Hébergement dans des maisons de thé ou des lodges pendant le trekking.',
                ],
                [
                    'en' => 'Three-course meals (breakfast, lunch, and dinner) during the trekking period.',
                    'fr' => 'Repas à trois plats (petit-déjeuner, déjeuner et dîner) pendant la période de trekking.',
                ],
                [
                    'en' => 'A skillful trekking guide with excellent communication skills.',
                    'fr' => 'Un guide de trekking compétent avec d\'excellentes compétences en communication.',
                ],
                [
                    'en' => 'Two porters for three trekkers during the trekking.',
                    'fr' => 'Deux porteurs pour trois trekkeurs pendant le trekking.',
                ],
                [
                    'en' => 'Insurance for the guide and porters.',
                    'fr' => 'Assurance pour le guide et les porteurs.',
                ],
                [
                    'en' => 'Farewell dinner at Kathmandu.',
                    'fr' => 'Dîner d\'adieu à Katmandou.',
                ],
                [
                    'en' => 'All applicable VAT, Tax, and needed paperwork.',
                    'fr' => 'Toutes les TVA, taxes et documents nécessaires applicables.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'Dinner and lunch in Kathmandu except for the farewell dinner.',
                    'fr' => 'Dîner et déjeuner à Katmandou, à l\'exception du dîner d\'adieu.',
                ],
                [
                    'en' => 'Your personal expenses for mineral water, soft beverages, confectionaries, laundries, phone calls, hot drinking water, bar bills, showers, etc.',
                    'fr' => 'Vos dépenses personnelles pour l\'eau minérale, les boissons non alcoolisées, les confiseries, la lessive, les appels téléphoniques, l\'eau potable chaude, les notes de bar, les douches, etc.',
                ],
                [
                    'en' => 'Internet facility, battery chargers, multi-plugs, etc.',
                    'fr' => 'Installation Internet, chargeurs de batterie, multiprises, etc.',
                ],
                [
                    'en' => 'Personal trekking equipment.',
                    'fr' => 'Équipement de trekking personnel.',
                ],
                [
                    'en' => 'Your travel insurance that covers Helicopter evacuation.',
                    'fr' => 'Votre assurance voyage qui couvre l\'évacuation par hélicoptère.',
                ],
                [
                    'en' => 'Medical expenses and trip cancellation.',
                    'fr' => 'Frais médicaux et annulation de voyage.',
                ],
                [
                    'en' => 'Any other extended trips and accommodation.',
                    'fr' => 'Tous les autres voyages prolongés et hébergements.',
                ],
                [
                    'en' => 'Tips for the guide, porters, and driver as a token of appreciation.',
                    'fr' => 'Pourboires pour le guide, les porteurs et le chauffeur en signe d\'appréciation.',
                ],
                [
                    'en' => 'Any other expenses or charges that are not mentioned in the "costs include" list.',
                    'fr' => 'Tous les autres frais ou charges qui ne sont pas mentionnés dans la liste "coûts inclus".',
                ],
                [
                    'en' => 'Nepal arrival visa.',
                    'fr' => 'Visa d\'arrivée au Népal.',
                ],
            ],
            'is_featured' => true,
        ]);
        $trek->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );

        CuratorSeederHelper::seedBelongsTo(
            $trek,
            'cover_image_id',
            public_path('photos/mountain6.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek,
            'feature_image_id',
            public_path('photos/mountain7.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek,
            'images',
            public_path('photos/mountain5.jpg')
        );




        $trek2 = Trek::create([
            'title' => [
                'en' => 'Annapurna Base Camp Trek',
                'fr' => 'Trek au camp de base de l\'Annapurna',
            ],
            'description' => [
                'en' => 'The Annapurna Base Camp (ABC) Trek is one of the most popular trekking routes in Nepal, offering breathtaking views of the Annapurna massif and other Himalayan peaks.',
                'fr' => 'Le trek au camp de base de l\'Annapurna (ABC) est l\'un des itinéraires de trekking les plus populaires au Népal, offrant des vues à couper le souffle sur le massif de l\'Annapurna et d\'autres sommets himalayens.',
            ],
            'duration' => '7',
            'grade' => '6',
            'starting_point' => 'Nayapul',
            'ending_point' => 'Nayapul',
            'best_time_for_trek' => [
                'en' => 'Spring (March-May) and Autumn (September-November)',
                'fr' => 'Printemps (mars-mai) et automne (septembre-novembre)',
            ],
            'starting_altitude' => 1070,
            'highest_altitude' => 4130,
            'region_id' => 3,
            'trek_difficulty' => TrekDifficulty::MODERATE,
            'costs_include' => [
                [
                    'en' => 'Transfer from airport to your hotel during both arrival and departure.',
                    'fr' => 'Transfert de l\'aéroport à votre hôtel à l\'arrivée et au départ.',
                ],
                [
                    'en' => 'Stay two nights in Kathmandu and two nights in Pokhara with a BB plan.',
                    'fr' => 'Séjour de deux nuits à Katmandou et de deux nuits à Pokhara avec un plan BB.',
                ],
                [
                    'en' => 'Go sightseeing around Kathmandu on a private vehicle.',
                    'fr' => 'Visite de Katmandou en véhicule privé.',
                ],
                [
                    'en' => 'All entrance fees during Kathmandu and Pokhara Day Tours.',
                    'fr' => 'Tous les frais d\'entrée pendant les visites d\'une journée à Katmandou et Pokhara.',
                ],
                [
                    'en' => 'Ground 4x4 luxury transportation through the private vehicle as referred to in the itinerary.',
                    'fr' => 'Transport terrestre de luxe 4x4 en véhicule privé comme indiqué dans l\'itinéraire.',
                ],
                [
                    'en' => 'All mandatory permit fees, including TIMS card and Annapurna Conservation Area Permit.',
                    'fr' => 'Tous les frais de permis obligatoires, y compris la carte TIMS et le permis de zone de conservation de l\'Annapurna.',
                ],
                [
                    'en' => 'Accommodation in tea houses or lodges during the trekking.',
                    'fr' => 'Hébergement dans des maisons de thé ou des lodges pendant le trekking.',
                ],
                [
                    'en' => 'Three-course meals (breakfast, lunch, and dinner) during the trekking period.',
                    'fr' => 'Repas à trois plats (petit-déjeuner, déjeuner et dîner) pendant la période de trekking.',
                ],
                [
                    'en' => 'A skillful trekking guide with excellent communication skills.',
                    'fr' => 'Un guide de trekking compétent avec d\'excellentes compétences en communication.',
                ],
                [
                    'en' => 'Two porters for three trekkers during the trekking.',
                    'fr' => 'Deux porteurs pour trois trekkeurs pendant le trekking.',
                ],
                [
                    'en' => 'Insurance for the guide and porters.',
                    'fr' => 'Assurance pour le guide et les porteurs.',
                ],
                [
                    'en' => 'Farewell dinner at Kathmandu.',
                    'fr' => 'Dîner d\'adieu à Katmandou.',
                ],
                [
                    'en' => 'All applicable VAT, Tax, and needed paperwork.',
                    'fr' => 'Toutes les TVA, taxes et documents nécessaires applicables.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'Dinner and lunch in Kathmandu and Pokhara except for the farewell dinner.',
                    'fr' => 'Dîner et déjeuner à Katmandou et Pokhara, à l\'exception du dîner d\'adieu.',
                ],
                [
                    'en' => 'Your personal expenses for mineral water, soft beverages, confectionaries, laundries, phone calls, hot drinking water, bar bills, showers, etc.',
                    'fr' => 'Vos dépenses personnelles pour l\'eau minérale, les boissons non alcoolisées, les confiseries, la lessive, les appels téléphoniques, l\'eau potable chaude, les notes de bar, les douches, etc.',
                ],
                [
                    'en' => 'Internet facility, battery chargers, multi-plugs, etc.',
                    'fr' => 'Installation Internet, chargeurs de batterie, multiprises, etc.',
                ],
                [
                    'en' => 'Personal trekking equipment.',
                    'fr' => 'Équipement de trekking personnel.',
                ],
                [
                    'en' => 'Your travel insurance that covers Helicopter evacuation.',
                    'fr' => 'Votre assurance voyage qui couvre l\'évacuation par hélicoptère.',
                ],
                [
                    'en' => 'Medical expenses and trip cancellation.',
                    'fr' => 'Frais médicaux et annulation de voyage.',
                ],
                [
                    'en' => 'Any other extended trips and accommodation.',
                    'fr' => 'Tous les autres voyages prolongés et hébergements.',
                ],
                [
                    'en' => 'Tips for the guide, porters, and driver as a token of appreciation.',
                    'fr' => 'Pourboires pour le guide, les porteurs et le chauffeur en signe d\'appréciation.',
                ],
                [
                    'en' => 'Any other expenses or charges that are not mentioned in the "costs include" list.',
                    'fr' => 'Tous les autres frais ou charges qui ne sont pas mentionnés dans la liste "coûts inclus".',
                ],
                [
                    'en' => 'Nepal arrival visa.',
                    'fr' => 'Visa d\'arrivée au Népal.',
                ],
            ],
            'is_featured' => true,
        ]);


        $trek2->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek2,
            'cover_image_id',
            public_path('photos/mountain7.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek2,
            'feature_image_id',
            public_path('photos/mountain6.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain1.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain4.jpg')
        );


        $trek3 = Trek::create([
            'title' => [
                'en' => 'Manaslu Circuit Trek',
                'fr' => 'Trek du circuit de Manaslu',
            ],
            'description' => [
                'en' => 'The Manaslu Circuit Trek is a remote and stunning journey around the world’s eighth-highest peak, Mt. Manaslu (8,163m). This trek offers a spectacular blend of rich cultural heritage, breathtaking landscapes, and challenging high-altitude trekking.',
                'fr' => 'Le trek du circuit de Manaslu est un voyage isolé et époustouflant autour du huitième plus haut sommet du monde, le mont Manaslu (8 163 m). Ce trek offre un mélange spectaculaire de riche patrimoine culturel, de paysages à couper le souffle et de trekking difficile en haute altitude.',
            ],
            'duration' => '14',
            'grade' => '8',
            'starting_point' => 'Soti Khola',
            'ending_point' => 'Besisahar',
            'best_time_for_trek' => [
                'en' => 'Spring (March-May) and Autumn (September-November)',
                'fr' => 'Printemps (mars-mai) et automne (septembre-novembre)',
            ],
            'starting_altitude' => 710,
            'highest_altitude' => 5160,
            'region_id' => 3,
            'trek_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                [
                    'en' => 'Airport transfers upon arrival and departure.',
                    'fr' => 'Transferts aéroport à l\'arrivée et au départ.',
                ],
                [
                    'en' => 'Three nights in Kathmandu with a BB plan.',
                    'fr' => 'Trois nuits à Katmandou avec un plan BB.',
                ],
                [
                    'en' => 'Sightseeing tour in Kathmandu on a private vehicle.',
                    'fr' => 'Visite touristique à Katmandou en véhicule privé.',
                ],
                [
                    'en' => 'All necessary trekking permits (Manaslu Conservation Area, Annapurna Conservation Area, and Restricted Area Permit).',
                    'fr' => 'Tous les permis de trekking nécessaires (zone de conservation de Manaslu, zone de conservation de l\'Annapurna et permis de zone restreinte).',
                ],
                [
                    'en' => 'Tea house or lodge accommodation during the trek.',
                    'fr' => 'Hébergement dans des maisons de thé ou des lodges pendant le trek.',
                ],
                [
                    'en' => 'Three-course meals (breakfast, lunch, and dinner) during the trekking period.',
                    'fr' => 'Repas à trois plats (petit-déjeuner, déjeuner et dîner) pendant la période de trekking.',
                ],
                [
                    'en' => 'A professional English-speaking trekking guide.',
                    'fr' => 'Un guide de trekking professionnel anglophone.',
                ],
                [
                    'en' => 'Porters to carry your luggage (1 porter for 2 trekkers).',
                    'fr' => 'Porteurs pour transporter vos bagages (1 porteur pour 2 trekkeurs).',
                ],
                [
                    'en' => 'Insurance for the guide and porters.',
                    'fr' => 'Assurance pour le guide et les porteurs.',
                ],
                [
                    'en' => 'Ground transportation as per the itinerary.',
                    'fr' => 'Transport terrestre selon l\'itinéraire.',
                ],
                [
                    'en' => 'All applicable government taxes and service charges.',
                    'fr' => 'Toutes les taxes gouvernementales et frais de service applicables.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'Lunch and dinner in Kathmandu except for the farewell dinner.',
                    'fr' => 'Déjeuner et dîner à Katmandou, à l\'exception du dîner d\'adieu.',
                ],
                [
                    'en' => 'Personal trekking gear and equipment.',
                    'fr' => 'Équipement de trekking personnel.',
                ],
                [
                    'en' => 'Internet, battery charging, and hot showers at lodges.',
                    'fr' => 'Internet, recharge de batterie et douches chaudes dans les lodges.',
                ],
                [
                    'en' => 'Personal expenses such as laundry, drinks, and phone calls.',
                    'fr' => 'Dépenses personnelles telles que la lessive, les boissons et les appels téléphoniques.',
                ],
                [
                    'en' => 'Travel insurance covering medical emergencies and helicopter evacuation.',
                    'fr' => 'Assurance voyage couvrant les urgences médicales et l\'évacuation par hélicoptère.',
                ],
                [
                    'en' => 'Medical expenses and trip cancellations.',
                    'fr' => 'Frais médicaux et annulations de voyage.',
                ],
                [
                    'en' => 'Any extra nights in Kathmandu due to early arrival or late departure.',
                    'fr' => 'Toutes les nuits supplémentaires à Katmandou en raison d\'une arrivée anticipée ou d\'un départ tardif.',
                ],
                [
                    'en' => 'Gratuities for guides, porters, and drivers.',
                    'fr' => 'Pourboires pour les guides, les porteurs et les chauffeurs.',
                ],
                [
                    'en' => 'Nepal entry visa fees.',
                    'fr' => 'Frais de visa d\'entrée au Népal.',
                ],
            ],
            'is_featured' => true,
        ]);

        $trek3->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );

        // Adding images for Trek 3
        CuratorSeederHelper::seedBelongsTo(
            $trek3,
            'cover_image_id',
            public_path('photos/mountain9.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek3,
            'feature_image_id',
            public_path('photos/mountain9.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek3,
            'images',
            public_path('photos/mountain9.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek3,
            'images',
            public_path('photos/mountain8.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek3,
            'images',
            public_path('photos/mountain7.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek3,
            'images',
            public_path('photos/mountain6.jpg')
        );

        $trek4 = Trek::create([
            'title' => [
                'en' => 'Langtang Gosainkunda Trek',
                'fr' => 'Trek de Langtang Gosainkunda',
            ],
            'description' => [
                'en' => 'The Langtang Gosainkunda trek is a popular trekking route in Nepal that combines the scenic beauty of the Langtang Valley with the spiritual significance of the Gosainkunda lakes. This trek offers diverse landscapes, ranging from lush green valleys and rhododendron forests to high-altitude alpine terrain and glacial lakes.  Its a culturally rich experience, allowing you to interact with the Tamang people and explore their unique traditions. The trek culminates at the sacred Gosainkunda lakes, a significant pilgrimage site for Hindus.  It is considered a moderate to challenging trek, suitable for those with some prior trekking experience.

                The Langtang Gosainkunda trek offers a unique blend of natural beauty, cultural immersion, and spiritual significance. Its a great alternative to the more crowded Everest Base Camp trek, offering a more peaceful and intimate trekking experience. The best time to undertake this trek is during the pre-monsoon (March-May) and post-monsoon (September-November) seasons.',
                'fr' => 'Le trek de Langtang Gosainkunda est un itinéraire de trekking populaire au Népal qui combine la beauté pittoresque de la vallée de Langtang avec la signification spirituelle des lacs de Gosainkunda. Ce trek offre des paysages diversifiés, allant de vallées verdoyantes luxuriantes et de forêts de rhododendrons à un terrain alpin de haute altitude et à des lacs glaciaires. C\'est une expérience culturellement riche, vous permettant d\'interagir avec le peuple Tamang et d\'explorer leurs traditions uniques. Le trek culmine aux lacs sacrés de Gosainkunda, un important lieu de pèlerinage pour les hindous. Il est considéré comme un trek modéré à difficile, adapté à ceux qui ont une certaine expérience de trekking.

                Le trek de Langtang Gosainkunda offre un mélange unique de beauté naturelle, d\'immersion culturelle et de signification spirituelle. C\'est une excellente alternative au trek plus fréquenté du camp de base de l\'Everest, offrant une expérience de trekking plus paisible et intime. Le meilleur moment pour entreprendre ce trek est pendant les saisons de pré-mousson (mars-mai) et de post-mousson (septembre-novembre).',
            ],
            'duration' => '17',
            'grade' => '6',
            'starting_point' => 'Syabrubesi',
            'ending_point' => 'Kathmandu',
            'best_time_for_trek' => [
                'en' => 'Autumn (Sep-Oct-Nov) and Spring (March-April-May)',
                'fr' => 'Automne (sept.-oct.-nov.) et printemps (mars-avril-mai)',
            ],
            'starting_altitude' => 1462,
            'highest_altitude' => 4609,
            'region_id' => Region::find(4)->id,
            'trek_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                [
                    'en' => 'Arrival and Departure Transport.',
                    'fr' => 'Transport d\'arrivée et de départ.',
                ],
                [
                    'en' => 'Accommodation in Kathmandu (Twin sharing) with breakfast.',
                    'fr' => 'Hébergement à Katmandou (chambre double) avec petit-déjeuner.',
                ],
                [
                    'en' => 'Trekking Duffle Bag.',
                    'fr' => 'Sac de voyage de trekking.',
                ],
                [
                    'en' => 'Breakfast, Lunch and Dinner during the Trekking.',
                    'fr' => 'Petit-déjeuner, déjeuner et dîner pendant le trekking.',
                ],
                [
                    'en' => 'Accommodation in Tea house (mountain lodge) during trekking.',
                    'fr' => 'Hébergement dans une maison de thé (lodge de montagne) pendant le trekking.',
                ],
                [
                    'en' => 'Kathmandu - Syabrubesi and Sundarijal - Kathmandu transport.',
                    'fr' => 'Transport Katmandou - Syabrubesi et Sundarijal - Katmandou.',
                ],
                [
                    'en' => 'Trekking Porter with Insurance (1 porter for 2 pax).',
                    'fr' => 'Porteur de trekking avec assurance (1 porteur pour 2 personnes).',
                ],
                [
                    'en' => 'Trekking Guide with insurance.',
                    'fr' => 'Guide de trekking avec assurance.',
                ],
                [
                    'en' => 'Trekking Guide and Porters food and accommodation, wages etc.',
                    'fr' => 'Nourriture et hébergement, salaires, etc. du guide de trekking et des porteurs.',
                ],
                [
                    'en' => 'Langtang Gosainkunda Trekking map.',
                    'fr' => 'Carte de trekking de Langtang Gosainkunda.',
                ],
                [
                    'en' => 'First Aid kit.',
                    'fr' => 'Trousse de premiers secours.',
                ],
                [
                    'en' => 'Trekker’s Information Management system (TIMS).',
                    'fr' => 'Système de gestion de l\'information des trekkeurs (TIMS).',
                ],
                [
                    'en' => 'Langtang National park entry fees.',
                    'fr' => 'Frais d\'entrée du parc national de Langtang.',
                ],
                [
                    'en' => 'Water purification tablets.',
                    'fr' => 'Pastilles de purification de l\'eau.',
                ],
                [
                    'en' => 'Farewell dinner with cultural program.',
                    'fr' => 'Dîner d\'adieu avec programme culturel.',
                ],
                [
                    'en' => 'Government taxes.',
                    'fr' => 'Taxes gouvernementales.',
                ],
                [
                    'en' => 'Office service charge.',
                    'fr' => 'Frais de service de bureau.',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'International Airfare.',
                    'fr' => 'Billet d\'avion international.',
                ],
                [
                    'en' => 'Travel insurance.',
                    'fr' => 'Assurance voyage.',
                ],
                [
                    'en' => 'Nepal entry Visa fee (US$ 50 for 30 days ad US$ 30 for 15 days).',
                    'fr' => 'Frais de visa d\'entrée au Népal (50 $ US pour 30 jours et 30 $ US pour 15 jours).',
                ],
                [
                    'en' => 'Drinks, Dessert, Juice, Mineral Water, Heater charge, Hot Shower during the Trekking and main meals in cities.',
                    'fr' => 'Boissons, dessert, jus, eau minérale, frais de chauffage, douche chaude pendant le trekking et repas principaux dans les villes.',
                ],
                [
                    'en' => 'Tips for Guide, Porter and driver.',
                    'fr' => 'Pourboires pour le guide, le porteur et le chauffeur.',
                ],
            ],
            'is_featured' => true,
        ]);

        $trek4->destinations()->sync(
            Destination::where('region_id', 4) // Or appropriate region ID
                ->inRandomOrder()
                ->limit(5) // Adjust the number of destinations as needed
                ->get()
                ->pluck('id')
                ->toArray()
        );

        CuratorSeederHelper::seedBelongsTo(
            $trek4,
            'cover_image_id',
            public_path('photos/qualitymount1.png') // Replace with actual image path
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek4,
            'feature_image_id',
            public_path('photos/mountain2.jpg') // Replace with actual image path
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek4,
            'images',
            public_path('photos/mountain3.jpg') // Replace with actual image path, can be an array of paths
        );

        $everest_panorama_trek_data = Trek::create([
            'title' => [
                'en' => 'Everest Panorama Trek',
                'fr' => 'Trek Panoramique de l\'Everest',
            ],
            'description' => [
                'en' => 'The Everest Panorama Trek is a short and relatively easy trek in the Everest region, perfect for those wanting stunning views of Everest without the challenges of high-altitude treks.  It offers a blend of natural beauty, Sherpa culture, and breathtaking mountain scenery, including Everest, Lhotse, Nuptse, and Ama Dablam. Trekkers experience the unique lifestyle of the Sherpa people, explore charming villages like Namche Bazaar and Khumjung, and hike to viewpoints like Hotel Everest View for unforgettable panoramic vistas.',
                'fr' => 'Le Trek Panoramique de l\'Everest est un trek court et relativement facile dans la région de l\'Everest, parfait pour ceux qui souhaitent des vues imprenables sur l\'Everest sans les défis des treks de haute altitude. Il offre un mélange de beauté naturelle, de culture sherpa et de paysages de montagne à couper le souffle, notamment l\'Everest, le Lhotse, le Nuptse et l\'Ama Dablam. Les trekkeurs découvrent le mode de vie unique du peuple sherpa, explorent de charmants villages comme Namche Bazaar et Khumjung, et font de la randonnée jusqu\'à des points de vue comme l\'Hotel Everest View pour des panoramas inoubliables.',
            ],
            'duration' => '12',
            'grade' => '5',
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_trek' => [
                'en' => 'September to May',
                'fr' => 'Septembre à Mai',
            ],
            'starting_altitude' => 1400,
            'highest_altitude' => 3962,
            'region_id' => Region::first()->id,
            'trek_difficulty' => TrekDifficulty::MODERATE,
            'costs_include' => [
                [
                    'en' => 'Airport transfers',
                    'fr' => 'Transferts aéroport',
                ],
                [
                    'en' => 'Kathmandu accommodation',
                    'fr' => 'Hébergement à Katmandou',
                ],
                [
                    'en' => 'Sightseeing tour in Kathmandu',
                    'fr' => 'Visite touristique à Katmandou',
                ],
                [
                    'en' => 'Flight to/from Lukla',
                    'fr' => 'Vol aller-retour pour Lukla',
                ],
                [
                    'en' => 'Accommodation in teahouses during trek',
                    'fr' => 'Hébergement dans des maisons de thé pendant le trek',
                ],
                [
                    'en' => 'Meals (breakfast, lunch, dinner) during trek',
                    'fr' => 'Repas (petit-déjeuner, déjeuner, dîner) pendant le trek',
                ],
                [
                    'en' => 'Experienced trekking guide',
                    'fr' => 'Guide de trekking expérimenté',
                ],
                [
                    'en' => 'Porters to carry luggage',
                    'fr' => 'Porteurs pour transporter les bagages',
                ],
                [
                    'en' => 'Sagarmatha National Park entry permit',
                    'fr' => 'Permis d\'entrée au parc national de Sagarmatha',
                ],
                [
                    'en' => 'TIMS card (Trekker\'s Information Management System)',
                    'fr' => 'Carte TIMS (Système de gestion de l\'information des trekkeurs)',
                ],
            ],
            'costs_exclude' => [
                [
                    'en' => 'Personal expenses (drinks, snacks, souvenirs)',
                    'fr' => 'Dépenses personnelles (boissons, collations, souvenirs)',
                ],
                [
                    'en' => 'Lunch and dinner in Kathmandu',
                    'fr' => 'Déjeuner et dîner à Katmandou',
                ],
                [
                    'en' => 'Tips for guide and porters',
                    'fr' => 'Pourboires pour le guide et les porteurs',
                ],
                [
                    'en' => 'Travel insurance',
                    'fr' => 'Assurance voyage',
                ],
                [
                    'en' => 'Visa fees',
                    'fr' => 'Frais de visa',
                ],
            ],
            'is_featured' => true,
        ]);

        // Associate destinations (replace with actual logic to select relevant destinations)
        $everest_panorama_trek_data->destinations()->sync(
            Destination::where('region_id', 1) // Assuming region_id 1 is Everest region
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );


        // Seed Curator Images (replace with your actual paths and logic)
        CuratorSeederHelper::seedBelongsTo(
            $everest_panorama_trek_data,
            'cover_image_id',
            public_path('photos/mountain2.jpg') // Replace with the actual path
        );

        CuratorSeederHelper::seedBelongsTo(
            $everest_panorama_trek_data,
            'feature_image_id',
            public_path('photos/mountain3.jpg') // Replace with the actual path
        );

        CuratorSeederHelper::seedBelongsToMany(
            $everest_panorama_trek_data,
            'images',
            public_path('photos/mountain4.jpg')
        );
    }
}
