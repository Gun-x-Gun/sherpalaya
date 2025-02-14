<?php

namespace Database\Seeders;

use App\Models\Expedition;
use App\Models\Peak;
use App\Models\Tour;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class EssentialTipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $everest_base_camp_trek_tips = [
            [
                'title' => [
                    'en' => 'Train Before You Trek',
                    'fr' => 'Entraînez-vous avant le trek',
                ],
                'description' => [
                    'en' => 'Prepare with cardio, strength training, and endurance hikes to handle the demanding terrain and altitude.',
                    'fr' => 'Préparez-vous avec du cardio, de la musculation et des randonnées d\'endurance pour gérer le terrain exigeant et l\'altitude.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Acclimatize Properly',
                    'fr' => 'Acclimatisez-vous correctement',
                ],
                'description' => [
                    'en' => 'Take rest days in Namche Bazaar and Dingboche to let your body adjust to the high altitude and prevent AMS.',
                    'fr' => 'Prenez des jours de repos à Namche Bazaar et Dingboche pour permettre à votre corps de s\'adapter à la haute altitude et prévenir le MAM.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Pack Smart, Pack Light',
                    'fr' => 'Emportez l\'essentiel, voyagez léger',
                ],
                'description' => [
                    'en' => 'Carry only the essentials—layered clothing, a warm sleeping bag, a water purification system, and high-energy snacks.',
                    'fr' => 'Ne portez que l\'essentiel: des vêtements en couches, un sac de couchage chaud, un système de purification de l\'eau et des collations énergétiques.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Stay Hydrated',
                    'fr' => 'Restez hydraté',
                ],
                'description' => [
                    'en' => 'Drink at least 3-4 liters of water per day to combat dehydration and altitude sickness.',
                    'fr' => 'Buvez au moins 3 à 4 litres d\'eau par jour pour lutter contre la déshydratation et le mal des montagnes.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Embrace the Trekking Culture',
                    'fr' => 'Adoptez la culture du trekking',
                ],
                'description' => [
                    'en' => 'Respect local customs, greet with "Namaste," and take time to connect with Sherpa guides and fellow trekkers.',
                    'fr' => 'Respectez les coutumes locales, saluez avec "Namaste" et prenez le temps de vous connecter avec les guides Sherpas et les autres trekkeurs.',
                ],
            ],
        ];

        $annapurna_base_camp_trek_tips = [
            [
                'title' => [
                    'en' => 'Choose the Right Season',
                    'fr' => 'Choisissez la bonne saison',
                ],
                'description' => [
                    'en' => 'Trek in spring (March-May) or autumn (September-November) for clear skies, moderate temperatures, and beautiful landscapes.',
                    'fr' => 'Faites du trek au printemps (mars-mai) ou en automne (septembre-novembre) pour un ciel dégagé, des températures modérées et de beaux paysages.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Pace Yourself on the Steep Trails',
                    'fr' => 'Allez à votre rythme sur les sentiers escarpés',
                ],
                'description' => [
                    'en' => 'Some sections, like the climb to Ulleri, are steep—take it slow and steady to conserve energy.',
                    'fr' => 'Certaines sections, comme la montée vers Ulleri, sont raides - allez-y lentement et régulièrement pour conserver de l\'énergie.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Pack for Varied Weather',
                    'fr' => 'Préparez-vous à un temps variable',
                ],
                'description' => [
                    'en' => 'The weather changes quickly—bring a rain jacket, sun hat, and warm layers for the high-altitude nights.',
                    'fr' => 'Le temps change rapidement - apportez une veste de pluie, un chapeau de soleil et des couches chaudes pour les nuits en haute altitude.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Bring Enough Cash',
                    'fr' => 'Apportez suffisamment d\'argent liquide',
                ],
                'description' => [
                    'en' => 'ATMs are scarce—carry enough cash for food, accommodation, and personal expenses along the trail.',
                    'fr' => 'Les distributeurs automatiques sont rares - ayez suffisamment d\'argent liquide pour la nourriture, l\'hébergement et les dépenses personnelles le long du sentier.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Respect the Local Culture',
                    'fr' => 'Respectez la culture locale',
                ],
                'description' => [
                    'en' => 'Annapurna is home to Gurung and Magar communities—learn a few Nepali phrases and enjoy their hospitality.',
                    'fr' => 'L\'Annapurna abrite les communautés Gurung et Magar - apprenez quelques phrases népalaises et profitez de leur hospitalité.',
                ],
            ],
        ];

        $lobuche_peak_climbing_tips = [
            [
                'title' => [
                    'en' => 'Gain Prior Trekking Experience',
                    'fr' => 'Acquérir une expérience préalable en trekking',
                ],
                'description' => [
                    'en' => 'Before attempting Lobuche Peak, complete treks like Everest Base Camp to build endurance and altitude tolerance.',
                    'fr' => 'Avant de tenter le Lobuche Peak, effectuez des treks comme le camp de base de l\'Everest pour développer l\'endurance et la tolérance à l\'altitude.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Learn Basic Mountaineering Skills',
                    'fr' => 'Apprendre les compétences de base en alpinisme',
                ],
                'description' => [
                    'en' => 'Practice using crampons, ice axes, and ropes before the climb to increase safety and confidence.',
                    'fr' => 'Entraînez-vous à utiliser des crampons, des piolets et des cordes avant l\'ascension pour augmenter la sécurité et la confiance.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Dress in High-Quality Gear',
                    'fr' => 'S\'habiller avec des équipements de haute qualité',
                ],
                'description' => [
                    'en' => 'Invest in proper mountaineering boots, down jackets, and gloves to withstand freezing summit conditions.',
                    'fr' => 'Investissez dans des chaussures d\'alpinisme, des doudounes et des gants appropriés pour résister aux conditions glaciales du sommet.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Listen to Your Guide',
                    'fr' => 'Écoutez votre guide',
                ],
                'description' => [
                    'en' => 'Guides have valuable experience—follow their instructions, especially in technical sections and summit pushes.',
                    'fr' => 'Les guides ont une expérience précieuse - suivez leurs instructions, en particulier dans les sections techniques et les poussées vers le sommet.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Prepare for Mental and Physical Challenges',
                    'fr' => 'Préparez-vous aux défis mentaux et physiques',
                ],
                'description' => [
                    'en' => 'The high-altitude climb is exhausting—stay positive, take one step at a time, and trust your preparation.',
                    'fr' => 'L\'ascension en haute altitude est épuisante - restez positif, faites un pas à la fois et faites confiance à votre préparation.',
                ],
            ],
        ];

        $everest_expedition_tips = [
            [
                'title' => [
                    'en' => 'Build Years of Climbing Experience',
                    'fr' => 'Acquérir des années d\'expérience en escalade',
                ],
                'description' => [
                    'en' => 'Everest is not for beginners—gain experience on peaks like Lobuche, Mera, or Aconcagua before attempting it.',
                    'fr' => 'L\'Everest n\'est pas pour les débutants - acquérez de l\'expérience sur des sommets comme le Lobuche, le Mera ou l\'Aconcagua avant de le tenter.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Choose a Reputable Expedition Company',
                    'fr' => 'Choisissez une entreprise d\'expédition réputée',
                ],
                'description' => [
                    'en' => 'Pick a team with experienced guides, strong Sherpa support, and a solid safety record for the best chances of success.',
                    'fr' => 'Choisissez une équipe avec des guides expérimentés, un soutien Sherpa solide et un bilan de sécurité solide pour les meilleures chances de succès.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Train for Extreme Endurance',
                    'fr' => 'Entraînez-vous pour une endurance extrême',
                ],
                'description' => [
                    'en' => 'Your body must be in peak condition—train with heavy packs, high-altitude hikes, and breathing exercises.',
                    'fr' => 'Votre corps doit être au sommet de sa forme - entraînez-vous avec des sacs lourds, des randonnées en haute altitude et des exercices de respiration.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Understand the Risks',
                    'fr' => 'Comprendre les risques',
                ],
                'description' => [
                    'en' => 'Everest is deadly—know about altitude sickness, frostbite, and weather hazards before committing to the climb.',
                    'fr' => 'L\'Everest est mortel - renseignez-vous sur le mal des montagnes, les engelures et les dangers météorologiques avant de vous engager dans l\'ascension.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Prepare for the Long Haul',
                    'fr' => 'Préparez-vous pour le long terme',
                ],
                'description' => [
                    'en' => 'An Everest expedition takes 6-8 weeks—mentally prepare for waiting, weather delays, and harsh conditions.',
                    'fr' => 'Une expédition à l\'Everest dure 6 à 8 semaines - préparez-vous mentalement à l\'attente, aux retards météorologiques et aux conditions difficiles.',
                ],
            ],
        ];

        $kathmandu_cultural_tour_tips = [
            [
                'title' => [
                    'en' => 'Dress Modestly for Temples',
                    'fr' => 'Habillez-vous modestement pour les temples',
                ],
                'description' => [
                    'en' => 'Cover shoulders and legs when visiting religious sites like Pashupatinath and Swayambhunath to show respect.',
                    'fr' => 'Couvrez vos épaules et vos jambes lorsque vous visitez des sites religieux comme Pashupatinath et Swayambhunath pour montrer du respect.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Learn Basic Nepali Phrases',
                    'fr' => 'Apprenez quelques phrases de base en népalais',
                ],
                'description' => [
                    'en' => 'A simple "Namaste" or "Dhanyabad" (thank you) goes a long way in connecting with locals.',
                    'fr' => 'Un simple "Namaste" ou "Dhanyabad" (merci) contribue grandement à établir un lien avec les habitants.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Be Mindful of Street Scams',
                    'fr' => 'Soyez attentif aux arnaques de rue',
                ],
                'description' => [
                    'en' => 'Avoid overly pushy vendors and fake tour guides—stick to well-reviewed experiences and licensed guides.',
                    'fr' => 'Évitez les vendeurs trop insistants et les faux guides touristiques - optez pour des expériences bien évaluées et des guides agréés.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Try Local Cuisine',
                    'fr' => 'Essayez la cuisine locale',
                ],
                'description' => [
                    'en' => 'Don’t miss out on momos, dal bhat, and Newari dishes like yomari and samay baji for an authentic taste of Nepal.',
                    'fr' => 'Ne manquez pas les momos, le dal bhat et les plats newari comme le yomari et le samay baji pour un goût authentique du Népal.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Respect the Local Pace of Life',
                    'fr' => 'Respectez le rythme de vie local',
                ],
                'description' => [
                    'en' => 'Kathmandu is chaotic yet spiritual—embrace the honking, street cows, and bustling markets as part of the experience.',
                    'fr' => 'Katmandou est chaotique mais spirituelle - acceptez les klaxons, les vaches dans les rues et les marchés animés comme faisant partie de l\'expérience.',
                ],
            ],
        ];
        $manaslu_circuit_trek_tips = [
            [
                'title' => [
                    'en' => 'Obtain the Right Permits',
                    'fr' => 'Obtenez les permis appropriés',
                ],
                'description' => [
                    'en' => 'You need the Manaslu Restricted Area Permit (RAP), Manaslu Conservation Area Permit (MCAP), and Annapurna Conservation Area Permit (ACAP).',
                    'fr' => 'Vous avez besoin du permis de zone restreinte de Manaslu (RAP), du permis de zone de conservation de Manaslu (MCAP) et du permis de zone de conservation de l\'Annapurna (ACAP).',
                ],
            ],
            [
                'title' => [
                    'en' => 'Trek with a Licensed Guide & in a Group',
                    'fr' => 'Faites du trek avec un guide agréé et en groupe',
                ],
                'description' => [
                    'en' => 'Independent trekking is not allowed; you must hire a licensed guide and trek with at least one other person.',
                    'fr' => 'Le trekking indépendant n\'est pas autorisé ; vous devez embaucher un guide agréé et faire du trek avec au moins une autre personne.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Train for High-Altitude Trekking',
                    'fr' => 'Entraînez-vous pour le trekking en haute altitude',
                ],
                'description' => [
                    'en' => 'The trek involves long ascents, steep descents, and high altitudes—prepare with endurance training and regular hikes.',
                    'fr' => 'Le trek implique de longues montées, des descentes raides et de hautes altitudes - préparez-vous avec un entraînement d\'endurance et des randonnées régulières.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Acclimatize Properly to Avoid Altitude Sickness',
                    'fr' => 'Acclimatisez-vous correctement pour éviter le mal des montagnes',
                ],
                'description' => [
                    'en' => 'Take rest days in Samagaon or Samdo before crossing Larkya La Pass to prevent Acute Mountain Sickness (AMS).',
                    'fr' => 'Prenez des jours de repos à Samagaon ou Samdo avant de traverser le col de Larkya La pour prévenir le mal aigu des montagnes (MAM).',
                ],
            ],
            [
                'title' => [
                    'en' => 'Pack Smart & Dress in Layers',
                    'fr' => 'Emportez l\'essentiel et habillez-vous en couches',
                ],
                'description' => [
                    'en' => 'Weather varies greatly; carry thermal layers, a down jacket, rain gear, and comfortable trekking shoes.',
                    'fr' => 'Le temps varie considérablement ; emportez des couches thermiques, une doudoune, un équipement de pluie et des chaussures de trekking confortables.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Start Early for Larkya La Pass',
                    'fr' => 'Partez tôt pour le col de Larkya La',
                ],
                'description' => [
                    'en' => 'The pass is long and challenging; start before dawn to avoid strong afternoon winds.',
                    'fr' => 'Le col est long et difficile ; partez avant l\'aube pour éviter les forts vents de l\'après-midi.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Carry Enough Cash',
                    'fr' => 'Apportez suffisamment d\'argent liquide',
                ],
                'description' => [
                    'en' => 'ATMs are not available beyond Soti Khola—bring enough cash for accommodation, food, and any extra expenses.',
                    'fr' => 'Il n\'y a pas de distributeurs automatiques au-delà de Soti Khola - apportez suffisamment d\'argent liquide pour l\'hébergement, la nourriture et toutes les dépenses supplémentaires.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Be Ready for Basic Accommodation & Limited Facilities',
                    'fr' => 'Soyez prêt pour un hébergement de base et des installations limitées',
                ],
                'description' => [
                    'en' => 'The trek is remote, and teahouses offer simple food and accommodation—bring a sleeping bag for extra warmth.',
                    'fr' => 'Le trek est éloigné et les maisons de thé offrent une nourriture et un hébergement simples - apportez un sac de couchage pour plus de chaleur.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Respect Local Culture & Traditions',
                    'fr' => 'Respectez la culture et les traditions locales',
                ],
                'description' => [
                    'en' => 'Manaslu is home to Tibetan-influenced communities; be respectful, ask before taking photos, and follow local customs.',
                    'fr' => 'Manaslu abrite des communautés d\'influence tibétaine ; soyez respectueux, demandez avant de prendre des photos et suivez les coutumes locales.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Bring a Good Pair of Trekking Poles',
                    'fr' => 'Apportez une bonne paire de bâtons de trekking',
                ],
                'description' => [
                    'en' => 'The rugged terrain, river crossings, and steep descents make trekking poles a valuable tool for stability and endurance.',
                    'fr' => 'Le terrain accidenté, les traversées de rivières et les descentes raides font des bâtons de trekking un outil précieux pour la stabilité et l\'endurance.',
                ],
            ],
        ];
        $langtang_tips = [
            [
                'title' => [
                    'en' => 'Permits',
                    'fr' => 'Permis',
                ],
                'description' => [
                    'en' => 'Obtain the necessary permits: Langtang National Park Permit (USD 30) and TIMS Card (USD 20). Booking a package often simplifies this process.',
                    'fr' => 'Obtenez les permis nécessaires : permis du parc national de Langtang (30 USD) et carte TIMS (20 USD). La réservation d’un forfait simplifie souvent ce processus.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Trek Difficulty',
                    'fr' => 'Difficulté du trek',
                ],
                'description' => [
                    'en' => 'This is a challenging trek due to high altitude (reaching 4,610m at Lauribina La pass), rugged terrain, and daily ascents and descents of around 6 hours. Prepare physically with regular exercise and hiking.',
                    'fr' => 'Il s’agit d’un trek difficile en raison de la haute altitude (atteignant 4 610 m au col de Lauribina La), du terrain accidenté et des montées et descentes quotidiennes d’environ 6 heures. Préparez-vous physiquement avec de l’exercice régulier et de la randonnée.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Altitude Sickness',
                    'fr' => 'Mal des montagnes',
                ],
                'description' => [
                    'en' => 'Acclimatization is crucial. Trek slowly, stay hydrated, avoid alcohol and smoking, and be aware of altitude sickness symptoms (headache, vomiting, difficulty breathing, etc.). Inform your guide immediately if you experience any symptoms.',
                    'fr' => 'L’acclimatation est cruciale. Faites du trek lentement, restez hydraté, évitez l’alcool et le tabac et soyez conscient des symptômes du mal des montagnes (maux de tête, vomissements, difficultés respiratoires, etc.). Informez immédiatement votre guide si vous ressentez des symptômes.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Best Time to Trek',
                    'fr' => 'Meilleure période pour le trek',
                ],
                'description' => [
                    'en' => 'Spring (March-May) and Autumn (late September-November) offer the most stable weather and moderate climate.',
                    'fr' => 'Le printemps (mars-mai) et l’automne (fin septembre-novembre) offrent le temps le plus stable et un climat modéré.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Travel Insurance',
                    'fr' => 'Assurance voyage',
                ],
                'description' => [
                    'en' => 'Essential for emergency helicopter evacuation and medical expenses due to the remote location. Ensure your policy covers high-altitude trekking.',
                    'fr' => 'Essentielle pour l’évacuation par hélicoptère d’urgence et les dépenses médicales en raison de l’éloignement du site. Assurez-vous que votre police couvre le trekking en haute altitude.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Accommodation and Food',
                    'fr' => 'Hébergement et nourriture',
                ],
                'description' => [
                    'en' => 'Expect basic guesthouse accommodations (twin sharing, shared toilets). Three meals a day are provided (Dal Bhat, Thukpa, Momo, Noodles are common), but pack extra snacks. Consider a single room for an additional cost if desired.',
                    'fr' => 'Attendez-vous à un hébergement de base dans des maisons d’hôtes (chambre double, toilettes communes). Trois repas par jour sont fournis (Dal Bhat, Thukpa, Momo, nouilles sont courants), mais emportez des collations supplémentaires. Envisagez une chambre individuelle moyennant un coût supplémentaire si vous le souhaitez.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Packing',
                    'fr' => 'Bagages',
                ],
                'description' => [
                    'en' => 'Pack light but in layers. Essentials include comfortable underwear, trekking clothes, base/thermal layers, windproof/waterproof jacket/pants, fleece/down jacket, gloves, socks, scarf, beanie, sun hat, trekking boots, casual shoes, duffel bag, daypack, trekking pole, map, water bottle, sleeping bag, toiletries, first aid kit, snacks, camera, charger, journal, cash, and documents.',
                    'fr' => 'Emportez des bagages légers mais en couches. L’essentiel comprend des sous-vêtements confortables, des vêtements de trekking, des couches de base/thermiques, une veste/un pantalon coupe-vent/imperméable, une veste en polaire/duvet, des gants, des chaussettes, une écharpe, un bonnet, un chapeau de soleil, des chaussures de trekking, des chaussures décontractées, un sac de voyage, un sac à dos, un bâton de trekking, une carte, une bouteille d’eau, un sac de couchage, des articles de toilette, une trousse de premiers secours, des collations, un appareil photo, un chargeur, un journal, de l’argent liquide et des documents.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Physical Preparation',
                    'fr' => 'Préparation physique',
                ],
                'description' => [
                    'en' => 'Improve stamina, strength, and endurance through regular exercise, including strength training, aerobic exercises (swimming, cycling, running), and hiking. Practice breathing techniques.',
                    'fr' => 'Améliorez votre endurance, votre force et votre résistance grâce à un exercice régulier, notamment la musculation, les exercices aérobiques (natation, cyclisme, course à pied) et la randonnée. Pratiquez des techniques de respiration.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Respect Local Culture',
                    'fr' => 'Respectez la culture locale',
                ],
                'description' => [
                    'en' => 'Be mindful of local customs and traditions. Ask before taking photos and show respect for the Tamang and Sherpa communities.',
                    'fr' => 'Soyez attentif aux coutumes et traditions locales. Demandez avant de prendre des photos et montrez du respect pour les communautés Tamang et Sherpa.',
                ],
            ],
        ];

        $kanchanjunga_exped_essential_tips = [
            [
                'title' => [
                    'en' => 'Prior Mountaineering Experience',
                    'fr' => 'Expérience préalable en alpinisme',
                ],
                'description' => [
                    'en' => 'Kanchenjunga is a serious undertaking. You must have prior experience climbing 8000m peaks.',
                    'fr' => 'Le Kangchenjunga est une entreprise sérieuse. Vous devez avoir une expérience préalable en escalade de sommets de 8 000 m.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Physical Fitness',
                    'fr' => 'Condition physique',
                ],
                'description' => [
                    'en' => 'Be in excellent physical condition, with rigorous training and endurance.',
                    'fr' => 'Soyez en excellente condition physique, avec un entraînement rigoureux et de l’endurance.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Proper Gear',
                    'fr' => 'Équipement approprié',
                ],
                'description' => [
                    'en' => 'Invest in high-quality mountaineering gear suitable for extreme conditions.',
                    'fr' => 'Investissez dans un équipement d’alpinisme de haute qualité adapté aux conditions extrêmes.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Acclimatization',
                    'fr' => 'Acclimatation',
                ],
                'description' => [
                    'en' => 'Understand the importance of acclimatization and follow the expedition\'s plan carefully.',
                    'fr' => 'Comprenez l’importance de l’acclimatation et suivez attentivement le plan de l’expédition.',
                ],
            ],
            [
                'title' => [
                    'en' => 'Mental Preparation',
                    'fr' => 'Préparation mentale',
                ],
                'description' => [
                    'en' => 'A strong mental attitude is essential for overcoming challenges and pushing through difficult moments.',
                    'fr' => 'Une attitude mentale forte est essentielle pour surmonter les défis et traverser les moments difficiles.',
                ],
            ],
        ];


        $this->createEssentialTips(
            Trek::first(),
            $everest_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(5),
            $everest_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(6),
            $everest_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(7),
            $everest_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(8),
            $everest_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(2),
            $annapurna_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(9),
            $annapurna_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(10),
            $annapurna_base_camp_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(11),
            $manaslu_circuit_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(3),
            $manaslu_circuit_trek_tips
        );
        $this->createEssentialTips(
            Trek::find(4),
            $langtang_tips
        );
        $this->createEssentialTips(
            Trek::find(12),
            $langtang_tips
        );
        $this->createEssentialTips(
            Trek::find(13),
            $langtang_tips
        );
        $this->createEssentialTips(
            Trek::find(14),
            $langtang_tips
        );

        
        $this->createEssentialTips(
            Expedition::first(),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(2),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(3),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(4),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(5),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(6),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(7),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(8),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(9),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(10),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(11),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(12),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(13),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(14),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(15),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(16),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(17),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(18),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(19),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(20),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(21),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(22),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(23),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(24),
            $kanchanjunga_exped_essential_tips
        );
        $this->createEssentialTips(
            Expedition::find(25),
            $everest_expedition_tips
        );
        $this->createEssentialTips(
            Expedition::find(26),
            $kanchanjunga_exped_essential_tips
        );
        
        $this->createEssentialTips(
            Tour::first(),
            $kathmandu_cultural_tour_tips
        );
        $this->createEssentialTips(
            Tour::find(2),
            $kathmandu_cultural_tour_tips
        );
        $this->createEssentialTips(
            Tour::find(3),
            $kathmandu_cultural_tour_tips
        );

    }
    protected function createEssentialTips(Model $model, array $tips): void
    {
        foreach ($tips as $tip) {
            if (isset($tip) && is_array($tip)) {
                $model->essentialTips()->create($tip);
            }
        }
    }
}
