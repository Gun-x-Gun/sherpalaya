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


        $this->createItinerariesWithDetails(
            Trek::first(),
            $trekItineraries
        );
        $this->createItinerariesWithDetails(
            Trek::find(5),
            $everest_panorama_itinerary
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
