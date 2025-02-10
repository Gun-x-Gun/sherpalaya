<?php

namespace Database\Seeders;

use App\Enums\ItineraryTypes;
use App\Models\Destination;
use App\Models\Expedition;
use App\Models\Itinerary;
use App\Models\Peak;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $trekItineraries = [
            [
                'title' => [
                    'en' => 'Day 01: Lukla and trek to Phakding',
                    'fr' => 'Jour 01 : Lukla et trek jusqu\'à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => "You’ll take an early flight from the domestic terminal of International Airport, Kathmandu to Lukla. The entire flying time will keep you engaged with awesome views of breathtaking mountains.",
                            'fr' => "Vous prendrez un vol tôt depuis le terminal domestique de l'aéroport international de Katmandou jusqu'à Lukla. Toute la durée du vol vous tiendra occupé avec des vues impressionnantes sur des montagnes à couper le souffle.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "After landing in Lukla and taking a short rest, you’ll head towards Phakding by following the Dudh Koshi river and crossing a suspension bridge. On the trail, you’ll see chorten, mani stones, and prayer flags.",
                            'fr' => "Après avoir atterri à Lukla et pris un court repos, vous vous dirigerez vers Phakding en suivant la rivière Dudh Koshi et en traversant un pont suspendu. Sur le sentier, vous verrez des chortens, des pierres mani et des drapeaux de prière.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "You’ll spend the night in Phakding.",
                            'fr' => "Vous passerez la nuit à Phakding.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,610 m",
                            'fr' => "2 610 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "3 hours",
                            'fr' => "3 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Phakding to Namche Bazaar',
                    'fr' => 'Jour 02 : De Phakding à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "After a hot breakfast, head toward Namche Bazaar, one of the largest rest areas. The trail involves high climbs, steep steps, stunning forests, and crossing rivers via swaying suspension bridges.",
                            'fr' => "Après un copieux petit-déjeuner, dirigez-vous vers Namche Bazaar, l'une des plus grandes aires de repos. Le sentier comprend de hautes montées, des marches raides, des forêts magnifiques et la traversée de rivières via des ponts suspendus oscillants.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA, // Or SCENIC_VIEW or similar
                        'description' => [
                            'en' => "After reaching Namche Bazaar, enjoy the breathtaking sight of golden mountains at sunset.",
                            'fr' => "Après avoir atteint Namche Bazaar, profitez de la vue imprenable sur les montagnes dorées au coucher du soleil.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "You’ll spend the night in Namche Bazaar.",
                            'fr' => "Vous passerez la nuit à Namche Bazaar.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,445 m",
                            'fr' => "3 445 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6 hours",
                            'fr' => "6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Acclimatization Day in Namche',
                    'fr' => 'Jour 03 : Journée d\'acclimatation à Namche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or HIKING, if you have that type
                        'description' => [
                            'en' => "Take a short trip to Khumjung Village and Syangboche (world’s highest airport) and return to Namche Bazaar.",
                            'fr' => "Faites une courte excursion au village de Khumjung et à Syangboche (l'aéroport le plus haut du monde) et retournez à Namche Bazaar.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Namche Bazaar to Tengboche',
                    'fr' => 'Jour 04 : De Namche Bazaar à Tengboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Start the day early at 7 am. The trail takes you through narrow paths with amazing views of Mt. Everest, Mt. Amadablam, Mt. Tabuchi, and Mt. Thamserku.",
                            'fr' => "Commencez la journée tôt à 7 heures du matin. Le sentier vous emmène à travers des chemins étroits avec des vues incroyables sur le mont Everest, le mont Amadablam, le mont Tabuchi et le mont Thamserku.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA, // Or SCENIC_VIEW
                        'description' => [
                            'en' => "Visit the hilltop village of Tengboche, home to the largest monastery in the Khumbu region, Tengboche Monastery.",
                            'fr' => "Visitez le village perché de Tengboche, qui abrite le plus grand monastère de la région de Khumbu, le monastère de Tengboche.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,860 m",
                            'fr' => "3 860 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 hours",
                            'fr' => "5 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Trek to Dingboche',
                    'fr' => 'Jour 05 : Trek jusqu\'à Dingboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Begin with a descent through rhododendron forests followed by gradual steep climbs. Pass mani stones, Pangboche, Shomare, and Orsho to reach Dingboche.",
                            'fr' => "Commencez par une descente à travers les forêts de rhododendrons, suivie de montées raides progressives. Passez devant les pierres mani, Pangboche, Shomare et Orsho pour atteindre Dingboche.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA, // Or SCENIC_VIEW
                        'description' => [
                            'en' => "Dingboche is a summer settlement for yak grazing with amazing views of Lhotse, Amadablam, and Taboche.",
                            'fr' => "Dingboche est un lieu de résidence d'été pour le pâturage des yaks avec des vues incroyables sur le Lhotse, l'Amadablam et le Taboche.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,360 m",
                            'fr' => "4 360 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "4 hours",
                            'fr' => "4 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Acclimatization Day in Dingboche',
                    'fr' => 'Jour 06 : Journée d\'acclimatation à Dingboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or HIKING if you have that type
                        'description' => [
                            'en' => "Take a short trip to Chukung Village, a stop on the way to the famous Island Peak.",
                            'fr' => "Faites une courte excursion au village de Chukung, une étape sur le chemin du célèbre Island Peak.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Trek to Lobuche',
                    'fr' => 'Jour 07 : Trek jusqu\'à Lobuche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "The trail leads through grasslands, crosses a suspension bridge at Thukla, and ascends to Lobuche Pass.",
                            'fr' => "Le sentier traverse des prairies, traverse un pont suspendu à Thukla et monte jusqu'au col de Lobuche.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA, // Or SCENIC_VIEW
                        'description' => [
                            'en' => "Lobuche offers breathtaking views and has a high-altitude research center.",
                            'fr' => "Lobuche offre des vues à couper le souffle et possède un centre de recherche en haute altitude.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,930 m",
                            'fr' => "4 930 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 hours",
                            'fr' => "5 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek to Gorak Shep and Everest Base Camp',
                    'fr' => 'Jour 08 : Trek jusqu\'à Gorak Shep et au camp de base de l\'Everest',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Reach Gorak Shep with stunning views of the Khumbu Glacier and surrounding mountains. After some rest, head to Everest Base Camp.",
                            'fr' => "Atteignez Gorak Shep avec des vues imprenables sur le glacier de Khumbu et les montagnes environnantes. Après un peu de repos, dirigez-vous vers le camp de base de l'Everest.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA, // Or SCENIC_VIEW
                        'description' => [
                            'en' => "Enjoy spectacular views of Everest, Nuptse, Pumori, and other peaks.",
                            'fr' => "Profitez de vues spectaculaires sur l'Everest, le Nuptse, le Pumori et d'autres sommets.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "5,346 m (EBC) and 5,160 m (Gorak Shep)",
                            'fr' => "5 346 m (CBE) et 5 160 m (Gorak Shep)",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "7 hours",
                            'fr' => "7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09: Trek to Kala Patthar and back to Pheriche',
                    'fr' => 'Jour 09 : Trek jusqu\'à Kala Patthar et retour à Pheriche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Hike to Kala Patthar early in the morning for 360-degree panoramic mountain views, then descend to Pheriche.",
                            'fr' => "Randonnée jusqu'à Kala Patthar tôt le matin pour des vues panoramiques à 360 degrés sur les montagnes, puis descente jusqu'à Pheriche.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "5,545 m (Kala Patthar) and 4,280 m (Pheriche)",
                            'fr' => "5 545 m (Kala Patthar) et 4 280 m (Pheriche)",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "7 hours",
                            'fr' => "7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek to Namche Bazaar',
                    'fr' => 'Jour 10 : Trek jusqu\'à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend to Namche Bazaar, passing through rhododendron and pine forests, suspension bridges, mani stones, chortens, and stupas.",
                            'fr' => "Descendez jusqu'à Namche Bazaar, en passant par des forêts de rhododendrons et de pins, des ponts suspendus, des pierres mani, des chortens et des stupas.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,445 m",
                            'fr' => "3 445 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6 hours",
                            'fr' => "6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Trek back to Lukla',
                    'fr' => 'Jour 11 : Trek de retour à Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trek back to the small airstrip at Lukla, passing Dudh Koshi River and celebrating your achievement.",
                            'fr' => "Trek de retour au petit aérodrome de Lukla, en passant par la rivière Dudh Koshi et en célébrant votre réussite.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,860 m",
                            'fr' => "2 860 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "8 hours",
                            'fr' => "8 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Fly to Kathmandu from Lukla',
                    'fr' => 'Jour 12 : Vol de Lukla à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => "Take a beautiful flight back to Kathmandu, saying goodbye to the majestic mountains.",
                            'fr' => "Prenez un beau vol de retour à Katmandou, en disant au revoir aux montagnes majestueuses.",
                        ],
                    ],
                ],
            ],
        ];
        $annapurnaItineraries = [
            [
                'title' => [
                    'en' => 'Day 1: Arrival in Kathmandu',
                    'fr' => 'Jour 1 : Arrivée à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT, // Or OTHERS if arrival involves more than just the flight
                        'description' => [
                            'en' => "Arrive at Tribhuvan International Airport, transfer to your hotel. Rest and acclimatize to the altitude, prepare gears, and obtain necessary permits.",
                            'fr' => "Arrivez à l'aéroport international de Tribhuvan, transfert à votre hôtel. Reposez-vous et acclimater-vous à l'altitude, préparez votre équipement et obtenez les permis nécessaires.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 2: Fly to Pokhara and Drive to Nayapul',
                    'fr' => 'Jour 2 : Vol pour Pokhara et trajet en voiture jusqu\'à Nayapul',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => "Take an early morning flight from Kathmandu to Pokhara, offering breathtaking views of the Annapurna and Dhaulagiri ranges.",
                            'fr' => "Prenez un vol tôt le matin de Katmandou à Pokhara, offrant des vues imprenables sur les chaînes de l'Annapurna et du Dhaulagiri.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK, // Or DRIVE if the drive is the main activity
                        'description' => [
                            'en' => "Drive to Nayapul and begin trekking to Tikhedhunga (1540m), passing terraced fields and rhododendron forests.",
                            'fr' => "Trajet en voiture jusqu'à Nayapul et début du trek jusqu'à Tikhedhunga (1540m), en passant par des champs en terrasses et des forêts de rhododendrons.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 3: Trek to Ghorepani',
                    'fr' => 'Jour 3 : Trek jusqu\'à Ghorepani',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trek to Ghorepani (2850m) via Ulleri and Banthanti. Enjoy panoramic views of Machhapuchhre (Fishtail Peak) and Annapurna South.",
                            'fr' => "Trek jusqu'à Ghorepani (2850m) via Ulleri et Banthanti. Profitez des vues panoramiques sur Machhapuchhre (Sommet en queue de poisson) et l'Annapurna Sud.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,850 m",
                            'fr' => "2 850 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6-7 hours",
                            'fr' => "6-7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 4: Hike to Poon Hill and Trek to Tadapani',
                    'fr' => 'Jour 4 : Randonnée jusqu\'à Poon Hill et trek jusqu\'à Tadapani',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Hike early morning to Poon Hill (3210m) to witness breathtaking sunrise views over the Annapurna and Dhaulagiri ranges. Then descend to Ghorepani and trek to Tadapani (2630m).",
                            'fr' => "Randonnée tôt le matin jusqu'à Poon Hill (3210m) pour admirer les vues imprenables sur le lever du soleil sur les chaînes de l'Annapurna et du Dhaulagiri. Puis descendez jusqu'à Ghorepani et faites un trek jusqu'à Tadapani (2630m).",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,210 m (Poon Hill) and 2,630 m (Tadapani)",
                            'fr' => "3 210 m (Poon Hill) et 2 630 m (Tadapani)",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6-7 hours",
                            'fr' => "6-7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 5: Trek to Chhomrong',
                    'fr' => 'Jour 5 : Trek jusqu\'à Chhomrong',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trek to Chhomrong (2170m), passing through rhododendron forests and Gurung villages. Immerse yourself in the local culture and enjoy stunning mountain views.",
                            'fr' => "Trek jusqu'à Chhomrong (2170m), en passant par des forêts de rhododendrons et des villages Gurung. Imprégnez-vous de la culture locale et profitez de vues imprenables sur les montagnes.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,170 m",
                            'fr' => "2 170 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5-6 hours",
                            'fr' => "5-6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 6: Trek to Himalaya',
                    'fr' => 'Jour 6 : Trek jusqu\'à Himalaya',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend through rhododendron forests, cross suspension bridges, and ascend gradually to Himalaya (2600m).",
                            'fr' => "Descendez à travers des forêts de rhododendrons, traversez des ponts suspendus et montez progressivement jusqu'à Himalaya (2600m).",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,600 m",
                            'fr' => "2 600 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6-7 hours",
                            'fr' => "6-7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 7: Trek to Annapurna Base Camp via Machhapuchhre Base Camp',
                    'fr' => 'Jour 7 : Trek jusqu\'au camp de base de l\'Annapurna via le camp de base de Machhapuchhre',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Ascend to Machhapuchhre Base Camp (3700m), offering panoramic views of the Annapurna range, and then to Annapurna Base Camp (4130m), the highlight of the trek.",
                            'fr' => "Montez jusqu'au camp de base de Machhapuchhre (3700m), offrant des vues panoramiques sur la chaîne de l'Annapurna, puis jusqu'au camp de base de l'Annapurna (4130m), le point culminant du trek.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,130 m",
                            'fr' => "4 130 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6-7 hours",
                            'fr' => "6-7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 8: Trek to Bamboo',
                    'fr' => 'Jour 8 : Trek jusqu\'à Bamboo',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend to Bamboo (2310m), retracing your route through rhododendron forests and terraced fields.",
                            'fr' => "Descendez jusqu'à Bamboo (2310m), en retraçant votre itinéraire à travers les forêts de rhododendrons et les champs en terrasses.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,310 m",
                            'fr' => "2 310 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6-7 hours",
                            'fr' => "6-7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 9: Trek to Jhinu Danda and Drive to Pokhara',
                    'fr' => 'Jour 9 : Trek jusqu\'à Jhinu Danda et trajet en voiture jusqu\'à Pokhara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trek to Jhinu Danda (1940m), known for its hot springs. Relax and rejuvenate before driving back to Pokhara.",
                            'fr' => "Trek jusqu'à Jhinu Danda (1940m), connu pour ses sources chaudes. Détendez-vous et rajeunissez avant de retourner à Pokhara en voiture.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "1,940 m",
                            'fr' => "1 940 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5-6 hours",
                            'fr' => "5-6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Drive or Fly Back to Kathmandu',
                    'fr' => 'Jour 10 : Trajet en voiture ou vol de retour à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT, // Or DRIVE, depending on the mode of transport
                        'description' => [
                            'en' => "Fly back to Kathmandu, bidding farewell to the mountains. Alternatively, take a scenic drive back to the capital.",
                            'fr' => "Retournez à Katmandou en avion, en disant adieu aux montagnes. Alternativement, prenez une route panoramique de retour vers la capitale.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Departure',
                    'fr' => 'Jour 11 : Départ',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT, // Or OTHERS if there are other departure activities
                        'description' => [
                            'en' => "Transfer to Tribhuvan International Airport for your departure flight.",
                            'fr' => "Transfert à l'aéroport international de Tribhuvan pour votre vol de départ.",
                        ],
                    ],
                ],
            ],
        ];

        $peakItineraries = [
            [
                'title' => [
                    'en' => 'Day 01: Arrival in Kathmandu Airport and Hotel transfer',
                    'fr' => 'Jour 01 : Arrivée à l\'aéroport de Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "You will land at Kathmandu airport, and a team from Exciting Nepal will pick you up for a quick and hassle-free hotel transfer. You’ll rest at the hotel after a long flight.",
                            'fr' => "Vous atterrirez à l'aéroport de Katmandou, et une équipe d'Exciting Nepal viendra vous chercher pour un transfert rapide et sans tracas à l'hôtel. Vous vous reposerez à l'hôtel après un long vol.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Arrangement Day',
                    'fr' => 'Jour 02 : Journée d\'arrangement',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "This day is dedicated to preparation for the expedition. You'll meet your guide, attend a briefing, and shop for necessary climbing gear.",
                            'fr' => "Cette journée est consacrée à la préparation de l'expédition. Vous rencontrerez votre guide, assisterez à un briefing et achèterez l'équipement d'escalade nécessaire.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Fly to Lukla and trek to Phakding',
                    'fr' => 'Jour 03 : Vol pour Lukla et trek jusqu\'à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => "40 minutes to Lukla with breathtaking mountain views.",
                            'fr' => "40 minutes jusqu'à Lukla avec des vues imprenables sur les montagnes.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "The trek to Phakding follows the Dudh Koshi River, passing settlements, mani walls, and rhododendron forests.",
                            'fr' => "Le trek jusqu'à Phakding suit la rivière Dudh Koshi, en passant par des villages, des murs mani et des forêts de rhododendrons.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,640 m",
                            'fr' => "2 640 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "3 to 4 hours",
                            'fr' => "3 à 4 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Trek from Phakding to Namche Bazaar',
                    'fr' => 'Jour 04 : Trek de Phakding à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "The trail to Namche Bazaar passes through suspension bridges, Sherpa settlements, and the entrance to Sagarmatha National Park.",
                            'fr' => "Le sentier menant à Namche Bazaar traverse des ponts suspendus, des villages sherpas et l'entrée du parc national de Sagarmatha.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,446 m",
                            'fr' => "3 446 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Acclimatization in Namche Bazaar',
                    'fr' => 'Jour 05 : Acclimatation à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Lodge",
                            'fr' => "Lodge",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Hike to Everest View Hotel (3,880 m) with stunning views of Mt. Everest, then return to Namche Bazaar.",
                            'fr' => "Randonnée jusqu'à l'Everest View Hotel (3 880 m) avec des vues imprenables sur le mont Everest, puis retour à Namche Bazaar.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Trek from Namche Bazaar to Tengboche',
                    'fr' => 'Jour 06 : Trek de Namche Bazaar à Tengboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend from Namche to Phunki Tenga, then ascend to Tengboche Monastery with views of Everest and Ama Dablam.",
                            'fr' => "Descendez de Namche à Phunki Tenga, puis montez jusqu'au monastère de Tengboche avec des vues sur l'Everest et l'Ama Dablam.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,800 m",
                            'fr' => "3 800 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Trek from Tengboche to Dingboche',
                    'fr' => 'Jour 07 : Trek de Tengboche à Dingboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Pass through rhododendron forests, cross Imja Khola, and ascend to Dingboche through the Imja Valley.",
                            'fr' => "Traversez des forêts de rhododendrons, traversez l'Imja Khola et montez jusqu'à Dingboche à travers la vallée de l'Imja.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,347 m",
                            'fr' => "4 347 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek from Dingboche to Lobuche',
                    'fr' => 'Jour 08 : Trek de Dingboche à Lobuche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Climb past Duglha and Chuki Lahara, then walk over Khumbu Glacier moraines to reach Lobuche.",
                            'fr' => "Montez au-delà de Duglha et Chuki Lahara, puis marchez sur les moraines du glacier de Khumbu pour atteindre Lobuche.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,900 m",
                            'fr' => "4 900 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09: Trek to Kala Patthar via Gorakshep and trace back to Gorakshep',
                    'fr' => 'Jour 09 : Trek jusqu\'à Kala Patthar via Gorakshep et retour à Gorakshep',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Hike to Kala Patthar (5,545 m) via Gorakshep for a panoramic view of Everest and nearby peaks, then return to Gorakshep.",
                            'fr' => "Randonnée jusqu'à Kala Patthar (5 545 m) via Gorakshep pour une vue panoramique sur l'Everest et les sommets voisins, puis retour à Gorakshep.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "5,545 m",
                            'fr' => "5 545 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6 to 7 hours",
                            'fr' => "6 à 7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek to Lobuche Base Camp',
                    'fr' => 'Jour 10 : Trek jusqu\'au camp de base de Lobuche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Climb a steep and rough trail from Gorakshep to Lobuche Base Camp. Enjoy glacier views en route.",
                            'fr' => "Montez un sentier raide et accidenté de Gorakshep au camp de base de Lobuche. Profitez des vues sur le glacier en cours de route.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,900 m",
                            'fr' => "4 900 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Trek to Lobuche High Camp',
                    'fr' => 'Jour 11 : Trek jusqu\'au camp d\'altitude de Lobuche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Ascend steep and rough trails to reach Lobuche High Camp, where your guide will provide climbing tips.",
                            'fr' => "Montez des sentiers raides et accidentés pour atteindre le camp d'altitude de Lobuche, où votre guide vous fournira des conseils d'escalade.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "5,300 m",
                            'fr' => "5 300 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "3 to 4 hours",
                            'fr' => "3 à 4 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Summit Day',
                    'fr' => 'Jour 12 : Jour du sommet',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or CLIMBING if you have a specific type
                        'description' => [
                            'en' => "Climb the southern ridge of Lobuche Peak using technical climbing gear. Enjoy panoramic views of the Everest region from the summit.",
                            'fr' => "Escaladez l'arête sud du Lobuche Peak en utilisant du matériel d'escalade technique. Profitez des vues panoramiques sur la région de l'Everest depuis le sommet.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "6,119 m",
                            'fr' => "6 119 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "8 to 10 hours",
                            'fr' => "8 à 10 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Trek to Pheriche',
                    'fr' => 'Jour 13 : Trek jusqu\'à Pheriche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend from Lobuche High Camp through rugged trails to Pheriche, a Sherpa settlement surrounded by rocky hills.",
                            'fr' => "Descendez du camp d'altitude de Lobuche par des sentiers accidentés jusqu'à Pheriche, un village sherpa entouré de collines rocheuses.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,200 m",
                            'fr' => "4 200 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Trek back to Tengboche',
                    'fr' => 'Jour 14 : Trek de retour à Tengboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend along Imja Khola through Pangboche village and rhododendron forests to reach Tengboche.",
                            'fr' => "Descendez le long de l'Imja Khola à travers le village de Pangboche et les forêts de rhododendrons pour atteindre Tengboche.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,800 m",
                            'fr' => "3 800 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "4 to 5 hours",
                            'fr' => "4 à 5 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 15: Trek back to Namche Bazaar',
                    'fr' => 'Jour 15 : Trek de retour à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Retrace your steps through familiar trails with views of Everest, Nuptse, and Lhotse.",
                            'fr' => "Retournez sur vos pas à travers des sentiers familiers avec des vues sur l'Everest, le Nuptse et le Lhotse.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,446 m",
                            'fr' => "3 446 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 16: Trek back to Lukla',
                    'fr' => 'Jour 16 : Trek de retour à Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trek through suspension bridges and picturesque scenery to reach Lukla, marking the end of your trek.",
                            'fr' => "Trek à travers des ponts suspendus et des paysages pittoresques pour atteindre Lukla, marquant la fin de votre trek.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,800 m",
                            'fr' => "2 800 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6 to 7 hours",
                            'fr' => "6 à 7 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 17: Fly back to Kathmandu and to the Hotel via Hotel transfer',
                    'fr' => 'Jour 17 : Vol de retour à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => "40-minute scenic flight back to Kathmandu.",
                            'fr' => "Vol panoramique de 40 minutes de retour à Katmandou.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                ],
            ],
        ];
        $expeditionItineraries = [
            [
                'title' => [
                    'en' => 'Day 01: Arrival in Kathmandu & transfer to hotel',
                    'fr' => 'Jour 01 : Arrivée à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Arrive at Kathmandu airport and meet the expedition team. Transfer to the hotel for check-in and rest. Spend the evening meeting the guides and going over the itinerary for the expedition.",
                            'fr' => "Arrivez à l'aéroport de Katmandou et rencontrez l'équipe d'expédition. Transfert à l'hôtel pour l'enregistrement et le repos. Passez la soirée à rencontrer les guides et à passer en revue l'itinéraire de l'expédition.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02-03: At leisure in Kathmandu',
                    'fr' => 'Jour 02-03 : Temps libre à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Spend the day exploring the vibrant streets of Kathmandu, visiting historical and cultural landmarks such as Swayambhunath (Monkey Temple) and Durbar Square. Use this time to prepare and shop for essential gear for the climb.",
                            'fr' => "Passez la journée à explorer les rues animées de Katmandou, à visiter des sites historiques et culturels tels que Swayambhunath (Temple des Singes) et la place Durbar. Profitez de ce temps pour vous préparer et acheter l'équipement essentiel pour l'ascension.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Fly to Lukla & Trek to Phakding',
                    'fr' => 'Jour 04 : Vol pour Lukla et trek jusqu\'à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => "Take an early morning 40-minute flight from Kathmandu to Lukla, enjoying scenic views of the Himalayas.",
                            'fr' => "Prenez un vol matinal de 40 minutes de Katmandou à Lukla, en profitant des vues panoramiques de l'Himalaya.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trek from Lukla to Phakding along the Dudh Koshi River, passing suspension bridges and small villages.",
                            'fr' => "Trek de Lukla à Phakding le long de la rivière Dudh Koshi, en passant par des ponts suspendus et de petits villages.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,640 m",
                            'fr' => "2 640 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "3 to 4 hours",
                            'fr' => "3 à 4 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Trek to Namche Bazaar',
                    'fr' => 'Jour 05 : Trek jusqu\'à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "The trail to Namche Bazaar passes through Sagarmatha National Park, suspension bridges, and pine forests. Along the way, enjoy your first glimpses of Mt. Everest and other peaks.",
                            'fr' => "Le sentier menant à Namche Bazaar traverse le parc national de Sagarmatha, des ponts suspendus et des forêts de pins. En chemin, profitez de vos premières vues sur le mont Everest et d'autres sommets.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,445 m",
                            'fr' => "3 445 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: At leisure in Namche Bazaar',
                    'fr' => 'Jour 06 : Temps libre à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or OTHERS, depending on activities
                        'description' => [
                            'en' => "Explore the vibrant Sherpa town of Namche Bazaar. Visit the Everest View Hotel for stunning views of Mt. Everest, and acclimatize to the high altitude.",
                            'fr' => "Explorez la ville sherpa animée de Namche Bazaar. Visitez l'Everest View Hotel pour des vues imprenables sur le mont Everest, et acclimater-vous à la haute altitude.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Trek to Thyangboche',
                    'fr' => 'Jour 07 : Trek jusqu\'à Thyangboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend to Phunki Tenga before climbing up to Thyangboche Monastery, one of the most significant spiritual centers in the region. Enjoy panoramic views of Everest, Ama Dablam, and other peaks.",
                            'fr' => "Descendez jusqu'à Phunki Tenga avant de monter jusqu'au monastère de Thyangboche, l'un des centres spirituels les plus importants de la région. Profitez des vues panoramiques sur l'Everest, l'Ama Dablam et d'autres sommets.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,860 m",
                            'fr' => "3 860 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek to Dingboche',
                    'fr' => 'Jour 08 : Trek jusqu\'à Dingboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Follow the trail through rhododendron forests and cross the Imja Khola to reach the Imja Valley and Dingboche. This village offers incredible views of the Lhotse and Nuptse peaks.",
                            'fr' => "Suivez le sentier à travers les forêts de rhododendrons et traversez l'Imja Khola pour atteindre la vallée de l'Imja et Dingboche. Ce village offre des vues incroyables sur les sommets du Lhotse et du Nuptse.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,410 m",
                            'fr' => "4 410 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09-13: Acclimatization',
                    'fr' => 'Jour 09-13 : Acclimatation',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Could be TREK if hikes are involved
                        'description' => [
                            'en' => "Spend several days acclimatizing to the high altitude. Take short hikes to nearby ridges, enjoy the view of the Khumbu Glacier, and prepare for the next stage of the expedition.",
                            'fr' => "Passez plusieurs jours à vous acclimater à la haute altitude. Faites de courtes randonnées vers les crêtes voisines, profitez de la vue sur le glacier de Khumbu et préparez-vous pour la prochaine étape de l'expédition.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Trek to Lobuje',
                    'fr' => 'Jour 14 : Trek jusqu\'à Lobuje',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trek past Duglha and ascend to the memorial site for climbers before reaching Lobuje, with views of the Khumbu Glacier.",
                            'fr' => "Trek au-delà de Duglha et montez jusqu'au mémorial des grimpeurs avant d'atteindre Lobuje, avec des vues sur le glacier de Khumbu.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,940 m",
                            'fr' => "4 940 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 to 6 hours",
                            'fr' => "5 à 6 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 15: Trek to Everest Base Camp',
                    'fr' => 'Jour 15 : Trek jusqu\'au camp de base de l\'Everest',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trek from Lobuje to Gorakshep, then follow the trail to Everest Base Camp with views of towering icefalls and the Khumbu Glacier.",
                            'fr' => "Trek de Lobuje à Gorakshep, puis suivez le sentier jusqu'au camp de base de l'Everest avec des vues sur des cascades de glace imposantes et le glacier de Khumbu.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "5,364 m",
                            'fr' => "5 364 m",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "7 to 8 hours",
                            'fr' => "7 à 8 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 16-18: Rest and preparation',
                    'fr' => 'Jour 16-18 : Repos et préparation',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Rest and prepare for the climb. Review climbing routes and ensure gear is in order.",
                            'fr' => "Reposez-vous et préparez-vous pour l'ascension. Examinez les itinéraires d'escalade et assurez-vous que l'équipement est en ordre.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 19-64: Ascent of Mt Everest',
                    'fr' => 'Jour 19-64 : Ascension du mont Everest',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or CLIMBING, if you have a specific type
                        'description' => [
                            'en' => "Climb Mt Everest through established camps, with periodic acclimatization and rest. The summit attempt will depend on weather conditions and team readiness.",
                            'fr' => "Escaladez le mont Everest à travers des camps établis, avec une acclimatation et un repos périodiques. La tentative de sommet dépendra des conditions météorologiques et de la préparation de l'équipe.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 65: Withdraw to Base Camp',
                    'fr' => 'Jour 65 : Retour au camp de base',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend from higher camps back to Base Camp for recovery and reflection on the summit success.",
                            'fr' => "Descendez des camps supérieurs jusqu'au camp de base pour la récupération et la réflexion sur le succès du sommet.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 66-68: Return trek to Namche Bazaar via Dingboche and Thyangboche',
                    'fr' => 'Jour 66-68 : Trek de retour à Namche Bazaar via Dingboche et Thyangboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Retrace your steps back to Namche Bazaar via the same route, enjoying the sights and stopping at familiar landmarks.",
                            'fr' => "Retournez sur vos pas jusqu'à Namche Bazaar par le même itinéraire, en profitant des paysages et en vous arrêtant à des points de repère familiers.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 69: Trek to Lukla',
                    'fr' => 'Jour 69 : Trek jusqu\'à Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Complete the final day of trekking in the Khumbu region, reaching Lukla for an overnight stay.",
                            'fr' => "Terminez le dernier jour de trekking dans la région de Khumbu, en atteignant Lukla pour une nuit.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 70: Fly Lukla to Kathmandu',
                    'fr' => 'Jour 70 : Vol de Lukla à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => "Fly back to Kathmandu on a scenic 40-minute flight.",
                            'fr' => "Retournez à Katmandou par un vol panoramique de 40 minutes.",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 71: Shopping and sightseeing in Kathmandu',
                    'fr' => 'Jour 71 : Shopping et visites touristiques à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Explore Kathmandu's vibrant markets, temples, and cultural landmarks. Buy souvenirs and enjoy a farewell dinner with the expedition team.",
                            'fr' => "Explorez les marchés animés, les temples et les monuments culturels de Katmandou. Achetez des souvenirs et profitez d'un dîner d'adieu avec l'équipe d'expédition.",
                        ],
                    ],
                ],
            ],
        ];

        $manasluItineraries = [
            [
                'title' => [
                    'en' => 'Day 1: Welcome to Kathmandu and transfer to the hotel',
                    'fr' => 'Jour 1 : Bienvenue à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "We will welcome you at the Kathmandu airport upon landing. We will provide a seamless transfer to the hotel and help with your luggage. Take your time to rest and explore your surroundings. We have not planned anything on this day apart from a welcome dinner in the late evening with our company's core team.",
                            'fr' => "Nous vous accueillerons à l'aéroport de Katmandou à votre atterrissage. Nous assurons un transfert sans encombre à l'hôtel et vous aidons avec vos bagages. Prenez le temps de vous reposer et d'explorer les environs. Nous n'avons rien prévu ce jour-là à part un dîner de bienvenue en fin de soirée avec l'équipe principale de notre entreprise.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 2: Full-day sightseeing tour of Swayambhunath Temple, Pashupatinath Temple, Bouddhanath Stupa, and Kathmandu Durbar Square',
                    'fr' => 'Jour 2 : Visite touristique d\'une journée complète du temple de Swayambhunath, du temple de Pashupatinath, du stupa de Bouddhanath et de la place Durbar de Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "We have divided this day into two parts—some sightseeing and then trek preparation. You will be accompanied by a professional guide who can communicate well in English for sightseeing. You will visit tourist sites like Swayambhunath Temple, Pashupatinath Temple, Bouddhanath Stupa, and Kathmandu Durbar Square.",
                            'fr' => "Nous avons divisé cette journée en deux parties : une partie consacrée aux visites touristiques, puis à la préparation du trek. Vous serez accompagné d'un guide professionnel qui parle bien anglais pour les visites touristiques. Vous visiterez des sites touristiques comme le temple de Swayambhunath, le temple de Pashupatinath, le stupa de Bouddhanath et la place Durbar de Katmandou.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "After exploring these monuments, the guide will drop you at your hotel. We will then obtain the restricted area permit. You can spend some time resting and later join the trek briefing. Do any last-minute shopping and pack your duffle bags.",
                            'fr' => "Après avoir exploré ces monuments, le guide vous déposera à votre hôtel. Nous obtiendrons ensuite le permis de zone restreinte. Vous pouvez passer un peu de temps à vous reposer, puis rejoindre le briefing sur le trek. Faites vos achats de dernière minute et préparez vos sacs de voyage.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 3: Drive from Kathmandu to Machha Khola',
                    'fr' => 'Jour 3 : Trajet de Katmandou à Machha Khola',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => "The ride from Kathmandu to Machha Khola is long and scenic. For the first few hours, you will follow a pitched highway, which gets bumpy from Arughat onwards. On the way, you will enjoy beautiful views of lush hills, terraces, waterfalls, rivers, and snow-capped mountains.",
                            'fr' => "Le trajet de Katmandou à Machha Khola est long et pittoresque. Pendant les premières heures, vous suivrez une autoroute goudronnée, qui devient cahoteuse à partir d'Arughat. En chemin, vous profiterez de belles vues sur les collines luxuriantes, les terrasses, les cascades, les rivières et les montagnes enneigées.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "890 m/2,965 ft",
                            'fr' => "890 m/2 965 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Duration: 8-9 hours, Distance: 170 km/105 miles",
                            'fr' => "Durée : 8-9 heures, Distance : 170 km/105 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 4: Trek from Machha Khola to Jagat',
                    'fr' => 'Jour 4 : Trek de Machha Khola à Jagat',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Leaving Machha Khola, walk following the Budhi Gandaki river within forests. You may get to see butterflies, birds, and langur monkeys on the way. The trekking route is covered with lush vegetation. Passing by Khorla Besi and Tatopani, you will ascend to Doban. Cross a suspension bridge and trek past a landslide area to Yaruphant. From here, the trail climbs to Jagat.",
                            'fr' => "En quittant Machha Khola, marchez en suivant la rivière Budhi Gandaki à travers les forêts. Vous pourrez peut-être voir des papillons, des oiseaux et des singes langurs en chemin. L'itinéraire de trekking est couvert d'une végétation luxuriante. En passant par Khorla Besi et Tatopani, vous monterez jusqu'à Doban. Traversez un pont suspendu et passez devant une zone de glissement de terrain jusqu'à Yaruphant. De là, le sentier monte jusqu'à Jagat.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "1,410 m/4,625 ft",
                            'fr' => "1 410 m/4 625 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6 hours",
                            'fr' => "6 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Distance: 22.2 km/13.7 miles",
                            'fr' => "Distance : 22,2 km/13,7 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 5: Trek from Jagat to Deng',
                    'fr' => 'Jour 5 : Trek de Jagat à Deng',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Jagat onward, you will walk on a flat track and cross a suspension bridge over the Budhi Gandaki River. The trail then leads you to Philim and continues through dense rhododendrons and pine forests to Deng.",
                            'fr' => "À partir de Jagat, vous marcherez sur un chemin plat et traverserez un pont suspendu sur la rivière Budhi Gandaki. Le sentier vous mènera ensuite à Philim et continuera à travers des forêts denses de rhododendrons et de pins jusqu'à Deng.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "1,804 m/5,917 ft",
                            'fr' => "1 804 m/5 917 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "7 hours",
                            'fr' => "7 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Distance: 19.9 km/12.3 miles",
                            'fr' => "Distance : 19,9 km/12,3 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 6: Trek from Deng to Namrung',
                    'fr' => 'Jour 6 : Trek de Deng à Namrung',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "From Deng, you will trek to Namrung village. Crossing a suspension bridge, ascend uphill to a settlement called Rana. From here, the trail goes west to the Budhi Gandaki Valley. Pass by dense forests and mani stones. On the way, you will come across Ghap and Prok villages. Further, ascend to Namrung, enjoying stunning views of Shringi Himal.",
                            'fr' => "Depuis Deng, vous ferez un trek jusqu'au village de Namrung. Après avoir traversé un pont suspendu, montez jusqu'à un hameau appelé Rana. De là, le sentier se dirige vers l'ouest de la vallée de Budhi Gandaki. Passez devant des forêts denses et des pierres mani. En chemin, vous rencontrerez les villages de Ghap et Prok. Plus loin, montez jusqu'à Namrung, en profitant de vues imprenables sur Shringi Himal.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,630 m/8,626 ft",
                            'fr' => "2 630 m/8 626 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6 hours",
                            'fr' => "6 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Distance: 19.5 km/12.1 miles",
                            'fr' => "Distance : 19,5 km/12,1 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 7: Trek from Namrung to Sama Gaon',
                    'fr' => 'Jour 7 : Trek de Namrung à Sama Gaon',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "As you trek from Namrung, the trail gets steep and rocky. Walk up to Lihi village and cross a stream. The trail then takes you to Sho village and continues to Lho village. The view of Simnang Himal along the way is fantastic. From here onwards, pass by bushes and rhododendron groves to Shyala village. Further, trek past terraced fields and landslide debris to Sama Gaun.",
                            'fr' => "Alors que vous faites un trek depuis Namrung, le sentier devient raide et rocheux. Montez jusqu'au village de Lihi et traversez un ruisseau. Le sentier vous emmène ensuite au village de Sho et continue jusqu'au village de Lho. La vue sur Simnang Himal en chemin est fantastique. À partir de là, passez devant des buissons et des bosquets de rhododendrons jusqu'au village de Shyala. Plus loin, passez devant des champs en terrasses et des débris de glissement de terrain jusqu'à Sama Gaun.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,530 m/11,581 ft",
                            'fr' => "3 530 m/11 581 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "7-8 hours",
                            'fr' => "7-8 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Distance: 24.7 km/15.3 miles",
                            'fr' => "Distance : 24,7 km/15,3 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 8: Acclimatization day - hike to Manaslu Base Camp or Pun Gyen Gompa',
                    'fr' => 'Jour 8: Journée d\'acclimatation - randonnée au camp de base du Manaslu ou au Pun Gyen Gompa',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or TREK if it's a significant hike
                        'description' => [
                            'en' => "You will spend a rest day in Sama Gaon. You have multiple hiking options, like Pun Gyen Gompa and Manaslu Base Camp. Both hikes are fantastic and offer a jaw-dropping mountain panorama. On the way to Manaslu Base Camp, you will also explore the hidden Birendra Lake. Likewise, on the way to Pun Gyen Gompa, you will come across PunGyen Glacier.",
                            'fr' => "Vous passerez une journée de repos à Sama Gaon. Vous avez plusieurs options de randonnée, comme Pun Gyen Gompa et le camp de base du Manaslu. Les deux randonnées sont fantastiques et offrent un panorama montagneux époustouflant. Sur le chemin du camp de base du Manaslu, vous explorerez également le lac caché de Birendra. De même, sur le chemin de Pun Gyen Gompa, vous rencontrerez le glacier de PunGyen.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Duration: 4-5 hours",
                            'fr' => "Durée: 4-5 heures",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 9: Trek from Sama Gaon to Samdo',
                    'fr' => 'Jour 9: Trek de Sama Gaon à Samdo',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "The trail ascends from Sama Gaon to a Tibetan refugee village called Samdo. You will walk up to pastures. The trail is steep. Witness towering Himalayan mountains around you as you go above the treeline. Further, cross a small wooden bridge and trek past Kani, a small settlement. From here, you will walk to Samdo, which offers a beautiful view of Mt. Manaslu, Ngadi Chuli, and Simnang Himal.",
                            'fr' => "Le sentier monte de Sama Gaon vers un village de réfugiés tibétains appelé Samdo. Vous monterez jusqu'aux pâturages. Le sentier est raide. Admirez les imposantes montagnes himalayennes qui vous entourent lorsque vous dépassez la limite des arbres. Ensuite, traversez un petit pont en bois et passez devant Kani, un petit hameau. De là, vous marcherez jusqu'à Samdo, qui offre une vue magnifique sur le mont Manaslu, Ngadi Chuli et Simnang Himal.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,875 m/12,713 ft",
                            'fr' => "3 875 m/12 713 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "3-4 hours",
                            'fr' => "3-4 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Distance: 8.2 km/5 miles",
                            'fr' => "Distance: 8,2 km/5 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek from Samdo to Larke Phedi (Dharamsala)',
                    'fr' => 'Jour 10: Trek de Samdo à Larke Phedi (Dharamsala)',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "From Samdo, you will hike to Larke Phedi. The trail goes along barren hills, offering mesmerizing snow-capped mountain views. You will trek following the Larke River and ascend to Larke Glacier. The final stretch of the way goes around the Salkha Khola Valley and uphill to Larke Phedi.",
                            'fr' => "Depuis Samdo, vous ferez une randonnée jusqu'à Larke Phedi. Le sentier longe des collines arides, offrant des vues fascinantes sur les montagnes enneigées. Vous ferez un trek en suivant la rivière Larke et monterez jusqu'au glacier de Larke. La dernière partie du trajet contourne la vallée de Salkha Khola et monte jusqu'à Larke Phedi.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,480 m/14,698 ft",
                            'fr' => "4 480 m/14 698 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "4-5 hours",
                            'fr' => "4-5 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Distance: 11.7 km/7.2 miles",
                            'fr' => "Distance: 11,7 km/7,2 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Trek from Dharamsala to Bimthang by crossing Larkya La Pass',
                    'fr' => 'Jour 11: Trek de Dharamsala à Bimthang en traversant le col de Larkya La',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Wake up early and gradually ascend to the top of Larkya La pass. First, you will descend and walk via a moraine. The trail then goes downhill to a small alley and follows an unclear route. Further, cross the steep grass slope south and descend to four frozen lakes. From here, uphill climbing starts. You may have to walk in the snow. The view from the top of the pass is unreal. Now, you descend from the pass to Bimthang.",
                            'fr' => "Réveillez-vous tôt et montez progressivement jusqu'au sommet du col de Larkya La. Tout d'abord, vous descendrez et marcherez sur une moraine. Le sentier descend ensuite vers une petite ruelle et suit un itinéraire peu clair. Ensuite, traversez la pente herbeuse raide vers le sud et descendez vers quatre lacs gelés. De là, la montée commence. Vous devrez peut-être marcher dans la neige. La vue depuis le sommet du col est irréelle. Maintenant, vous descendez du col vers Bimthang.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,720 m/12,205 ft",
                            'fr' => "3 720 m/12 205 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "8-9 hours",
                            'fr' => "8-9 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Distance: 24.7 km/15.3 miles",
                            'fr' => "Distance: 24,7 km/15,3 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Trek from Bimthang to Dharapani',
                    'fr' => 'Jour 12: Trek de Bimthang à Dharapani',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Trekking from Bimthang, you will ascend and descend along the Budhi Gandaki River. The trail goes through lush rhododendron forests. Karche onwards, the trail gets out of the forest. You will then follow a river bank to Gho. Further, descend through forests and small villages to Dharapani.",
                            'fr' => "En faisant un trek depuis Bimthang, vous monterez et descendrez le long de la rivière Budhi Gandaki. Le sentier traverse des forêts de rhododendrons luxuriantes. À partir de Karche, le sentier sort de la forêt. Vous suivrez ensuite une rive du fleuve jusqu'à Gho. Ensuite, descendez à travers les forêts et les petits villages jusqu'à Dharapani.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "1,910 m/6,266 ft",
                            'fr' => "1 910 m/6 266 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Teahouse",
                            'fr' => "Maison de thé",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Distance: 16 km/10 miles",
                            'fr' => "Distance: 16 km/10 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Trek to Chamje and drive to Besisahar',
                    'fr' => 'Jour 13: Trek à Chamje et trajet en voiture à Besisahar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Following lush hillsides and small settlements, you trek to Chamje village. The walking part ends here.",
                            'fr' => "En suivant les coteaux verdoyants et les petits hameaux, vous ferez un trek jusqu'au village de Chamje. La partie marche se termine ici.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => "Further, you will use a local jeep and drive to Besisahar.",
                            'fr' => "Ensuite, vous utiliserez une jeep locale et vous vous rendrez à Besisahar.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "760 m/2,493 ft",
                            'fr' => "760 m/2 493 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Lodge",
                            'fr' => "Lodge",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Duration: 3-4 hours trek & 4-5 hours drive, Distance: 15.5 km/9.6 miles",
                            'fr' => "Durée: 3-4 heures de trek et 4-5 heures de route, Distance: 15,5 km/9,6 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Drive from Besisahar to Kathmandu',
                    'fr' => 'Jour 14: Trajet de Besisahar à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => "Leaving Besisahar early in the morning and driving to Kathmandu. The road is bumpy in the first 2 hours of the ride. From Dumre onwards, you will enjoy a comfortable ride along a winding road across lush hills. Enjoy your remaining day relaxing in Kathmandu.",
                            'fr' => "Départ de Besisahar tôt le matin et trajet en voiture jusqu'à Katmandou. La route est cahoteuse pendant les deux premières heures du trajet. À partir de Dumre, vous profiterez d'un trajet confortable sur une route sinueuse à travers les collines verdoyantes. Profitez du reste de votre journée pour vous détendre à Katmandou.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "1,400 m/4,593 ft",
                            'fr' => "1 400 m/4 593 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Duration: 6-7 hours, Distance: 176 km/109 miles",
                            'fr' => "Durée: 6-7 heures, Distance: 176 km/109 miles",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 15: Free day in Kathmandu',
                    'fr' => 'Jour 15: Journée libre à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => [
                            'en' => "You have a free day in Kathmandu. Spend as you visit. Rest, explore tourist sites, and do window shopping in Thamel. In the late evening, we will meet and hand over the trek completion certificate.",
                            'fr' => "Vous avez une journée libre à Katmandou. Passez-la comme vous le souhaitez. Reposez-vous, explorez les sites touristiques et faites du lèche-vitrines à Thamel. En fin de soirée, nous nous retrouverons et vous remettrons le certificat d'achèvement du trek.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 16: Trip ends! Fly back home with memories to cherish forever',
                    'fr' => 'Jour 16: Le voyage se termine! Retournez chez vous avec des souvenirs à chérir pour toujours',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => "Our team will drop you off at the international airport for your flight. Get ready on time and double-check your room before leaving.",
                            'fr' => "Notre équipe vous déposera à l'aéroport international pour votre vol. Préparez-vous à temps et vérifiez votre chambre avant de partir.",
                        ],
                    ],
                ],
            ],
        ];


        $langtang_itinerary = [
            [
                'title' => [
                    'en' => 'Day 01: Arrival at Kathmandu and transfer to hotel',
                    'fr' => 'Jour 01 : Arrivée à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "We will provide a seamless transfer to the hotel upon your arrival at the Kathmandu airport and help with your luggage. Take your time to rest and explore your surroundings. Later in the day, join the trek briefing and pack your duffle bags. Buy any missing trek gear or essentials.",
                            'fr' => "Nous assurons un transfert sans encombre à l'hôtel dès votre arrivée à l'aéroport de Katmandou et vous aidons avec vos bagages. Prenez le temps de vous reposer et d'explorer les environs. Plus tard dans la journée, participez au briefing sur le trek et préparez vos sacs de voyage. Achetez tout équipement de trek ou articles essentiels manquants.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Drive from Kathmandu to Syabrubesi',
                    'fr' => 'Jour 02 : Trajet de Katmandou à Syabrubesi',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => "You will leave Kathmandu early in the morning and drive to Syabrubesi with your guide. The ride will be comfortable and scenic. The highway goes northwest of Kathmandu, offering beautiful views of lush hills, mountains, rivers, and terraced fields.",
                            'fr' => "Vous quitterez Katmandou tôt le matin et vous vous rendrez à Syabrubesi avec votre guide. Le trajet sera confortable et pittoresque. L'autoroute se dirige vers le nord-ouest de Katmandou, offrant de belles vues sur les collines luxuriantes, les montagnes, les rivières et les champs en terrasses.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "1,503 m/4,655 ft",
                            'fr' => "1 503 m/4 655 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "8-9 hours drive, 122 km/75.8 miles",
                            'fr' => "8-9 heures de route, 122 km/75,8 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Trek from Syabrubesi to Sherpagaon',
                    'fr' => 'Jour 03 : Trek de Syabrubesi à Sherpagaon',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "After a delicious breakfast, start trekking from Syabrubesi. The trail gradually ascends and takes you across a suspension bridge. Follow a steep route across the bridge to Khanjim. From here, hike to Sherpagaon, savoring jaw-dropping views of Ganesh Himal on the way.",
                            'fr' => "Après un délicieux petit-déjeuner, commencez le trek depuis Syabrubesi. Le sentier monte graduellement et vous emmène à travers un pont suspendu. Suivez un itinéraire raide à travers le pont jusqu'à Khanjim. De là, marchez jusqu'à Sherpagaon, en savourant des vues époustouflantes sur Ganesh Himal en chemin.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,563 m/8,408 ft",
                            'fr' => "2 563 m/8 408 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "4-5 hours",
                            'fr' => "4-5 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "9.8 km/6 miles",
                            'fr' => "9,8 km/6 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Trek from Sherpagaon to Ghoda Tabela/Thangshyap',
                    'fr' => 'Jour 04 : Trek de Sherpagaon à Ghoda Tabela/Thangshyap',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Descend following a narrow trail to Rimche. From here, you will join the main Langtang Valley trail. Expect to see other fellow trekkers on the way. From Rimche, ascend to Thangshyap following a steep trail.",
                            'fr' => "Descendez en suivant un sentier étroit jusqu'à Rimche. De là, vous rejoindrez le sentier principal de la vallée de Langtang. Attendez-vous à voir d'autres compagnons de trek en chemin. Depuis Rimche, montez jusqu'à Thangshyap en suivant un sentier raide.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,190 m/10,466 ft",
                            'fr' => "3 190 m/10 466 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "4-5 hours",
                            'fr' => "4-5 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "11.4 km/7 miles",
                            'fr' => "11,4 km/7 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Trek from Thangshyap to Langtang Village',
                    'fr' => 'Jour 05 : Trek de Thangshyap au village de Langtang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "After breakfast, you will leave Thangshyap and start trekking to Langtang village. You will see a significant change in scenery as the trail ascends to Langtang village. Mountains are much more prominent. You will pass a few small settlements and cross a landslide area.",
                            'fr' => "Après le petit-déjeuner, vous quitterez Thangshyap et commencerez le trek vers le village de Langtang. Vous verrez un changement important de paysage alors que le sentier monte vers le village de Langtang. Les montagnes sont beaucoup plus visibles. Vous passerez quelques petits hameaux et traverserez une zone de glissement de terrain.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,430 m/11,255 ft",
                            'fr' => "3 430 m/11 255 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "4-5 hours",
                            'fr' => "4-5 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "4 km/2.4 miles",
                            'fr' => "4 km/2,4 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Trek to Kyanjin Gompa & Side Hike to Kyanjin Ri',
                    'fr' => 'Jour 06 : Trek à Kyanjin Gompa et randonnée latérale à Kyanjin Ri',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "From Langtang village, walk along hillsides and gradually ascend via meadows to Kyanjin Gompa. The views of Langtang Lirung and Ganesh Himal are stunning. The final ascend is steep. Kyanjin Gompa is the highest settlement in the Langtang Valley.",
                            'fr' => "Depuis le village de Langtang, marchez le long des flancs de collines et montez progressivement à travers les prairies jusqu'à Kyanjin Gompa. Les vues sur Langtang Lirung et Ganesh Himal sont magnifiques. La dernière montée est raide. Kyanjin Gompa est le plus haut village de la vallée de Langtang.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,865 m/12,675 ft",
                            'fr' => "3 865 m/12 675 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "3-4 hours",
                            'fr' => "3-4 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "6.8 km/4.2 miles",
                            'fr' => "6,8 km/4,2 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Acclimatization Day: Hike to Cherukuri Ri',
                    'fr' => 'Jour 07 : Journée d\'acclimatation : Randonnée à Cherukuri Ri',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Today, you will spend an acclimatization day in Kyanjin Gompa. In the morning, hike to Cherukuri Ri. It will be an adventurous hike. From here, you will see an incredible sunrise and breathtaking mountain views. Later in the day, visit the local cheese factory and explore the surrounding area.",
                            'fr' => "Aujourd'hui, vous passerez une journée d'acclimatation à Kyanjin Gompa. Le matin, faites une randonnée jusqu'à Cherukuri Ri. Ce sera une randonnée aventureuse. De là, vous verrez un incroyable lever de soleil et des vues imprenables sur les montagnes. Plus tard dans la journée, visitez la fromagerie locale et explorez les environs.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,984 m/16,352 ft",
                            'fr' => "4 984 m/16 352 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "7-8 hours",
                            'fr' => "7-8 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek from Kyanjin Gompa to Lama Hotel',
                    'fr' => 'Jour 08 : Trek de Kyanjin Gompa à Lama Hotel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "After exploring the Langtang Valley, it is time to trek back to the Lama Hotel. From Kyanjin Gompa, you will follow the same trail and descend to Langtang Village. Cross a bridge and trek through forests to the Lama Hotel.",
                            'fr' => "Après avoir exploré la vallée de Langtang, il est temps de retourner au Lama Hotel. Depuis Kyanjin Gompa, vous suivrez le même sentier et descendrez jusqu'au village de Langtang. Traversez un pont et marchez à travers les forêts jusqu'au Lama Hotel.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,470 m/8,103 ft",
                            'fr' => "2 470 m/8 103 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6 hours",
                            'fr' => "6 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "21 km/13 miles",
                            'fr' => "21 km/13 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09: Trek from Lama Hotel to Thulo Syabru',
                    'fr' => 'Jour 09 : Trek de Lama Hotel à Thulo Syabru',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "From Lama Hotel, descend along the Langtang Khola and pass by a small waterfall. The trail then goes through rhododendrons and bamboo forests to Thulo Sybrubesi. On the way, you will cross a suspension bridge and see superb views of Ganesh Himal.",
                            'fr' => "Depuis Lama Hotel, descendez le long de la Langtang Khola et passez devant une petite cascade. Le sentier traverse ensuite des forêts de rhododendrons et de bambous jusqu'à Thulo Sybrubesi. En chemin, vous traverserez un pont suspendu et verrez de superbes vues sur Ganesh Himal.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,210 m/8,500 ft",
                            'fr' => "2 210 m/8 500 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5-6 hours",
                            'fr' => "5-6 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "13 km/8 miles",
                            'fr' => "13 km/8 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek from Thulo Syabru to Shin Gompa',
                    'fr' => 'Jour 10 : Trek de Thulo Syabru à Shin Gompa',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "The trail ascends to Dimsa village. From here, you will gradually walk to Foprang Danda. The views are fantastic from here. Further, you will trek via lush forests to Shi Gompa. Visit a cheese factory and an old monastery.",
                            'fr' => "Le sentier monte jusqu'au village de Dimsa. De là, vous marcherez progressivement jusqu'à Foprang Danda. Les vues sont fantastiques d'ici. Plus loin, vous ferez un trek à travers des forêts luxuriantes jusqu'à Shi Gompa. Visitez une fromagerie et un ancien monastère.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,330 m/10,925 ft",
                            'fr' => "3 330 m/10 925 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5 hours",
                            'fr' => "5 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Trek from Shin Gumba to Gosainkunda',
                    'fr' => 'Jour 11 : Trek de Shin Gumba à Gosainkunda',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "After breakfast, you will continue trekking to Gosaikunda Lake. This part of the trail is mostly steep and rocky. You will trek through forests and slowly ascend to the holy Gosaikunda Lake.",
                            'fr' => "Après le petit-déjeuner, vous continuerez le trek jusqu'au lac Gosaikunda. Cette partie du sentier est principalement raide et rocheuse. Vous traverserez des forêts et monterez lentement jusqu'au lac sacré de Gosaikunda.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,380 m/14,620 ft",
                            'fr' => "4 380 m/14 620 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6-7 hours",
                            'fr' => "6-7 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "11 km/6.8 miles",
                            'fr' => "11 km/6,8 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Trek from Gosainkunda to Ghopte via Lauribina Pass',
                    'fr' => 'Jour 12 : Trek de Gosainkunda à Ghopte via le col de Lauribina',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "On this day, you will cross a mountain pass called Lauribina La. Descend along the lake's northern shore and soon follow an uphill route leading to the top of the pass. The view from the pass will be stunning. Crossing the pass, you will descend on a steep, rugged trail to Ghopte village.",
                            'fr' => "Ce jour-là, vous traverserez un col de montagne appelé Lauribina La. Descendez le long de la rive nord du lac et suivez bientôt un itinéraire en montée menant au sommet du col. La vue depuis le col sera magnifique. En traversant le col, vous descendrez un sentier raide et accidenté jusqu'au village de Ghopte.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "4,610 m/15,115 ft",
                            'fr' => "4 610 m/15 115 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "7-8 hours",
                            'fr' => "7-8 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Trek from Ghopte to Tharepati',
                    'fr' => 'Jour 13 : Trek de Ghopte à Tharepati',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "While trekking from Ghopte to Tharepati, you will enjoy a tranquil route. The trail descends to a beautiful stream and continues along a flat trail. Soon, the trail ascends along a barren hill, presenting stunning views of Dorje Lakpa, Gauri Shankar, Jugal Himal, and other mountains.",
                            'fr' => "En faisant le trek de Ghopte à Tharepati, vous profiterez d'un itinéraire tranquille. Le sentier descend vers un beau ruisseau et continue le long d'un sentier plat. Bientôt, le sentier monte le long d'une colline aride, offrant des vues imprenables sur Dorje Lakpa, Gauri Shankar, Jugal Himal et d'autres montagnes.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "3,640 m/11,942 ft",
                            'fr' => "3 640 m/11 942 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "5-6 hours",
                            'fr' => "5-6 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "8.5 km/5.2 miles",
                            'fr' => "8,5 km/5,2 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Trek from Tharepati to Kutumsang',
                    'fr' => 'Jour 14 : Trek de Tharepati à Kutumsang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "The trail from Tharepati continues through small villages of the Hyolmo community. Trek through a dense forest to Magengoth and continue to Panghu. You may take a lunch break here. The trail then descends via fir and rhododendron forests to Kutumsang.",
                            'fr' => "Le sentier de Tharepati continue à travers de petits villages de la communauté Hyolmo. Traversez une forêt dense jusqu'à Magengoth et continuez jusqu'à Panghu. Vous pouvez faire une pause déjeuner ici. Le sentier descend ensuite à travers des forêts de sapins et de rhododendrons jusqu'à Kutumsang.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,450 m/8,038 ft",
                            'fr' => "2 450 m/8 038 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "6 hours",
                            'fr' => "6 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "11 km/6.8 miles",
                            'fr' => "11 km/6,8 miles",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 15: Trek from Kutumsang to Chisapani',
                    'fr' => 'Jour 15 : Trek de Kutumsang à Chisapani',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "Leaving Kutumsang, you will ascend for a bit, then follow a downhill route to Gul Bhanjyang. From here, trek on a dusty road that soon gets steep and rocky and gradually descends to Chisapni.",
                            'fr' => "En quittant Kutumsang, vous monterez un peu, puis suivrez un itinéraire en descente jusqu'à Gul Bhanjyang. De là, marchez sur une route poussiéreuse qui devient bientôt raide et rocheuse et descend progressivement jusqu'à Chisapni.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "2,295 m/7,655 ft",
                            'fr' => "2 295 m/7 655 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "4 hours",
                            'fr' => "4 heures",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Guesthouse",
                            'fr' => "Maison d'hôtes",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 16: Trek from Chisapani to Sundarijal and Drive to Kathmandu',
                    'fr' => 'Jour 16 : Trek de Chisapani à Sundarijal et trajet en voiture à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => "From Chisapani, you will walk downhill to Sundarijal. The trail is within the Shivapuri National Park. You will trek through lush forests. At Sundarijal, you will take a car and drive to Kathmandu. The remaining day is free in the city. Rest and shop.",
                            'fr' => "Depuis Chisapani, vous descendrez à Sundarijal. Le sentier se trouve dans le parc national de Shivapuri. Vous traverserez des forêts luxuriantes. À Sundarijal, vous prendrez une voiture et vous vous rendrez à Katmandou. Le reste de la journée est libre dans la ville. Reposez-vous et faites du shopping.",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => "1,350 m/4,450 ft",
                            'fr' => "1 350 m/4 450 pi",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => "4 hours trek",
                            'fr' => "4 heures de trek",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => "1-hour drive",
                            'fr' => "1 heure de route",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "9.8 km/6 miles trek",
                            'fr' => "9,8 km/6 miles de trek",
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => "Hotel",
                            'fr' => "Hôtel",
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 17: Final Departure',
                    'fr' => 'Jour 17 : Départ final',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => "Transfer to the airport for final departure.",
                            'fr' => "Transfert à l'aéroport pour le départ final.",
                        ],
                    ],
                ],
            ],
        ];

        $everest_panorama_itinerary = [
            [
                'title' => [
                    'en' => 'Day 01: Welcome to Kathmandu and Transfer to the Hotel',
                    'fr' => 'Jour 01 : Bienvenue à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'You will arrive in Kathmandu on this day. Our team will take care of your airport-to-hotel commute. They will pick you up in a private four-wheeler and help you with luggage.',
                            'fr' => 'Vous arriverez à Katmandou ce jour-là. Notre équipe s\'occupera de votre transfert de l\'aéroport à l\'hôtel en véhicule privé et vous aidera avec vos bagages.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Full-day sightseeing tour of Bhaktapur, Pashupatinath, and Boudhanath',
                    'fr' => 'Jour 02 : Journée de visite de Bhaktapur, Pashupatinath et Boudhanath',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Start the day with a guided sightseeing of some of the tourist sites in Kathmandu. Visit Bouddhanath Stupa, Pashupatinath Temple, and Bhaktapur Durbar Square with our friendly guide. These monuments present a glimpse of Nepali art, architecture, and culture. After the tour, the guide will drop you back at the hotel. On the remaining day, you will prepare for the trek. Meet with your mountain guide and learn about the trek plan. Purchase any last-minute trekking gear and pack your duffle bags.',
                            'fr' => 'Commencez la journée avec une visite guidée des sites touristiques de Katmandou. Visitez le Stupa de Bouddhanath, le temple de Pashupatinath et la place Durbar de Bhaktapur avec notre guide. Ces monuments offrent un aperçu de l\'art, de l\'architecture et de la culture népalais. Après la visite, retour à l\'hôtel et préparation pour le trek.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Meals: Breakfast only',
                            'fr' => 'Repas : Petit-déjeuner uniquement',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Fly to Lukla and trek to Phakding',
                    'fr' => 'Jour 03 : Vol vers Lukla et trek jusqu\'à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'You will fly from Kathmandu/Ramechhap to Lukla. The flight is about 35 minutes. The specific airport depends on the season.',
                            'fr' => 'Vous prendrez un vol de Katmandou/Ramechhap à Lukla. Le vol dure environ 35 minutes. L\'aéroport spécifique dépend de la saison.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From Lukla, trek downhill to Phakding village via rhododendron forests, crossing suspension bridges. The trail follows the Dudh Koshi River. Enjoy views of Mt. Khumbila and Kongde Ri.',
                            'fr' => 'Depuis Lukla, descente vers Phakding à travers des forêts de rhododendrons et des ponts suspendus. Le sentier suit la rivière Dudh Koshi. Profitez des vues sur le mont Khumbila et Kongde Ri.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Lukla: 2,846 m/9,337 ft, Phakding: 2,610 m/8,563 ft',
                            'fr' => 'Lukla : 2 846 m/9 337 ft, Phakding : 2 610 m/8 563 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '3 hours trek',
                            'fr' => '3 heures de trek',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => '6.2 km/3.8 miles',
                            'fr' => '6,2 km/3,8 miles',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Trek from Phakding to Namche Bazaar',
                    'fr' => 'Jour 04 : Trek de Phakding à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Phakding to Namche Bazaar through rhododendron and magnolia forests. Cross suspension bridges, including the Hillary Suspension Bridge. Register permits at Monjo. The trail ascends steeply to Namche Bazaar.',
                            'fr' => 'Trek de Phakding à Namche Bazaar à travers les forêts de rhododendrons et de magnolias. Traversez des ponts suspendus, y compris le pont Hillary. Enregistrement des permis à Monjo. Le sentier monte raide jusqu\'à Namche Bazaar.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,440 m/11,290 ft',
                            'fr' => '3 440 m/11 290 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => '7.4 km/4.6 miles',
                            'fr' => '7,4 km/4,6 miles',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Acclimatization Day - Hike to the Hotel Everest View',
                    'fr' => 'Jour 05 : Journée d\'acclimatation - Randonnée à l\'hôtel Everest View',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Hike to the Everest View Hotel for panoramic views of Everest, Lhotse, Nuptse, and Ama Dablam. Return to Namche Bazaar for acclimatization.',
                            'fr' => 'Randonnée jusqu\'à l\'hôtel Everest View pour une vue panoramique sur l\'Everest, le Lhotse, le Nuptse et l\'Ama Dablam. Retour à Namche Bazaar pour l\'acclimatation.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,962 m/13,000 ft',
                            'fr' => '3 962 m/13 000 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => '9.6 km/5.9 miles',
                            'fr' => '9,6 km/5,9 miles',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Trek from Namche Bazaar to Tengboche',
                    'fr' => 'Jour 06 : Trek de Namche Bazaar à Tengboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Namche Bazaar to Tengboche via Kyangjuma and Phungi Thanga. Visit Tengboche monastery and enjoy spectacular views of Everest and Ama Dablam.',
                            'fr' => 'Trek de Namche Bazaar à Tengboche via Kyangjuma et Phungi Thanga. Visitez le monastère de Tengboche et admirez les vues spectaculaires sur l\'Everest et l\'Ama Dablam.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,860 m/12,660 ft',
                            'fr' => '3 860 m/12 660 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => '9.6 km/5.9 miles',
                            'fr' => '9,6 km/5,9 miles',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Trek from Tengboche to Khumjung Village',
                    'fr' => 'Jour 07 : Trek de Tengboche au village de Khumjung',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Khumjung village, visiting the famous Khumjung monastery and the Tenzing Hillary School. Interact with the Sherpa community.',
                            'fr' => 'Trek vers le village de Khumjung, visite du célèbre monastère de Khumjung et de l\'école Tenzing Hillary. Interaction avec la communauté sherpa.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,790 m/12,434 ft',
                            'fr' => '3 790 m/12 434 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4-5 hours',
                            'fr' => '4-5 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => '8 km/5 miles',
                            'fr' => '8 km/5 miles',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek from Khumjung Village to Phakding',
                    'fr' => 'Jour 08 : Trek du village de Khumjung à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek back to Phakding via Namche Bazaar. Enjoy the descent through lush forests.',
                            'fr' => 'Retour à Phakding via Namche Bazaar. Profitez de la descente à travers les forêts luxuriantes.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,610 m/8,563 ft',
                            'fr' => '2 610 m/8 563 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => '15 km/9.3 miles',
                            'fr' => '15 km/9,3 miles',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09: Trek from Phakding to Lukla',
                    'fr' => 'Jour 09 : Trek de Phakding à Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From Phakding, ascend along the Dudh Koshi River to Lukla. The trail passes through suspension bridges, rhododendron forests, and small settlements.',
                            'fr' => 'Depuis Phakding, montée le long de la rivière Dudh Koshi jusqu\'à Lukla. Le sentier traverse des ponts suspendus, des forêts de rhododendrons et de petits villages.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,846 m/9,337 ft',
                            'fr' => '2 846 m/9 337 ft',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10-13: Flight to Kathmandu & Departure',
                    'fr' => 'Jour 10-13 : Vol vers Katmandou et départ',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Morning flight to Kathmandu, farewell dinner, and international departure.',
                            'fr' => 'Vol matinal vers Katmandou, dîner d\'adieu et départ international.',
                        ],
                    ],
                ],
            ],
        ];


        $kanchanjunga_exped_itinerary = [
            [
                'title' => [
                    'en' => 'Day 01: Arrival in Kathmandu and Transfer to Hotel',
                    'fr' => 'Jour 01 : Arrivée à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Arrive in Kathmandu. Transfer to hotel.',
                            'fr' => 'Arrivée à Katmandou. Transfert à l\'hôtel.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Full-day sightseeing tour of Bhaktapur, Pashupatinath, and Boudhanath',
                    'fr' => 'Jour 02 : Visite d\'une journée à Bhaktapur, Pashupatinath et Boudhanath',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Start the day with a guided sightseeing of some of the tourist sites in Kathmandu. Visit Bouddhanath Stupa, Pashupatinath Temple, and Bhaktapur Durbar Square with our friendly guide. These monuments present a glimpse of Nepali art, architecture, and culture. After the tour, the guide will drop you back at the hotel. On the remaining day, you will prepare for the trek. Meet with your mountain guide and learn about the trek plan. Purchase any last-minute trekking gear and pack your duffle bags.',
                            'fr' => 'Commencez la journée par une visite guidée de quelques sites touristiques de Katmandou. Visitez le Stupa de Bouddhanath, le temple de Pashupatinath et la place Durbar de Bhaktapur avec notre guide. Ces monuments offrent un aperçu de l\'art, de l\'architecture et de la culture népalais. Après la visite, le guide vous déposera à l\'hôtel. Le reste de la journée sera consacré aux préparatifs du trek. Rencontrez votre guide de montagne et découvrez le plan du trek. Achetez les derniers équipements nécessaires et préparez vos sacs.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Meals: Breakfast only',
                            'fr' => 'Repas : Petit-déjeuner uniquement',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Fly to Bhadrapur and Drive to Taplejung',
                    'fr' => 'Jour 03 : Vol vers Bhadrapur et route vers Taplejung',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly from Kathmandu to Bhadrapur. The flight is about 35 minutes. The specific airport depends on the season.',
                            'fr' => 'Vol de Katmandou à Bhadrapur. Le vol dure environ 35 minutes. L\'aéroport spécifique dépend de la saison.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Drive from Bhadrapur to Taplejung. The drive is about 8 hours.',
                            'fr' => 'Route de Bhadrapur à Taplejung. Le trajet dure environ 8 heures.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel/Tea House',
                            'fr' => 'Hôtel/Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Trek from Taplejung to Sekathum',
                    'fr' => 'Jour 04 : Trek de Taplejung à Sekathum',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Taplejung to Sekathum. The trail passes through lush green forests and small villages.',
                            'fr' => 'Trek de Taplejung à Sekathum. Le sentier traverse des forêts verdoyantes et de petits villages.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Sekathum: 1,576m/5,170ft',
                            'fr' => 'Sekathum : 1 576m/5 170ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel/Tea House',
                            'fr' => 'Hôtel/Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Trek from Sekathum to Amjilossa',
                    'fr' => 'Jour 05 : Trek de Sekathum à Amjilossa',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Sekathum to Amjilossa. The trail continues uphill through forests and small villages before descending to the Ghunsa Khola River.',
                            'fr' => 'Trek de Sekathum à Amjilossa. Le sentier monte à travers les forêts et de petits villages avant de redescendre vers la rivière Ghunsa Khola.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Amjilosa: 2,308m/7,542ft',
                            'fr' => 'Amjilosa : 2 308m/7 542ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel/Tea House',
                            'fr' => 'Hôtel/Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Trek from Amjilossa to Yamphudin',
                    'fr' => 'Jour 06 : Trek d\'Amjilossa à Yamphudin',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Amjilossa to Yamphudin. The trail follows the Ghunsa Khola River, passing through lush forests and waterfalls.',
                            'fr' => 'Trek d\'Amjilossa à Yamphudin. Le sentier suit la rivière Ghunsa Khola, traversant des forêts luxuriantes et des cascades.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Yamphudin: 3,300m/10,826ft',
                            'fr' => 'Yamphudin : 3 300m/10 826ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel/Tea House',
                            'fr' => 'Hôtel/Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Trek from Yamphudin to Tortong',
                    'fr' => 'Jour 07 : Trek de Yamphudin à Tortong',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Yamphudin to Tortong. The trail ascends gradually through rhododendron forests, offering stunning views of the surrounding peaks.',
                            'fr' => 'Trek de Yamphudin à Tortong. Le sentier monte progressivement à travers les forêts de rhododendrons, offrant de superbes vues sur les sommets environnants.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Tortong: 4,250m/13,943ft',
                            'fr' => 'Tortong : 4 250m/13 943ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel/Tea House',
                            'fr' => 'Hôtel/Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek from Tortong to Tseram',
                    'fr' => 'Jour 08 : Trek de Tortong à Tseram',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Tortong to Tseram. The trail climbs steeply through rocky terrain, offering breathtaking views of the Kanchenjunga massif.',
                            'fr' => 'Trek de Tortong à Tseram. Le sentier monte fortement à travers un terrain rocheux, offrant des vues imprenables sur le massif du Kanchenjunga.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Tseram: 4,870m/15,977ft',
                            'fr' => 'Tseram : 4 870m/15 977ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel/Tea House',
                            'fr' => 'Hôtel/Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09-41: Kanchenjunga Climbing Period',
                    'fr' => 'Jour 09-41 : Période d\'ascension du Kanchenjunga',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::HIMALAYA,
                        'description' => [
                            'en' => 'Climbing period, establishing high camps, summit attempt, and descent.',
                            'fr' => 'Période d\'ascension, établissement des camps d\'altitude, tentative de sommet et descente.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tents at High Camps / Base Camp',
                            'fr' => 'Tentes aux camps d\'altitude / Camp de base',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 42-49: Descent back to Taplejung',
                    'fr' => 'Jour 42-49 : Descente vers Taplejung',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Descending back through the same route, passing through Tseram, Tortong, Yamphudin, and Taplejung.',
                            'fr' => 'Descente par le même itinéraire, en passant par Tseram, Tortong, Yamphudin et Taplejung.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House / Lodge along the way',
                            'fr' => 'Maison de thé / Lodge en route',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 50: Flight from Bhadrapur to Kathmandu',
                    'fr' => 'Jour 50 : Vol de Bhadrapur à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly from Bhadrapur to Kathmandu.',
                            'fr' => 'Vol de Bhadrapur à Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel in Kathmandu',
                            'fr' => 'Hôtel à Katmandou',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 51: Free Day in Kathmandu (Optional Sightseeing)',
                    'fr' => 'Jour 51 : Journée libre à Katmandou (Visite optionnelle)',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => [
                            'en' => 'Free day in Kathmandu. Optional sightseeing or shopping.',
                            'fr' => 'Journée libre à Katmandou. Possibilité de visites touristiques ou de shopping.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 52: Departure – Transfer to Airport',
                    'fr' => 'Jour 52 : Départ – Transfert à l\'aéroport',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Transfer to the airport for international departure.',
                            'fr' => 'Transfert à l\'aéroport pour le départ international.',
                        ],
                    ],
                ],
            ],
        ];


        $lhotse_exped_itinerary = [
            [
                'title' => [
                    'en' => 'Day 01: Arrival in Kathmandu & transfer to the hotel',
                    'fr' => 'Jour 01 : Arrivée à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Arrive in Kathmandu. Transfer to hotel.',
                            'fr' => 'Arrivée à Katmandou. Transfert à l\'hôtel.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Welcome brief, Gear check and Official formalities in Kathmandu',
                    'fr' => 'Jour 02 : Briefing de bienvenue, vérification du matériel et formalités officielles à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Expedition briefing, gear check, permit formalities.',
                            'fr' => 'Briefing de l\'expédition, vérification du matériel, formalités des permis.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Fly to Lukla & trek to Phakding',
                    'fr' => 'Jour 03 : Vol vers Lukla et trek jusqu\'à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly to Lukla.',
                            'fr' => 'Vol vers Lukla.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Phakding.',
                            'fr' => 'Trek jusqu\'à Phakding.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Lukla: 2,860m, Phakding: 2,610m',
                            'fr' => 'Lukla : 2 860m, Phakding : 2 610m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '3-4 hours',
                            'fr' => '3-4 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Trek to Namche Bazaar',
                    'fr' => 'Jour 04 : Trek jusqu\'à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Namche Bazaar.',
                            'fr' => 'Trek jusqu\'à Namche Bazaar.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Namche Bazaar: 3,440m',
                            'fr' => 'Namche Bazaar : 3 440m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Rest in Namche Bazaar (Acclimatization hike)',
                    'fr' => 'Jour 05 : Repos à Namche Bazaar (Randonnée d\'acclimatation)',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => [
                            'en' => 'Rest and acclimatization. Hike to Everest viewpoint (or similar).',
                            'fr' => 'Repos et acclimatation. Randonnée jusqu\'au point de vue de l\'Everest (ou similaire).',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Trek to Debuche via Tengboche Monastery',
                    'fr' => 'Jour 06 : Trek vers Debuche via le monastère de Tengboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Debuche via Tengboche.',
                            'fr' => 'Trek vers Debuche via Tengboche.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Debuche: (Add Altitude)',
                            'fr' => 'Debuche : (Ajouter l\'altitude)',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Trek to Dingboche',
                    'fr' => 'Jour 07 : Trek jusqu\'à Dingboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Dingboche.',
                            'fr' => 'Trek jusqu\'à Dingboche.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Dingboche: (Add Altitude)',
                            'fr' => 'Dingboche : (Ajouter l\'altitude)',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Acclimatization day in Dingboche (Nagarjun Hill hike)',
                    'fr' => 'Jour 08 : Journée d\'acclimatation à Dingboche (Randonnée à Nagarjun Hill)',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => [
                            'en' => 'Acclimatization. Hike to Nagarjun Hill.',
                            'fr' => 'Acclimatation. Randonnée jusqu\'à Nagarjun Hill.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09: Trek to Lobuche',
                    'fr' => 'Jour 09 : Trek jusqu\'à Lobuche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Lobuche.',
                            'fr' => 'Trek jusqu\'à Lobuche.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Lobuche: (Add Altitude)',
                            'fr' => 'Lobuche : (Ajouter l\'altitude)',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek to Everest Base Camp',
                    'fr' => 'Jour 10 : Trek jusqu\'au camp de base de l\'Everest',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Everest Base Camp.',
                            'fr' => 'Trek jusqu\'au camp de base de l\'Everest.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Everest Base Camp: 5,364m',
                            'fr' => 'Camp de base de l\'Everest : 5 364m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House/Tents',
                            'fr' => 'Maison de thé / Tentes',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11-45: Lhotse Climbing Period',
                    'fr' => 'Jour 11-45 : Période d\'ascension du Lhotse',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Climbing period on Lhotse. This includes acclimatization climbs, establishing high camps, summit attempt(s), and descent.',
                            'fr' => 'Période d\'ascension du Lhotse. Cela comprend des montées d\'acclimatation, l\'établissement de camps d\'altitude, les tentatives de sommet et la descente.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::HIMALAYA,
                        'description' => [
                            'en' => 'Stunning views during the climb.',
                            'fr' => 'Vues spectaculaires pendant l\'ascension.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tents at High Camps / Base Camp',
                            'fr' => 'Tentes aux camps d\'altitude / Camp de base',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 46: Clearing up base camp',
                    'fr' => 'Jour 46 : Démontage du camp de base',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Clearing up base camp and preparing for the descent.',
                            'fr' => 'Démontage du camp de base et préparation pour la descente.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Base Camp',
                            'fr' => 'Camp de base',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 47: Trek back to Pheriche',
                    'fr' => 'Jour 47 : Trek retour vers Pheriche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek back to Pheriche.',
                            'fr' => 'Trek retour vers Pheriche.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Pheriche: (Add Altitude)',
                            'fr' => 'Pheriche : (Ajouter l\'altitude)',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 48: Trek back to Namche',
                    'fr' => 'Jour 48 : Trek retour vers Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek back to Namche Bazaar.',
                            'fr' => 'Trek retour vers Namche Bazaar.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Namche Bazaar: 3,440m',
                            'fr' => 'Namche Bazaar : 3 440m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 49: Trek back to Lukla',
                    'fr' => 'Jour 49 : Trek retour vers Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek back to Lukla.',
                            'fr' => 'Trek retour vers Lukla.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => 'Lukla: 2,860m',
                            'fr' => 'Lukla : 2 860m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 50: Fly back to Kathmandu & transfer to hotel',
                    'fr' => 'Jour 50 : Vol retour à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly from Lukla to Kathmandu.',
                            'fr' => 'Vol de Lukla à Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Farewell dinner with the expedition team.',
                            'fr' => 'Dîner d\'adieu avec l\'équipe de l\'expédition.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 51: Free day in Kathmandu (optional sightseeing)',
                    'fr' => 'Jour 51 : Journée libre à Katmandou (visite optionnelle)',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => [
                            'en' => 'Free day in Kathmandu. Optional sightseeing or shopping.',
                            'fr' => 'Journée libre à Katmandou. Possibilité de visites touristiques ou de shopping.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 52: Departure – Transfer to airport',
                    'fr' => 'Jour 52 : Départ – Transfert à l\'aéroport',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Transfer to the airport for international departure.',
                            'fr' => 'Transfert à l\'aéroport pour le départ international.',
                        ],
                    ],
                ],
            ],
        ];


        $gokyo_valley_trek_itineraries = [
            [
                'title' => [
                    'en' => 'Day 1: Welcome to Kathmandu and transfer to the hotel',
                    'fr' => 'Jour 1 : Bienvenue à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Arrival and hotel transfer
                        'description' => [
                            'en' => 'This will be your arrival and preparation day in Kathmandu, Nepal, for the Gokyo Valley trek. Our team will pick you up from the international airport timely and escort you to the hotel. Rest for a bit, and later, meet us for a trek briefing. After that, buy any last-minute trekking gear and pack your duffle bags.',
                            'fr' => 'Ce sera votre jour d\'arrivée et de préparation à Katmandou, au Népal, pour le trek de la vallée de Gokyo. Notre équipe viendra vous chercher à l\'aéroport international à temps et vous accompagnera jusqu\'à l\'hôtel. Reposez-vous un peu, puis rencontrez-nous pour un briefing sur le trek. Après cela, achetez tout équipement de trekking de dernière minute et préparez vos sacs de voyage.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 2: Fly from Kathmandu/Ramechhap to Lukla airport and trek to Phakding',
                    'fr' => 'Jour 2 : Vol de Katmandou/Ramechhap à l\'aéroport de Lukla et trek jusqu\'à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Today, fly to Lukla early in the morning. The flight will be quite scenic.',
                            'fr' => 'Aujourd\'hui, volez vers Lukla tôt le matin. Le vol sera assez pittoresque.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Upon landing at Lukla, you will meet with the porters and begin trekking. From Lukla, you will descend for a couple of hours through lush forests and small settlements to Phakding village. The trail follows the Dudh Koshi river and crosses it several times on the way.',
                            'fr' => 'En atterrissant à Lukla, vous rencontrerez les porteurs et commencerez le trekking. De Lukla, vous descendrez pendant quelques heures à travers des forêts luxuriantes et de petits villages jusqu\'au village de Phakding. Le sentier suit la rivière Dudh Koshi et la traverse plusieurs fois en chemin.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,610 m', // Phakding altitude
                            'fr' => '2 610 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '3 hours',
                            'fr' => '3 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 3: Trek from Phakding to Namche Bazaar',
                    'fr' => 'Jour 3 : Trek de Phakding à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Leaving Phakding village, continue trekking through forests of rhododendron and magnolia. Cross many suspension bridges on the way, including the long Hillary Suspension Bridge. Register the permits in Monjo. From here, the trail is steep to Namche Bazaar.',
                            'fr' => 'En quittant le village de Phakding, continuez le trek à travers les forêts de rhododendrons et de magnolias. Traversez de nombreux ponts suspendus en chemin, y compris le long pont suspendu Hillary. Enregistrez les permis à Monjo. De là, le sentier est raide jusqu\'à Namche Bazaar.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,440 m',
                            'fr' => '3 440 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 4: Acclimatization day: hike to Hotel Everest View',
                    'fr' => 'Jour 4 : Journée d\'acclimatation : randonnée jusqu\'à l\'Hotel Everest View',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or HIKE if you have a separate type for shorter walks
                        'description' => [
                            'en' => 'Namche Bazaar is the tourist hub of the Khumbu region. You will spend an acclimatization day here. Hike to the Hotel Everest View early in the morning and spend the remaining day in Namche Bazaar resting. The hike offers stunning mountain views of Everest, Thamserku, Ama Dablam, Lhotse, and Nuptse. In Namche Bazaar, you will visit the Everest Photo Gallery and Sherpa Culture Museum.',
                            'fr' => 'Namche Bazaar est le centre touristique de la région de Khumbu. Vous passerez une journée d\'acclimatation ici. Randonnée jusqu\'à l\'Hotel Everest View tôt le matin et passez le reste de la journée à Namche Bazaar à vous reposer. La randonnée offre de superbes vues sur l\'Everest, le Thamserku, l\'Ama Dablam, le Lhotse et le Nuptse. À Namche Bazaar, vous visiterez la galerie de photos de l\'Everest et le musée de la culture Sherpa.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,962 m',
                            'fr' => '3 962 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4 hours',
                            'fr' => '4 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 5: Trek from Namche Bazaar to Dole',
                    'fr' => 'Jour 5 : Trek de Namche Bazaar à Dole',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From Namche Bazaar, follow a less traveled route to Dole village. You can see beautiful views of Mt. Everest, Mt. Ama Dablam, and Mt. Thamserku during trekking. The trail goes through rhododendron forests. Pass by small villages, watching the daily life of the locals.',
                            'fr' => 'De Namche Bazaar, suivez un itinéraire moins fréquenté jusqu\'au village de Dole. Vous pouvez voir de belles vues sur le mont Everest, le mont Ama Dablam et le mont Thamserku pendant le trekking. Le sentier traverse des forêts de rhododendrons. Passez par de petits villages, en observant la vie quotidienne des habitants.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,038 m',
                            'fr' => '4 038 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 6: Trek from Dole to Machhermo',
                    'fr' => 'Jour 6 : Trek de Dole à Machhermo',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'While trekking from Dole to Machhermo, you will walk on rugged tracks. There are many shrines and prayer flags along the way. You can see wonderful views of Mt. Cho Oyu, Mt. Thamserku, and Kangtega Peak on the way. The trail goes via Lapahram and Luja settlements before reaching Machhermo.',
                            'fr' => 'Lors du trek de Dole à Machhermo, vous marcherez sur des pistes accidentées. Il y a de nombreux sanctuaires et drapeaux de prière le long du chemin. Vous pouvez voir de magnifiques vues sur le mont Cho Oyu, le mont Thamserku et le pic Kangtega en chemin. Le sentier passe par les villages de Lapahram et Luja avant d\'atteindre Machhermo.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,470 m',
                            'fr' => '4 470 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 7: Trek from Machhermo to Gokyo village',
                    'fr' => 'Jour 7 : Trek de Machhermo au village de Gokyo',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Walk uphill from Machhermo to Gokyo Village. In an hour of walking, reach Phanga, a landslide area. The trail then crosses a suspension bridge and gradually ascends to Longpongo Lake (4,690 m). Further, trek through the Ngozumpa Glacier moraine and pass by the first and second Gokyo Lakes. The Gokyo Village is located near the third Gokyo Lake.',
                            'fr' => 'Marchez en montée de Machhermo au village de Gokyo. En une heure de marche, atteignez Phanga, une zone de glissement de terrain. Le sentier traverse ensuite un pont suspendu et monte progressivement jusqu\'au lac Longpongo (4 690 m). Plus loin, traversez la moraine du glacier Ngozumpa et passez par les premier et deuxième lacs de Gokyo. Le village de Gokyo est situé près du troisième lac de Gokyo.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,750 m',
                            'fr' => '4 750 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4 hours',
                            'fr' => '4 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 8: Acclimatization day - hike to Gokyo Ri',
                    'fr' => 'Jour 8 : Journée d\'acclimatation - randonnée jusqu\'à Gokyo Ri',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // or HIKE
                        'description' => [
                            'en' => 'Spend one more day in Gokyo village. Hike to Gokyo Ri before the sunrise to witness breathtaking scenery. The mountain views of Everest, Lhotse, Makalu, Cho Oyu, Island Peak, etc., are jaw-dropping from Gokyo Ri. You can also hike to the isolated fourth and fifth Gokyo Lakes.',
                            'fr' => 'Passez une journée de plus dans le village de Gokyo. Randonnée jusqu\'à Gokyo Ri avant le lever du soleil pour admirer des paysages à couper le souffle. Les vues sur les montagnes de l\'Everest, du Lhotse, du Makalu, du Cho Oyu, de l\'Island Peak, etc., sont époustouflantes depuis Gokyo Ri. Vous pouvez également faire une randonnée jusqu\'aux quatrième et cinquième lacs de Gokyo isolés.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,400 m',
                            'fr' => '5 400 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '2-3 hours',
                            'fr' => '2-3 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 9: Trek from Gokyo village to Phortse village',
                    'fr' => 'Jour 9 : Trek du village de Gokyo au village de Phortse',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Begin the day with a warm breakfast. After that, start trekking from Gokyo village and follow the same route back to Dole. You will trek past Machhermo on the way and a few other small settlements. From Dole, trek to Phortse village via lush forests.',
                            'fr' => 'Commencez la journée par un copieux petit-déjeuner. Après cela, commencez le trekking depuis le village de Gokyo et suivez le même itinéraire de retour à Dole. Vous passerez devant Machhermo en chemin et quelques autres petits villages. De Dole, trek jusqu\'au village de Phortse à travers des forêts luxuriantes.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,840 m',
                            'fr' => '3 840 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7 hours',
                            'fr' => '7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek from Phortse village to Namche Bazaar',
                    'fr' => 'Jour 10 : Trek du village de Phortse à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Leaving Phortse, gradually descend to Sansa. From here, you have two routes that lead to Namche Bazaar. One of them goes via the ancient Khumjung monastery. You can choose the path as you wish. Spend the evening in Namche Bazaar.',
                            'fr' => 'En quittant Phortse, descendez progressivement jusqu\'à Sansa. De là, vous avez deux itinéraires qui mènent à Namche Bazaar. L\'un d\'eux passe par l\'ancien monastère de Khumjung. Vous pouvez choisir le chemin comme vous le souhaitez. Passez la soirée à Namche Bazaar.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,440 m',
                            'fr' => '3 440 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Trek from Namche Bazaar to Lukla',
                    'fr' => 'Jour 11 : Trek de Namche Bazaar à Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'As you start descending from Namche Bazaar, you can see lush vegetation around you. The trail steeply descends for the first few hours. You will reach Monjo and continue to Phakding. From here, it is an uphill walk along the Dudh Koshi river to Lukla.',
                            'fr' => 'En commençant à descendre de Namche Bazaar, vous pouvez voir une végétation luxuriante autour de vous. Le sentier descend abruptement pendant les premières heures. Vous atteindrez Monjo et continuerez jusqu\'à Phakding. De là, c\'est une marche en montée le long de la rivière Dudh Koshi jusqu\'à Lukla.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,846 m',
                            'fr' => '2 846 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '8 hours',
                            'fr' => '8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Morning flight back to Kathmandu from Lukla airport & farewell dinner in the late evening',
                    'fr' => 'Jour 12 : Vol matinal de retour à Katmandou depuis l\'aéroport de Lukla et dîner d\'adieu en fin de soirée',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly back to Kathmandu early in the morning. In the spring and autumn seasons, you will land at Ramechhap Airport and drive to Kathmandu. The guide will drop you at the hotel comfortably. The evening is free to rest and enjoy as you wish.',
                            'fr' => 'Retournez à Katmandou en avion tôt le matin. Au printemps et en automne, vous atterrirez à l\'aéroport de Ramechhap et vous vous rendrez à Katmandou en voiture. Le guide vous déposera confortablement à l\'hôtel. La soirée est libre pour vous reposer et profiter comme vous le souhaitez.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,400 m',
                            'fr' => '1 400 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Free day in Kathmandu',
                    'fr' => 'Jour 13 : Journée libre à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or OTHERS if there are specific activities planned
                        'description' => [
                            'en' => 'Today is your last day in Kathmandu. The entire day is free. You can visit tourist sites and go window shopping. Spend the day as you desire. We can arrange a guided sightseeing tour at a reasonable cost if you want.',
                            'fr' => 'Aujourd\'hui est votre dernier jour à Katmandou. Toute la journée est libre. Vous pouvez visiter des sites touristiques et faire du lèche-vitrines. Passez la journée comme vous le désirez. Nous pouvons organiser une visite guidée à un prix raisonnable si vous le souhaitez.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Departure to your country',
                    'fr' => 'Jour 14 : Départ vers votre pays',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Airport transfer and departure
                        'description' => [
                            'en' => 'The trek has ended. You will fly back to your home on this day. Our team will drop you at the international airport.',
                            'fr' => 'Le trek est terminé. Vous retournerez chez vous en avion ce jour-là. Notre équipe vous déposera à l\'aéroport international.',
                        ],
                    ],
                ],
            ],
        ];

        $everest_three_passes_trek_itinerary = [
            [
                'title' => [
                    'en' => 'Day 1: Welcome to Kathmandu and transfer to the hotel',
                    'fr' => 'Jour 1 : Bienvenue à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Arrival and transfer
                        'description' => [
                            'en' => 'You will be picked up by our team upon your arrival at the Tribhuvan International Airport in Kathmandu. They will escort you to the hotel. The remaining day is free. Rest and explore your surroundings.',
                            'fr' => 'Vous serez pris en charge par notre équipe à votre arrivée à l\'aéroport international de Tribhuvan à Katmandou. Ils vous escorteront jusqu\'à l\'hôtel. Le reste de la journée est libre. Reposez-vous et explorez les environs.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 2: Full-day sightseeing tour of Swayambhunath Temple, Pashupatinath Temple, Bouddhanath Stupa, and Kathmandu Durbar Square',
                    'fr' => 'Jour 2 : Visite guidée d\'une journée du temple de Swayambhunath, du temple de Pashupatinath, du stupa de Bouddhanath et de la place Durbar de Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Sightseeing tour
                        'description' => [
                            'en' => 'In the morning, you will visit some famous tourist sites with our professional tour guide. Explore Swayambhunath Temple (Monkey Temple), Pashupatinath Temple, Bouddhanath Stupa, and Kathmandu Durbar Square. After the tour, the guide will drop you at your hotel. Get some rest, and later, meet us for a trek briefing. Purchase anything that is missing from your equipment and pack your duffle bags.',
                            'fr' => 'Le matin, vous visiterez quelques sites touristiques célèbres avec notre guide professionnel. Explorez le temple de Swayambhunath (temple des singes), le temple de Pashupatinath, le stupa de Bouddhanath et la place Durbar de Katmandou. Après la visite, le guide vous déposera à votre hôtel. Reposez-vous un peu, puis rencontrez-nous pour un briefing sur le trek. Achetez tout ce qui manque à votre équipement et préparez vos sacs de voyage.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 3: Fly from Kathmandu/Ramechhap to Lukla airport and trek to Phakding',
                    'fr' => 'Jour 3 : Vol de Katmandou/Ramechhap à l\'aéroport de Lukla et trek jusqu\'à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'The trek starts with a thrilling flight to Lukla. From March to May and September to November, you have to catch the Lukla flight from Ramechhap Airport. From Kathmandu, it takes around 4 to 5 hours to drive to reach this airport. So, trekkers leave the hotel at around 1:00 AM. Likewise, between June to August and December to February, the Lukla flights are available from Kathmandu Airport. Upon reaching Lukla, you will begin trekking to Phakding village. It is a downhill walk through forests, crossing many suspension bridges.',
                            'fr' => 'Le trek commence par un vol passionnant vers Lukla. De mars à mai et de septembre à novembre, vous devez prendre le vol Lukla depuis l\'aéroport de Ramechhap. De Katmandou, il faut environ 4 à 5 heures de route pour atteindre cet aéroport. Les trekkeurs quittent donc l\'hôtel vers 1 h 00 du matin. De même, entre juin et août et de décembre à février, les vols Lukla sont disponibles depuis l\'aéroport de Katmandou. En arrivant à Lukla, vous commencerez le trek jusqu\'au village de Phakding. C\'est une descente à travers les forêts, en traversant de nombreux ponts suspendus.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '', //  Already described in the flight description
                            'fr' => '', // Déjà décrit dans la description du vol
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,610 m',
                            'fr' => '2 610 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '3 hours',
                            'fr' => '3 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 4: Trek from Phakding to Namche Bazaar',
                    'fr' => 'Jour 4 : Trek de Phakding à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'The trail from Phakding ascends to Namche Bazaar. You will register the permit in Monjo. From here, the Sagarmatha National Park. The trek route spreads within rhododendron and magnolia forests. The final 2-3 hours of ascending to Namche Bazaar is steep.',
                            'fr' => 'Le sentier de Phakding monte jusqu\'à Namche Bazaar. Vous enregistrerez le permis à Monjo. De là, le parc national de Sagarmatha. L\'itinéraire de trek se déroule dans les forêts de rhododendrons et de magnolias. Les 2-3 dernières heures de montée vers Namche Bazaar sont raides.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,440 m',
                            'fr' => '3 440 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 5: Acclimatization day - hike to the Hotel Everest View',
                    'fr' => 'Jour 5 : Journée d\'acclimatation - randonnée jusqu\'à l\'Hotel Everest View',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or HIKE
                        'description' => [
                            'en' => 'Spend a rest day in Namche Bazaar. Hike to the Hotel Everest View to witness the first glimpse of Mt. Everest. The hike offers views of other mountains as well, like Thamserku, Lhotse, Nuptse, etc. After the hike, the remaining day is free.',
                            'fr' => 'Passez une journée de repos à Namche Bazaar. Randonnée jusqu\'à l\'Hotel Everest View pour admirer le premier aperçu du mont Everest. La randonnée offre également des vues sur d\'autres montagnes, comme le Thamserku, le Lhotse, le Nuptse, etc. Après la randonnée, le reste de la journée est libre.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,962 m',
                            'fr' => '3 962 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 6: Trek from Namche Bazaar to Tengboche Monastery',
                    'fr' => 'Jour 6 : Trek de Namche Bazaar au monastère de Tengboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Follow uneven hillsides from Namche Bazaar and trek to Kyangjuma. From here, you will descend to Phungi Thanga. Cross a bridge and start walking uphill to Tengboche village. Views of Mt. Ama Dablam and Mt. Everest is fantastic from here.',
                            'fr' => 'Suivez les flancs de collines irréguliers de Namche Bazaar et trek jusqu\'à Kyangjuma. De là, vous descendrez jusqu\'à Phungi Thanga. Traversez un pont et commencez à monter jusqu\'au village de Tengboche. Les vues sur le mont Ama Dablam et le mont Everest sont fantastiques d\'ici.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,860 m',
                            'fr' => '3 860 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 7: Trek from Tengboche to Dingboche',
                    'fr' => 'Jour 7 : Trek de Tengboche à Dingboche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Leaving Tengboche, the trail descends to the Imja Khola via Deboche. Cross a suspension bridge and hike to Pangboche village. The trail goes through rhododendron forests till here. Further, as you ascend, the treeline gets thinner, and you will pass by bushes and terraced fields to Dingboche.',
                            'fr' => 'En quittant Tengboche, le sentier descend vers l\'Imja Khola via Deboche. Traversez un pont suspendu et faites une randonnée jusqu\'au village de Pangboche. Le sentier traverse des forêts de rhododendrons jusqu\'ici. Plus loin, en montant, la limite des arbres s\'amincit et vous passerez devant des buissons et des champs en terrasses jusqu\'à Dingboche.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,410 m',
                            'fr' => '4 410 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 8: Trek from Dingboche to Chhukung',
                    'fr' => 'Jour 8 : Trek de Dingboche à Chhukung',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'The trail to Chhukung goes off the main EBC route and follows an offbeat trail. You will see stunning views of Mt. Makalu and Island Peak. On the same day, you can also hike to Chhukung Ri to enjoy a spectacular mountain panorama.',
                            'fr' => 'Le sentier vers Chhukung s\'éloigne de la route principale du C.B.E. et suit un sentier hors des sentiers battus. Vous verrez des vues imprenables sur le mont Makalu et l\'Island Peak. Le même jour, vous pouvez également faire une randonnée jusqu\'à Chhukung Ri pour profiter d\'un panorama montagneux spectaculaire.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,730 m',
                            'fr' => '4 730 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4-5 hours',
                            'fr' => '4-5 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 9: Trek from Chhukung to Kongma La pass and descend to Lobuche village',
                    'fr' => 'Jour 9 : Trek de Chhukung au col de Kongma La et descente au village de Lobuche',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'You will cross the first pass today. From Chhukung village, the trail steeply ascends to the top of the pass. Trekkers get to enjoy beautiful mountains and glacier views while trekking. The ascend will be fairly steep. From the Kongma La pass, the trail descends to the Khumbu glacier moraine—Trek via the moraine to reach Lobuche village.',
                            'fr' => 'Vous traverserez le premier col aujourd\'hui. Du village de Chhukung, le sentier monte raide jusqu\'au sommet du col. Les trekkeurs peuvent profiter de belles vues sur les montagnes et les glaciers pendant le trekking. La montée sera assez raide. Du col de Kongma La, le sentier descend vers la moraine du glacier de Khumbu : trek via la moraine pour atteindre le village de Lobuche.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,540 m',
                            'fr' => '5 540 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '3-4 hours',
                            'fr' => '3-4 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek from Lobuche to Gorak Shep to Everest Base Camp and back to Gorak Shep',
                    'fr' => 'Jour 10 : Trek de Lobuche à Gorak Shep, au camp de base de l\'Everest et retour à Gorak Shep',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Today, you will trek to Everest Base Camp. From Lobuche, the trail ascends along the Khumbu Glacier moraine. You will then walk on steep and rocky tracks to Gorak Shep. You will spend this night at Gorak Shep, but before that, hike to EBC. Get to see a close view of the Khumbu Icefall.',
                            'fr' => 'Aujourd\'hui, vous ferez un trek jusqu\'au camp de base de l\'Everest. De Lobuche, le sentier monte le long de la moraine du glacier de Khumbu. Vous marcherez ensuite sur des pistes raides et rocheuses jusqu\'à Gorak Shep. Vous passerez cette nuit à Gorak Shep, mais avant cela, faites une randonnée jusqu\'au C.B.E. Obtenez une vue rapprochée de la cascade de glace de Khumbu.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,364 m',
                            'fr' => '5 364 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '8 hours',
                            'fr' => '8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Hike to Kala Patthar and trek down to Dzonlga',
                    'fr' => 'Jour 11 : Randonnée jusqu\'à Kala Patthar et trek jusqu\'à Dzonlga',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // or HIKE for Kala Patthar
                        'description' => [
                            'en' => 'Begin the day before the sunrise and hike to Kala Patthar. It is a viewpoint that offers a breathtaking view of Mt. Everest and many other mountains. After the hike, you will descend to Dzongla. Retrace the trail to Lobuche village, and from here, a different route to Dzongla.',
                            'fr' => 'Commencez la journée avant le lever du soleil et faites une randonnée jusqu\'à Kala Patthar. C\'est un point de vue qui offre une vue imprenable sur le mont Everest et de nombreuses autres montagnes. Après la randonnée, vous descendrez à Dzongla. Retracez le sentier jusqu\'au village de Lobuche, et de là, un itinéraire différent jusqu\'à Dzongla.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,545 m',
                            'fr' => '5 545 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Trek from Dzongla to Cho La pass and descend to Thangnak',
                    'fr' => 'Jour 12 : Trek de Dzongla au col de Cho La et descente à Thangnak',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'You will cross the most challenging pass today, Cho La. From Dzongla, the trail ascends to the top of the pass. You will walk on rugged, icy, and steep paths. The views of Mt. Ama Dablam and Chola Lake are most stunning. From the pass, the trail descends to Thangnak, where you will spend the night.',
                            'fr' => 'Vous traverserez aujourd\'hui le col le plus difficile, Cho La. De Dzongla, le sentier monte jusqu\'au sommet du col. Vous marcherez sur des sentiers accidentés, glacés et raides. Les vues sur le mont Ama Dablam et le lac Chola sont les plus époustouflantes. Du col, le sentier descend jusqu\'à Thangnak, où vous passerez la nuit.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,420 m',
                            'fr' => '5 420 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Trek from Thangnak to Gokyo village',
                    'fr' => 'Jour 13 : Trek de Thangnak au village de Gokyo',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'As you continue trekking from Thangnak, the trail takes you to Longponga Lake (4,720 m). You can see excellent mountain views on the way. Soon, you will traverse the Ngozumpa Glacier moraine, the biggest glacier in Nepal. The trail goes past the first and second Gokyo lakes. The Gokyo village is situated near the third Gokyo Lake.',
                            'fr' => 'En continuant le trekking depuis Thangnak, le sentier vous emmène au lac Longponga (4 720 m). Vous pouvez voir d\'excellentes vues sur les montagnes en chemin. Bientôt, vous traverserez la moraine du glacier Ngozumpa, le plus grand glacier du Népal. Le sentier passe devant les premier et deuxième lacs de Gokyo. Le village de Gokyo est situé près du troisième lac de Gokyo.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,750 m',
                            'fr' => '4 750 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '3-4 hours',
                            'fr' => '3-4 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Acclimatization day in Gokyo village - hike to Gokyo Ri',
                    'fr' => 'Jour 14 : Journée d\'acclimatation au village de Gokyo - randonnée jusqu\'à Gokyo Ri',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // or HIKE
                        'description' => [
                            'en' => 'In the morning, hike to Gokyo Ri. You will see a gorgeous sunrise and a jaw-dropping panorama of Everest, Makalu, Cho Oyu, Island Peak, Cholatse, etc. You can also hike to the fourth and fifth Gokyo Lakes.',
                            'fr' => 'Le matin, randonnée jusqu\'à Gokyo Ri. Vous verrez un magnifique lever de soleil et un panorama époustouflant de l\'Everest, du Makalu, du Cho Oyu, de l\'Island Peak, du Cholatse, etc. Vous pouvez également faire une randonnée jusqu\'aux quatrième et cinquième lacs de Gokyo.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,357 m',
                            'fr' => '5 357 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5 hours',
                            'fr' => '5 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 15: Trek from Gokyo Village to Lungden via Renjo La pass',
                    'fr' => 'Jour 15 : Trek du village de Gokyo à Lungden via le col de Renjo La',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'On this day, you will cross the last pass, Renjo La. From Gokyo village, the trail gradually ascends via boulders scattered along the path. The route gets steeper as you climb towards the top of the pass. Upon reaching the pass, you will see a marvelous mountain panorama. From here, descend to Lungden along an ancient trading route used by Tibetan traders.',
                            'fr' => 'Ce jour-là, vous traverserez le dernier col, Renjo La. Du village de Gokyo, le sentier monte progressivement à travers des rochers éparpillés le long du chemin. La route devient plus raide à mesure que vous montez vers le sommet du col. En atteignant le col, vous verrez un merveilleux panorama de montagne. De là, descendez à Lungden le long d\'une ancienne route commerciale utilisée par les commerçants tibétains.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,345 m',
                            'fr' => '5 345 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '8-9 hours',
                            'fr' => '8-9 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 16: Trek from Lungden to Thame',
                    'fr' => 'Jour 16 : Trek de Lungden à Thame',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From Lungden, the trail descends in the south direction to Thame. Following the east side of the river, keep trekking and pass by peaceful villages like Marlung and Taranga. The scenery is superb. In Thame, you will get to explore an old monastery.',
                            'fr' => 'De Lungden, le sentier descend vers le sud jusqu\'à Thame. En suivant le côté est de la rivière, continuez le trekking et passez par des villages paisibles comme Marlung et Taranga. Le paysage est superbe. À Thame, vous pourrez explorer un ancien monastère.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,850 m',
                            'fr' => '3 850 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours', // Estimated, adjust if needed
                            'fr' => '5-6 heures', // Estimé, ajuster si nécessaire
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 17: Trek from Thame to Namche Bazaar',
                    'fr' => 'Jour 17 : Trek de Thame à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Continuing the trek from Thame, the trail descends to Namche Bazaar. You will walk along a stream and descend to Bhotekoshi Valley. Cross a suspension bridge and trek through lush forests of rhododendron, birch, and pine.',
                            'fr' => 'En continuant le trek depuis Thame, le sentier descend jusqu\'à Namche Bazaar. Vous marcherez le long d\'un ruisseau et descendrez jusqu\'à la vallée de Bhotekoshi. Traversez un pont suspendu et faites un trek à travers des forêts luxuriantes de rhododendrons, de bouleaux et de pins.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,440 m',
                            'fr' => '3 440 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 18: Trek from Namche Bazaar to Lukla',
                    'fr' => 'Jour 18 : Trek de Namche Bazaar à Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'The trail from Namche Bazaar steeply descends through a forested route to Monjo. From here, you will walk to Phakding village and follow an uphill trail to Lukla. Cross many suspension bridges on the way and pass by small villages.',
                            'fr' => 'Le sentier de Namche Bazaar descend abruptement à travers une route forestière jusqu\'à Monjo. De là, vous marcherez jusqu\'au village de Phakding et suivrez un sentier en montée jusqu\'à Lukla. Traversez de nombreux ponts suspendus en chemin et passez par de petits villages.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,846 m',
                            'fr' => '2 846 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 19: Morning flight back to Kathmandu from Lukla airport',
                    'fr' => 'Jour 19 : Vol matinal de retour à Katmandou depuis l\'aéroport de Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly back to Kathmandu early in the morning. The guide will drop you at the hotel. The remaining day is free in the city. You can visit spa and massage centers.',
                            'fr' => 'Retournez à Katmandou en avion tôt le matin. Le guide vous déposera à l\'hôtel. Le reste de la journée est libre dans la ville. Vous pouvez visiter des centres de spa et de massage.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,400 m',
                            'fr' => '1 400 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 20: Free day in Kathmandu',
                    'fr' => 'Jour 20 : Journée libre à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // or OTHERS if activities are planned
                        'description' => [
                            'en' => 'You have a free day in Kathmandu. Spend as you visit. Rest, explore tourist sites, and do window shopping in Thamel. In the late evening, we will meet and hand over the trek completion certificate.',
                            'fr' => 'Vous avez une journée libre à Katmandou. Passez du temps comme vous le souhaitez. Reposez-vous, explorez les sites touristiques et faites du lèche-vitrines à Thamel. En fin de soirée, nous nous rencontrerons et vous remettrons le certificat d\'achèvement du trek.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 21: Trip ends! Fly back home with memories to cherish forever',
                    'fr' => 'Jour 21 : Le voyage se termine ! Retournez chez vous avec des souvenirs à chérir pour toujours',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Departure
                        'description' => [
                            'en' => 'Our team will drop you at the international airport. You will depart from Nepal today. Make sure to be ready to leave on time.',
                            'fr' => 'Notre équipe vous déposera à l\'aéroport international. Vous quitterez le Népal aujourd\'hui. Assurez-vous d\'être prêt à partir à l\'heure.',
                        ],
                    ],
                ],
            ],
        ];

        $gokyo_renjola_pass_trek_itinerary = [
            [
                'title' => [
                    'en' => 'Day 1: Welcome to Kathmandu and transfer to the hotel',
                    'fr' => 'Jour 1 : Bienvenue à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Arrival and transfer
                        'description' => [
                            'en' => 'This will be your arrival and preparation day in Kathmandu, Nepal. Our team will pick you up from the international airport timely and escort you to the hotel. Rest for a bit, and later, meet us for a trek briefing. After that, buy any last-minute trekking gear and pack your duffle bags.',
                            'fr' => 'Ce sera votre jour d\'arrivée et de préparation à Katmandou, au Népal. Notre équipe viendra vous chercher à l\'aéroport international à temps et vous accompagnera jusqu\'à l\'hôtel. Reposez-vous un peu, puis rencontrez-nous pour un briefing sur le trek. Après cela, achetez tout équipement de trekking de dernière minute et préparez vos sacs de voyage.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 2: Fly from Kathmandu/Ramechhap to Lukla airport and trek to Phakding',
                    'fr' => 'Jour 2 : Vol de Katmandou/Ramechhap à l\'aéroport de Lukla et trek jusqu\'à Phakding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly from Kathmandu to Lukla. The flight will be short and offer beautiful mountain views. The Lukla flights are operated from the Ramechhap Airport in October, November, March, April, and May. If you are trekking in these months, you will drive from your hotel to the Ramechhap Airport around 1:00 AM. The drive is around 4 to 5 hours long. In other months, you can fly to Lukla from Kathmandu Airport.',
                            'fr' => 'Envolez-vous de Katmandou à Lukla. Le vol sera court et offrira de belles vues sur les montagnes. Les vols Lukla sont opérés depuis l\'aéroport de Ramechhap en octobre, novembre, mars, avril et mai. Si vous faites un trek pendant ces mois, vous conduirez de votre hôtel à l\'aéroport de Ramechhap vers 1 h 00 du matin. Le trajet dure environ 4 à 5 heures. Les autres mois, vous pouvez vous envoler pour Lukla depuis l\'aéroport de Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Once you land in Lukla, your journey in the mountains starts. Today, you will descend to Phakding village to spend the night. The trail goes through rhododendron forests and small villages, crossing several suspension bridges on the way.',
                            'fr' => 'Une fois que vous atterrissez à Lukla, votre voyage dans les montagnes commence. Aujourd\'hui, vous descendrez au village de Phakding pour passer la nuit. Le sentier traverse des forêts de rhododendrons et de petits villages, en traversant plusieurs ponts suspendus en chemin.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,610 m',
                            'fr' => '2 610 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '3 hours',
                            'fr' => '3 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 3: Trek from Phakding to Namche Bazaar',
                    'fr' => 'Jour 3 : Trek de Phakding à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From Phakding, follow the lush forested route to Namche Bazaar. You will cross the Hillary Suspension Bridge before reaching Monjo. The permits are registered in Monjo. From here, the region is protected under the Sagarmatha National Park. The last few hundred meters of the trail steeply ascends to Namche Bazaar.',
                            'fr' => 'De Phakding, suivez la route forestière luxuriante jusqu\'à Namche Bazaar. Vous traverserez le pont suspendu Hillary avant d\'atteindre Monjo. Les permis sont enregistrés à Monjo. De là, la région est protégée par le parc national de Sagarmatha. Les quelques centaines de mètres du sentier montent raide jusqu\'à Namche Bazaar.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,440 m',
                            'fr' => '3 440 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 4: Acclimatization day: hike to Hotel Everest View',
                    'fr' => 'Jour 4 : Journée d\'acclimatation : randonnée jusqu\'à l\'Hotel Everest View',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or HIKE
                        'description' => [
                            'en' => 'Acclimatization days are needed so that you can get used to the elevation and avoid altitude sickness. The morning is spent hiking to the Hotel Everest View. The views of Mt. Everest, Mt. Lhotse, Mt. Nuptse, Mt. Thamserku, etc, are excellent during the hike. Later, return to Namche Bazaar. Visit the Sherpa Culture Museum and Everest Photo Gallery.',
                            'fr' => 'Les journées d\'acclimatation sont nécessaires pour que vous puissiez vous habituer à l\'altitude et éviter le mal de l\'altitude. La matinée est consacrée à la randonnée jusqu\'à l\'Hotel Everest View. Les vues sur le mont Everest, le mont Lhotse, le mont Nuptse, le mont Thamserku, etc., sont excellentes pendant la randonnée. Plus tard, retournez à Namche Bazaar. Visitez le musée de la culture Sherpa et la galerie de photos de l\'Everest.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,962 m',
                            'fr' => '3 962 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4 hours',
                            'fr' => '4 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 5: Trek from Namche Bazaar to Dole',
                    'fr' => 'Jour 5 : Trek de Namche Bazaar à Dole',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'The trail from Namche Bazaar gets off of the mainstream EBC route and follows a less crowded, offbeat path to Dole. You will see stunning views of Mt. Ama Dablam, Mt. Everest, and Mt. Thamserku during trekking. The route goes via rhododendron forests and a few small villages.',
                            'fr' => 'Le sentier de Namche Bazaar s\'éloigne de la route principale du C.B.E. et suit un sentier moins fréquenté et hors des sentiers battus jusqu\'à Dole. Vous verrez des vues imprenables sur le mont Ama Dablam, le mont Everest et le mont Thamserku pendant le trekking. La route traverse des forêts de rhododendrons et quelques petits villages.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,038 m',
                            'fr' => '4 038 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 6: Trek from Dole to Machhermo',
                    'fr' => 'Jour 6 : Trek de Dole à Machhermo',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Leaving Dole, you will follow a steep, rugged route. The trail goes past stupas and shrines. Enjoy tranquil walking, admiring breathtaking views of Kangtega Peak, Mt. Thamserku, and Mt. Cho Oyu. Before reaching Macchermo, you will trek past the Lapahra and Luja settlements.',
                            'fr' => 'En quittant Dole, vous suivrez un itinéraire raide et accidenté. Le sentier passe devant des stupas et des sanctuaires. Profitez d\'une marche tranquille, en admirant des vues à couper le souffle sur le pic Kangtega, le mont Thamserku et le mont Cho Oyu. Avant d\'atteindre Macchermo, vous passerez devant les villages de Lapahra et Luja.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,470 m',
                            'fr' => '4 470 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 7: Trek from Machhermo to Gokyo village',
                    'fr' => 'Jour 7 : Trek de Machhermo au village de Gokyo',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'The trail from Machhermo first goes via a landslide area called Phanga. Crossing a suspension bridge, you will ascend to Longpongo Lake (4,690 m). Further, you will walk through the Ngozumpa Glacier moraine and pass by the first and second Gokyo Lakes to reach Gokyo village. The Machhermo to Gokyo village trek duration is short, so you can spend the remaining day hiking to the isolated fourth and fifth Gokyo Lakes.',
                            'fr' => 'Le sentier de Machhermo passe d\'abord par une zone de glissement de terrain appelée Phanga. En traversant un pont suspendu, vous monterez jusqu\'au lac Longpongo (4 690 m). Plus loin, vous traverserez la moraine du glacier Ngozumpa et passerez par les premier et deuxième lacs de Gokyo pour atteindre le village de Gokyo. La durée du trek de Machhermo au village de Gokyo est courte, vous pouvez donc passer le reste de la journée à faire de la randonnée jusqu\'aux quatrième et cinquième lacs de Gokyo isolés.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,750 m',
                            'fr' => '4 750 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4 hours',
                            'fr' => '4 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 8: Acclimatization day - hike to Gokyo Ri',
                    'fr' => 'Jour 8 : Journée d\'acclimatation - randonnée jusqu\'à Gokyo Ri',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or HIKE
                        'description' => [
                            'en' => 'You will spend one more day in Gokyo village. In the morning, hike to Gokyo Ri. The route is steep and rocky, however you will get to witness a jaw-dropping view of Mt. Everest from here, along with many other mountains like Lhotse, Makalu, Cho Oyu, Island Peak, etc.',
                            'fr' => 'Vous passerez une journée de plus dans le village de Gokyo. Le matin, randonnée jusqu\'à Gokyo Ri. La route est raide et rocheuse, mais vous aurez une vue imprenable sur le mont Everest d\'ici, ainsi que sur de nombreuses autres montagnes comme le Lhotse, le Makalu, le Cho Oyu, l\'Island Peak, etc.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,400 m',
                            'fr' => '5 400 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '2-3 hours',
                            'fr' => '2-3 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 9: Trek from Gokyo Village to Lungden via Renjo La pass',
                    'fr' => 'Jour 9 : Trek du village de Gokyo à Lungden via le col de Renjo La',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Today, you will be crossing the Renjo La pass. From Gokyo village, gradually ascend following steep, rocky tracks to the top of the pass. It will be a tough climb, however you will witness a spectacular mountain panorama upon reaching the top. Further, the trail descends to Lungden, where you will spend the night.',
                            'fr' => 'Aujourd\'hui, vous traverserez le col de Renjo La. Du village de Gokyo, montez progressivement en suivant des pistes raides et rocheuses jusqu\'au sommet du col. Ce sera une montée difficile, mais vous assisterez à un panorama montagneux spectaculaire en atteignant le sommet. Plus loin, le sentier descend jusqu\'à Lungden, où vous passerez la nuit.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,345 m',
                            'fr' => '5 345 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '8-9 hours',
                            'fr' => '8-9 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek from Lungden to Namche Bazaar',
                    'fr' => 'Jour 10 : Trek de Lungden à Namche Bazaar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From Lungden, you will begin trekking back to Namche Bazaar. On the way, trek past Thame, Marlung, and Taranga villages. These are beautiful villages. The trail gradually descends and also goes through lush forests.',
                            'fr' => 'De Lungden, vous commencerez le trekking de retour à Namche Bazaar. En chemin, passez devant les villages de Thame, Marlung et Taranga. Ce sont de beaux villages. Le sentier descend progressivement et traverse également des forêts luxuriantes.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,440 m',
                            'fr' => '3 440 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Trek from Namche Bazaar to Lukla',
                    'fr' => 'Jour 11 : Trek de Namche Bazaar à Lukla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Leaving Namche Bazaar, retrace the trail back to Lukla. First, the trail descends steeply and goes through forests to Parking. From here, you will ascend to Lukla, crossing numerous suspension bridges and trekking via lush forests.',
                            'fr' => 'En quittant Namche Bazaar, suivez le sentier de retour à Lukla. Tout d\'abord, le sentier descend raide et traverse des forêts jusqu\'à Parking. De là, vous monterez à Lukla, en traversant de nombreux ponts suspendus et en faisant du trekking à travers des forêts luxuriantes.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,846 m',
                            'fr' => '2 846 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Lodge',
                            'fr' => 'Lodge',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '8 hours',
                            'fr' => '8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Morning flight back to Kathmandu from Lukla airport & farewell dinner in the late evening',
                    'fr' => 'Jour 12 : Vol matinal de retour à Katmandou depuis l\'aéroport de Lukla et dîner d\'adieu en fin de soirée',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'A morning flight will take you back to Kathmandu. Enjoy the final mountain views during the flight. The guide will drop you at the hotel. The rest of the day is free.',
                            'fr' => 'Un vol matinal vous ramènera à Katmandou. Profitez des dernières vues sur les montagnes pendant le vol. Le guide vous déposera à l\'hôtel. Le reste de la journée est libre.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,400 m',
                            'fr' => '1 400 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Free day in Kathmandu',
                    'fr' => 'Jour 13 : Journée libre à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or OTHERS if activities are planned
                        'description' => [
                            'en' => 'You have a full day free in Kathmandu. Spend as you wish. Visit famous tourist sites and get to know Nepali culture, art, and architecture closely. Do not forget to buy souvenirs as today is your last day in Kathmandu.',
                            'fr' => 'Vous avez une journée entière de libre à Katmandou. Passez-la comme vous le souhaitez. Visitez des sites touristiques célèbres et apprenez à connaître de près la culture, l\'art et l\'architecture népalais. N\'oubliez pas d\'acheter des souvenirs car aujourd\'hui est votre dernier jour à Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Departure to your country',
                    'fr' => 'Jour 14 : Départ vers votre pays',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Departure
                        'description' => [
                            'en' => 'You will depart from Kathmandu today. Our team will drop you at the airport and bid you our last goodbyes.',
                            'fr' => 'Vous quitterez Katmandou aujourd\'hui. Notre équipe vous déposera à l\'aéroport et vous adressera nos derniers adieux.',
                        ],
                    ],
                ],
            ],
        ];

        $annapurna_dhaulagiri_trek_itinerary = [
            [
                'title' => [
                    'en' => 'Day 1: Arrival in Kathmandu. Transfer to the Hotel.',
                    'fr' => 'Jour 1 : Arrivée à Katmandou. Transfert à l\'hôtel.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Arrival and transfer
                        'description' => [
                            'en' => 'A Representative from Sherpalaya will be waiting outside the Tribhuvan International Airport in Kathmandu for your welcome. You will then be transferred to your Hotel in Kathmandu. Looking at the time of your arrival trip, a briefing will be planned where your last minute question will be answered by our expert team members and you will be provided with a trekking map and duffle bags during the briefing. The evening is free for you to explore the hustling alleys of Thamel and surrounding areas.',
                            'fr' => 'Un représentant d\'Sherpalaya vous attendra à l\'extérieur de l\'aéroport international de Tribhuvan à Katmandou pour vous accueillir. Vous serez ensuite transféré à votre hôtel à Katmandou. En fonction de l\'heure de votre arrivée, un briefing sera prévu au cours duquel vos questions de dernière minute recevront une réponse des membres de notre équipe d\'experts et vous recevrez une carte de trekking et des sacs de voyage pendant le briefing. La soirée est libre pour vous permettre d\'explorer les ruelles animées de Thamel et les environs.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,338m',
                            'fr' => '1 338m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 2: Sightseeing tour of Bhaktapur, Pashupatinath and Boudhanath.',
                    'fr' => 'Jour 2 : Visite guidée de Bhaktapur, Pashupatinath et Boudhanath.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Sightseeing
                        'description' => [
                            'en' => 'A Day filled with sightseeing of cultural heritage sites of Kathmandu Valleys. After your breakfast at the hotel you will depart on an informational and exciting trip to the World Heritage monuments of Kathmandu. Bhaktapur city will be our first stop for the day, which is 15 km from Kathmandu, known as city of Devotees and center of medieval art and architecture founded by King Anand Dev in 889 AD, visit Nyatapola temple, the most beautiful temple of Nepal, the 15th century palace of 55 windows, Golden gate and other place of Interest. The two other destinations are the Pilgrimage sites for Hinduism and Buddhism. The trip to Pashupatinath will allow you to witness the Hindu Cremation Process along the Bagmati River in front of the Main Temple. Next will be the Peaceful stupa of Boudhanath. Your tour Guide will help you to choose a perfect destination to have lunch according to your preference.',
                            'fr' => 'Une journée remplie de visites des sites du patrimoine culturel des vallées de Katmandou. Après votre petit-déjeuner à l\'hôtel, vous partirez pour un voyage instructif et passionnant vers les monuments du patrimoine mondial de Katmandou. La ville de Bhaktapur sera notre premier arrêt de la journée, à 15 km de Katmandou, connue comme la ville des dévots et le centre de l\'art et de l\'architecture médiévale fondée par le roi Anand Dev en 889 après J.-C., visitez le temple Nyatapola, le plus beau temple du Népal, le palais du XVe siècle aux 55 fenêtres, la porte dorée et d\'autres lieux d\'intérêt. Les deux autres destinations sont les lieux de pèlerinage pour l\'hindouisme et le bouddhisme. Le voyage à Pashupatinath vous permettra d\'assister au processus de crémation hindoue le long de la rivière Bagmati, en face du temple principal. Ensuite, il y aura le paisible stupa de Boudhanath. Votre guide vous aidera à choisir une destination idéale pour déjeuner selon vos préférences.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Or OTHERS
                        'description' => [
                            'en' => '05-06 Hours',
                            'fr' => '05-06 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 3: Drive to Pokhara.',
                    'fr' => 'Jour 3 : Route vers Pokhara.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Early in the morning, we drive from Kathmandu to Pokhara, Nepal\'s lake city. Our bus follows a winding road over the valley rim and descends onto the Trishuli River. The journey is slow and steady as the road winds through villages and passing terrace fields before reaching our destination. Pokhara is best known for its tranquil atmosphere and the beauty of the surrounding countryside. Normally, we arrive by midafternoon so you have time to explore or relax as you prepare for the journey ahead.',
                            'fr' => 'Tôt le matin, nous partons en voiture de Katmandou à Pokhara, la ville lacustre du Népal. Notre bus suit une route sinueuse au-dessus du bord de la vallée et descend vers la rivière Trishuli. Le voyage est lent et régulier car la route serpente à travers les villages et passe devant des champs en terrasses avant d\'atteindre notre destination. Pokhara est surtout connue pour son atmosphère tranquille et la beauté de la campagne environnante. Normalement, nous arrivons en milieu d\'après-midi, vous avez donc le temps d\'explorer ou de vous détendre pendant que vous vous préparez pour le voyage à venir.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '970m',
                            'fr' => '970m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Or OTHERS
                        'description' => [
                            'en' => '06-07 Hours',
                            'fr' => '06-07 Heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE, // Or OTHERS
                        'description' => [
                            'en' => '200KM',
                            'fr' => '200KM',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 4: Drive to Ghandruk and Trek to Tadapani.',
                    'fr' => 'Jour 4 : Route vers Ghandruk et trek jusqu\'à Tadapani.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Breakfast will be provided in your hotel in Pokhara followed by a scenic drive towards the Gurung village of Ghandruk. The drive today will offer you with Amazing views of the Annapurna Range including many mountains. We drove west of Pokhara, gradually stepping out of the concrete jungle and checking ourselves in the Annapurna Conservation Area. The drive upto Siwai is smooth as the last part requires some off-road skills.',
                            'fr' => 'Le petit-déjeuner sera servi dans votre hôtel à Pokhara, suivi d\'une route panoramique vers le village Gurung de Ghandruk. Le trajet d\'aujourd\'hui vous offrira des vues incroyables sur la chaîne de l\'Annapurna, y compris de nombreuses montagnes. Nous avons roulé à l\'ouest de Pokhara, en nous éloignant progressivement de la jungle de béton et en nous enregistrant dans la zone de conservation de l\'Annapurna. La route jusqu\'à Siwai est lisse car la dernière partie nécessite quelques compétences hors route.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Upon arriving on Ghandruk we will have a short trip of the village tailed by our first day of the trekking. The trail after Ghandruk climbs gradually up towards Bhaise kharka. Expect some stairs during the initial stage today followed by a gentle walk into the Rhododendron forest after Bhaise Kharka. Crossing small streams along the way, we reach the settlement of Tadapani which is a junction for other treks of Annapurna Region.',
                            'fr' => 'En arrivant à Ghandruk, nous ferons une courte excursion dans le village, suivie de notre premier jour de trekking. Le sentier après Ghandruk monte progressivement vers Bhaise kharka. Attendez-vous à quelques escaliers pendant la phase initiale aujourd\'hui, suivis d\'une douce promenade dans la forêt de rhododendrons après Bhaise Kharka. En traversant de petits ruisseaux le long du chemin, nous atteignons le village de Tadapani, qui est une jonction pour d\'autres treks de la région de l\'Annapurna.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,657m',
                            'fr' => '2 657m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS, // Or OTHERS
                        'description' => [
                            'en' => '07-08 Hours',
                            'fr' => '07-08 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 5: Trek to Dobato.',
                    'fr' => 'Jour 5 : Trek jusqu\'à Dobato.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Wake up in Tadapani with amazing sunrise vistas of Annapurna South, Hiunchuli, Machhapuchre (Fishtail) followed by a hearty breakfast at the Himalayas. Gurung Bread is a very popular local bread of this region which is loved by most of the trekkers. If you want to try some local cuisine it can be the best option for you. After Breakfast we begin our ascent towards Dobato, our final destination for the day. We will enter the less explored trail on this day so be ready for narrow trails into the dense forests where you might have the chance to witness some wildlife. Some sections of the trail are steep uphill which will be demanding at times. For Lunch we will arrive at Isharu where the fresh ingredients from the local farms awaits you. After lunch we will gradually climb up to Dobato and the landscape changes as the tree line becomes thinner.',
                            'fr' => 'Réveillez-vous à Tadapani avec des vues incroyables sur le lever du soleil sur l\'Annapurna Sud, l\'Hiunchuli, le Machhapuchre (Queue de poisson), suivi d\'un copieux petit-déjeuner dans l\'Himalaya. Le pain Gurung est un pain local très populaire dans cette région qui est aimé par la plupart des trekkeurs. Si vous voulez essayer une cuisine locale, cela peut être la meilleure option pour vous. Après le petit-déjeuner, nous commençons notre ascension vers Dobato, notre destination finale pour la journée. Nous entrerons dans le sentier moins exploré ce jour-là, alors soyez prêt pour des sentiers étroits dans les forêts denses où vous pourriez avoir la chance d\'observer une certaine faune. Certaines sections du sentier sont raides en montée, ce qui sera parfois exigeant. Pour le déjeuner, nous arriverons à Isharu où les ingrédients frais des fermes locales vous attendent. Après le déjeuner, nous monterons progressivement jusqu\'à Dobato et le paysage changera à mesure que la limite des arbres s\'amincira.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,420m',
                            'fr' => '3 420m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS, // Or OTHERS
                        'description' => [
                            'en' => '05-06 Hours',
                            'fr' => '05-06 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 6: Sunrise hike to Muldai View Point and Trek to upper Chistibung / Dhan Kharka',
                    'fr' => 'Jour 6 : Randonnée au lever du soleil jusqu\'au point de vue de Muldai et trek jusqu\'à Upper Chistibung / Dhan Kharka',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or ItineraryTypes::HIKE for Muldai View Point portion
                        'description' => [
                            'en' => 'Get your head lamps ready as we will start our hike before sunrise. The trail to Muldai View Point (3,637m/ 11,932 ft) goes into the thin Rhododendron Forests and climbs continuously before arriving at the flat grassland at the top. It will take us around 45 min to 1 hour to reach the top from Dobato. There is also a yak stable at the top where lots of Yaks might be waiting for us to greet us goodmorning. Upon arriving on the top you will be informed about the surrounding peaks by your guide and given free time to explore and take some good pictures for the memories. Don’t forget to carry some local currency for some Tea and Coffee at the view point. Return back to Dobato for Breakfast and start to trek north from Dobato. After 1 hour 30 min of trekking we will arrive at a place called Bayeli Kharka which is the last place for water or before reaching Upper Chistibung / Dhan Kharka. The trail after Bayli goes deep into the forest where we have a steep downhill section waiting for us. Just before reaching Upper Chistibung the trail again starts to climb up after crossing some streams and rivers on a wooden bridge.',
                            'fr' => 'Préparez vos lampes frontales car nous commencerons notre randonnée avant le lever du soleil. Le sentier menant au point de vue de Muldai (3 637 m/11 932 pi) s’enfonce dans les fins bois de rhododendrons et monte continuellement avant d\'arriver à la prairie plate au sommet. Il nous faudra environ 45 minutes à 1 heure pour atteindre le sommet depuis Dobato. Il y a aussi une étable à yacks au sommet où beaucoup de yacks pourraient nous attendre pour nous saluer. En arrivant au sommet, votre guide vous informera sur les pics environnants et vous donnera du temps libre pour explorer et prendre de belles photos pour les souvenirs. N\'oubliez pas de prévoir de la monnaie locale pour du thé et du café au point de vue. Retournez à Dobato pour le petit-déjeuner et commencez le trek au nord de Dobato. Après 1 heure et 30 minutes de trekking, nous arriverons à un endroit appelé Bayeli Kharka qui est le dernier endroit pour l\'eau avant d\'atteindre Upper Chistibung/Dhan Kharka. Le sentier après Bayli s\'enfonce profondément dans la forêt où nous avons une section raide en descente qui nous attend. Juste avant d\'atteindre Upper Chistibung, le sentier recommence à monter après avoir traversé des ruisseaux et des rivières sur un pont de bois.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,637m (Muldai View Point), 2,950m (Upper Chistibung)', // Add both altitudes
                            'fr' => '3 637 m (Point de vue de Muldai), 2 950 m (Upper Chistibung)',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '05-06 Hours',
                            'fr' => '05-06 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 7: Trek to Kopra Ridge.',
                    'fr' => 'Jour 7 : Trek jusqu\'à Kopra Ridge.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'After your Himalayan Breakfast at the Tea house in Upper Chistibung we prepare ourselves for the short yet amazing day of the trek. The trail upto Khopra Ridge rises continuously from Chistibung where the travelers will notice change in the vegetation. The surrounding trees become smaller as we gain altitude and eventually turn into the grassy surface. The views of surrounding villages and valleys during today\'s hike will give you a sense of being high into the mountains. Upon arriving in Khopra we will stay in a Community Operated Tea House and the rest of the day is at leisure where you can rest and acclimatize.',
                            'fr' => 'Après votre petit-déjeuner himalayen à la maison de thé d\'Upper Chistibung, nous nous préparons pour la courte mais incroyable journée de trek. Le sentier jusqu\'à Khopra Ridge monte continuellement depuis Chistibung où les voyageurs remarqueront un changement dans la végétation. Les arbres environnants deviennent plus petits à mesure que nous gagnons en altitude et se transforment finalement en une surface herbeuse. Les vues des villages et des vallées environnantes pendant la randonnée d\'aujourd\'hui vous donneront le sentiment d\'être haut dans les montagnes. En arrivant à Khopra, nous séjournerons dans une maison de thé exploitée par la communauté et le reste de la journée est libre où vous pourrez vous reposer et vous acclimater.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,660m',
                            'fr' => '3 660m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '03-04 Hours',
                            'fr' => '03-04 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 8: Trek to Khayar Lake / Back to Kopra.',
                    'fr' => 'Jour 8 : Trek jusqu\'au lac Khayar / Retour à Kopra.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Finally the most challenging and demanding day of the trek. With early morning breakfast at Khopra we begin our hike toward the Sacred Khayar Lake. This Lake is a religious spot for people living in surrounding areas and during the time of Janaipurnima, a festival during August, it receives a large number of devotees from different parts of the country. The trail winds up high into the mountains and is challenging because of the increasing altitude. We will completely be out of human contact as there is only one hut providing basic facilities in between at Khayer Khola.',
                            'fr' => 'Enfin, le jour le plus difficile et le plus exigeant du trek. Après un petit-déjeuner matinal à Khopra, nous commençons notre randonnée vers le lac sacré de Khayar. Ce lac est un lieu religieux pour les habitants des environs et, au moment de Janaipurnima, un festival en août, il reçoit un grand nombre de dévots de différentes parties du pays. Le sentier serpente haut dans les montagnes et est difficile en raison de l\'altitude croissante. Nous serons complètement hors de contact humain car il n\'y a qu\'une seule cabane offrant des installations de base entre les deux à Khayer Khola.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,660m',
                            'fr' => '4 660m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '08-09 Hours',
                            'fr' => '08-09 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 9: Trek to Swanta.',
                    'fr' => 'Jour 9 : Trek jusqu\'à Swanta.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'After a challenging day and accomplishing the major destination of the trip we begin to retrace our footsteps back from the Mountains. The trail until Upper Chistibung is similar to what we took to reach Khopra. After Chistibung we enter into the dense forest once again. During our descent we will have an opportunity to have a glimpse of a small hydropower machine which generates and distributes electricity to the Local villages. We will eventually pop out of the forest and reach the tranquil settlement of Swanta which is home to Magar and Poon Community.',
                            'fr' => 'Après une journée difficile et avoir atteint la destination principale du voyage, nous commençons à revenir sur nos pas depuis les montagnes. Le sentier jusqu\'à Upper Chistibung est similaire à celui que nous avons emprunté pour atteindre Khopra. Après Chistibung, nous entrons à nouveau dans la forêt dense. Pendant notre descente, nous aurons l\'occasion d\'apercevoir une petite machine hydroélectrique qui produit et distribue de l\'électricité aux villages locaux. Nous finirons par sortir de la forêt et atteindre le paisible village de Swanta, qui abrite la communauté Magar et Poon.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,290m',
                            'fr' => '2 290m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '06-07 Hours',
                            'fr' => '06-07 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek to Ghorepani',
                    'fr' => 'Jour 10 : Trek jusqu\'à Ghorepani',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Our trekking off the beaten path will be coming to an end as we will be joining the trail coming from Annapurna Circuit Region towards Ghorepani in Chitre. The hike during the first hours of trekking today allows us to spend some time without many travelers as we cross a suspension bridge over Dhand Khola (River). After reaching Chitre we will join the ancient trading route used by traders to travel to Tibet but in the opposite direction. The trail climbs gradually as we slowly step into the town of Ghorepani.',
                            'fr' => 'Notre trekking hors des sentiers battus touchera à sa fin car nous rejoindrons le sentier venant de la région du circuit de l\'Annapurna vers Ghorepani à Chitre. La randonnée pendant les premières heures de trekking aujourd\'hui nous permet de passer un peu de temps sans beaucoup de voyageurs car nous traversons un pont suspendu sur Dhand Khola (rivière). Après avoir atteint Chitre, nous rejoindrons l\'ancienne route commerciale utilisée par les commerçants pour se rendre au Tibet mais dans la direction opposée. Le sentier monte progressivement alors que nous entrons lentement dans la ville de Ghorepani.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,810m',
                            'fr' => '2 810m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '04-05 Hours',
                            'fr' => '04-05 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Sunrise trip to Poonhill and Trek to Trikhedunga.',
                    'fr' => 'Jour 11 : Excursion au lever du soleil à Poonhill et trek jusqu\'à Trikhedunga.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or ItineraryTypes::HIKE for Poon Hill
                        'description' => [
                            'en' => 'Early morning hike before dawn to Poonhill in order to catch one final glimpse of towering Peaks is the highlight of the day. The entire Annapurna and Dhaulagiri range is clearly visible from Poonhill with the Himlayas extending further east until Manaslu. After experiencing a magical sunrise we will return back to Ghorepani for breakfast. The trail today enters into Rhododendron forests crossing streams and winds up along the Burungdi River. Before reaching Tikhedhunga you will cross the last two suspension bridges of the trek simultaneously.',
                            'fr' => 'La randonnée tôt le matin avant l\'aube jusqu\'à Poonhill afin d\'avoir un dernier aperçu des pics imposants est le point culminant de la journée. Toute la chaîne de l\'Annapurna et du Dhaulagiri est clairement visible depuis Poonhill avec les Himalayas s\'étendant plus à l\'est jusqu\'au Manaslu. Après avoir vécu un lever de soleil magique, nous retournerons à Ghorepani pour le petit-déjeuner. Le sentier d\'aujourd\'hui entre dans les forêts de rhododendrons, traverse des ruisseaux et serpente le long de la rivière Burungdi. Avant d\'atteindre Tikhedhunga, vous traverserez les deux derniers ponts suspendus du trek simultanément.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,545m',
                            'fr' => '1 545m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Changed to OTHERS
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS, // Changed to TREK_HOURS
                        'description' => [
                            'en' => '05-06 Hours',
                            'fr' => '05-06 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Trek to Nayapul Drive to Pokhara.',
                    'fr' => 'Jour 12 : Trek jusqu\'à Nayapul et route vers Pokhara.',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Begin your day after the final Himalayan breakfast as today we will be getting back to Pokhara. Hiking along the charming local villages and smiling locals we hike back to Nayapul where our car will be waiting for us. We pass through Ramghai and Sudame as we hike back towards the settlement. After reaching Pokhara, evening is free time for you. You can explore around the Lakeside area and enjoy "city food" in good restaurants.',
                            'fr' => 'Commencez votre journée après le dernier petit-déjeuner himalayen car aujourd\'hui nous retournerons à Pokhara. En randonnant le long des charmants villages locaux et des habitants souriants, nous retournons à Nayapul où notre voiture nous attendra. Nous traversons Ramghai et Sudame en revenant vers le village. Après avoir atteint Pokhara, la soirée est libre pour vous. Vous pouvez explorer les environs du bord du lac et profiter de la "nourriture de la ville" dans de bons restaurants.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE, // Added DRIVE type
                        'description' => [
                            'en' => 'Drive from Nayapul to Pokhara.',
                            'fr' => 'Route de Nayapul à Pokhara.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '970m',
                            'fr' => '970m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Changed to OTHERS
                        'description' => [
                            'en' => 'Breakfast and Lunch',
                            'fr' => 'Petit-déjeuner et déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS, // Changed to TREK_HOURS
                        'description' => [
                            'en' => '03-04 Hours',
                            'fr' => '03-04 Heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Fly back To Kathmandu',
                    'fr' => 'Jour 13 : Vol de retour à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'After breakfast in Pokhara, we have a mountain flight to Kathmandu; it is a thrilling, exciting flight over forests, fields and villages with the Himalayas in the background. On arrival, we transfer to the hotel. The remainder of the day is at leisure for any last minute shopping for your loved ones.',
                            'fr' => 'Après le petit-déjeuner à Pokhara, nous prenons un vol de montagne pour Katmandou ; c\'est un vol passionnant et excitant au-dessus des forêts, des champs et des villages avec l\'Himalaya en arrière-plan. À notre arrivée, nous sommes transférés à l\'hôtel. Le reste de la journée est libre pour faire des achats de dernière minute pour vos proches.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Changed to OTHERS
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Trip ends! Fly back home, taking with you the memory of a lifetime. “B”.',
                    'fr' => 'Jour 14 : Le voyage se termine ! Retournez chez vous, en emportant avec vous le souvenir d\'une vie. « B ».',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Departure
                        'description' => [
                            'en' => 'A representative from Sherpalaya will drop you to the airport. Return back home with the memories of that last lifetime.',
                            'fr' => 'Un représentant d\'Sherpalaya vous déposera à l\'aéroport. Retournez chez vous avec les souvenirs de cette dernière vie.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                   [
                        'type' => ItineraryTypes::OTHERS, // Changed to OTHERS
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                ],
            ],
        ];

        $mardi_himal_trek_itinerary = [
            [
                'title' => [
                    'en' => 'Day 1: Arrival to Kathmandu',
                    'fr' => 'Jour 1 : Arrivée à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Arrival and transfer
                        'description' => [
                            'en' => 'A Representative from Sherpalaya will be waiting outside the Tribhuvan International Airport in Kathmandu for your welcome. You will then be transferred to your Hotel in Kathmandu. Looking at the time of your arrival trip, a briefing will be planned where your last minute question will be answered by our expert team members and you will be provided with a trekking map and duffle bags during the briefing. The evening is free for you to explore the hustling alleys of Thamel and surrounding areas.',
                            'fr' => 'Un représentant d\'Sherpalaya vous attendra à l\'extérieur de l\'aéroport international de Tribhuvan à Katmandou pour vous accueillir. Vous serez ensuite transféré à votre hôtel à Katmandou. En fonction de l\'heure de votre arrivée, un briefing sera prévu au cours duquel vos questions de dernière minute recevront une réponse des membres de notre équipe d\'experts et vous recevrez une carte de trekking et des sacs de voyage pendant le briefing. La soirée est libre pour vous permettre d\'explorer les ruelles animées de Thamel et les environs.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 2: Cultural Tour in Kathmandu',
                    'fr' => 'Jour 2 : Visite culturelle à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Cultural Tour
                        'description' => [
                            'en' => 'With the intention of introducing Nepal\'s rich history and cultural display Sherpalaya has planned this day with Cultural Tour of three of the World Heritage Sites and important religious sites. Breakfast will be served at the Hotel after which we proceed towards the ancient palace of Bhaktapur now commonly known as Bhaktapur Durbar Square. This 15 km drive from Kathmandu will take you away from the main city and onto the old settlement inhabited by the Newar community where you can still see the palace from 17th century. Our professional tour guide will accompany you as you wander into the surrounding area while he explains each and every tiny detail about this artistic town. The second half of the day consists of a visit to two religious pilgrimage sites for Hindu and Buddhist religion. Pashupatinath temple, a Hindu shrine is the most important Shiva temple in the world where during your visit you will see many burning bodies as a part of Hindu cremation process and you get the opportunity to learn about many rituals that people follow in Nepal. Bouddhanath Stupa, the biggest stupa of South Asia is the last destination for Today. This Stupa is believed to hold remains of Buddha and is a holy place for people following Buddhism. After completing all three destinations you will be dropped at your hotel for refreshment and free time.',
                            'fr' => 'Dans le but de présenter la riche histoire et la culture du Népal, Sherpalaya a prévu cette journée avec une visite culturelle de trois des sites du patrimoine mondial et des sites religieux importants. Le petit-déjeuner sera servi à l\'hôtel après quoi nous procéderons vers l\'ancien palais de Bhaktapur maintenant communément connu sous le nom de Bhaktapur Durbar Square. Ce trajet de 15 km de Katmandou vous emmènera loin de la ville principale et vers l\'ancien village habité par la communauté Newar où vous pouvez encore voir le palais du 17ème siècle. Notre guide touristique professionnel vous accompagnera pendant que vous vous promenez dans les environs pendant qu\'il vous explique chaque petit détail de cette ville artistique. La deuxième moitié de la journée consiste en une visite de deux lieux de pèlerinage religieux pour les religions hindouiste et bouddhiste. Le temple de Pashupatinath, un sanctuaire hindou est le temple de Shiva le plus important au monde où, lors de votre visite, vous verrez de nombreux corps brûlants dans le cadre du processus de crémation hindoue et vous aurez l\'occasion d\'en apprendre davantage sur les nombreux rituels que les gens suivent au Népal. Le stupa de Bouddhanath, le plus grand stupa d\'Asie du Sud, est la dernière destination pour aujourd\'hui. Ce stupa est censé contenir les restes de Bouddha et est un lieu saint pour les personnes qui suivent le bouddhisme. Après avoir visité les trois destinations, vous serez déposé à votre hôtel pour vous rafraîchir et profiter de votre temps libre.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 3: Drive to Pokhara',
                    'fr' => 'Jour 3 : Route vers Pokhara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'We depart from Kathmandu early in the morning to avoid traffic. Just after leaving Kathmandu valley we will be greeted with amazing views of Langtang and Ganesh Himal range. The drive to Pokhara is filled with pleasing views of local villages and rivers. On the drive we will be binding along two of the major rivers i.e. Trishuli and Marshyangdi River which makes our drive more interesting. Pokhara is best known for its tranquil atmosphere and the beauty of the surrounding countryside. Normally, we arrive by midafternoon so you have time to explore or relax as you prepare for the journey ahead.',
                            'fr' => 'Nous partons de Katmandou tôt le matin pour éviter la circulation. Juste après avoir quitté la vallée de Katmandou, nous serons accueillis par des vues incroyables sur la chaîne du Langtang et du Ganesh Himal. La route vers Pokhara est remplie de vues agréables sur les villages locaux et les rivières. Pendant le trajet, nous longerons deux des principales rivières, c\'est-à-dire les rivières Trishuli et Marshyangdi, ce qui rend notre trajet plus intéressant. Pokhara est surtout connue pour son atmosphère tranquille et la beauté de la campagne environnante. Normalement, nous arrivons en milieu d\'après-midi, vous avez donc le temps d\'explorer ou de vous détendre pendant que vous vous préparez pour le voyage à venir.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '970m',
                            'fr' => '970m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 4: Drive to Hyangja - Trek to Dhampus',
                    'fr' => 'Jour 4 : Route vers Hyangja - Trek jusqu\'à Dhampus',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Today we will officially enter the Annapurna Conservation Area. There are many starting points for Mardi Himal Trek. We prefer to take the route from Hyangja because on the trail today you will pass many villages interacting with locals. This path is off the beaten path and has very few people trekking. So you will witness some glimpse of real Nepal.',
                            'fr' => 'Aujourd\'hui, nous entrerons officiellement dans la zone de conservation de l\'Annapurna. Il existe de nombreux points de départ pour le trek de Mardi Himal. Nous préférons prendre la route depuis Hyangja car sur le sentier aujourd\'hui, vous traverserez de nombreux villages en interagissant avec les habitants. Ce chemin est hors des sentiers battus et très peu de gens y font du trekking. Vous serez donc témoin d\'un aperçu du vrai Népal.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'After hiking up the wide road for 3 hrs, we will arrive at a village called Astham, inhabited by Brahmins and Gurung community. Lunch will be provided in Astham after which we continue following a ridge towards Dhampus for overnight stay.',
                            'fr' => 'Après avoir marché sur la large route pendant 3 heures, nous arriverons dans un village appelé Astham, habité par la communauté Brahmin et Gurung. Le déjeuner sera fourni à Astham après quoi nous continuerons à suivre une crête vers Dhampus pour la nuit.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,750m',
                            'fr' => '1 750m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                       'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Approx. 15 km / 9.3 miles',
                            'fr' => 'Environ 15 km / 9,3 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 5: Trek to Forest Camp',
                    'fr' => 'Jour 5 : Trek jusqu\'au camp forestier',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Your first sunrise in the Annapurna will greet you with a panoramic display of the entire Annapurna Range. After enjoying the breakfast with an outstanding background setup we leave towards the forest camp. Today\'s walk includes walking mostly inside the jungle after Pritan Deurali. The trail to Pritam Deurali has great views all along. During spring, the second part of today\'s trail will showcase beautiful Rhododendron. There are many uphill sections on today\'s trail so be mentally prepared for that.',
                            'fr' => 'Votre premier lever de soleil dans l\'Annapurna vous accueillera avec une vue panoramique de toute la chaîne de l\'Annapurna. Après avoir savouré le petit-déjeuner avec une toile de fond exceptionnelle, nous partons vers le camp forestier. La promenade d\'aujourd\'hui comprend une marche principalement à l\'intérieur de la jungle après Pritan Deurali. Le sentier menant à Pritam Deurali offre de superbes vues tout le long. Au printemps, la deuxième partie du sentier d\'aujourd\'hui présentera de magnifiques rhododendrons. Il y a de nombreuses sections en montée sur le sentier d\'aujourd\'hui, alors soyez mentalement préparé à cela.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,550m',
                            'fr' => '2 550m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Approx. 9.5 km / 6 miles',
                            'fr' => 'Environ 9,5 km / 6 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 6: Trek to Badal Danda',
                    'fr' => 'Jour 6 : Trek jusqu\'à Badal Danda',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'We leave Forest Camp after breakfast and enter into the Rhododendron and Oak forest once again. The trail gradually up towards Low Camp where our team will spend some time relaxing as you can observe a clear view of Mt. Machhapuchre (Fishtail). It is also a good Lunch spot with a view. Continuing further towards Badal Danda you will notice the tree line becoming thinner as we approach above 3,000 meters. You can catch a wonderful sunset from Badal Danda, sometimes the entire skyline below is filled with clouds.',
                            'fr' => 'Nous quittons Forest Camp après le petit-déjeuner et entrons à nouveau dans la forêt de rhododendrons et de chênes. Le sentier monte progressivement vers Low Camp où notre équipe passera un peu de temps à se détendre pendant que vous pourrez observer une vue dégagée sur le mont Machhapuchre (Fishtail). C\'est aussi un bon endroit pour déjeuner avec une vue. En continuant vers Badal Danda, vous remarquerez que la limite des arbres s\'amincit à mesure que nous approchons au-dessus de 3 000 mètres. Vous pouvez admirer un magnifique coucher de soleil depuis Badal Danda, parfois toute la ligne d\'horizon en contrebas est remplie de nuages.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,200m',
                            'fr' => '3 200m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Approx. 5.1 km / 3.1 miles',
                            'fr' => 'Environ 5,1 km / 3,1 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 7: Trek to High Camp',
                    'fr' => 'Jour 7 : Trek jusqu\'au High Camp',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Waking up with glorious views, we have a short day ahead so if you want to take it easy in the morning, your guide will be flexible with that. The trail today is short but will be a bit challenging as the air becomes thinner. With outstanding views throughout the trail we arrive at High Camp, the last settlement of Mardi Himal Trail. The remainder of the day is at leisure for acclimatization. Your body needs some rest before you head towards base camp.',
                            'fr' => 'Réveil avec des vues magnifiques, nous avons une courte journée devant nous, donc si vous voulez vous détendre le matin, votre guide sera flexible. Le sentier d\'aujourd\'hui est court mais sera un peu difficile car l\'air se raréfie. Avec des vues exceptionnelles tout au long du sentier, nous arrivons au High Camp, le dernier village du sentier de Mardi Himal. Le reste de la journée est libre pour l\'acclimatation. Votre corps a besoin de se reposer avant de vous diriger vers le camp de base.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,550m',
                            'fr' => '3 550m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Approx. 2.8 km / 1.7 miles',
                            'fr' => 'Environ 2,8 km / 1,7 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 8: Excursion to Mardi Himal Base Camp',
                    'fr' => 'Jour 8 : Excursion au camp de base de Mardi Himal',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'This day is the highlight of the trip. We start very early in the morning and catch one of the best sunrises from Mardi View Point. The sunrise from this viewpoint will be in your heart for a long time, it\'s just magical. After enjoying the sunrise with a cup of tea we continue ahead towards Mardi Himal Base Camp. We need to gain another 300 meters to arrive at the base camp and it takes around 2 hrs from view point. As we get near to the base camp the south face of Annapurna I gradually begins to appear in sight. Enjoy Himalayan view along with valleys from base camp before retracing towards High Camp for overnight stay.',
                            'fr' => 'Ce jour est le point culminant du voyage. Nous commençons très tôt le matin et assistons à l\'un des plus beaux levers de soleil depuis Mardi View Point. Le lever de soleil depuis ce point de vue restera longtemps gravé dans votre cœur, c\'est tout simplement magique. Après avoir profité du lever de soleil avec une tasse de thé, nous continuons vers le camp de base de Mardi Himal. Nous devons gagner 300 mètres supplémentaires pour arriver au camp de base et cela prend environ 2 heures depuis le point de vue. À mesure que nous nous rapprochons du camp de base, la face sud de l\'Annapurna I commence progressivement à apparaître en vue. Profitez de la vue sur l\'Himalaya ainsi que des vallées depuis le camp de base avant de retourner vers High Camp pour la nuit.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,500m',
                            'fr' => '4 500m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Approx. 10 km / 6.2 miles',
                            'fr' => 'Environ 10 km / 6,2 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 9: Trek to Siding',
                    'fr' => 'Jour 9 : Trek jusqu\'à Siding',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'We begin our journey back towards Pokhara city after soaking in splendid sceneries of Annapurna Range. The trail until Low camp will be the same trail that we took to hike up. From low camp we take a different route in the direction on Sidhing village. The trail from low camp once again enters into thick forests and goes down continuously. We spent our last night in Annapurna Conservation Area in Sidhing.',
                            'fr' => 'Nous commençons notre voyage de retour vers la ville de Pokhara après avoir profité des splendides paysages de la chaîne de l\'Annapurna. Le sentier jusqu\'au Low Camp sera le même que celui que nous avons emprunté pour monter. Depuis le Low Camp, nous prenons un itinéraire différent en direction du village de Sidhing. Le sentier depuis le Low Camp entre à nouveau dans des forêts épaisses et descend continuellement. Nous avons passé notre dernière nuit dans la zone de conservation de l\'Annapurna à Sidhing.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,945m',
                            'fr' => '1 945m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Approx. 8 km / 4.9 miles',
                            'fr' => 'Environ 8 km / 4,9 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek to Lumre then drive to Pokhara',
                    'fr' => 'Jour 10 : Trek jusqu\'à Lumre puis route vers Pokhara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'The walk today will be mostly downhill on a wide motorable road. This road winds in the forests until lumre where we plan to end our trip. The road from lumre is in very good condition because Sherpalaya chooses to avoid the off road drive until lumre. With chirping sounds of birds we have a short day of hiking on our last day.',
                            'fr' => 'La marche aujourd\'hui sera principalement en descente sur une large route carrossable. Cette route serpente dans les forêts jusqu\'à Lumre où nous prévoyons de terminer notre voyage. La route depuis Lumre est en très bon état car Sherpalaya choisit d\'éviter la conduite hors route jusqu\'à Lumre. Avec le gazouillis des oiseaux, nous avons une courte journée de randonnée lors de notre dernier jour.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Drive from Lumre to Pokhara.',
                            'fr' => 'Route de Lumre à Pokhara.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '970 m',
                            'fr' => '970 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast and Lunch',
                            'fr' => 'Petit-déjeuner et déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                     [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Approx. 5.1 km / 3.1 miles',
                            'fr' => 'Environ 5,1 km / 3,1 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: In Pokhara',
                    'fr' => 'Jour 11 : À Pokhara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Sightseeing/Rest
                        'description' => [
                            'en' => 'Pokhara is not just known for its natural beauty but also has many religious temples and monuments scattered around the city. Today\'s plan is to explore the sightseeing spots in Pokhara city. Once you get done with the sightseeing you will have leisure time. You may walk around Lakeside for souvenir shopping.',
                            'fr' => 'Pokhara n\'est pas seulement connue pour sa beauté naturelle, mais possède également de nombreux temples religieux et monuments dispersés dans la ville. Le plan d\'aujourd\'hui est d\'explorer les sites touristiques de la ville de Pokhara. Une fois que vous aurez terminé les visites, vous aurez du temps libre. Vous pouvez vous promener autour de Lakeside pour faire du shopping de souvenirs.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '970 m',
                            'fr' => '970 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Mountain Flight to Kathmandu',
                    'fr' => 'Jour 12 : Vol de montagne à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'After breakfast in Pokhara, we have a mountain flight to Kathmandu; it is a thrilling, exciting flight over forests, fields and villages with the Himalayas in the background. On arrival, we transfer to the hotel. The remainder of the day is at leisure for any last minute shopping for your loved ones. Suggestion: Be on the left side of the aircraft to catch great views of the mountains',
                            'fr' => 'Après le petit-déjeuner à Pokhara, nous prenons un vol de montagne pour Katmandou ; c\'est un vol passionnant et excitant au-dessus des forêts, des champs et des villages avec l\'Himalaya en arrière-plan. À notre arrivée, nous sommes transférés à l\'hôtel. Le reste de la journée est libre pour faire des achats de dernière minute pour vos proches. Suggestion : Soyez du côté gauche de l\'avion pour admirer de superbes vues sur les montagnes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Free day in Kathmandu',
                    'fr' => 'Jour 13 : Journée libre à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Rest/Exploration
                        'description' => [
                            'en' => 'There are plenty of interesting sites to visit in the Kathmandu valley like the Old Palaces at Patan, Bhaktapur, Durbar square, Swayambhunath (the monkey temple or you may wonder downtown Thamel to shop for souvenirs and sample the various restaurants of Kathmandu. We are happy to offer you some recommendations.',
                            'fr' => 'Il existe de nombreux sites intéressants à visiter dans la vallée de Katmandou, comme les vieux palais de Patan, Bhaktapur, Durbar Square, Swayambhunath (le temple des singes) ou vous pouvez vous promener dans le centre-ville de Thamel pour acheter des souvenirs et goûter aux différents restaurants de Katmandou. Nous sommes heureux de vous offrir quelques recommandations.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Fly back home',
                    'fr' => 'Jour 14 : Vol de retour',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Departure
                        'description' => [
                            'en' => 'A representative from Sherpalaya will drop you to the airport. Return back home with the memories for lifetime.',
                            'fr' => 'Un représentant d\'Sherpalaya vous déposera à l\'aéroport. Retournez chez vous avec les souvenirs pour la vie.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                ],
            ],
        ];
        $annapurna_circuit_trek_itinerary = [
            [
                'title' => [
                    'en' => 'Day 1: Arrival in Kathmandu',
                    'fr' => 'Jour 1: Arrivée à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Arrival and transfer
                        'description' => [
                            'en' => 'A representative from Sherpalaya will be waiting for you outside Tribhuvan International Airport in Kathmandu according to your flight time with a board mentioning your Name. One you meet our expert team member you will be accompanied by him to the hotel and help you with check in procedures. Once you have settled down, a trip briefing will be done where all your queries will be answered by a member from our Managing Team. Rest of the day is at leisure and you may explore around Thamel or visit some of the World Heritage Sites. We can arrange these tours for you upon your request.',
                            'fr' => 'Un représentant d\'Sherpalaya vous attendra à l\'extérieur de l\'aéroport international de Tribhuvan à Katmandou en fonction de votre heure de vol avec un panneau mentionnant votre nom. Une fois que vous aurez rencontré notre membre expert de l\'équipe, vous serez accompagné par lui à l\'hôtel et il vous aidera avec les procédures d\'enregistrement. Une fois que vous vous serez installé, un briefing sur le voyage sera effectué où toutes vos questions recevront une réponse d\'un membre de notre équipe de direction. Le reste de la journée est libre et vous pouvez explorer les environs de Thamel ou visiter certains des sites du patrimoine mondial. Nous pouvons organiser ces visites pour vous sur demande.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 2: Cultural Tour in Kathmandu',
                    'fr' => 'Jour 2: Visite culturelle à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Cultural tour
                        'description' => [
                            'en' => 'With the intention of introducing Nepal\'s rich history and cultural display Sherpalaya has planned this day with Cultural Tour of three of the World Heritage Sites and important religious sites. Breakfast will be served at the Hotel after which we proceed towards the ancient palace of Bhaktapur now commonly known as Bhaktapur Durbar Square. This 15 km drive from Kathmandu will take you away from the main city and onto the old settlement inhabited by the Newar community where you can still see the palace from 17th century. Our professional tour guide will accompany you as you wander into the surrounding area while he explains each and every tiny detail about this artistic town. The second half of the day consists of a visit to two religious pilgrimage sites for Hindu and Buddhist religion. Pashupatinath temple, a Hindu shrine is the most important Shiva temple in the world where during your visit you will see many burning bodies as a part of Hindu cremation process and you get the opportunity to learn about many rituals that people follow in Nepal. Bouddhanath Stupa, the biggest stupa of South Asia is the last destination for Today. This Stupa is believed to hold remains of Buddha and is a holy place for people following Buddhism. After completing all three destinations you will be dropped at your hotel for refreshment and free time.',
                            'fr' => 'Dans le but de présenter la riche histoire et la culture du Népal, Sherpalaya a prévu cette journée avec une visite culturelle de trois des sites du patrimoine mondial et des sites religieux importants. Le petit-déjeuner sera servi à l\'hôtel après quoi nous procéderons vers l\'ancien palais de Bhaktapur maintenant communément connu sous le nom de Bhaktapur Durbar Square. Ce trajet de 15 km de Katmandou vous emmènera loin de la ville principale et vers l\'ancien village habité par la communauté Newar où vous pouvez encore voir le palais du 17ème siècle. Notre guide touristique professionnel vous accompagnera pendant que vous vous promenez dans les environs pendant qu\'il vous explique chaque petit détail de cette ville artistique. La deuxième moitié de la journée consiste en une visite de deux lieux de pèlerinage religieux pour les religions hindouiste et bouddhiste. Le temple de Pashupatinath, un sanctuaire hindou est le temple de Shiva le plus important au monde où, lors de votre visite, vous verrez de nombreux corps brûlants dans le cadre du processus de crémation hindoue et vous aurez l\'occasion d\'en apprendre davantage sur les nombreux rituels que les gens suivent au Népal. Le stupa de Bouddhanath, le plus grand stupa d\'Asie du Sud, est la dernière destination pour aujourd\'hui. Ce stupa est censé contenir les restes de Bouddha et est un lieu saint pour les personnes qui suivent le bouddhisme. Après avoir visité les trois destinations, vous serez déposé à votre hôtel pour vous rafraîchir et profiter de votre temps libre.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 3: Drive to Besisahar [820m] After Lunch drive to Chyamche [1,430m]',
                    'fr' => 'Jour 3: Route vers Besisahar [820m] Après le déjeuner, route vers Chyamche [1,430m]',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Today we will leave the busy Kathmandu and begin the real adventure. We have a long drive ahead which will be done by private transport just for our group. The drive takes us along the Trishuli River and provides amazing views of the Himalayas. As the high mountains appear in front of us the excitement begins to kick in. After 110 km of drive we meet Marshyangdi River and we follow this river further north towards Besisahar.',
                            'fr' => 'Aujourd\'hui, nous allons quitter Katmandou, la ville animée, et commencer la véritable aventure. Nous avons un long trajet en voiture qui se fera par transport privé juste pour notre groupe. Le trajet nous emmène le long de la rivière Trishuli et offre des vues imprenables sur l\'Himalaya. Au fur et à mesure que les hautes montagnes apparaissent devant nous, l\'excitation commence à monter. Après 110 km de route, nous rencontrons la rivière Marshyangdi et nous suivons cette rivière plus au nord vers Besisahar.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'From Besisahar we hop on to a 4WD Jeep to experience a thrilling Road trip to Chyamche. As we follow Marshyangdi River on the mountain road many waterfalls appear on our sites and we stop in these waterfalls to capture some good pictures. The Jeep ride will be around 2-3 hours before arriving at Chyamche and spending the night there.',
                            'fr' => 'De Besisahar, nous montons à bord d\'une jeep 4x4 pour vivre un road trip palpitant jusqu\'à Chyamche. En suivant la rivière Marshyangdi sur la route de montagne, de nombreuses cascades apparaissent sur nos sites et nous nous arrêtons dans ces cascades pour prendre de belles photos. Le trajet en jeep durera environ 2 à 3 heures avant d\'arriver à Chyamche et d\'y passer la nuit.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,430m',
                            'fr' => '1 430m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 4: Trek to Bagarchap',
                    'fr' => 'Jour 4: Trek jusqu\'à Bagarchap',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Today will be our first day of our trekking. We will have breakfast at the Tea House in Chyamche from where we set our footsteps on the Annapurna Circuit Trek. The walk today will be following Marshyangdi River into the dense forests surrounded by gigantic rocky cliffs. We pass an overhanging rock and climb a steep staircase into the village of Sattale. Along the trail we cross a bridge and enter into another large settlement of the region, Dharapani. Crossing several pine, spruce, maple and oak forests we make our way towards Bagarchhap.',
                            'fr' => 'Aujourd\'hui sera notre premier jour de trekking. Nous prendrons le petit-déjeuner à la maison de thé de Chyamche d\'où nous mettrons les pieds sur le trek du circuit de l\'Annapurna. La marche d\'aujourd\'hui suivra la rivière Marshyangdi dans les forêts denses entourées de falaises rocheuses gigantesques. Nous passons un rocher en surplomb et montons un escalier raide jusqu\'au village de Sattale. Le long du sentier, nous traversons un pont et entrons dans une autre grande colonie de la région, Dharapani. Traversant plusieurs forêts de pins, d\'épicéas, d\'érables et de chênes, nous nous dirigeons vers Bagarchhap.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,160m',
                            'fr' => '2 160m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 5: Trek to Chame',
                    'fr' => 'Jour 5: Trek jusqu\'à Chame',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'After a good sleep in Bagarchap our destination for this day is situated approximately 14 km away at an elevation of 2,630 meters above sea level. Chame is a popular hub and headquarter of Manang District and is quite a big town that we may come across in the trail. During today\'s hike you will get further close to the Pisang Peak, Lamjung Himal, Annapurna II and provide you the feeling of entering the Himalayas. The culture of people begins to change and the Aryan Face people will gradually be replaced by Mongolian faced natives. The vegetation now also will turn completely into forest filled with pine trees and many waterfalls flowing down the mountains come into view while we hike today.',
                            'fr' => 'Après une bonne nuit de sommeil à Bagarchap, notre destination pour cette journée est située à environ 14 km à une altitude de 2 630 mètres au-dessus du niveau de la mer. Chame est un centre populaire et le siège du district de Manang et est une assez grande ville que nous pouvons rencontrer sur le sentier. Au cours de la randonnée d\'aujourd\'hui, vous vous rapprocherez du Pisang Peak, du Lamjung Himal, de l\'Annapurna II et vous donneront l\'impression d\'entrer dans l\'Himalaya. La culture des gens commence à changer et les Aryens seront progressivement remplacés par des indigènes à visage mongol. La végétation va maintenant aussi se transformer complètement en forêt remplie de pins et de nombreuses cascades descendant des montagnes apparaissent pendant que nous marchons aujourd\'hui.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,630m',
                            'fr' => '2 630m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 6: Trek to Pisang',
                    'fr' => 'Jour 6: Trek jusqu\'à Pisang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Another day in the Annapurna region with nothing but the wonderful scenery waiting to welcome you. After breakfast in Chame we head in the direction of Pisang. As we approach north, people mostly follow Buddhism because of which several prayer flags, chortens, and prayer wheels appear on the trail. The treeline becomes thinner as we approach close towards Pisang following the Marshyangdi River. Even Marshyangdi River will seem smaller as we gain altitude. From Pisang you will catch amazing vistas of the Annapurna II, Pisang Peak, Lamjung Himal, and many more. On the trail today you will have the opportunity to visit an apple farm in Bhartang and try some of their apples and other products like apple pie, apple juice which they prepare themselves. Since we are above 3000 meters on this day we request everyone to intake a minimum of 3 liters of water, helping you to stay hydrated and avoid Acute Mountain Sickness.',
                            'fr' => 'Un autre jour dans la région de l\'Annapurna avec rien d\'autre que le magnifique paysage qui vous attend. Après le petit-déjeuner à Chame, nous nous dirigeons vers Pisang. À mesure que nous nous dirigeons vers le nord, les gens suivent principalement le bouddhisme, ce qui explique pourquoi plusieurs drapeaux de prière, chortens et moulins à prières apparaissent sur le sentier. La limite des arbres s\'amincit à mesure que nous nous rapprochons de Pisang en suivant la rivière Marshyangdi. Même la rivière Marshyangdi semblera plus petite à mesure que nous gagnons en altitude. De Pisang, vous aurez des vues imprenables sur l\'Annapurna II, le Pisang Peak, le Lamjung Himal et bien d\'autres. Sur le sentier aujourd\'hui, vous aurez l\'occasion de visiter une ferme de pommes à Bhartang et d\'essayer certaines de leurs pommes et autres produits comme la tarte aux pommes, le jus de pomme qu\'ils préparent eux-mêmes. Puisque nous sommes au-dessus de 3 000 mètres ce jour-là, nous demandons à chacun de consommer un minimum de 3 litres d\'eau, ce qui vous aidera à rester hydraté et à éviter le mal aigu des montagnes.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,230m',
                            'fr' => '3 230m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 7: Trek to Manang',
                    'fr' => 'Jour 7: Trek jusqu\'à Manang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'We stay on the southern edge of Marshyangdi River and cross several streams and local villages as we approach the desert of Annapurna. We will see an airport at Hungde, which is not operating currently and many apple fields along the trail. Proceeding north the valley widens up in Manang surrounded by the Annapurna Range. There is another option of taking the upper route to Manang via Nagwal and Ghyaru which has some steep uphill sections and is challenging compared to the lower trail. However, all your hard work will be paid off with brilliant views of the mountains and valley. There is an ancient monastery in Braga which is a must visit place during this day of hiking. Our guides will take you to the monastery and help you interact with the monks there if you are interested. From Braga, it\'s a 30 min walk to Manang, a big village with many Tea Sops, Bakery and Retail Shops.',
                            'fr' => 'Nous restons sur la rive sud de la rivière Marshyangdi et traversons plusieurs ruisseaux et villages locaux alors que nous approchons du désert de l\'Annapurna. Nous verrons un aéroport à Hungde, qui n\'est pas en service actuellement et de nombreux champs de pommiers le long du sentier. En continuant vers le nord, la vallée s\'élargit à Manang entourée par la chaîne de l\'Annapurna. Il existe une autre option de prendre la route supérieure vers Manang via Nagwal et Ghyaru qui a quelques sections raides en montée et est difficile par rapport au sentier inférieur. Cependant, tout votre travail acharné sera récompensé par des vues magnifiques sur les montagnes et la vallée. Il y a un ancien monastère à Braga qui est un endroit à visiter absolument pendant cette journée de randonnée. Nos guides vous emmèneront au monastère et vous aideront à interagir avec les moines là-bas si vous êtes intéressé. De Braga, il faut 30 minutes de marche jusqu\'à Manang, un grand village avec de nombreux magasins de thé, une boulangerie et des magasins de détail.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,540m',
                            'fr' => '3 540m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 8: Rest day at Manang',
                    'fr' => 'Jour 8: Journée de repos à Manang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST,
                        'description' => [
                            'en' => 'Today is the leisure day in our Annapurna Circuit Trek 18 Days plan. As we are now heading into the dry, rocky terrain high into the Himalayas, it is very important for our body to acclimatize. This day is not completely for rest though. There are many side trip options around Manang which you can visit during the day. Mila Repa Cave, situated near the glaciers of Annapurna is one of the holy and important caves of this region which is approximately 2hrs 30 min away from Manang. Ice Lake is another popular side trip around Manang, a lake which is 4 hours away from Manang. The trail to Ice Lake is mostly uphill as we gain almost 1,100 meters of altitude and reach 4,600 meters. This lake has some of the outstanding views of the Annapurna and Chulu range with the mountains reflecting on the lake. If you don’t wanna have a big hiking day, you can visit the Gangapurna Lake which is just 20-30 min away from Manang village. This glacier lake is just across the main village and has some of the thrilling views of overhanging glaciers of Mt. Gangapurna.',
                            'fr' => 'Aujourd\'hui est le jour de loisirs dans notre plan de trek du circuit de l\'Annapurna de 18 jours. Comme nous nous dirigeons maintenant vers le terrain sec et rocheux haut dans l\'Himalaya, il est très important que notre corps s\'acclimate. Cette journée n\'est pas entièrement consacrée au repos cependant. Il existe de nombreuses options d\'excursions secondaires autour de Manang que vous pouvez visiter pendant la journée. La grotte de Mila Repa, située près des glaciers de l\'Annapurna, est l\'une des grottes saintes et importantes de cette région, qui se trouve à environ 2 h 30 de Manang. Ice Lake est une autre excursion secondaire populaire autour de Manang, un lac qui se trouve à 4 heures de Manang. Le sentier menant à Ice Lake est principalement en montée car nous gagnons près de 1 100 mètres d\'altitude et atteignons 4 600 mètres. Ce lac offre certaines des vues exceptionnelles sur les chaînes de l\'Annapurna et du Chulu avec les montagnes se reflétant sur le lac. Si vous ne voulez pas avoir une grande journée de randonnée, vous pouvez visiter le lac Gangapurna qui se trouve à seulement 20-30 minutes du village de Manang. Ce lac glaciaire se trouve juste en face du village principal et offre des vues palpitantes sur les glaciers en surplomb du mont Gangapurna.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,540m',
                            'fr' => '3 540m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 9: Trek to Letdar',
                    'fr' => 'Jour 9: Trek jusqu\'à Letdar',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From this day we will be heading into the desert of Annapurna Region. The vegetation changes completely and turns into a short patch of juniper and rocky surrounding. No trees will be in sight which means there will be a lack of oxygen in the air. After crossing a stream and climbing to Tenki we head towards Yak Kharka via Gunsang. Yak Kharka has some Tea Houses where we plan to have our Lunch. After spending some time and enjoying the views we leave Yak Kharka and head towards Letdar which is another 1.5 hrs away.',
                            'fr' => 'À partir de ce jour, nous nous dirigerons vers le désert de la région de l\'Annapurna. La végétation change complètement et se transforme en une courte parcelle de genévrier et d\'environnement rocheux. Aucun arbre ne sera en vue, ce qui signifie qu\'il y aura un manque d\'oxygène dans l\'air. Après avoir traversé un ruisseau et gravi jusqu\'à Tenki, nous nous dirigeons vers Yak Kharka via Gunsang. Yak Kharka a quelques maisons de thé où nous prévoyons de déjeuner. Après avoir passé un peu de temps et profité des vues, nous quittons Yak Kharka et nous dirigeons vers Letdar qui est à 1,5 heure.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,250m',
                            'fr' => '4 250m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek to Thorang Phedi',
                    'fr' => 'Jour 10: Trek jusqu\'à Thorang Phedi',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Following the Jharsang Khola we head close upto the Thorang La Pass. Today will be a short day for you as we prepare for the big day tomorrow. We descend down and cross the bridge over Jharsang River and ascend the narrow trail until Thorang Phedi. Travellers also have an option to trek to High Camp which is at an altitude of 4,800 meters with only one Tea House. Many travelers have faced difficulties while sleeping and many issues with less number of rooms. To avoid all these issues Sherpalaya prefers to stay at Thorang Phedi.',
                            'fr' => 'En suivant le Jharsang Khola, nous nous dirigeons près du col de Thorang La. Aujourd\'hui sera une courte journée pour vous alors que nous nous préparons pour le grand jour demain. Nous descendons et traversons le pont sur la rivière Jharsang et montons le sentier étroit jusqu\'à Thorang Phedi. Les voyageurs ont également la possibilité de faire un trek jusqu\'au High Camp qui est à une altitude de 4 800 mètres avec une seule maison de thé. De nombreux voyageurs ont rencontré des difficultés pendant leur sommeil et de nombreux problèmes avec un nombre réduit de chambres. Pour éviter tous ces problèmes, Sherpalaya préfère séjourner à Thorang Phedi.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,500m',
                            'fr' => '4 500m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Trek to Muktinath via Thorang La Pass',
                    'fr' => 'Jour 11: Trek jusqu\'à Muktinath via le col de Thorang La',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Finally the day we all have been waiting for. Today is the highlight of the trek as we will be reaching the highest point of Annapurna Circuit Trek and crossing the Thorang La Pass. The hike from Phedi to Thorang La is challenging as we enter above 5,000 meters of altitude and it will take around 4 hours. We start very early with the aim of crossing the Pass before 10 A.M. As we look behind on today\'s hike, the panoramic view of Chu Lu range provides us energy to continue further ahead. Upon reaching the top we will stop for some pictures and Tea, Coffee in the Tea Shop. After a few moments we began our descent towards Muktinath. The trail after the pass is all rocky which may cause you to slip, so please be extra careful. With a heart full of happy emotions we visit the holy Muktinath Temple. This is a very religious Hindu Temple and people from all over the world visit this temple with a belief of eliminating all their sins by bathing in the temple. You may give it a try if you want where you need to walk across 108 water taps and dip in 2 pools in front of the temple. After a long and demanding trek we get to the Tea House in Muktinath and rest.',
                            'fr' => 'Enfin le jour que nous attendions tous. Aujourd\'hui est le point culminant du trek car nous atteindrons le point le plus élevé du trek du circuit de l\'Annapurna et traverserons le col de Thorang La. La randonnée de Phedi à Thorang La est difficile car nous entrons au-dessus de 5 000 mètres d\'altitude et cela prendra environ 4 heures. Nous commençons très tôt dans le but de traverser le col avant 10 h. En regardant derrière nous lors de la randonnée d\'aujourd\'hui, la vue panoramique de la chaîne de Chu Lu nous donne l\'énergie de continuer plus loin. En arrivant au sommet, nous nous arrêterons pour quelques photos et thé, café dans le salon de thé. Après quelques instants, nous avons commencé notre descente vers Muktinath. Le sentier après le col est tout rocheux, ce qui peut vous faire glisser, alors soyez très prudent. Le cœur rempli d\'émotions joyeuses, nous visitons le temple sacré de Muktinath. C\'est un temple hindou très religieux et des gens du monde entier visitent ce temple avec la conviction d\'éliminer tous leurs péchés en se baignant dans le temple. Vous pouvez essayer si vous le souhaitez, où vous devez traverser 108 robinets d\'eau et vous tremper dans 2 piscines devant le temple. Après un long et exigeant trek, nous arrivons à la maison de thé de Muktinath et nous nous reposons.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,802m',
                            'fr' => '3 802m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Drive to Tatopani',
                    'fr' => 'Jour 12: Route vers Tatopani',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'This day can serve you as a rest or relaxing day after that strenuous climb to Thorang La Pass. Today we will be driving to Tatopani, where there are natural hot springs which will give you a healing experience as you take a dip. In between the drive we will have a stop at Marpha and explore the Buddhist monastery of the area. After exploration we will continue ahead to Tatopani via Tukuche, Lete and many other villages inhabited by the Thakali community. Thakali people are believed to prepare the best Dal Bhat, so while in this area you should give it a try.',
                            'fr' => 'Ce jour peut vous servir de jour de repos ou de détente après cette ascension éprouvante jusqu\'au col de Thorang La. Aujourd\'hui, nous nous rendrons en voiture à Tatopani, où se trouvent des sources chaudes naturelles qui vous offriront une expérience de guérison lorsque vous vous baignerez. Entre-temps, nous nous arrêterons à Marpha et explorerons le monastère bouddhiste de la région. Après l\'exploration, nous continuerons vers Tatopani via Tukuche, Lete et de nombreux autres villages habités par la communauté Thakali. On pense que les Thakali préparent le meilleur Dal Bhat, donc pendant que vous êtes dans cette région, vous devriez l\'essayer.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,190m',
                            'fr' => '1 190m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Trek to Shikha',
                    'fr' => 'Jour 13: Trek jusqu\'à Shikha',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'On this day we will enter another popular trekking destination of Nepal, Ghorepani. The trail which we will be walking today was once used as a trade route to Tibet. You will see wide roads because of modernization during today\'s hike. In some sections of the trail we will be walking on the ancient trail as well. This is a short day and we would suggest you take it slow.',
                            'fr' => 'Ce jour-là, nous entrerons dans une autre destination de trekking populaire du Népal, Ghorepani. Le sentier sur lequel nous marcherons aujourd\'hui était autrefois utilisé comme route commerciale vers le Tibet. Vous verrez de larges routes en raison de la modernisation lors de la randonnée d\'aujourd\'hui. Dans certaines sections du sentier, nous marcherons également sur l\'ancien sentier. C\'est une courte journée et nous vous suggérons de prendre votre temps.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,210m',
                            'fr' => '2 210m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Trek to Ghorepani',
                    'fr' => 'Jour 14: Trek jusqu\'à Ghorepani',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Another easy day in the Annapurna Circuit Trek as we gradually climb up to Ghorepani. This village has people from the Poon and Magar community living in the region whose hospitality is unmatched. The trail passes through Chitre and offers an amazing scene of Rhododendron during the Spring Season. This trail doesn’t receive many tourists because of which the Rhododendron are untouched which will leave you awe struck. Once you arrive at Ghorepani, the remainder of the day is at leisure. You have the option to explore and buy some Himalayan souvenirs for your loved ones or play some basketball/volleyball with locals.',
                            'fr' => 'Une autre journée facile dans le trek du circuit de l\'Annapurna alors que nous montons progressivement jusqu\'à Ghorepani. Ce village a des habitants des communautés Poon et Magar qui vivent dans la région dont l\'hospitalité est inégalée. Le sentier passe par Chitre et offre une scène incroyable de Rhododendron pendant la saison printanière. Ce sentier ne reçoit pas beaucoup de touristes, ce qui explique pourquoi le Rhododendron est intact, ce qui vous laissera émerveillé. Une fois arrivé à Ghorepani, le reste de la journée est libre. Vous avez la possibilité d\'explorer et d\'acheter des souvenirs himalayens pour vos proches ou de jouer au basket-ball/volley-ball avec les habitants.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,810m',
                            'fr' => '2 810m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 15: Sunrise trip to Poonhill then trek to Trikhedhunga',
                    'fr' => 'Jour 15: Excursion au lever du soleil à Poonhill puis trek jusqu\'à Trikhedhunga',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Our day begins very early in the morning as we climb up to Poonhill gaining almost 350 meters of altitude. The sunrise from Poonhill is believed to be one of the best sunrises with Dhaulagiri range and Annapurna range providing panoramic views. After spending some moments at the top we return back to Ghorepani for breakfast. The trail after breakfast is easy as we gradually descend wandering into the Rhododendron forests. You will notice many travelers coming towards Ghorepani as this is a very popular short trekking destination in Annapurna. We cross many bridges both cemented and suspended before arriving at Tikhedhunga through Nangethanti, Banthanti and Ulleri.',
                            'fr' => 'Notre journée commence très tôt le matin alors que nous montons jusqu\'à Poonhill, gagnant près de 350 mètres d\'altitude. Le lever de soleil depuis Poonhill est considéré comme l\'un des meilleurs levers de soleil avec la chaîne de Dhaulagiri et la chaîne de l\'Annapurna offrant des vues panoramiques. Après avoir passé quelques instants au sommet, nous retournons à Ghorepani pour le petit-déjeuner. Le sentier après le petit-déjeuner est facile car nous descendons progressivement en nous promenant dans les forêts de rhododendrons. Vous remarquerez de nombreux voyageurs venant vers Ghorepani car il s\'agit d\'une destination de trekking courte très populaire dans l\'Annapurna. Nous traversons de nombreux ponts cimentés et suspendus avant d\'arriver à Tikhedhunga en passant par Nangethanti, Banthanti et Ulleri.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,525m',
                            'fr' => '1 525m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, Lunch and Dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea House',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 16: Tikhedhunga Trek to Nayapul and drive to Pokhara',
                    'fr' => 'Jour 16: Trek de Tikhedhunga à Nayapul et route vers Pokhara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Today is our last day in the Annapurna Conservation Area. We begin our trek after breakfast following the Burungdi Khola until Birethanti where Modi Khola appears in our sight. We will have exit stamps on our permit in Birethanti and in Nayapul our car will be waiting for us. Once you arrive in Pokhara the rest of the day is at leisure.',
                            'fr' => 'Aujourd\'hui est notre dernier jour dans la zone de conservation de l\'Annapurna. Nous commençons notre trek après le petit-déjeuner en suivant le Burungdi Khola jusqu\'à Birethanti où Modi Khola apparaît à notre vue. Nous aurons des tampons de sortie sur notre permis à Birethanti et à Nayapul notre voiture nous attendra. Une fois arrivé à Pokhara, le reste de la journée est libre.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Drive from Nayapul to Pokhara',
                            'fr' => 'Route de Nayapul à Pokhara',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '970 m',
                            'fr' => '970 m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast and Lunch',
                            'fr' => 'Petit-déjeuner et déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 17: Mountain Flight to Kathmandu',
                    'fr' => 'Jour 17: Vol de montagne à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'After breakfast in Pokhara, we have a mountain flight to Kathmandu; it is a thrilling, exciting flight over forests, fields and villages with the Himalayas in the background. On arrival, we transfer to the hotel. The remainder of the day is at leisure for any last minute shopping for your loved ones. Suggestion: Be on the left side of the aircraft to catch great views of the mountains.',
                            'fr' => 'Après le petit-déjeuner à Pokhara, nous prenons un vol de montagne pour Katmandou ; c\'est un vol passionnant et excitant au-dessus des forêts, des champs et des villages avec l\'Himalaya en arrière-plan. À notre arrivée, nous sommes transférés à l\'hôtel. Le reste de la journée est libre pour faire des achats de dernière minute pour vos proches. Suggestion : Soyez du côté gauche de l\'avion pour admirer de superbes vues sur les montagnes.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 18: Fly back home',
                    'fr' => 'Jour 18 : Vol de retour',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Departure
                        'description' => [
                            'en' => 'A representative from Sherpalaya will drop you to the airport. Return back home with the memories for lifetime.',
                            'fr' => 'Un représentant d\'Sherpalaya vous déposera à l\'aéroport. Retournez chez vous avec les souvenirs pour la vie.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,330m',
                            'fr' => '1 330m',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast',
                            'fr' => 'Petit-déjeuner',
                        ],
                    ],
                ],
            ],
        ];

        $langtang_valley_trek_itinerary = [
            [
                'title' => [
                    'en' => 'Day 01: Arrival at Kathmandu and transfer to hotel',
                    'fr' => 'Jour 01: Arrivée à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Arrival and transfer
                        'description' => [
                            'en' => 'Meet our representatives at the Tribhuvan International Airport with your nameplate. Our team will welcome you and drop you off at the hotel in Thamel. If you have any questions, you can ask them. Spend the remaining day preparing for the trek with our team.',
                            'fr' => 'Rencontrez nos représentants à l\'aéroport international de Tribhuvan avec votre pancarte. Notre équipe vous accueillera et vous déposera à l\'hôtel à Thamel. Si vous avez des questions, vous pouvez les poser. Passez le reste de la journée à vous préparer pour le trek avec notre équipe.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Welcome dinner',
                            'fr' => 'Dîner de bienvenue',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Drive from Kathmandu to Syabrubesi',
                    'fr' => 'Jour 02: Route de Katmandou à Syabrubesi',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'You will leave Kathmandu early in the morning and embark on a comfortable and scenic drive to Syabrubesi with your guide. The highway goes northwest of Kathmandu, offering beautiful views of lush hills, mountains, rivers, and terraced fields. It\'s a perfect start to your trekking adventure.',
                            'fr' => 'Vous quitterez Katmandou tôt le matin et vous embarquerez pour un trajet confortable et pittoresque jusqu\'à Syabrubesi avec votre guide. L\'autoroute va au nord-ouest de Katmandou, offrant de belles vues sur les collines luxuriantes, les montagnes, les rivières et les champs en terrasses. C\'est un début parfait pour votre aventure de trekking.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,503 m/4,655 ft',
                            'fr' => '1 503 m/4 655 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Guesthouse',
                            'fr' => 'Maison d\'hôtes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '8-9 hours',
                            'fr' => '8-9 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '122 km/75.8 miles',
                            'fr' => '122 km/75,8 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Trek from Syabrubesi to Sherpagaon',
                    'fr' => 'Jour 03: Trek de Syabrubesi à Sherpagaon',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From Syabrubesi, you will hike on the road and soon cross a suspension bridge. The trail then gradually ascends to Khanjim. Take a lunch break here and continue trekking to Sherpagaon. Enjoy beautiful mountain views on the way.',
                            'fr' => 'Depuis Syabrubesi, vous ferez de la randonnée sur la route et traverserez bientôt un pont suspendu. Le sentier monte ensuite progressivement jusqu\'à Khanjim. Prenez une pause déjeuner ici et continuez le trekking jusqu\'à Sherpagaon. Profitez de belles vues sur la montagne en chemin.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,563 m/8,408 ft',
                            'fr' => '2 563 m/8 408 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Guesthouse',
                            'fr' => 'Maison d\'hôtes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4-5 hours',
                            'fr' => '4-5 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '9.8 km/6 miles',
                            'fr' => '9,8 km/6 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Trek from Sherpagaon to Ghoda Tabela (or Thangshyap)',
                    'fr' => 'Jour 04: Trek de Sherpagaon à Ghoda Tabela (ou Thangshyap)',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Descend following a narrow trail to Rimche. From here, you will join the main Langtang Valley trail. Expect to see other fellow trekkers on the way. From Rimche, ascend to Thangshyap, following a steep trail.',
                            'fr' => 'Descendez en suivant un sentier étroit jusqu\'à Rimche. De là, vous rejoindrez le sentier principal de la vallée de Langtang. Attendez-vous à voir d\'autres compagnons de trekking en chemin. Depuis Rimche, montez jusqu\'à Thangshyap, en suivant un sentier raide.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,190 m/10,466 ft', // Assuming Thangshyap altitude. Adjust if Ghoda Tabela is different.
                            'fr' => '3 190 m/10 466 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Guesthouse',
                            'fr' => 'Maison d\'hôtes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4-5 hours',
                            'fr' => '4-5 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '11.4 km/7 miles',
                            'fr' => '11,4 km/7 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Trek from Thangshyap to Langtang Village',
                    'fr' => 'Jour 05: Trek de Thangshyap au village de Langtang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'After breakfast, you will leave Thangshyap and start trekking to Langtang village. You will see a significant change in scenery as the trail ascends to Langtang village. Mountains are much more prominent. You will pass a few small settlements and cross a landslide area.',
                            'fr' => 'Après le petit-déjeuner, vous quitterez Thangshyap et commencerez le trekking vers le village de Langtang. Vous verrez un changement important de paysage alors que le sentier monte vers le village de Langtang. Les montagnes sont beaucoup plus visibles. Vous passerez quelques petits villages et traverserez une zone de glissement de terrain.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,430 m/11,255 ft',
                            'fr' => '3 430 m/11 255 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Guesthouse',
                            'fr' => 'Maison d\'hôtes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '4-5 hours',
                            'fr' => '4-5 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '4 km/2.4 miles',
                            'fr' => '4 km/2,4 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Trek from Langtang Village to Kyanjin Gompa and side hike to Kyanjin Ri',
                    'fr' => 'Jour 06: Trek du village de Langtang à Kyanjin Gompa et randonnée latérale à Kyanjin Ri',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'The trail from Langtang village to Kyanjin Gompa ascends along lovely meadows. The view of Ganesh Himal and Langtang Lirung are phenomenal along the way. As you get close to Kyanjin Gompa, the trail gets steep.',
                            'fr' => 'Le sentier du village de Langtang à Kyanjin Gompa monte le long de belles prairies. La vue sur Ganesh Himal et Langtang Lirung est phénoménale en chemin. À mesure que vous vous rapprochez de Kyanjin Gompa, le sentier devient raide.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Hike to Kyanjin Ri later in the day.',
                            'fr' => 'Randonnée à Kyanjin Ri plus tard dans la journée.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,865 m/12,675 ft (Kyanjin Gompa), 4,984 m/16,352 ft (Kyanjin Ri)',
                            'fr' => '3 865 m/12 675 ft (Kyanjin Gompa), 4 984 m/16 352 ft (Kyanjin Ri)',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Guesthouse',
                            'fr' => 'Maison d\'hôtes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '3-4 hours (to Kyanjin Gompa), 7-8 hours (total)',
                            'fr' => '3-4 heures (jusqu\'à Kyanjin Gompa), 7-8 heures (total)',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '6.8 km/4.2 miles (to Kyanjin Gompa)',
                            'fr' => '6,8 km/4,2 miles (jusqu\'à Kyanjin Gompa)',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Acclimatization day: hike to Cherukuri Ri',
                    'fr' => 'Jour 07: Journée d\'acclimatation: randonnée à Cherukuri Ri',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'After a big breakfast, start hiking to Cherukuri Ri. Follow an offbeat trail and ascend to the viewpoint. From here, you will witness a breathtaking sunrise and mountain vistas. Enjoy the view and descend to Kyanijn Gompa. Spend the remaining day exploring the yak cheese factory and spending time with locals.',
                            'fr' => 'Après un copieux petit-déjeuner, commencez la randonnée jusqu\'à Cherukuri Ri. Suivez un sentier hors des sentiers battus et montez jusqu\'au point de vue. De là, vous assisterez à un lever de soleil à couper le souffle et à des vues sur les montagnes. Profitez de la vue et descendez jusqu\'à Kyanijn Gompa. Passez le reste de la journée à explorer la fromagerie de yack et à passer du temps avec les habitants.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,984 m/16,352 ft',
                            'fr' => '4 984 m/16 352 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Guesthouse',
                            'fr' => 'Maison d\'hôtes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek from Kyanjin Gompa to Lama Hotel',
                    'fr' => 'Jour 08: Trek de Kyanjin Gompa à Lama Hotel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'You will trek back to the Lama Hotel on this day. Leaving Kyanjin Gompa early in the morning, follow the same trail. First, descend to Langtang village, and from here, drop to Ghoda Tabela. The trail goes along rugged cliff sides and passes by lush forests to Lama Hotel.',
                            'fr' => 'Vous retournerez au Lama Hotel ce jour-là. Quittant Kyanjin Gompa tôt le matin, suivez le même sentier. Tout d\'abord, descendez jusqu\'au village de Langtang, et de là, descendez jusqu\'à Ghoda Tabela. Le sentier longe des parois rocheuses escarpées et traverse des forêts luxuriantes jusqu\'au Lama Hotel.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,470 m/8,103 ft',
                            'fr' => '2 470 m/8 103 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Guesthouse',
                            'fr' => 'Maison d\'hôtes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '21 km/13 miles',
                            'fr' => '21 km/13 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09: Trek back to Syabrubesi',
                    'fr' => 'Jour 09: Trek retour à Syabrubesi',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'From the Lama Hotel, you will descend to Syabrubesi. It is also the ending point of the trek. The trail descends through rhododendron forests to Rimche. You will then trek along verdant hillsides and reach Bamboo. Further, follow the Langtang Khola and descend to Syabrubesi.',
                            'fr' => 'Depuis le Lama Hotel, vous descendrez jusqu\'à Syabrubesi. C\'est aussi le point final du trek. Le sentier descend à travers les forêts de rhododendrons jusqu\'à Rimche. Vous ferez ensuite du trekking le long des collines verdoyantes et atteindrez Bamboo. Plus loin, suivez le Langtang Khola et descendez jusqu\'à Syabrubesi.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,503 m/4,655 ft',
                            'fr' => '1 503 m/4 655 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Guest House',
                            'fr' => 'Maison d\'hôtes',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '11.3 km/7 miles',
                            'fr' => '11,3 km/7 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Drive back to Kathmandu',
                    'fr' => 'Jour 10: Retour en voiture à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'After breakfast, hop on a local jeep and drive to Kathmandu. The ride will be fantastic, like last time. You will enjoy stunning landscapes. Check in at your hotel and spend the remaining day resting and shopping.',
                            'fr' => 'Après le petit-déjeuner, montez à bord d\'une jeep locale et conduisez jusqu\'à Katmandou. Le trajet sera fantastique, comme la dernière fois. Vous profiterez de paysages magnifiques. Enregistrez-vous à votre hôtel et passez le reste de la journée à vous reposer et à faire du shopping.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and farewell dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner d\'adieu',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-9 hours',
                            'fr' => '7-9 heures',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => '122 km/75.8 mile',
                            'fr' => '122 km/75,8 miles',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Final departure',
                    'fr' => 'Jour 11: Départ final',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Departure
                        'description' => [
                            'en' => 'Our team will take care of your airport departure. They will drop you off at the international airport according to your flight schedule.',
                            'fr' => 'Notre équipe s\'occupera de votre départ à l\'aéroport. Ils vous déposeront à l\'aéroport international en fonction de votre horaire de vol.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast only',
                            'fr' => 'Petit-déjeuner seulement',
                        ],
                    ],
                ],
            ],
        ];

        $kanchenjunga_circuit_trek_itinerary = [
            [
                'title' => [
                    'en' => 'Day 01: Welcome to Kathmandu and transfer to the hotel',
                    'fr' => 'Jour 01: Bienvenue à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Welcome to Kathmandu!',
                            'fr' => 'Bienvenue à Katmandou !',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Full-day sightseeing tour of Bhaktapur, Pashupatinath, and Boudhanath',
                    'fr' => 'Jour 02: Visite d\'une journée de Bhaktapur, Pashupatinath et Boudhanath',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Sightseeing tour and trek preparation.',
                            'fr' => 'Visite touristique et préparation du trek.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast only',
                            'fr' => 'Petit-déjeuner seulement',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Fly from Kathmandu to Bhadrapur and drive to Taplejung',
                    'fr' => 'Jour 03: Vol de Katmandou à Bhadrapur et route vers Taplejung',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Flight to Bhadrapur.',
                            'fr' => 'Vol pour Bhadrapur.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Drive to Taplejung.',
                            'fr' => 'Route vers Taplejung.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,441 m/4,727 ft',
                            'fr' => '1 441 m/4 727 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS, // Meals
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '50 minutes flight & 7-8 hours drive',
                            'fr' => '50 minutes de vol et 7-8 heures de route',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Drive from Taplejung to Sekathum and trek to Amjilosa',
                    'fr' => 'Jour 04: Route de Taplejung à Sekathum et trek à Amjilosa',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Drive to Sekathum.',
                            'fr' => 'Route vers Sekathum.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Amjilosa.',
                            'fr' => 'Trek à Amjilosa.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,498 m/8,198 ft',
                            'fr' => '2 498 m/8 198 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours drive & 5 hours trek',
                            'fr' => '5-6 heures de route et 5 heures de trek',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Trek from Amjilosa to Gyabla',
                    'fr' => 'Jour 05: Trek d\'Amjilosa à Gyabla',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Gyabla.',
                            'fr' => 'Trek à Gyabla.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,730 m/8,956 ft',
                            'fr' => '2 730 m/8 956 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Trek from Gyabla to Ghunsa',
                    'fr' => 'Jour 06: Trek de Gyabla à Ghunsa',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Ghunsa.',
                            'fr' => 'Trek à Ghunsa.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,595 m/11,794 ft',
                            'fr' => '3 595 m/11 794 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5 hours',
                            'fr' => '5 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Acclimatization day at Ghunsa',
                    'fr' => 'Jour 07: Journée d\'acclimatation à Ghunsa',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or TREK if there's a specific hike
                        'description' => [
                            'en' => 'Acclimatization day.',
                            'fr' => 'Journée d\'acclimatation.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek from Ghunsa to Kambachen',
                    'fr' => 'Jour 08: Trek de Ghunsa à Kambachen',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Kambachen.',
                            'fr' => 'Trek à Kambachen.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,050 m/13,287 ft',
                            'fr' => '4 050 m/13 287 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6 hours',
                            'fr' => '6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09: Trek from Kambachen to Lhonak',
                    'fr' => 'Jour 09: Trek de Kambachen à Lhonak',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Lhonak.',
                            'fr' => 'Trek à Lhonak.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,780 m/15,682 ft',
                            'fr' => '4 780 m/15 682 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7 hours',
                            'fr' => '7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Hike to Pangpema (Kanchenjunga North Base Camp) and descend to Lhonak',
                    'fr' => 'Jour 10: Randonnée à Pangpema (Camp de base nord du Kanchenjunga) et descente à Lhonak',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Hike to Pangpema and descend to Lhonak.',
                            'fr' => 'Randonnée à Pangpema et descente à Lhonak.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '5,140 m/16,863 ft',
                            'fr' => '5 140 m/16 863 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Trek from Lhonak to Ghunsa',
                    'fr' => 'Jour 11: Trek de Lhonak à Ghunsa',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek back to Ghunsa.',
                            'fr' => 'Trek retour à Ghunsa.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,595 m/11,794 ft',
                            'fr' => '3 595 m/11 794 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7 hours',
                            'fr' => '7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Trek from Ghunsa to Sele Le Kharka',
                    'fr' => 'Jour 12: Trek de Ghunsa à Sele Le Kharka',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Sele Le Kharka.',
                            'fr' => 'Trek à Sele Le Kharka.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,290 m/14,075 ft',
                            'fr' => '4 290 m/14 075 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Ascend to Sele Le, Sinion La Pass, Mirgin La Pass, Sinelapcha La Pass and descend to Tseram',
                    'fr' => 'Jour 13: Montée à Sele Le, col de Sinion La, col de Mirgin La, col de Sinelapcha et descente à Tseram',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Ascend to Sele Le and cross the passes to Tseram.',
                            'fr' => 'Montée à Sele Le et traversée des cols jusqu\'à Tseram.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,870 m/12,697 ft',
                            'fr' => '3 870 m/12 697 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Trek from Tseram to Ramche and hike to Oktang Base Camp',
                    'fr' => 'Jour 14: Trek de Tseram à Ramche et randonnée au camp de base d\'Oktang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Ramche and hike to Oktang Base Camp.',
                            'fr' => 'Trek à Ramche et randonnée au camp de base d\'Oktang.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,740 m/15,551 ft',
                            'fr' => '4 740 m/15 551 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 15: Trek from Tseram to Tortong',
                    'fr' => 'Jour 15: Trek de Tseram à Tortong',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Tortong.',
                            'fr' => 'Trek à Tortong.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,995 m/9,826 ft',
                            'fr' => '2 995 m/9 826 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 16: Trek from Tortong to Yamphudin',
                    'fr' => 'Jour 16: Trek de Tortong à Yamphudin',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Yamphudin.',
                            'fr' => 'Trek à Yamphudin.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,080 m/6,824 ft',
                            'fr' => '2 080 m/6 824 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7 hours',
                            'fr' => '7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 17: Trek from Yamphudin to Thorpu',
                    'fr' => 'Jour 17: Trek de Yamphudin à Thorpu',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek to Thorpu.',
                            'fr' => 'Trek à Thorpu.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,500 m/4,921 ft',
                            'fr' => '1 500 m/4 921 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 18: Trek from Thorpu to Birtamod',
                    'fr' => 'Jour 18: Trek de Thorpu à Birtamod',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK, // Or DRIVE if jeep is used
                        'description' => [
                            'en' => 'Trek or drive to Birtamod.',
                            'fr' => 'Trek ou route vers Birtamod.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '300 m/984 ft',
                            'fr' => '300 m/984 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch, and dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Teahouse',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 19: Drive from Birtamod to Bhadrapur, then fly to Kathmandu',
                    'fr' => 'Jour 19: Route de Birtamod à Bhadrapur, puis vol pour Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Drive from Birtamod to Bhadrapur.',
                            'fr' => 'Route de Birtamod à Bhadrapur.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly from Bhadrapur to Kathmandu.',
                            'fr' => 'Vol de Bhadrapur à Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,400 m/4,593 ft',
                            'fr' => '1 400 m/4 593 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast and lunch',
                            'fr' => 'Petit-déjeuner et déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Less than an hour drive & 50 minutes flight',
                            'fr' => 'Moins d\'une heure de route et 50 minutes de vol',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 20: Free day in Kathmandu',
                    'fr' => 'Jour 20: Journée libre à Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or OTHERS if sightseeing is planned
                        'description' => [
                            'en' => 'Free day in Kathmandu.',
                            'fr' => 'Journée libre à Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast only',
                            'fr' => 'Petit-déjeuner seulement',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 21: Trip ends! Fly back home',
                    'fr' => 'Jour 21: Fin du voyage ! Vol retour',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Departure
                        'description' => [
                            'en' => 'Departure from Kathmandu.',
                            'fr' => 'Départ de Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast only',
                            'fr' => 'Petit-déjeuner seulement',
                        ],
                    ],
                ],
            ],
        ];

        $upper_mustang_trek_itinerary = [
            [
                'title' => [
                    'en' => 'Day 01: Welcome to Kathmandu and transfer to the hotel',
                    'fr' => 'Jour 01: Bienvenue à Katmandou et transfert à l\'hôtel',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'The team of Adventure Treks Nepal will welcome you to the airport. After a quick meet and greet, they will escort you to the hotel. The rest of this day is leisure. You can rest and explore your surroundings on your own.',
                            'fr' => 'L\'équipe d\'Adventure Treks Nepal vous accueillera à l\'aéroport. Après une brève rencontre, ils vous escorteront jusqu\'à l\'hôtel. Le reste de cette journée est libre. Vous pouvez vous reposer et explorer les environs par vous-même.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 02: Full-day sightseeing tour',
                    'fr' => 'Jour 02: Visite touristique d\'une journée',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Visit Swayambhunath, Pashupatinath Temple, Bouddhanath Stupa, and Kathmandu Durbar Square.  Rest and trek briefing. Obtain permits and pack duffle bag.',
                            'fr' => 'Visitez Swayambhunath, le temple Pashupatinath, le stupa de Bouddhanath et la place Durbar de Katmandou. Reposez-vous et briefez sur le trek. Obtenez les permis et préparez votre sac de voyage.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast only',
                            'fr' => 'Petit-déjeuner seulement',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 03: Drive from Kathmandu to Pokhara',
                    'fr' => 'Jour 03: Route de Katmandou à Pokhara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::DRIVE,
                        'description' => [
                            'en' => 'Drive from Kathmandu to Pokhara by tourist bus.',
                            'fr' => 'Route de Katmandou à Pokhara en bus touristique.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast & lunch',
                            'fr' => 'Petit-déjeuner et déjeuner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS, // Or DRIVE_HOURS if needed
                        'description' => [
                            'en' => '6 hours drive',
                            'fr' => '6 heures de route',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 04: Fly from Pokhara to Jomsom and trek to Kagbeni',
                    'fr' => 'Jour 04: Vol de Pokhara à Jomsom et trek à Kagbeni',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly from Pokhara to Jomsom.',
                            'fr' => 'Vol de Pokhara à Jomsom.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Jomsom to Kagbeni.',
                            'fr' => 'Trek de Jomsom à Kagbeni.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,800 m/9,500 ft',
                            'fr' => '2 800 m/9 500 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '25 minutes flight & 4 hours trek',
                            'fr' => '25 minutes de vol et 4 heures de trek',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 05: Trek from Kagbeni to Chele',
                    'fr' => 'Jour 05: Trek de Kagbeni à Chele',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Kagbeni to Chele.',
                            'fr' => 'Trek de Kagbeni à Chele.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,050 m/10,006 ft',
                            'fr' => '3 050 m/10 006 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 06: Trek from Chele to Gelling',
                    'fr' => 'Jour 06: Trek de Chele à Gelling',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Chele to Gelling.',
                            'fr' => 'Trek de Chele à Gelling.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,540 m/11,614 ft',
                            'fr' => '3 540 m/11 614 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 07: Trek from Gelling to Tsarang',
                    'fr' => 'Jour 07: Trek de Gelling à Tsarang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Gelling to Tsarang via Ghar Gompa.',
                            'fr' => 'Trek de Gelling à Tsarang via Ghar Gompa.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,570 m/11,712 ft',
                            'fr' => '3 570 m/11 712 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 08: Trek from Tsarang to Lo-Manthang',
                    'fr' => 'Jour 08: Trek de Tsarang à Lo-Manthang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Tsarang to Lo-Manthang.',
                            'fr' => 'Trek de Tsarang à Lo-Manthang.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,840 m/12,598 ft',
                            'fr' => '3 840 m/12 598 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5 hours',
                            'fr' => '5 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 09: Rest day in Lo Manthang',
                    'fr' => 'Jour 09: Journée de repos à Lo Manthang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::REST, // Or OTHERS if activities are very specific
                        'description' => [
                            'en' => 'Rest day in Lo Manthang. Visit Chhoser Cave (by horse; self-payable) and Namgyal Monastery.',
                            'fr' => 'Journée de repos à Lo Manthang. Visitez la grotte de Chhoser (à cheval; à vos frais) et le monastère de Namgyal.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 10: Trek from Lo Manthang to Yara',
                    'fr' => 'Jour 10: Trek de Lo Manthang à Yara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Lo Manthang to Yara.',
                            'fr' => 'Trek de Lo Manthang à Yara.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,838 m/12,592 ft',
                            'fr' => '3 838 m/12 592 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7 hours',
                            'fr' => '7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 11: Visit Luri Gompa and return to Yara',
                    'fr' => 'Jour 11: Visite de Luri Gompa et retour à Yara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Hike to Luri Gompa and return to Yara.',
                            'fr' => 'Randonnée à Luri Gompa et retour à Yara.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '4,150 m/13,615 ft',
                            'fr' => '4 150 m/13 615 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 12: Trek from Yara to Tangbe',
                    'fr' => 'Jour 12: Trek de Yara à Tangbe',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Yara to Tangbe.',
                            'fr' => 'Trek de Yara à Tangbe.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,240 m/10,630 ft',
                            'fr' => '3 240 m/10 630 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '6-7 hours',
                            'fr' => '6-7 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 13: Trek from Tangbe to Tetang',
                    'fr' => 'Jour 13: Trek de Tangbe à Tetang',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Tangbe to Tetang via Paha pass.',
                            'fr' => 'Trek de Tangbe à Tetang via le col de Paha.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,067 m/10,062 ft',
                            'fr' => '3 067 m/10 062 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '7-8 hours',
                            'fr' => '7-8 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 14: Trek from Tetang to Muktinath',
                    'fr' => 'Jour 14: Trek de Tetang à Muktinath',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Tetang to Muktinath.',
                            'fr' => 'Trek de Tetang à Muktinath.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '3,710 m/12,172 ft',
                            'fr' => '3 710 m/12 172 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 15: Trek from Muktinath to Jomsom',
                    'fr' => 'Jour 15: Trek de Muktinath à Jomsom',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::TREK,
                        'description' => [
                            'en' => 'Trek from Muktinath to Jomsom.',
                            'fr' => 'Trek de Muktinath à Jomsom.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '2,743 m/8,999 ft',
                            'fr' => '2 743 m/8 999 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast, lunch & dinner',
                            'fr' => 'Petit-déjeuner, déjeuner et dîner',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Tea house',
                            'fr' => 'Maison de thé',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS,
                        'description' => [
                            'en' => '5-6 hours',
                            'fr' => '5-6 heures',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 16: Fly from Jomsom to Pokhara',
                    'fr' => 'Jour 16: Vol de Jomsom à Pokhara',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly from Jomsom to Pokhara.',
                            'fr' => 'Vol de Jomsom à Pokhara.',
                        ],
                    ],
                     [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '820 m/2,690 ft',
                            'fr' => '820 m/2,690 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast only',
                            'fr' => 'Petit-déjeuner seulement',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS, // Or FLIGHT_HOURS if needed
                        'description' => [
                            'en' => '20 minutes',
                            'fr' => '20 minutes',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 17: Fly to Kathmandu',
                    'fr' => 'Jour 17: Vol pour Katmandou',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::FLIGHT,
                        'description' => [
                            'en' => 'Fly from Pokhara to Kathmandu.',
                            'fr' => 'Vol de Pokhara à Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ALTITUDE,
                        'description' => [
                            'en' => '1,400 m/4,600 ft',
                            'fr' => '1 400 m/4 600 ft',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast only',
                            'fr' => 'Petit-déjeuner seulement',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::ACCOMODATION,
                        'description' => [
                            'en' => 'Hotel',
                            'fr' => 'Hôtel',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::TREK_HOURS, // Or FLIGHT_HOURS if needed
                        'description' => [
                            'en' => '25 minutes',
                            'fr' => '25 minutes',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'en' => 'Day 18: Trip ends! Fly back home',
                    'fr' => 'Jour 18: Fin du voyage ! Vol retour',
                ],
                'details' => [
                    [
                        'type' => ItineraryTypes::OTHERS, // Departure
                        'description' => [
                            'en' => 'Departure from Kathmandu.',
                            'fr' => 'Départ de Katmandou.',
                        ],
                    ],
                    [
                        'type' => ItineraryTypes::OTHERS,
                        'description' => [
                            'en' => 'Breakfast only',
                            'fr' => 'Petit-déjeuner seulement',
                        ],
                    ],
                ],
            ],
        ];
        
        //Treks

        $this->createItinerariesWithDetails(
            Trek::first(),
            $trekItineraries
        );
        $this->createItinerariesWithDetails(
            Trek::find(5),
            $everest_panorama_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(6),
            $gokyo_valley_trek_itineraries
        );
        $this->createItinerariesWithDetails(
            Trek::find(7),
            $everest_three_passes_trek_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(8),
            $gokyo_renjola_pass_trek_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(9),
            $annapurna_dhaulagiri_trek_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(10),
            $mardi_himal_trek_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(11),
            $annapurna_circuit_trek_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(12),
            $langtang_valley_trek_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(13),
            $kanchenjunga_circuit_trek_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(14),
            $upper_mustang_trek_itinerary
        );
        $this->createItinerariesWithDetails(
            Trek::find(2),
            $annapurnaItineraries
        );
        $this->createItinerariesWithDetails(
            Trek::find(3),
            $manasluItineraries
        );
        $this->createItinerariesWithDetails(
            Trek::find(4),
            $langtang_itinerary
        );


        $this->createItinerariesWithDetails(
            Peak::first(),
            $peakItineraries
        );
        $this->createItinerariesWithDetails(
            Expedition::first(),
            $expeditionItineraries
        );
        $this->createItinerariesWithDetails(
            Expedition::find(2),
            $kanchanjunga_exped_itinerary
        );
        $this->createItinerariesWithDetails(
            Expedition::find(3),
            $lhotse_exped_itinerary
        );
    }

    protected function createItinerariesWithDetails(Model $model, array $itineraries): void
    {

        foreach ($itineraries as $itineraryData) {
            // Create the Itinerary
            $itinerary = $model->itineraries()->create([
                'title' => $itineraryData['title'],
            ]);
            // Create destinations
            $destinationIds = Destination::inRandomOrder()->limit(2)->pluck('id');
            $itinerary->destinations()->attach($destinationIds);


            // Create the Itinerary Details
            if (isset($itineraryData['details']) && is_array($itineraryData['details'])) {
                $itinerary->itineraryDetails()->createMany($itineraryData['details']);
            }
        }
    }
}
