<?php

namespace Database\Seeders;

use App\Helpers\CuratorSeederHelper;
use App\Models\Expedition;
use App\Models\OurSherpa;
use App\Models\Peak;
use App\Models\Tour;
use App\Models\Trek;
use Illuminate\Database\Seeder;

class OurSherpasSeeder extends Seeder
{
    public function run(): void
    {
        $sherpa1 = [
            'name' => 'Mr. Pemba Sherpa',
            'title' => [
                'en' => 'Elite High-Altitude Mountain Guide',
                'fr' => 'Guide de Montagne d\'Élite en Haute Altitude',
            ],
            'language' => [
                'Nepali',
                'English',
                'French',
            ],
            'description' => [
                'en' => 'Mr. Pemba Sherpa is a world-renowned mountaineer and trekking guide from Solukhumbu, Nepal, with an extraordinary record of summiting some of the planet’s highest and most challenging peaks. Born on September 4, 1971, in Taksindu Hewa-6, he has conquered Mount Everest an impressive seven times, alongside other formidable mountains such as Makalu, Cho Oyu (five times), Dhaulagiri, and Manaslu. His expertise extends beyond Nepal to peaks like Shisha Pangma in Tibet, Gasherbrum in Pakistan, and Mont Blanc in France, showcasing his versatility and skill across diverse terrains. With over two decades of experience as a freelance mountain guide, Pemba’s fluency in Nepali, English, and French enhances his ability to lead international expeditions, making him a trusted and legendary figure in the global mountaineering community.',
                'fr' => 'M. Pemba Sherpa est un alpiniste et guide de trekking de renommée mondiale, originaire de Solukhumbu, au Népal, avec un palmarès exceptionnel de sommets parmi les plus hauts et les plus difficiles de la planète. Né le 4 septembre 1971 à Taksindu Hewa-6, il a gravi le mont Everest à sept reprises, ainsi que d’autres sommets impressionnants tels que Makalu, Cho Oyu (cinq fois), Dhaulagiri et Manaslu. Son expertise s’étend au-delà du Népal, avec des ascensions comme Shisha Pangma au Tibet, Gasherbrum au Pakistan et le Mont Blanc en France, démontrant sa polyvalence et son talent sur divers terrains. Avec plus de deux décennies d’expérience en tant que guide de montagne indépendant, la maîtrise du népalais, de l’anglais et du français par Pemba renforce sa capacité à diriger des expéditions internationales, faisant de lui une figure légendaire et respectée dans la communauté mondiale de l’alpinisme.',
            ],
        ];
        $sherpa = OurSherpa::create($sherpa1);

        CuratorSeederHelper::seedBelongsTo(
            $sherpa,
            'profile_picture_id',
            public_path('photos/oursherpa1.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $sherpa,
            'awardsAndCertificates',
            public_path('photos/culture.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $sherpa,
            'awardsAndCertificates',
            public_path('photos/culture2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $sherpa,
            'awardsAndCertificates',
            public_path('photos/culture3.jpg')
        );
        // Define two sherpas manually
        $sherpa2 = [
            'name' => 'Mr. Tashi Palzor Sherpa',
            'title' => [
                'en' => 'Multifaceted Mountaineer and Social Entrepreneur',
                'fr' => 'Alpiniste Polyvalent et Entrepreneur Social',
            ],
            'language' => [
                'Nepali',
                'English',
                'French',
            ],
            'description' => [
                'en' => 'Mr. Tashi Palzor Sherpa, born on April 15, 1988 (Nepali calendar: 2045/04/15), in Chaurikharka-6, Solukhumbu, Nepal, is a dynamic mountaineer, social worker, and entrepreneur. With a Master’s in Social Work from St. Xavier College (2014) and a Bachelor’s in Business Studies from Campion College (2010), Tashi blends academic excellence with practical expertise. He operates Sherpalaya Trek, a trekking and expedition company, runs Sherpa Kitchen, a restaurant in Pokhara, and manages an import business for outdoor materials from China, all while serving as a freelance Francophone trekking guide. His past roles include Program Officer at Mountain Spirit Nepal, District Project Officer at Concern Worldwide, and PR team member at GIZ’s INCLUDE, where he honed skills in project management, community development, and communication. A seasoned trekking leader with extensive experience across Nepal’s trails, Tashi’s fluency in Nepali, English, and French, combined with his training in Disaster Risk Reduction and psychosocial counseling, makes him a versatile leader. His research on glue sniffing among street children and socio-economic studies further showcases his commitment to social impact, cementing his reputation as a multifaceted figure in Nepal’s adventure and development sectors.',
                'fr' => 'M. Tashi Palzor Sherpa, né le 15 avril 1988 (calendrier népalais : 2045/04/15) à Chaurikharka-6, Solukhumbu, Népal, est un alpiniste dynamique, travailleur social et entrepreneur. Titulaire d’une maîtrise en travail social du St. Xavier College (2014) et d’une licence en études commerciales du Campion College (2010), Tashi allie excellence académique et expertise pratique. Il dirige Sherpalaya Trek, une entreprise de trekking et d’expéditions, gère Sherpa Kitchen, un restaurant à Pokhara, et supervise une activité d’importation de matériel outdoor depuis la Chine, tout en travaillant comme guide de trekking francophone indépendant. Ses expériences passées incluent des postes de chargé de programme chez Mountain Spirit Nepal, d’officier de projet de district chez Concern Worldwide et de membre de l’équipe de relations publiques chez GIZ’s INCLUDE, où il a perfectionné ses compétences en gestion de projets, développement communautaire et communication. Guide de trekking aguerri ayant parcouru presque tous les sentiers du Népal, Tashi maîtrise le népalais, l’anglais et le français, et bénéficie de formations en réduction des risques de catastrophe et en conseil psychosocial. Ses recherches sur l’inhalation de colle chez les enfants des rues et ses études socio-économiques témoignent de son engagement envers l’impact social, consolidant sa réputation de figure polyvalente dans les secteurs de l’aventure et du développement au Népal.',
            ],
        ];

        $sherpa = OurSherpa::create($sherpa2);

        CuratorSeederHelper::seedBelongsTo(
            $sherpa,
            'profile_picture_id',
            public_path('photos/oursherpa2.jpeg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $sherpa,
            'awardsAndCertificates',
            public_path('photos/culture.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $sherpa,
            'awardsAndCertificates',
            public_path('photos/culture2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $sherpa,
            'awardsAndCertificates',
            public_path('photos/culture3.jpg')
        );

    }
}
